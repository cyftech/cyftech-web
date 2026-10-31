"""Validate a blog post file:  python tools/posts/_check.py tools/posts/<slug>.py"""
import os, re, sys, runpy

ROOT = os.path.dirname(os.path.dirname(os.path.dirname(os.path.abspath(__file__))))
KATS = {'Web Tasarım', 'SEO', 'Dijital Pazarlama', 'Yazılım', 'Mobil Uygulama', 'E-Ticaret', 'Güvenlik', 'Yapay Zekâ'}
REQ = ['slug', 'kat', 'title', 'h1', 'crumb', 'sure', 'ozet', 'desc', 'keyword', 'lead', 'intro', 'sections', 'faq', 'outro']
FILL = dict(ic='<svg></svg>', tip='<svg></svg>', quote='<svg></svg>', warn='<svg></svg>')
ALLOWED = {'p', 'b', 'a', 'ul', 'ol', 'li', 'span', 'div', 'blockquote', 'h3', 'table', 'thead', 'tbody', 'tr', 'th', 'td', 'svg', 'em', 'br'}


def check(path):
    errs = []
    P = runpy.run_path(path)['POST']
    for k in REQ:
        if not P.get(k):
            errs.append(f'missing {k}')
    if errs:
        return errs, 0
    slug = os.path.basename(path)[:-3]
    if P['slug'] != slug:
        errs.append('slug != file name')
    if P['kat'] not in KATS:
        errs.append(f'kat must be one of {KATS}')
    if len(P['title']) > 70:
        errs.append(f'title {len(P["title"])} chars (>70)')
    if not 120 <= len(P['desc']) <= 165:
        errs.append(f'desc {len(P["desc"])} chars (need 120-165)')
    if not 5 <= len(P['sections']) <= 9:
        errs.append('need 5-9 sections')
    if not 3 <= len(P['faq']) <= 6:
        errs.append('need 3-6 faq')
    for q, a in P['faq']:
        if '<' in q + a:
            errs.append('faq must be plain text (no tags)')
    text = P['lead']
    for k in ('intro', 'outro'):
        try:
            text += P[k].format(**FILL)
        except Exception as e:
            errs.append(f'{k}: .format() failed ({e!r})')
    ids = set()
    for s in P['sections']:
        if len(s) != 4:
            errs.append('section must be (id, toc_label, heading, html)')
            continue
        sid, lab, h, body = s
        if not re.fullmatch(r'[a-z0-9-]+', sid) or sid in ids or sid in ('icerik', 'sss', 'sonuc', 'kaynaklar'):
            errs.append(f'bad/duplicate section id {sid!r}')
        ids.add(sid)
        if len(lab) > 26:
            errs.append(f'toc label too long: {lab!r}')
        try:
            body = body.format(**FILL)
        except Exception as e:
            errs.append(f'section {sid}: .format() failed ({e!r}); use only {{ic}} {{tip}} {{quote}} {{warn}} and no other braces')
        text += body
    for t in re.findall(r'</?([a-zA-Z0-9]+)', text):
        if t.lower() not in ALLOWED:
            errs.append(f'tag <{t}> not allowed')
    for href in re.findall(r'href="([^"]+)"', text):
        if href.startswith('http'):
            continue
        if not os.path.exists(os.path.join(ROOT, href.split('#')[0])) and not os.path.exists(os.path.join(ROOT, 'tools', 'posts', href.split('#')[0][:-5] + '.py')):
            errs.append(f'internal link target not found: {href} (ok if it is another planned post slug)')
    words = len(re.sub(r'<[^>]+>', ' ', text + ' '.join(q + ' ' + a for q, a in P['faq'])).split())
    if words < 1200:
        errs.append(f'only {words} words (need >= 1200)')
    return errs, words


if __name__ == '__main__':
    for p in sys.argv[1:]:
        e, w = check(p)
        print(f'{p}: {w} words', 'OK' if not e else '\n  - ' + '\n  - '.join(e))
