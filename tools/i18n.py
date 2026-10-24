"""Site translations.

The Turkish pages built by build.py are the source. This script cuts each page into translatable units and, for
every language that has a dictionary in tools/i18n/<code>.json, writes a translated copy into /<code>/.

    python tools/i18n.py extract .   # refresh tools/i18n/strings.json (every unit, in page order)
    python tools/i18n.py build .     # write /en/, /de/, ... (build.py runs this after the Turkish pages)
    python tools/i18n.py check en    # every unit translated, tags intact

A unit is a run of text plus inline markup (<span>, <b>, <br>, ...) between block tags, so a heading such as
'Dijitalin güvenilir <span class="accent">noktası.</span>' is translated as one sentence and keeps its tags.
Translated attributes: alt, title, aria-label, placeholder, data-label-*, data-name, and the description / og meta tags.
Anything inside an element marked translate="no" is left alone.
"""
import json, os, re, sys

HERE = os.path.dirname(os.path.abspath(__file__))
DICT_DIR = os.path.join(HERE, 'i18n')
SITE = 'https://cyftech.com.tr'

PAGES = ['index.html', 'web-cozumleri.html', 'masaustu-uygulamalar.html', 'mobil-uygulamalar.html', 'projelerimiz.html',
         'referanslar.html', 'blog.html', 'blog-inside.html', 'hakkimizda.html', 'iletisim.html']
LANGS = ['en', 'de', 'ar', 'zh', 'ru']
RTL = {'ar'}
# Space Grotesk covers Latin only; these fill in the other scripts (browsers fall back per glyph)
FONTS = {
    'ar': ('IBM+Plex+Sans+Arabic:wght@400;500;600;700', "'IBM Plex Sans Arabic'"),
    'zh': ('Noto+Sans+SC:wght@400;500;600;700', "'Noto Sans SC'"),
    'ru': ('Inter:wght@400;500;600;700', "'Inter'"),
}
# Turkish root pages only: send a first-time visitor to their browser's language (or to the one they picked from the
# menu earlier, which site.js stores as cyf-lang). Unsupported languages go to English; crawlers are never redirected.
REDIRECT = ('<script id="cyf-lang-redirect">try{var L=' + json.dumps(LANGS + ['tr']) + ',s=localStorage.getItem("cyf-lang");'
            'if(!s&&!/bot|crawl|spider|slurp|lighthouse/i.test(navigator.userAgent)){var ls=navigator.languages||[navigator.language||""];'
            'for(var i=0;i<ls.length&&!s;i++){var c=(ls[i]||"").slice(0,2).toLowerCase();if(L.indexOf(c)>-1)s=c}s=s||"en"}'
            'if(s&&s!=="tr"&&L.indexOf(s)>-1){var p=location.pathname,f=p.split("/").pop();'
            'location.replace(p.slice(0,p.length-f.length)+s+"/"+(f||"index.html")+location.search+location.hash)}}catch(e){}</script>')

# strings that live inside inline scripts (the contact form's mail subject)
SCRIPT_KEYS = ['Teklif talebi — ']

INLINE = {'span', 'b', 'strong', 'i', 'em', 'br', 'small', 'time', 'code', 'sup', 'sub'}
VOID = {'br', 'img', 'input', 'meta', 'link', 'hr', 'source', 'wbr'}
ATTRS = ('alt', 'title', 'aria-label', 'placeholder', 'data-label-open', 'data-label-close', 'data-label-services', 'data-label-phone', 'data-name')
TOKEN = re.compile(r'(<!--.*?-->|<script\b.*?</script>|<style\b.*?</style>|<[^>]+>|[^<]+)', re.S)
TAGNAME = re.compile(r'^</?([a-zA-Z0-9-]+)')
LETTER = re.compile(r'[^\W\d_]')
HOSTLIKE = re.compile(r'^[\w.-]+\.(com|net|org|tr|io)(\.tr)?(\s*↗)?$')


def norm(s):
    return ' '.join(s.split())


def is_text_unit(run):
    text = re.sub(r'<[^>]+>', '', run)
    t = norm(text)
    return bool(LETTER.search(t)) and not HOSTLIKE.match(t)


def walk(html, on_unit, on_tag):
    """Rebuild html, passing every translatable run to on_unit(run) and every tag to on_tag(tag)."""
    out, run = [], []
    skip_tag, skip_depth = None, 0

    def flush():
        if not run:
            return
        s = ''.join(run)
        run.clear()
        if skip_tag is None and is_text_unit(s):
            lead = s[:len(s) - len(s.lstrip())]
            trail = s[len(s.rstrip()):]
            out.append(lead + on_unit(norm(s)) + trail)
        else:
            out.append(s)

    for tok in TOKEN.findall(html):
        if tok.startswith('<!--') or tok.startswith('<script') or tok.startswith('<style'):
            flush()
            out.append(on_tag(tok) if tok.startswith('<script') else tok)
            continue
        if tok.startswith('<'):
            m = TAGNAME.match(tok)
            name = m.group(1).lower() if m else ''
            closing = tok.startswith('</')
            if skip_tag is not None:
                if name == skip_tag and not tok.endswith('/>') and name not in VOID:
                    skip_depth += -1 if closing else 1
                    if skip_depth == 0:
                        skip_tag = None
                out.append(on_tag(tok))  # attributes and paths still apply, only the text is kept as is
                continue
            if name in INLINE:
                run.append(on_tag(tok))
                continue
            flush()
            if not closing and 'translate="no"' in tok and name not in VOID:
                skip_tag, skip_depth = name, 1
                out.append(on_tag(tok))
                continue
            out.append(on_tag(tok))
        elif skip_tag is not None:
            out.append(tok)
        else:
            run.append(tok)
    flush()
    return ''.join(out)


def tag_attrs(tag, fn):
    """Apply fn(name, value) -> value to the translatable attributes of one tag."""
    def sub(m):
        name, q, val = m.group(1), m.group(2), m.group(3)
        return f'{name}={q}{fn(name, val)}{q}'
    return re.sub(r'\b(' + '|'.join(re.escape(a) for a in ATTRS) + r')=(["\'])(.*?)\2', sub, tag)


def meta_content(tag, fn):
    if re.search(r'<meta\b[^>]*\b(name="description"|property="og:(title|description)")', tag):
        return re.sub(r'content="(.*?)"', lambda m: f'content="{fn("content", m.group(1))}"', tag)
    return tag


# ------------------------------------------------------------------ extract
def extract(root):
    seen, order = set(), []

    def add(s):
        s = norm(s)
        if s and LETTER.search(s) and s not in seen:
            seen.add(s)
            order.append(s)
        return s

    def on_tag(tag):
        if tag.startswith('<script'):
            for k in SCRIPT_KEYS:
                if k in tag:
                    add(k)
            return tag
        tag_attrs(tag, lambda n, v: add(v))
        meta_content(tag, lambda n, v: add(v))
        return tag

    for page in PAGES:
        with open(os.path.join(root, page), encoding='utf-8') as f:
            walk(f.read(), add, on_tag)
    os.makedirs(DICT_DIR, exist_ok=True)
    with open(os.path.join(DICT_DIR, 'strings.json'), 'w', encoding='utf-8') as f:
        json.dump(order, f, ensure_ascii=False, indent=1)
    print(f'{len(order)} units, {sum(len(s) for s in order)} chars -> tools/i18n/strings.json')


# ------------------------------------------------------------------ build
def alternates(page):
    links = [f'<link rel="alternate" hreflang="tr" href="{SITE}/{page}">']
    links += [f'<link rel="alternate" hreflang="{c}" href="{SITE}/{c}/{page}">' for c in LANGS]
    links.append(f'<link rel="alternate" hreflang="x-default" href="{SITE}/{page}">')
    return '\n'.join(links)


def rebase(url):
    """A URL written for the Turkish root, seen from /<code>/."""
    if re.match(r'^(https?:|//|/|#|mailto:|tel:|data:|javascript:)', url) or url == '':
        return url
    if re.match(r'^[\w-]+\.html(#.*)?$', url):
        return url  # sibling page in the same language
    return '../' + url


def lang_link(url, target, lang):
    page = url.split('/')[-1]
    if target == lang:
        return page
    return '../' + page if target == 'tr' else f'../{target}/{page}'


def mark_current(html, lang):
    """Highlight the active language in the menu and show its code on the button."""
    html = html.replace(' aria-current="true"', '')
    html = re.sub(r'(<a [^>]*data-lang="' + lang + r'")', r'\1 aria-current="true"', html)
    return html.replace('<span data-lang-cur>TR</span>', f'<span data-lang-cur>{lang.upper()}</span>')


def translate_page(html, page, lang, table, missing):
    def tr(s):
        s = norm(s)
        if not s:
            return s
        t = table.get(s)
        if t is None:
            missing.add(s)
            return s
        return t

    def on_tag(tag):
        if tag.startswith('<script'):
            for k in SCRIPT_KEYS:
                if k in tag:
                    tag = tag.replace(k, tr(k) if tr(k).endswith(' ') else tr(k) + ' ')
            head = tag[:tag.index('>') + 1]
            return re.sub(r' src="(.*?)"', lambda m: f' src="{rebase(m.group(1))}"', head) + tag[len(head):]
        tag = tag_attrs(tag, lambda n, v: tr(v))
        tag = meta_content(tag, lambda n, v: tr(v))
        # paths: everything was written for the root
        dl = re.search(r'data-lang="(\w+)"', tag)
        if dl:
            return re.sub(r'href="(.*?)"', lambda m: f'href="{lang_link(m.group(1), dl.group(1), lang)}"', tag)
        tag = re.sub(r'\b(href|src)="(.*?)"', lambda m: f'{m.group(1)}="{rebase(m.group(2))}"', tag)
        return tag

    html = re.sub(r'<script id="cyf-lang-redirect">.*?</script>\n?', '', html, flags=re.S)
    out = walk(html, tr, on_tag)
    out = out.replace('<html lang="tr">', f'<html lang="{lang}"' + (' dir="rtl"' if lang in RTL else '') + '>', 1)
    out = mark_current(out, lang)
    head_extra = '' if 'hreflang="x-default"' in out else alternates(page)
    if lang in FONTS:
        fam, name = FONTS[lang]
        head_extra += (f'\n<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family={fam}&amp;display=swap">'
                       f"\n<style>:root{{--sans:'Space Grotesk',{name},system-ui,sans-serif}}</style>")
    return out.replace('</head>', head_extra + '\n</head>', 1)


def build(root):
    for page in PAGES:  # root (Turkish) pages get the hreflang alternates and the active-language mark
        p = os.path.join(root, page)
        with open(p, encoding='utf-8') as f:
            html = f.read()
        if 'hreflang="x-default"' not in html:
            html = mark_current(html, 'tr').replace('</head>', alternates(page) + '\n</head>', 1)
            html = html.replace('<meta name="viewport"', REDIRECT + '\n<meta name="viewport"', 1)
            with open(p, 'w', encoding='utf-8', newline='\n') as f:
                f.write(html)

    for lang in LANGS:
        path = os.path.join(DICT_DIR, f'{lang}.json')
        if not os.path.exists(path):
            print(f'i18n: no tools/i18n/{lang}.json, skipping {lang}')
            continue
        with open(path, encoding='utf-8') as f:
            table = {norm(k): v for k, v in json.load(f).items()}
        os.makedirs(os.path.join(root, lang), exist_ok=True)
        missing = set()
        for page in PAGES:
            with open(os.path.join(root, page), encoding='utf-8') as f:
                html = f.read()
            with open(os.path.join(root, lang, page), 'w', encoding='utf-8', newline='\n') as f:
                f.write(translate_page(html, page, lang, table, missing))
        print(f'i18n: {lang} written' + (f', {len(missing)} untranslated units (kept in Turkish)' if missing else ''))
        for s in sorted(missing)[:10]:
            print('   -', s[:100])


# ------------------------------------------------------------------ check
def check(lang):
    """Every unit translated, and every translation keeps the source's tags in the same order."""
    with open(os.path.join(DICT_DIR, 'strings.json'), encoding='utf-8') as f:
        src = json.load(f)
    with open(os.path.join(DICT_DIR, f'{lang}.json'), encoding='utf-8') as f:
        table = json.load(f)
    tags = lambda s: re.findall(r'<[^>]+>', s)
    missing = [s for s in src if s not in table]
    extra = [k for k in table if k not in set(src)]
    broken = [s for s in src if s in table and tags(s) != tags(table[s])]
    empty = [s for s in src if s in table and not table[s].strip()]
    for name, items in (('missing', missing), ('extra', extra), ('tags changed', broken), ('empty', empty)):
        print(f'{lang}: {len(items)} {name}')
        for s in items[:15]:
            print('   -', s[:120])
    return not (missing or broken or empty)


if __name__ == '__main__':
    sys.stdout.reconfigure(encoding='utf-8')  # Windows consoles default to a legacy code page
    mode, arg = sys.argv[1], sys.argv[2] if len(sys.argv) > 2 else '.'
    if mode == 'check':
        sys.exit(0 if check(arg) else 1)
    {'extract': extract, 'build': build}[mode](arg)
