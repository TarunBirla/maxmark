<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', 'MaxMark Builders — Building & Renovation, Done Right')</title>
<link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
<link rel="shortcut icon" type="image/png" href="{{ asset('logo.png') }}">
<link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
<meta name="description" content="@yield('meta_description', 'Loft conversions, extensions, full renovations across West London. Free quote in 60 seconds, fully insured, 5-year guarantee.')">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
/* ===================== TOKENS & RESET ===================== */
:root{
  --ink:#12161d;
  --ink-2:#1b212b;
  --paper:#ece6d8;
  --paper-2:#f4f0e6;
  --brass:#b8863b;
  --brass-light:#d4a75c;
  --signal:#e4572e;
  --slate:#5b6472;
  --slate-light:#8a919c;
  --line:rgba(18,22,28,0.12);
  --line-dark:rgba(236,230,216,0.14);
  --white:#ffffff;
  --radius:2px;
  --ease:cubic-bezier(.16,.84,.44,1);
  --grid-unit: 88px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth; overflow-x:hidden; width:100%; max-width:100vw;}
body{
  font-family:'Inter',sans-serif;
  background:var(--paper);
  color:var(--ink);
  line-height:1.55;
  -webkit-font-smoothing:antialiased;
  overflow-x:hidden;
  width:100%;
  max-width:100vw;
}
img,svg,video,iframe{display:block; max-width:100%; height:auto;}
a{color:inherit;text-decoration:none;}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit;}
ul{list-style:none;}
h1,h2,h3,h4{font-family:'Space Grotesk',sans-serif;font-weight:700;letter-spacing:-0.02em;line-height:1.05; word-wrap:break-word; overflow-wrap:break-word;}
p, span, a, label, li{word-wrap:break-word; overflow-wrap:break-word;}
.mono{font-family:'JetBrains Mono',monospace;}
.wrap{max-width:1240px;margin:0 auto;padding:0 32px; width:100%;}
.eyebrow{
  font-family:'JetBrains Mono',monospace;
  font-size:12px;
  letter-spacing:0.16em;
  text-transform:uppercase;
  color:var(--brass);
  display:inline-flex;
  align-items:center;
  gap:10px;
  font-weight:500;
}
.eyebrow::before{content:'';width:22px;height:1px;background:var(--brass);}
.eyebrow.light{color:var(--brass-light);}
.eyebrow.light::before{background:var(--brass-light);}
@media(prefers-reduced-motion:reduce){
  *{animation-duration:0.01ms !important;animation-iteration-count:1 !important;transition-duration:0.01ms !important;scroll-behavior:auto !important;}
}
::selection{background:var(--brass);color:var(--ink);}

a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible{
  outline:2px solid var(--brass); outline-offset:3px;
}

/* ===================== TOP UTILITY BAR ===================== */
.utility-bar{
  background:var(--ink);
  color:var(--paper-2);
  font-family:'JetBrains Mono',monospace;
  font-size:12px;
  letter-spacing:0.02em;
  border-bottom:1px solid var(--line-dark);
  max-height: 50px;
  opacity: 1;
  transform: translateY(0);
  transition: max-height 0.35s var(--ease), opacity 0.3s var(--ease), transform 0.35s var(--ease);
}
.header-sticky-wrapper.scrolled .utility-bar {
  max-height: 0;
  opacity: 0;
  transform: translateY(-100%);
  overflow: hidden;
  border-bottom: none;
  pointer-events: none;
}
.utility-bar .wrap{
  display:flex; justify-content:space-between; align-items:center;
  min-height:38px; gap:16px; flex-wrap:wrap; padding-top:6px; padding-bottom:6px;
}
.utility-bar .left{display:flex;align-items:center;gap:8px;color:var(--brass-light);}
.utility-bar .right{display:flex;gap:22px;}
.utility-bar .right a{opacity:.85;transition:opacity .2s;}
.utility-bar .right a:hover{opacity:1;color:var(--brass-light);}
.pulse-dot{width:6px;height:6px;border-radius:50%;background:#5fbf7b;display:inline-block;flex-shrink:0;animation:pulse 1.6s infinite;}
@keyframes pulse{0%,100%{opacity:1;box-shadow:0 0 0 0 rgba(95,191,123,.5);}50%{opacity:.6;box-shadow:0 0 0 5px rgba(95,191,123,0);}}

/* ===================== STABLE STICKY HEADER ===================== */
.header-sticky-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  z-index: 1000;
  transform: translateZ(0);
  will-change: transform;
}
body {
  padding-top: 122px;
  transition: padding-top 0.35s var(--ease);
}
body.scrolled-header {
  padding-top: 84px;
}
@media (max-width: 900px) {
  body {
    padding-top: 104px;
  }
  body.scrolled-header {
    padding-top: 66px;
  }
}

header.site-header{
  position: relative;
  background:rgba(18,22,29,0.96);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  border-bottom:1px solid var(--line-dark);
}
header.site-header .wrap{
  display:flex; align-items:center; justify-content:space-between;
  height:84px;
}
.logo{
  display:inline-flex; align-items:center; color:var(--paper-2); text-decoration:none; flex-shrink:0;
}
.logo img{
  height:52px; width:auto; max-width:220px; object-fit:contain; display:block;
}
.footer-brand .footer-logo img{
  height:50px; width:auto; max-width:220px; object-fit:contain; display:block;
  margin-bottom:16px;
}
.logo .word{font-size:22px; font-weight:700; letter-spacing:-0.01em;}
.logo .word span{color:var(--brass-light);}
.logo .sub{font-family:'JetBrains Mono',monospace;font-size:10px;letter-spacing:0.32em;color:var(--slate-light);margin-top:2px;}
nav.main-nav{display:flex; align-items:center; gap:36px;}
nav.main-nav ul{display:flex; gap:28px; align-items:center;}
nav.main-nav a.nav-link{
  color:var(--paper-2); font-size:14.5px; font-weight:500; position:relative; padding:6px 0; white-space:nowrap;
  transition: color .2s var(--ease);
}
nav.main-nav a.nav-link::after{
  content:''; position:absolute; left:0; bottom:0; width:0; height:2px; background:var(--brass-light);
  transition:width .3s var(--ease);
}
nav.main-nav a.nav-link:hover::after,
nav.main-nav a.nav-link.active::after{width:100%;}
nav.main-nav a.nav-link.active{
  color:var(--brass-light) !important;
  font-weight:600;
}
.mega a.active-mega {
  background: rgba(184,134,59,.18) !important;
  color: var(--paper-2) !important;
  font-weight: 600;
}
.has-mega{position:relative;}
.mega{
  position:absolute; top:calc(100% + 20px); left:50%; transform:translateX(-50%) translateY(8px);
  background:var(--ink-2); border:1px solid var(--line-dark); width:560px;
  padding:22px; display:grid; grid-template-columns:1fr 1fr; gap:4px;
  opacity:0; visibility:hidden; transition:opacity .25s var(--ease), transform .25s var(--ease);
  box-shadow:0 30px 60px rgba(0,0,0,.45);
}
.has-mega:hover .mega, .has-mega:focus-within .mega{opacity:1; visibility:visible; transform:translateX(-50%) translateY(0);}
.mega a{
  display:flex; align-items:center; gap:10px; padding:10px 12px; border-radius:2px;
  color:var(--slate-light); font-size:13.5px; transition:background .2s, color .2s;
}
.mega a:hover{background:rgba(184,134,59,.1); color:var(--paper-2);}
.mega a svg{width:16px;height:16px;stroke:var(--brass-light);flex-shrink:0;}
.header-actions{display:flex; align-items:center; gap:14px; flex-shrink:0;}
.btn{
  display:inline-flex; align-items:center; justify-content:center; gap:8px;
  padding:13px 24px; font-size:14px; font-weight:600; letter-spacing:0.01em;
  border-radius:2px; transition:transform .25s var(--ease), box-shadow .25s var(--ease), background .25s var(--ease);
  white-space:nowrap;
}
.btn-brass{background:var(--brass); color:var(--ink);}
.btn-brass:hover{background:var(--brass-light); transform:translateY(-2px); box-shadow:0 12px 24px rgba(184,134,59,.28);}
.btn-outline{border:1px solid var(--line-dark); color:var(--paper-2);}
.btn-outline:hover{border-color:var(--brass-light); color:var(--brass-light); transform:translateY(-2px);}
.btn-outline-dark{border:1px solid var(--line); color:var(--ink);}
.btn-outline-dark:hover{border-color:var(--brass); color:var(--brass); transform:translateY(-2px);}
.btn-signal{background:var(--signal); color:#fff;}
.btn-signal:hover{background:#ef6a41; transform:translateY(-2px); box-shadow:0 12px 24px rgba(228,87,46,.32);}
.btn-dark{background:var(--ink); color:var(--paper-2);}
.btn-dark:hover{background:var(--ink-2); transform:translateY(-2px);}
.btn-ghost-paper{border:1px solid rgba(18,22,29,.18); color:var(--ink);}
.btn-ghost-paper:hover{border-color:var(--brass); color:var(--brass);}
.btn svg{width:16px;height:16px;}
.icon-btn{width:44px;height:44px;border:1px solid var(--line-dark);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--paper-2);transition:border-color .25s, background .25s; flex-shrink:0;}
.icon-btn:hover{border-color:var(--brass-light); background:rgba(184,134,59,.12);}
.icon-btn svg{width:18px;height:18px;}
.burger{display:none; width:44px; height:44px; align-items:center; justify-content:center; color:var(--paper-2); border:1px solid var(--line-dark); border-radius:50%; cursor:pointer;}

/* mobile nav drawer */
.nav-drawer{
  position:fixed; inset:0; background:var(--ink); z-index:2000; transform:translateX(100%); transition:transform .35s var(--ease);
  padding:90px 24px 40px; overflow-y:auto; -webkit-overflow-scrolling:touch;
}
.nav-drawer.open{transform:translateX(0) !important;}
.nav-drawer ul{display:flex; flex-direction:column; gap:4px;}
.nav-drawer a{font-family:'Space Grotesk',sans-serif; font-size:22px; font-weight:600; padding:12px 0; border-bottom:1px solid var(--line-dark); color:var(--paper-2); display:block;}
.close-drawer{position:absolute; top:24px; right:24px; width:44px; height:44px; color:var(--paper-2); border:1px solid var(--line-dark); border-radius:50%; display:flex; align-items:center; justify-content:center;}

/* ===================== FOOTER ===================== */
footer{background:#0c0f14; color:var(--slate-light); padding:80px 0 0;}
.footer-grid{display:grid; grid-template-columns:1.4fr 1fr 1fr 1.2fr; gap:40px; padding-bottom:60px; border-bottom:1px solid var(--line-dark);}
.footer-grid h4{color:var(--paper-2); font-size:13px; font-family:'JetBrains Mono',monospace; letter-spacing:.1em; margin-bottom:22px;}
.footer-grid ul li{margin-bottom:12px;}
.footer-grid ul a{font-size:14px; transition:color .2s;}
.footer-grid ul a:hover{color:var(--brass-light);}
.footer-brand p{font-size:14px; margin:18px 0 22px; max-width:280px; line-height:1.7;}
.social-row{display:flex; gap:10px;}
.social-row a{width:38px;height:38px;border:1px solid var(--line-dark);border-radius:50%;display:flex;align-items:center;justify-content:center;transition:all .25s;}
.social-row a:hover{border-color:var(--brass-light); color:var(--brass-light);}
.social-row svg{width:16px;height:16px;}
.foot-contact li{display:flex; gap:10px; align-items:flex-start; font-size:14px;}
.foot-contact svg{width:16px;height:16px; stroke:var(--brass-light); flex-shrink:0; margin-top:2px;}
.footer-bottom{display:flex; justify-content:space-between; align-items:center; padding:26px 0; font-size:12.5px; flex-wrap:wrap; gap:12px;}
.footer-bottom a{opacity:.7;}
.footer-bottom a:hover{opacity:1;}

/* ===================== FLOATING WHATSAPP ===================== */
.float-whatsapp{
  position:fixed; bottom:90px; right:26px; z-index:250; width:56px; height:56px;
  background:#25D366; color:#ffffff; border-radius:50%; display:flex; align-items:center; justify-content:center;
  box-shadow:0 8px 24px rgba(37,211,102,.45); transition:transform .3s var(--ease), box-shadow .3s var(--ease);
  text-decoration:none;
}
.float-whatsapp:hover{transform:translateY(-3px) scale(1.06); box-shadow:0 12px 30px rgba(37,211,102,.6); color:#ffffff;}
.float-whatsapp svg{width:30px; height:30px;}

/* ===================== BREAKPOINT MEDIA QUERIES ===================== */
@media(max-width:1080px){
  nav.main-nav{display:none;}
  .burger{display:flex;}
  .footer-grid{grid-template-columns:1fr 1fr; row-gap:40px;}
}
@media(max-width:768px){
  header.site-header .wrap{height:72px;}
  .logo img{height:44px;}
  .utility-bar .wrap{justify-content:center; text-align:center;}
  .utility-bar .right{display:none;}
}
@media(max-width:640px){
  .wrap{padding:0 16px;}
  header.site-header .wrap{height:66px;}
  .logo img{height:38px; max-width:165px;}
  .header-actions .btn-brass{display:none;}
  .footer-grid{grid-template-columns:1fr; row-gap:32px;}
  .float-whatsapp{bottom:78px; right:16px; width:48px; height:48px;}
  .float-whatsapp svg{width:26px; height:26px;}
}
@media(max-width:380px){
  .wrap{padding:0 12px;}
  .logo img{height:32px; max-width:130px;}
  .header-actions{gap:6px;}
  .icon-btn{width:36px; height:36px;}
  .burger{width:36px; height:36px;}
  .float-whatsapp{bottom:72px; right:12px; width:44px; height:44px;}
  .float-whatsapp svg{width:22px; height:22px;}
}
</style>
@stack('styles')
</head>
<body>

@include('partials.header')

<!-- ===================== MAIN CONTENT ===================== -->
@yield('content')

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function() {
  /* ---------- Header Scroll Utility Collapse Listener ---------- */
  const headerWrapper = document.querySelector('.header-sticky-wrapper');
  function handleHeaderScroll() {
    const isScrolled = window.scrollY > 30;
    if (headerWrapper) {
      headerWrapper.classList.toggle('scrolled', isScrolled);
    }
    document.body.classList.toggle('scrolled-header', isScrolled);
  }
  window.addEventListener('scroll', handleHeaderScroll, { passive: true });
  handleHeaderScroll();

  /* ---------- Mobile Nav Drawer Toggle ---------- */
  const burgerBtn = document.getElementById('burgerBtn');
  const navDrawer = document.getElementById('navDrawer');
  const closeDrawer = document.getElementById('closeDrawer');

  function openDrawer() {
    if (navDrawer) {
      navDrawer.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeNavDrawer() {
    if (navDrawer) {
      navDrawer.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  if (burgerBtn) {
    burgerBtn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      openDrawer();
    });
  }

  if (closeDrawer) {
    closeDrawer.addEventListener('click', function(e) {
      e.preventDefault();
      closeNavDrawer();
    });
  }

  if (navDrawer) {
    navDrawer.querySelectorAll('a').forEach(function(a) {
      a.addEventListener('click', function() {
        closeNavDrawer();
      });
    });

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && navDrawer.classList.contains('open')) {
        closeNavDrawer();
      }
    });
  }

  /* ---------- Active Navigation ScrollSpy ---------- */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('nav.main-nav a.nav-link[data-section]');

  if (sections.length && navLinks.length && window.location.pathname === '/') {
    function onScrollSpy() {
      const scrollPos = window.scrollY + 160;
      sections.forEach(function(sec) {
        const top = sec.offsetTop;
        const height = sec.offsetHeight;
        const id = sec.getAttribute('id');
        if (scrollPos >= top && scrollPos < top + height) {
          navLinks.forEach(function(link) {
            if (link.getAttribute('data-section') === id) {
              link.classList.add('active');
            } else {
              link.classList.remove('active');
            }
          });
        }
      });
    }
    window.addEventListener('scroll', onScrollSpy, { passive: true });
    onScrollSpy();
  }
});
</script>

@include('partials.whatsapp')

@stack('scripts')
</body>
</html>
