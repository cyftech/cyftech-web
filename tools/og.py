"""Share images (og:image) -> assets/img/og/*.jpg

    python tools/og.py

Renders tools/og/default.html (every page) and each blog post's cover (assets/img/blog/<slug>.svg, or a raster cover)
with headless Chrome, then saves JPEGs. Run it after adding a post or changing a cover, then build.
Facebook, WhatsApp, LinkedIn and X do not show SVG, which is why the covers are rendered.
"""
import glob, os, shutil, subprocess, sys, tempfile
from PIL import Image

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
OUT = os.path.join(ROOT, 'assets', 'img', 'og')
CHROME = os.environ.get('CHROME_PATH') or next((p for p in [
    r'C:\Program Files\Google\Chrome\Application\chrome.exe', r'C:\Program Files (x86)\Google\Chrome\Application\chrome.exe',
    '/usr/bin/google-chrome', '/usr/bin/chromium', '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'] if os.path.exists(p)), None)


def shot(src, w, h, dst):
    tmp = tempfile.mkdtemp()
    png = os.path.join(tmp, 'shot.png')
    subprocess.run([CHROME, '--headless=new', '--disable-gpu', '--hide-scrollbars', '--force-device-scale-factor=1',
                    f'--user-data-dir={tmp}', f'--window-size={w},{h}', '--virtual-time-budget=2000', f'--screenshot={png}',
                    'file:///' + os.path.abspath(src).replace(os.sep, '/')], check=True, capture_output=True)
    with Image.open(png) as im:
        im.convert('RGB').crop((0, 0, w, h)).save(dst, 'JPEG', quality=86, optimize=True, progressive=True)
    shutil.rmtree(tmp, ignore_errors=True)


def cover(src, dst, w=1200, h=630):
    """A raster cover, cropped to the share ratio."""
    with Image.open(src) as im:
        im = im.convert('RGB')
        r = max(w / im.width, h / im.height)
        im = im.resize((round(im.width * r), round(im.height * r)), Image.LANCZOS)
        l, t = (im.width - w) // 2, (im.height - h) // 2
        im.crop((l, t, l + w, t + h)).save(dst, 'JPEG', quality=86, optimize=True, progressive=True)


def main():
    if not CHROME:
        sys.exit('og: Chrome not found (set CHROME_PATH)')
    os.makedirs(OUT, exist_ok=True)
    shot(os.path.join(ROOT, 'tools', 'og', 'default.html'), 1200, 630, os.path.join(OUT, 'cyftech.jpg'))
    n = 1
    for svg in sorted(glob.glob(os.path.join(ROOT, 'assets', 'img', 'blog', '*.svg'))):
        slug = os.path.basename(svg)[:-4]
        shot(svg, 1200, 675, os.path.join(OUT, slug + '.jpg'))
        n += 1
    # posts with a photo cover (build.py POSTS: href -> img)
    for slug, img in [('blog-inside', 'ulketv.webp')]:
        cover(os.path.join(ROOT, 'assets', 'img', 'blog', img), os.path.join(OUT, slug + '.jpg'))
        n += 1
    print(f'og: {n} images -> assets/img/og/')


if __name__ == '__main__':
    main()
