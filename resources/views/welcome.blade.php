<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MaxMark Builders — Building & Renovation, Done Right</title>
<meta name="description" content="Loft conversions, extensions, full renovations across West London. Free quote in 60 seconds, fully insured, 5-year guarantee.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
/* ===================== TOKENS ===================== */
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
html{scroll-behavior:smooth;}
body{
  font-family:'Inter',sans-serif;
  background:var(--paper);
  color:var(--ink);
  line-height:1.55;
  -webkit-font-smoothing:antialiased;
  overflow-x:hidden;
}
img,svg{display:block;max-width:100%;}
a{color:inherit;text-decoration:none;}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit;}
ul{list-style:none;}
h1,h2,h3,h4{font-family:'Space Grotesk',sans-serif;font-weight:700;letter-spacing:-0.02em;line-height:1.05;}
.mono{font-family:'JetBrains Mono',monospace;}
.wrap{max-width:1240px;margin:0 auto;padding:0 32px;}
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

/* ===================== REVEAL ===================== */
.reveal{opacity:0;transform:translateY(28px);transition:opacity .8s var(--ease), transform .8s var(--ease);}
.reveal.in{opacity:1;transform:translateY(0);}
.stagger > *{transition-delay:calc(var(--i,0) * 90ms);}

/* ===================== TOP UTILITY BAR ===================== */
.utility-bar{
  background:var(--ink);
  color:var(--paper-2);
  font-family:'JetBrains Mono',monospace;
  font-size:12px;
  letter-spacing:0.02em;
}
.utility-bar .wrap{
  display:flex; justify-content:space-between; align-items:center;
  height:38px; gap:20px; flex-wrap:wrap;
}
.utility-bar .left{display:flex;align-items:center;gap:8px;color:var(--brass-light);}
.utility-bar .right{display:flex;gap:22px;}
.utility-bar .right a{opacity:.85;transition:opacity .2s;}
.utility-bar .right a:hover{opacity:1;color:var(--brass-light);}
.pulse-dot{width:6px;height:6px;border-radius:50%;background:#5fbf7b;display:inline-block;animation:pulse 1.6s infinite;}
@keyframes pulse{0%,100%{opacity:1;box-shadow:0 0 0 0 rgba(95,191,123,.5);}50%{opacity:.6;box-shadow:0 0 0 5px rgba(95,191,123,0);}}

/* ===================== HEADER ===================== */
header.site-header{
  position:sticky; top:0; z-index:100;
  background:rgba(18,22,29,0.92);
  backdrop-filter:blur(10px);
  border-bottom:1px solid var(--line-dark);
  transition:padding .3s var(--ease);
}
header.site-header .wrap{
  display:flex; align-items:center; justify-content:space-between;
  height:84px; transition:height .3s var(--ease);
}
header.site-header.shrink .wrap{height:64px;}
.logo{
  display:inline-flex; align-items:center; color:var(--paper-2); text-decoration:none;
}
.logo img{
  height:52px; width:auto; max-width:220px; object-fit:contain; display:block;
  transition:height .3s var(--ease);
}
header.site-header.shrink .logo img{
  height:40px;
}
.footer-brand .footer-logo img{
  height:50px; width:auto; max-width:220px; object-fit:contain; display:block;
  margin-bottom:16px;
}
.logo .word{font-size:22px; font-weight:700; letter-spacing:-0.01em;}
.logo .word span{color:var(--brass-light);}
.logo .sub{font-family:'JetBrains Mono',monospace;font-size:10px;letter-spacing:0.32em;color:var(--slate-light);margin-top:2px;}
nav.main-nav{display:flex; align-items:center; gap:36px;}
nav.main-nav ul{display:flex; gap:32px; align-items:center;}
nav.main-nav a.nav-link{
  color:var(--paper-2); font-size:14.5px; font-weight:500; position:relative; padding:6px 0;
}
nav.main-nav a.nav-link::after{
  content:''; position:absolute; left:0; bottom:0; width:0; height:1px; background:var(--brass-light);
  transition:width .3s var(--ease);
}
nav.main-nav a.nav-link:hover::after{width:100%;}
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
.header-actions{display:flex; align-items:center; gap:14px;}
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
.icon-btn{width:44px;height:44px;border:1px solid var(--line-dark);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--paper-2);transition:border-color .25s, background .25s;}
.icon-btn:hover{border-color:var(--brass-light); background:rgba(184,134,59,.12);}
.icon-btn svg{width:18px;height:18px;}
.burger{display:none;}

/* ===================== HERO (with image bento) ===================== */
.hero{
  position:relative; background:var(--ink); color:var(--paper-2); overflow:hidden;
  padding:88px 0 96px;
}
.hero .grid-bg{
  position:absolute; inset:0;
  background-image:
    linear-gradient(var(--line-dark) 1px, transparent 1px),
    linear-gradient(90deg, var(--line-dark) 1px, transparent 1px);
  background-size:var(--grid-unit) var(--grid-unit);
  mask-image:radial-gradient(ellipse 80% 60% at 60% 30%, black 20%, transparent 75%);
  opacity:.7;
}
.hero .glow{
  position:absolute; width:640px; height:640px; border-radius:50%;
  background:radial-gradient(circle, rgba(184,134,59,.18), transparent 70%);
  top:-220px; right:-160px; pointer-events:none;
}
.hero-inner{position:relative; z-index:2; display:grid; grid-template-columns:1.05fr 0.95fr; gap:48px; align-items:center;}
.hero h1{font-size:clamp(38px,4.6vw,64px); margin:22px 0 20px; max-width:620px;}
.hero h1 .accent{color:var(--brass-light); font-style:italic; font-weight:500;}
.hero p.lede{font-size:17.5px; color:var(--slate-light); max-width:500px; margin-bottom:34px;}
.cta-row{display:flex; gap:14px; flex-wrap:wrap; margin-bottom:38px;}
.trust-row{display:flex; align-items:center; gap:26px; flex-wrap:wrap;}
.trust-item{display:flex; align-items:center; gap:9px; font-size:13.5px; color:var(--slate-light);}
.stars{color:var(--brass-light); letter-spacing:2px; font-size:14px;}
.trust-item b{color:var(--paper-2); font-family:'JetBrains Mono',monospace; font-weight:600;}
.divider-dot{width:4px;height:4px;border-radius:50%;background:var(--line-dark);}

/* Hero bento images */
.hero-bento{
  position:relative; display:grid; grid-template-columns:1.2fr 1fr; grid-template-rows:1fr 1fr; gap:14px;
  height:520px;
}
.bento-img{
  position:relative; overflow:hidden; border:1px solid var(--line-dark); background:var(--ink-2);
}
.bento-img img{width:100%;height:100%;object-fit:cover; transition:transform .8s var(--ease);}
.bento-img:hover img{transform:scale(1.05);}
.bento-img.main{grid-row:1 / 3;}
.bento-img .tag{
  position:absolute; left:14px; bottom:14px; background:rgba(18,22,28,.8);
  backdrop-filter:blur(8px); color:var(--paper-2); font-family:'JetBrains Mono',monospace;
  font-size:11px; letter-spacing:.12em; padding:7px 12px;
}
.bento-img .tag .dot{display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--brass-light);margin-right:6px;vertical-align:middle;}
.hero-badge{
  position:absolute; top:18px; right:18px; background:var(--brass); color:var(--ink);
  font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:600; letter-spacing:.1em;
  padding:8px 14px; z-index:3;
}
@media(max-width:900px){
  .hero-bento{height:380px;}
}

/* blueprint house illustration (kept for compact layout) */
.blueprint-wrap{position:relative;display:none;}
.blueprint-card{
  position:relative; border:1px solid var(--line-dark); background:rgba(255,255,255,.02);
  padding:28px; backdrop-filter:blur(2px);
}
.blueprint-card::before{
  content:'FIG. 01 — SCALE 1:50'; position:absolute; top:-11px; left:20px; background:var(--ink);
  padding:0 10px; font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:.14em; color:var(--slate-light);
}
.corner{position:absolute; width:18px; height:18px; border-color:var(--brass-light); opacity:.8;}
.corner.tl{top:-1px;left:-1px;border-top:2px solid;border-left:2px solid;}
.corner.tr{top:-1px;right:-1px;border-top:2px solid;border-right:2px solid;}
.corner.bl{bottom:-1px;left:-1px;border-bottom:2px solid;border-left:2px solid;}
.corner.br{bottom:-1px;right:-1px;border-bottom:2px solid;border-right:2px solid;}
.house-svg path,.house-svg line,.house-svg polyline{
  fill:none; stroke:var(--paper-2); stroke-width:1.6; stroke-linecap:round; stroke-linejoin:round;
  stroke-dasharray:1400; stroke-dashoffset:1400;
  animation:draw 2.6s var(--ease) forwards;
}
.house-svg .fill-brass{fill:var(--brass); fill-opacity:.85; stroke:none; animation:none; opacity:0; animation:fadeIn .8s ease forwards 2.2s;}
.house-svg .dim{stroke:var(--brass-light); stroke-width:1; stroke-dasharray:3 3; opacity:.6;}
.house-svg text{font-family:'JetBrains Mono',monospace; font-size:9px; fill:var(--slate-light); opacity:0; animation:fadeIn .6s ease forwards 2.4s;}
@keyframes draw{to{stroke-dashoffset:0;}}
@keyframes fadeIn{to{opacity:1;}}
.blueprint-stats{display:flex; justify-content:space-between; margin-top:20px; padding-top:18px; border-top:1px dashed var(--line-dark);}
.blueprint-stats div{font-family:'JetBrains Mono',monospace; font-size:11px; color:var(--slate-light);}
.blueprint-stats b{display:block; color:var(--paper-2); font-size:20px; font-family:'Space Grotesk',sans-serif; margin-bottom:2px;}

/* marquee */
.marquee-section{background:var(--paper-2); border-bottom:1px solid var(--line); border-top:1px solid var(--line); padding:20px 0; overflow:hidden;}
.marquee-track{display:flex; gap:56px; width:max-content; animation:scroll 26s linear infinite;}
.marquee-track span{display:flex; align-items:center; gap:10px; font-family:'JetBrains Mono',monospace; font-size:13px; color:var(--slate); white-space:nowrap;}
.marquee-track svg{width:15px;height:15px;stroke:var(--brass);}
@keyframes scroll{from{transform:translateX(0);}to{transform:translateX(-50%);}}

/* ===================== SECTION GENERIC ===================== */
section{padding:110px 0;}
.section-head{max-width:680px; margin-bottom:56px;}
.section-head h2{font-size:clamp(30px,3.4vw,44px); margin:16px 0 14px; color:var(--ink);}
.section-head p{color:var(--slate); font-size:16px;}
.section-head.center{margin-left:auto; margin-right:auto; text-align:center;}
.section-dark{background:var(--ink); color:var(--paper-2);}
.section-dark .section-head h2{color:var(--paper-2);}
.section-dark .section-head p{color:var(--slate-light);}

/* ===================== FEATURED PROJECTS BENTO ===================== */
.projects-bento{
  display:grid;
  grid-template-columns:repeat(6, 1fr);
  grid-auto-rows:240px;
  gap:14px;
}
.bento-tile{
  position:relative; overflow:hidden; background:var(--ink-2);
  transition:transform .4s var(--ease);
}
.bento-tile img{width:100%;height:100%;object-fit:cover; transition:transform .8s var(--ease);}
.bento-tile:hover img{transform:scale(1.06);}
.bento-tile:hover .tile-overlay{opacity:1;}
.bento-tile.t1{grid-column:span 3; grid-row:span 2;}
.bento-tile.t2{grid-column:span 2; grid-row:span 1;}
.bento-tile.t3{grid-column:span 1; grid-row:span 1;}
.bento-tile.t4{grid-column:span 2; grid-row:span 1;}
.bento-tile.t5{grid-column:span 1; grid-row:span 1;}
.bento-tile.t6{grid-column:span 3; grid-row:span 1;}
.bento-tile.t7{grid-column:span 3; grid-row:span 1;}
.tile-overlay{
  position:absolute; inset:0; display:flex; flex-direction:column; justify-content:flex-end;
  padding:24px; color:#fff;
  background:linear-gradient(to top, rgba(0,0,0,.85) 0%, rgba(0,0,0,.25) 50%, transparent 100%);
  opacity:.95; transition:opacity .35s var(--ease);
}
.tile-overlay .tile-cat{font-family:'JetBrains Mono',monospace; font-size:11px; letter-spacing:.14em; color:var(--brass-light); text-transform:uppercase; margin-bottom:8px;}
.tile-overlay h3{font-size:22px; color:#fff; margin-bottom:6px;}
.tile-overlay .tile-meta{font-size:13px; color:rgba(255,255,255,.7); display:flex; align-items:center; gap:10px;}
.tile-overlay .tile-meta span.dot{width:3px;height:3px;border-radius:50%;background:rgba(255,255,255,.5);}
.tile-corner{
  position:absolute; top:16px; right:16px; background:rgba(18,22,28,.7);
  color:#fff; font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:.14em;
  padding:6px 10px; backdrop-filter:blur(6px);
}
@media(max-width:900px){
  .projects-bento{grid-template-columns:repeat(2,1fr); grid-auto-rows:200px;}
  .bento-tile.t1{grid-column:span 2; grid-row:span 2;}
  .bento-tile.t2{grid-column:span 1;}
  .bento-tile.t3{grid-column:span 1;}
  .bento-tile.t4{grid-column:span 1;}
  .bento-tile.t5{grid-column:span 1;}
  .bento-tile.t6{grid-column:span 2;}
  .bento-tile.t7{grid-column:span 2;}
}

/* ===================== SERVICES ===================== */
.services-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:1px; background:var(--line); border:1px solid var(--line);}
.service-card{
  background:var(--paper-2); padding:32px 26px; position:relative; overflow:hidden;
  transition:background .35s var(--ease);
}
.service-card .svc-photo{
  position:absolute; inset:0; opacity:0; transition:opacity .5s var(--ease);
  z-index:0;
}
.service-card .svc-photo img{width:100%;height:100%;object-fit:cover;}
.service-card .svc-photo::after{
  content:''; position:absolute; inset:0;
  background:linear-gradient(180deg, rgba(18,22,28,.4) 0%, rgba(18,22,28,.92) 60%, var(--ink) 100%);
}
.service-card .svc-content{position:relative; z-index:1; transition:transform .35s var(--ease);}
.service-card:hover{background:var(--ink);}
.service-card:hover .svc-photo{opacity:1;}
.service-card:hover .svc-title,.service-card:hover .svc-desc{color:var(--paper-2);}
.service-card:hover .svc-desc{color:var(--slate-light);}
.service-card:hover .svc-icon{border-color:var(--brass-light); background:rgba(184,134,59,.15);}
.service-card:hover .svc-icon svg{stroke:var(--brass-light);}
.service-card:hover .svc-arrow{opacity:1; transform:translateX(0);}
.svc-num{font-family:'JetBrains Mono',monospace; font-size:11px; color:var(--slate-light); position:absolute; top:24px; right:26px; z-index:2; transition:color .3s;}
.service-card:hover .svc-num{color:var(--brass-light);}
.svc-icon{
  width:52px; height:52px; border:1px solid var(--line); border-radius:50%; display:flex; align-items:center; justify-content:center;
  margin-bottom:22px; transition:border-color .3s, background .3s; background:rgba(255,255,255,.7);
}
.svc-icon svg{width:24px;height:24px; stroke:var(--brass); stroke-width:1.5; fill:none;}
.svc-title{font-size:17px; font-weight:600; margin-bottom:10px; transition:color .3s; color:var(--ink);}
.svc-desc{font-size:14px; color:var(--slate); line-height:1.6; margin-bottom:20px; transition:color .3s;}
.svc-arrow{display:inline-flex; align-items:center; gap:6px; font-size:12.5px; font-weight:600; color:var(--brass-light); opacity:0; transform:translateX(-6px); transition:all .3s var(--ease);}

/* ===================== ADVANTAGES / STATS ===================== */
.advantages{display:grid; grid-template-columns:1fr 1fr 1fr; gap:1px; background:var(--line-dark); margin-bottom:70px;}
.adv-card{background:var(--ink-2); padding:36px 30px;}
.adv-card .num{font-family:'JetBrains Mono',monospace; color:var(--brass-light); font-size:13px; margin-bottom:16px; display:block;}
.adv-card h3{font-size:19px; color:var(--paper-2); margin-bottom:12px;}
.adv-card p{font-size:14px; color:var(--slate-light); line-height:1.65;}
.stats-row{display:grid; grid-template-columns:repeat(4,1fr); gap:40px; text-align:center;}
.stat-box .stat-num{font-family:'Space Grotesk',sans-serif; font-size:clamp(36px,4vw,56px); font-weight:700; color:var(--brass-light); line-height:1;}
.stat-box .stat-label{margin-top:10px; font-size:13px; color:var(--slate-light); font-family:'JetBrains Mono',monospace; letter-spacing:.06em;}

/* ===================== ABOUT IMAGE STRIP ===================== */
.about-strip{
  display:grid; grid-template-columns:1.1fr 1fr; gap:60px; align-items:center;
  margin-top:60px;
}
.about-img{
  position:relative; aspect-ratio:4/5; overflow:hidden; background:var(--ink-2);
}
.about-img img{width:100%;height:100%;object-fit:cover;}
.about-img .img-tag{
  position:absolute; left:20px; bottom:20px; background:var(--ink); color:var(--paper-2);
  padding:14px 20px; font-family:'JetBrains Mono',monospace; font-size:11px; letter-spacing:.12em;
  display:flex; align-items:center; gap:10px;
}
.about-img .img-tag .pulse-dot{background:var(--brass-light);}
.about-copy h3{font-size:28px; margin:14px 0 16px; color:var(--paper-2);}
.about-copy p{font-size:15px; color:var(--slate-light); line-height:1.75; margin-bottom:18px;}
.about-features{display:grid; grid-template-columns:1fr 1fr; gap:14px; margin-top:24px;}
.about-feature{display:flex; align-items:flex-start; gap:12px; padding:14px 16px; background:rgba(184,134,59,.06); border:1px solid var(--line-dark);}
.about-feature .af-icon{width:32px;height:32px; flex-shrink:0; border:1px solid var(--brass); border-radius:50%; display:flex; align-items:center; justify-content:center;}
.about-feature .af-icon svg{width:15px;height:15px; stroke:var(--brass-light);}
.about-feature strong{color:var(--paper-2); display:block; font-size:14px; margin-bottom:2px;}
.about-feature span{color:var(--slate-light); font-size:12.5px;}

/* ===================== PROCESS ===================== */
.process-list{display:flex; flex-direction:column;}
.process-item{
  display:grid; grid-template-columns:110px 80px 1fr; gap:32px; padding:36px 0; border-top:1px solid var(--line);
  position:relative; align-items:center;
}
.process-item:last-child{border-bottom:1px solid var(--line);}
.process-num{font-family:'JetBrains Mono',monospace; font-size:15px; color:var(--brass); align-self:start; padding-top:4px;}
.process-thumb{
  position:relative; width:80px; height:80px; overflow:hidden; border:1px solid var(--line);
}
.process-thumb img{width:100%;height:100%;object-fit:cover; filter:saturate(.85);}
.process-body h3{font-size:22px; margin-bottom:10px; color:var(--ink);}
.process-body p{color:var(--slate); max-width:560px; font-size:15px;}
.process-item .process-line{
  position:absolute; left:0; top:0; height:0; width:2px; background:var(--brass); transition:height 1s var(--ease);
}
.process-item.in .process-line{height:100%;}
@media(max-width:700px){
  .process-item{grid-template-columns:1fr; gap:14px;}
  .process-thumb{width:100%; height:120px;}
  .about-strip{grid-template-columns:1fr; gap:30px;}
}

/* ===================== PORTFOLIO / BEFORE-AFTER ===================== */
.portfolio-tabs{display:flex; gap:10px; margin-bottom:38px; flex-wrap:wrap;}
.ptab{padding:10px 20px; border:1px solid var(--line); font-size:13.5px; font-weight:600; color:var(--slate); border-radius:30px; transition:all .25s;}
.ptab.active,.ptab:hover{background:var(--ink); color:var(--paper-2); border-color:var(--ink);}
.compare-wrap{
  position:relative; aspect-ratio:16/9; overflow:hidden; border:1px solid var(--line); user-select:none; touch-action:none;
  background:var(--ink);
}
.compare-panel{position:absolute; inset:0; display:flex; flex-direction:column; justify-content:flex-end; padding:26px;}
.compare-panel .img-fill{position:absolute; inset:0;}
.compare-panel .img-fill img{width:100%;height:100%;object-fit:cover;}
.compare-panel .img-fill::after{content:''; position:absolute; inset:0; background:linear-gradient(to top, rgba(18,22,28,.85), transparent 55%);}
.compare-panel .tag{font-family:'JetBrains Mono',monospace; font-size:11px; letter-spacing:.12em; color:var(--brass-light); background:rgba(18,22,29,.55); display:inline-block; padding:6px 12px; margin-bottom:10px; width:max-content; position:relative; z-index:2;}
.compare-panel h4{color:var(--paper-2); font-size:20px; position:relative; z-index:2;}
.compare-panel .img-fill.before::after{background:linear-gradient(135deg, rgba(0,0,0,.4), rgba(0,0,0,.65));}
.compare-panel .img-fill.after::after{background:linear-gradient(to top, rgba(18,22,28,.7), transparent 55%);}
.compare-panel.before .img-fill{filter:grayscale(.8) brightness(.7);}
.compare-handle{
  position:absolute; top:0; bottom:0; left:50%; width:2px; background:var(--brass-light);
  transform:translateX(-1px); cursor:ew-resize; z-index:5;
}
.compare-handle .grip{
  position:absolute; top:50%; left:50%; transform:translate(-50%,-50%);
  width:46px; height:46px; border-radius:50%; background:var(--brass); display:flex; align-items:center; justify-content:center;
  box-shadow:0 8px 20px rgba(0,0,0,.4);
}
.compare-handle .grip svg{width:20px;height:20px; stroke:var(--ink); stroke-width:2;}
.compare-caption{margin-top:16px; display:flex; justify-content:space-between; align-items:center; font-size:13.5px; color:var(--slate);}

/* ===================== FULL-BLEED IMAGE BANNER ===================== */
.image-banner{
  position:relative; padding:160px 0; overflow:hidden; color:#fff; text-align:center;
}
.image-banner .bg-img{position:absolute; inset:0; z-index:0;}
.image-banner .bg-img img{width:100%;height:100%;object-fit:cover;}
.image-banner .bg-img::after{content:''; position:absolute; inset:0; background:linear-gradient(120deg, rgba(18,22,28,.88) 0%, rgba(18,22,28,.6) 100%);}
.image-banner .wrap{position:relative; z-index:1; max-width:820px;}
.image-banner h2{color:#fff; font-size:clamp(30px,3.6vw,46px); margin:16px 0 18px;}
.image-banner p{color:rgba(255,255,255,.78); font-size:17px; max-width:580px; margin:0 auto 32px;}
.image-banner .cta-row{justify-content:center;}

/* ===================== QUOTE CALCULATOR ===================== */
.quote-section{background:var(--ink); color:var(--paper-2); position:relative; overflow:hidden;}
.quote-section .grid-bg2{
  position:absolute; inset:0;
  background-image:linear-gradient(var(--line-dark) 1px, transparent 1px), linear-gradient(90deg, var(--line-dark) 1px, transparent 1px);
  background-size:64px 64px; opacity:.5;
}
.quote-box{
  position:relative; z-index:2; max-width:760px; margin:0 auto; background:var(--ink-2);
  border:1px solid var(--line-dark); padding:48px; box-shadow:0 40px 90px rgba(0,0,0,.35);
}
.quote-progress{display:flex; gap:6px; margin-bottom:32px;}
.quote-progress span{flex:1; height:3px; background:var(--line-dark); border-radius:2px; overflow:hidden; position:relative;}
.quote-progress span i{position:absolute; inset:0; background:var(--brass); transform:scaleX(0); transform-origin:left; transition:transform .5s var(--ease);}
.quote-progress span.done i{transform:scaleX(1);}
.quote-step{display:none;}
.quote-step.active{display:block; animation:stepIn .5s var(--ease);}
@keyframes stepIn{from{opacity:0; transform:translateX(14px);}to{opacity:1; transform:translateX(0);}}
.quote-step h3{font-size:24px; margin-bottom:6px;}
.quote-step .step-label{font-family:'JetBrains Mono',monospace; font-size:11.5px; color:var(--brass-light); letter-spacing:.12em; margin-bottom:14px; display:block;}
.option-grid{display:grid; grid-template-columns:repeat(2,1fr); gap:12px; margin-top:24px;}
.option-grid.cols-3{grid-template-columns:repeat(3,1fr);}
.opt-card{
  border:1px solid var(--line-dark); padding:20px 18px; text-align:left; transition:all .25s var(--ease); background:transparent;
}
.opt-card:hover{border-color:var(--slate-light);}
.opt-card.selected{border-color:var(--brass); background:rgba(184,134,59,.1);}
.opt-card .oi{width:30px;height:30px; margin-bottom:12px; stroke:var(--brass-light); fill:none; stroke-width:1.5;}
.opt-card .ot{font-weight:600; font-size:15px; margin-bottom:4px; color:var(--paper-2);}
.opt-card .od{font-size:12.5px; color:var(--slate-light);}
.quote-nav{display:flex; justify-content:space-between; margin-top:34px;}
.quote-result{text-align:center; padding:20px 0;}
.quote-result .range{font-family:'Space Grotesk',sans-serif; font-size:clamp(32px,4vw,46px); color:var(--brass-light); margin:14px 0 10px;}
.quote-result .caveat{font-size:12.5px; color:var(--slate-light); max-width:440px; margin:0 auto 28px;}
.contact-fields{display:grid; grid-template-columns:1fr 1fr; gap:14px; text-align:left;}
.contact-fields label{grid-column:1/-1; margin-top:6px;}
.field{display:flex; flex-direction:column; gap:6px;}
.field label{font-size:12px; font-family:'JetBrains Mono',monospace; color:var(--slate-light); letter-spacing:.06em;}
.field input{
  background:var(--ink); border:1px solid var(--line-dark); color:var(--paper-2); padding:13px 14px; font-size:14.5px; border-radius:1px;
  transition:border-color .2s;
}
.field input:focus{border-color:var(--brass); outline:none;}
.field.full{grid-column:1/-1;}
.thankyou{text-align:center; padding:20px 0;}
.thankyou .check{
  width:64px;height:64px;border-radius:50%;background:rgba(184,134,59,.15);border:1px solid var(--brass);
  display:flex;align-items:center;justify-content:center;margin:0 auto 20px;
}
.thankyou .check svg{width:28px;height:28px;stroke:var(--brass-light);stroke-width:2;}

/* ===================== TESTIMONIALS ===================== */
.testi-wrap{position:relative; max-width:760px; margin:0 auto;}
.testi-track{display:flex; transition:transform .6s var(--ease);}
.testi-card{min-width:100%; text-align:center; padding:0 20px;}
.testi-card .stars{font-size:18px; margin-bottom:22px;}
.testi-card p.quote{font-family:'Space Grotesk',sans-serif; font-size:clamp(20px,2.4vw,27px); font-weight:500; line-height:1.5; color:var(--ink); margin-bottom:26px;}
.testi-meta{display:flex; align-items:center; justify-content:center; gap:12px;}
.testi-avatar{width:54px;height:54px;border-radius:50%;background:var(--ink);color:var(--brass-light);display:flex;align-items:center;justify-content:center;font-family:'Space Grotesk';font-weight:700;font-size:15px;overflow:hidden; border:2px solid var(--paper-2); box-shadow:0 4px 14px rgba(0,0,0,.12);}
.testi-avatar img{width:100%;height:100%;object-fit:cover;}
.testi-name{font-weight:600; font-size:14.5px;}
.testi-role{font-size:13px; color:var(--slate);}
.testi-dots{display:flex; justify-content:center; gap:8px; margin-top:34px;}
.testi-dots button{width:8px;height:8px;border-radius:50%;background:var(--line);transition:all .3s;}
.testi-dots button.active{background:var(--brass); width:22px; border-radius:6px;}
.testi-arrows{position:absolute; top:40%; left:-56px; right:-56px; display:flex; justify-content:space-between;}
@media(max-width:900px){.testi-arrows{display:none;}}

/* ===================== GALLERY ===================== */
.gallery-strip{
  display:grid; grid-template-columns:repeat(4, 1fr); gap:10px; margin-top:30px;
}
.gallery-tile{
  position:relative; aspect-ratio:1/1; overflow:hidden; background:var(--ink-2); cursor:pointer;
}
.gallery-tile img{width:100%;height:100%;object-fit:cover; transition:transform .6s var(--ease);}
.gallery-tile:hover img{transform:scale(1.08);}
.gallery-tile::after{
  content:''; position:absolute; inset:0; background:linear-gradient(180deg, transparent 60%, rgba(0,0,0,.6));
  opacity:0; transition:opacity .35s;
}
.gallery-tile:hover::after{opacity:1;}
.gallery-tile .gallery-caption{
  position:absolute; left:14px; bottom:14px; color:#fff; font-size:13px; font-weight:600;
  font-family:'Space Grotesk',sans-serif; opacity:0; transform:translateY(8px); transition:all .35s var(--ease); z-index:2;
}
.gallery-tile:hover .gallery-caption{opacity:1; transform:translateY(0);}

/* ===================== FAQ ===================== */
.faq-item{border-bottom:1px solid var(--line);}
.faq-q{
  width:100%; display:flex; justify-content:space-between; align-items:center; padding:26px 0;
  font-size:17px; font-weight:600; text-align:left; color:var(--ink);
}
.faq-q .plus{width:22px;height:22px;position:relative; flex-shrink:0; margin-left:20px;}
.faq-q .plus::before,.faq-q .plus::after{content:'';position:absolute;background:var(--brass);top:50%;left:50%;transform:translate(-50%,-50%);}
.faq-q .plus::before{width:14px;height:1.5px;}
.faq-q .plus::after{width:1.5px;height:14px;transition:transform .3s var(--ease);}
.faq-item.open .plus::after{transform:translate(-50%,-50%) rotate(90deg) scaleY(0);}
.faq-a{max-height:0; overflow:hidden; transition:max-height .4s var(--ease);}
.faq-a p{padding-bottom:26px; color:var(--slate); font-size:14.5px; max-width:640px; line-height:1.7;}

/* ===================== FINAL CTA ===================== */
.final-cta{
  background:linear-gradient(120deg, var(--ink) 0%, #241c12 100%); color:var(--paper-2); position:relative; overflow:hidden;
}
.final-cta::before{
  content:''; position:absolute; width:900px; height:900px; border-radius:50%;
  background:radial-gradient(circle, rgba(228,87,46,.12), transparent 65%); top:-400px; left:-200px;
}
.final-cta-inner{position:relative; z-index:2; text-align:center; max-width:680px; margin:0 auto;}
.final-cta h2{font-size:clamp(30px,4vw,48px); margin:18px 0 18px;}
.final-cta p{color:var(--slate-light); margin-bottom:36px; font-size:16.5px;}
.final-cta .cta-row{justify-content:center;}
.slots-badge{
  display:inline-flex; align-items:center; gap:10px; background:rgba(228,87,46,.12); border:1px solid rgba(228,87,46,.35);
  padding:9px 18px; border-radius:30px; font-family:'JetBrains Mono',monospace; font-size:12.5px; color:#f0a68a; margin-top:30px;
}

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

/* ===================== FLOATING ===================== */
.float-cta{
  position:fixed; bottom:26px; right:26px; z-index:200; display:flex; align-items:center; gap:10px;
  background:var(--brass); color:var(--ink); padding:15px 22px; border-radius:40px; font-weight:600; font-size:14px;
  box-shadow:0 16px 34px rgba(184,134,59,.35); transition:transform .3s var(--ease), opacity .3s;
  opacity:0; transform:translateY(16px) scale(.94); pointer-events:none;
}
.float-cta.show{opacity:1; transform:translateY(0) scale(1); pointer-events:auto;}
.float-cta:hover{transform:translateY(-3px) scale(1.03);}
.float-cta svg{width:16px;height:16px;}
@media(max-width:900px){.float-cta{display:none;}}

.mobile-bar{
  display:none; position:fixed; bottom:0; left:0; right:0; z-index:200; background:var(--ink); border-top:1px solid var(--line-dark);
  padding:10px 14px; gap:10px;
}
.mobile-bar a{flex:1; display:flex; flex-direction:column; align-items:center; gap:4px; font-size:10.5px; color:var(--paper-2); padding:6px 0; font-weight:600;}
.mobile-bar a svg{width:19px;height:19px; stroke:var(--brass-light);}
.mobile-bar a.primary{background:var(--brass); border-radius:8px; color:var(--ink);}
.mobile-bar a.primary svg{stroke:var(--ink);}
@media(max-width:900px){.mobile-bar{display:flex;} body{padding-bottom:64px;}}

/* mobile nav drawer */
.nav-drawer{
  position:fixed; inset:0; background:var(--ink); z-index:300; transform:translateX(100%); transition:transform .4s var(--ease);
  padding:100px 32px 40px; overflow-y:auto;
}
.nav-drawer.open{transform:translateX(0);}
.nav-drawer ul{display:flex; flex-direction:column; gap:6px;}
.nav-drawer a{font-family:'Space Grotesk'; font-size:26px; padding:14px 0; border-bottom:1px solid var(--line-dark); color:var(--paper-2);}
.nav-drawer .drawer-sub{padding-left:16px; display:flex; flex-direction:column;}
.nav-drawer .drawer-sub a{font-size:15px; font-family:'Inter'; padding:10px 0; border-bottom:none; color:var(--slate-light);}
.close-drawer{position:absolute; top:28px; right:28px; width:44px;height:44px; color:var(--paper-2);}

/* ===================== RESPONSIVE ===================== */
@media(max-width:1080px){
  nav.main-nav{display:none;}
  .burger{display:flex; width:44px;height:44px; align-items:center; justify-content:center; color:var(--paper-2);}
  .hero-inner{grid-template-columns:1fr;}
  .blueprint-wrap{order:-1;}
  .services-grid{grid-template-columns:repeat(2,1fr);}
  .advantages{grid-template-columns:1fr;}
  .stats-row{grid-template-columns:repeat(2,1fr); row-gap:36px;}
  .footer-grid{grid-template-columns:1fr 1fr; row-gap:40px;}
  .gallery-strip{grid-template-columns:repeat(3,1fr);}
}
@media(max-width:640px){
  .wrap{padding:0 20px;}
  section{padding:74px 0;}
  .services-grid{grid-template-columns:1fr;}
  .option-grid,.option-grid.cols-3{grid-template-columns:1fr;}
  .contact-fields{grid-template-columns:1fr;}
  .quote-box{padding:28px 22px;}
  .process-item{grid-template-columns:1fr; gap:12px;}
  .footer-grid{grid-template-columns:1fr;}
  .cta-row{flex-direction:column; align-items:stretch;}
  .cta-row .btn{width:100%;}
  .gallery-strip{grid-template-columns:repeat(2,1fr);}
  .about-features{grid-template-columns:1fr;}
}
</style>
</head>
<body>

<!-- ===================== UTILITY BAR ===================== -->
<div class="utility-bar">
  <div class="wrap">
    <div class="left"><span class="pulse-dot"></span> Taking on new projects for Q4 2026 — 3 site-visit slots left this week</div>
    <div class="right">
      <a href="mailto:maxmarkbuilders@gmail.com">maxmarkbuilders@gmail.com</a>
      <a href="tel:+447397087600">+44 7397 087600</a>
    </div>
  </div>
</div>

<!-- ===================== HEADER ===================== -->
<header class="site-header" id="siteHeader">
  <div class="wrap">
    <a href="#home" class="logo" aria-label="MaxMark Builders Home">
      <img src="{{ asset('logo.png') }}" alt="MaxMark Builders Logo">
    </a>
    <nav class="main-nav">
      <ul>
        <li><a class="nav-link" href="#home">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li class="has-mega">
          <a class="nav-link" href="#services">Services</a>
          <div class="mega">
            <a href="#services"><svg viewBox="0 0 24 24"><path d="M3 10l9-7 9 7M5 9v11h14V9"/></svg>Loft Conversions</a>
            <a href="#services"><svg viewBox="0 0 24 24"><path d="M4 21V9l8-6 8 6v12M9 21v-6h6v6"/></svg>House Extensions</a>
            <a href="#services"><svg viewBox="0 0 24 24"><path d="M3 21h18M6 21V8l6-4 6 4v13"/></svg>Building & Construction</a>
            <a href="#services"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4zM4 12h16"/></svg>Interior Renovation</a>
            <a href="#services"><svg viewBox="0 0 24 24"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>Electrical Works</a>
            <a href="#services"><svg viewBox="0 0 24 24"><path d="M12 2s6 6 6 11a6 6 0 01-12 0c0-5 6-11 6-11z"/></svg>Plumbing & Heating</a>
            <a href="#services"><svg viewBox="0 0 24 24"><path d="M4 10h16v10H4zM8 10V6a4 4 0 018 0v4"/></svg>Kitchens & Bathrooms</a>
            <a href="#services"><svg viewBox="0 0 24 24"><path d="M3 20h18M5 20V10l7-6 7 6v10"/></svg>External Works</a>
          </div>
        </li>
        <li><a class="nav-link" href="#projects">Projects</a></li>
        <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link" href="#faq">FAQ</a></li>
        <li><a class="nav-link" href="/contact">Contact</a></li>
      </ul>
    </nav>
    <div class="header-actions">
      <a href="tel:+447397087600" class="icon-btn" aria-label="Call MaxMark Builders">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.32 1.85.55 2.81.68A2 2 0 0122 16.92z"/></svg>
      </a>
      <a href="#quote" class="btn btn-brass">Get Free Quote <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <button class="burger" id="burgerBtn" aria-label="Open menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
      </button>
    </div>
  </div>
</header>

<div class="nav-drawer" id="navDrawer">
  <button class="close-drawer" id="closeDrawer" aria-label="Close menu"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 6l12 12M18 6L6 18"/></svg></button>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#faq">FAQ</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="#quote" class="btn btn-brass" style="margin-top:20px;font-size:16px;">Get Free Quote</a></li>
  </ul>
</div>

<!-- ===================== HERO ===================== -->
<section class="hero" id="home">
  <div class="grid-bg"></div>
  <div class="glow"></div>
  <div class="wrap hero-inner">
    <div>
      <span class="eyebrow light reveal in">West London · Fully Insured · 5-Year Guarantee</span>
      <h1 class="reveal in" style="transition-delay:.08s">Your home,<br><span class="accent">rebuilt right</span> the first time.</h1>
      <p class="lede reveal in" style="transition-delay:.16s">We handle every part of construction, renovation and finishing work — from a single-room refresh to a full home transformation — with one accountable crew, transparent pricing, and craftsmanship that holds up.</p>
      <div class="cta-row reveal in" style="transition-delay:.24s">
        <a href="#quote" class="btn btn-brass">Get my free quote <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        <a href="tel:+447397087600" class="btn btn-outline">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.32 1.85.55 2.81.68A2 2 0 0122 16.92z"/></svg>
          07397 087600
        </a>
      </div>
      <div class="trust-row reveal in" style="transition-delay:.32s">
        <div class="trust-item"><span class="stars">★★★★★</span> <b>4.9</b> average rating*</div>
        <span class="divider-dot"></span>
        <div class="trust-item"><b>150+</b> projects completed*</div>
        <span class="divider-dot"></span>
        <div class="trust-item"><b>5-yr</b> workmanship guarantee</div>
      </div>
    </div>

    <div class="hero-bento reveal in" style="transition-delay:.2s">
      <div class="hero-badge">ON SITE NOW · W6</div>
      <div class="bento-img main">
        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=80" alt="Luxury modern interior renovation" loading="eager">
        <span class="tag"><span class="dot"></span>FULL RENOVATION · CHISWICK</span>
      </div>
      <div class="bento-img">
        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&w=600&q=80" alt="Modern kitchen fit-out" loading="eager">
        <span class="tag"><span class="dot"></span>KITCHEN · EALING</span>
      </div>
      <div class="bento-img">
        <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=600&q=80" alt="Loft conversion" loading="eager">
        <span class="tag"><span class="dot"></span>LOFT · HOUNSLOW</span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== MARQUEE ===================== -->
<div class="marquee-section">
  <div class="wrap" style="overflow:hidden;">
    <div class="marquee-track" id="marqueeTrack">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 12l2 2 4-4M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11z"/></svg>Fully Insured</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg>5-Year Guarantee</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l9 4.5v6c0 5-3.8 8.7-9 9.5-5.2-.8-9-4.5-9-9.5v-6z"/></svg>DBS-Checked Crew</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 9l9-6 9 6M4 9v11h16V9M9 20v-6h6v6"/></svg>Free Site Survey</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2 12h20M2 12l4-4M2 12l4 4M22 12l-4-4M22 12l-4 4"/></svg>Fixed-Price Quotes</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 12l2 2 4-4M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11z"/></svg>Fully Insured</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg>5-Year Guarantee</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l9 4.5v6c0 5-3.8 8.7-9 9.5-5.2-.8-9-4.5-9-9.5v-6z"/></svg>DBS-Checked Crew</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 9l9-6 9 6M4 9v11h16V9M9 20v-6h6v6"/></svg>Free Site Survey</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2 12h20M2 12l4-4M2 12l4 4M22 12l-4-4M22 12l-4 4"/></svg>Fixed-Price Quotes</span>
    </div>
  </div>
</div>

<!-- ===================== FEATURED PROJECTS (BENTO) ===================== -->
<section id="projects" style="background:var(--paper-2);">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Featured projects</span>
      <h2>Recent work across West London.</h2>
      <p>From full home renovations to single-room refreshes — a small selection of completed jobs. Drag the portfolio slider below for the full before-and-after breakdown.</p>
    </div>
    <div class="projects-bento reveal">
      <a href="#portfolio" class="bento-tile t1">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1100&q=80" alt="Rear extension project" loading="lazy">
        <span class="tile-corner">PROJECT 01</span>
        <div class="tile-overlay">
          <span class="tile-cat">House Extension</span>
          <h3>Full-width rear extension, Chiswick</h3>
          <div class="tile-meta"><span>14 wks</span><span class="dot"></span><span>£££</span><span class="dot"></span><span>2025</span></div>
        </div>
      </a>
      <a href="#portfolio" class="bento-tile t2">
        <img src="https://images.unsplash.com/photo-1600566753086-00f18fe6ba6a?auto=format&fit=crop&w=700&q=80" alt="Modern kitchen" loading="lazy">
        <span class="tile-corner">02</span>
        <div class="tile-overlay">
          <span class="tile-cat">Kitchen</span>
          <h3>Open-plan kitchen refit, Ealing</h3>
        </div>
      </a>
      <a href="#portfolio" class="bento-tile t3">
        <img src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?auto=format&fit=crop&w=500&q=80" alt="Bathroom renovation" loading="lazy">
        <span class="tile-corner">03</span>
        <div class="tile-overlay">
          <span class="tile-cat">Bathroom</span>
          <h3>En-suite, Hounslow</h3>
        </div>
      </a>
      <a href="#portfolio" class="bento-tile t4">
        <img src="https://images.unsplash.com/photo-1600210491892-03d54c0aaf87?auto=format&fit=crop&w=700&q=80" alt="Living space" loading="lazy">
        <span class="tile-corner">04</span>
        <div class="tile-overlay">
          <span class="tile-cat">Renovation</span>
          <h3>Living & dining refit, Richmond</h3>
        </div>
      </a>
      <a href="#portfolio" class="bento-tile t5">
        <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=500&q=80" alt="Bedroom" loading="lazy">
        <span class="tile-corner">05</span>
        <div class="tile-overlay">
          <span class="tile-cat">Loft</span>
          <h3>Master suite, Twickenham</h3>
        </div>
      </a>
      <a href="#portfolio" class="bento-tile t6">
        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1100&q=80" alt="Exterior renovation" loading="lazy">
        <span class="tile-corner">06</span>
        <div class="tile-overlay">
          <span class="tile-cat">External</span>
          <h3>Frontage & driveway rebuild, Isleworth</h3>
        </div>
      </a>
      <a href="#portfolio" class="bento-tile t7">
        <img src="https://images.unsplash.com/photo-1600607688969-a5bfcd646154?auto=format&fit=crop&w=1100&q=80" alt="Full home" loading="lazy">
        <span class="tile-corner">07</span>
        <div class="tile-overlay">
          <span class="tile-cat">Full Home</span>
          <h3>Complete renovation, Chiswick</h3>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ===================== SERVICES ===================== -->
<section id="services">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">What we do</span>
      <h2>Every trade your project needs, under one roof.</h2>
      <p>No subcontractor chasing, no gaps in accountability — one team designs, builds and finishes the job end to end.</p>
    </div>
  </div>
  <div class="wrap">
    <div class="services-grid reveal stagger">
      <div class="service-card" style="--i:0">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">01</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M3 10l9-7 9 7M5 9v11h14V9M9 20v-6h6v6"/></svg></div>
          <div class="svc-title">Loft Conversions</div>
          <div class="svc-desc">Turn wasted roof space into a bedroom, office or bathroom that adds real resale value.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </div>
      <div class="service-card" style="--i:1">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">02</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M4 21V9l8-6 8 6v12M9 21v-6h6v6"/></svg></div>
          <div class="svc-title">House Extensions</div>
          <div class="svc-desc">Single and double-storey extensions designed to extend your living space, not your stress.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </div>
      <div class="service-card" style="--i:2">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">03</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M3 21h18M6 21V8l6-4 6 4v13M10 21v-5h4v5"/></svg></div>
          <div class="svc-title">Building & Construction</div>
          <div class="svc-desc">Structural work, groundworks and new-builds handled by one accountable team from footings up.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </div>
      <div class="service-card" style="--i:3">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1600210491892-03d54c0aaf87?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">04</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4zM4 12h16M12 4v16"/></svg></div>
          <div class="svc-title">Interior Renovation</div>
          <div class="svc-desc">Full internal refits — plastering, flooring, joinery — finished to a standard that shows.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </div>
      <div class="service-card" style="--i:4">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">05</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg></div>
          <div class="svc-title">Kitchens & Bathrooms</div>
          <div class="svc-desc">Design-led kitchen and bathroom fit-outs, from layout planning to the final tile.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </div>
      <div class="service-card" style="--i:5">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">06</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M12 2s6 6.5 6 11.5a6 6 0 01-12 0C6 8.5 12 2 12 2z"/></svg></div>
          <div class="svc-title">Plumbing & Heating</div>
          <div class="svc-desc">Bathroom plumbing, boiler installs and heating systems that are built to just work.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </div>
      <div class="service-card" style="--i:6">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">07</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M4 10h16v10H4zM8 10V6a4 4 0 018 0v4M4 15h16"/></svg></div>
          <div class="svc-title">Electrical Works</div>
          <div class="svc-desc">Certified rewiring, consumer units and lighting design — signed off and fully compliant.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </div>
      <div class="service-card" style="--i:7">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">08</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M3 20h18M5 20V10l7-6 7 6v10M9 20v-5h6v5"/></svg></div>
          <div class="svc-title">External Works</div>
          <div class="svc-desc">Driveways, patios, roofing and render — the finishing touches that frame the whole job.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== ABOUT / ADVANTAGES (with image) ===================== -->
<section class="section-dark" id="about">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow light">Why homeowners choose us</span>
      <h2>Experience you can trust, pricing you can plan around.</h2>
      <p>Founded on hands-on experience across every area of construction — we're hardworking, reliable, and genuinely invested in getting each job right.</p>
    </div>
    <div class="advantages reveal stagger">
      <div class="adv-card" style="--i:0">
        <span class="num mono">01 / RANGE</span>
        <h3>Range of Options</h3>
        <p>Whatever your vision for a residential or commercial property, our team brings it to life with real craftsmanship and attention to detail.</p>
      </div>
      <div class="adv-card" style="--i:1">
        <span class="num mono">02 / SPEED</span>
        <h3>Agile Working Style</h3>
        <p>A practical, efficient approach on every project — high-quality results delivered on time, without compromising on craftsmanship.</p>
      </div>
      <div class="adv-card" style="--i:2">
        <span class="num mono">03 / VALUE</span>
        <h3>Fair, Fixed Pricing</h3>
        <p>Competitive, transparent pricing agreed up front — excellent value with zero surprise invoices at the end.</p>
      </div>
    </div>
    <div class="stats-row reveal stagger">
      <div class="stat-box" style="--i:0"><div class="stat-num" data-count="150" data-suffix="+">0</div><div class="stat-label">PROJECTS COMPLETED*</div></div>
      <div class="stat-box" style="--i:1"><div class="stat-num" data-count="3" data-suffix=" yrs">0</div><div class="stat-label">IN BUSINESS*</div></div>
      <div class="stat-box" style="--i:2"><div class="stat-num" data-count="98" data-suffix="%">0</div><div class="stat-label">CLIENT SATISFACTION*</div></div>
      <div class="stat-box" style="--i:3"><div class="stat-num" data-count="5" data-suffix="yr">0</div><div class="stat-label">WORKMANSHIP GUARANTEE</div></div>
    </div>
    <p style="font-size:11.5px;color:var(--slate-light);margin-top:24px;font-family:'JetBrains Mono',monospace;">*Placeholder figures — swap in your real project count, years trading and review data before launch.</p>

    <div class="about-strip reveal">
      <div class="about-img">
        <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?auto=format&fit=crop&w=900&q=80" alt="MaxMark team on site reviewing plans">
        <div class="img-tag"><span class="pulse-dot"></span> ON SITE TODAY · W6</div>
      </div>
      <div class="about-copy">
        <span class="eyebrow light">A TEAM, NOT A SUB-CONTRACTOR CHAIN</span>
        <h3>One accountable crew, on every project.</h3>
        <p>We never disappear after the contract's signed. The same project lead runs your job from first survey to final snagging — backed by our in-house team of qualified trades.</p>
        <p>That means no miscommunication, no chasing, and no surprise invoices. Just one number to call, one team to trust, and a build you'll be proud to show off.</p>
        <div class="about-features">
          <div class="about-feature">
            <div class="af-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 12l2 2 4-4M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11z"/></svg></div>
            <div><strong>Fully Insured</strong><span>£2m public liability cover</span></div>
          </div>
          <div class="about-feature">
            <div class="af-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div>
            <div><strong>5-Year Guarantee</strong><span>On every job we complete</span></div>
          </div>
          <div class="about-feature">
            <div class="af-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18M6 21V8l6-4 6 4v13"/></svg></div>
            <div><strong>Certified Trades</strong><span>NICEIC · Gas Safe · FMB</span></div>
          </div>
          <div class="about-feature">
            <div class="af-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 8v4l3 2M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <div><strong>Fixed-Price Quotes</strong><span>No surprise invoices, ever</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== PROCESS ===================== -->
<section id="process">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">How it works</span>
      <h2>From first call to final walkthrough.</h2>
      <p>The same four-step process on every job, so you always know what happens next.</p>
    </div>
    <div class="process-list">
      <div class="process-item reveal">
        <div class="process-line"></div>
        <div class="process-num mono">01</div>
        <div class="process-thumb"><img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=200&q=80" alt="" loading="lazy"></div>
        <div class="process-body">
          <h3>Free consultation</h3>
          <p>We visit your property, listen to what you actually want, and talk through what's realistic — no obligation, no pressure.</p>
        </div>
      </div>
      <div class="process-item reveal">
        <div class="process-line"></div>
        <div class="process-num mono">02</div>
        <div class="process-thumb"><img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=200&q=80" alt="" loading="lazy"></div>
        <div class="process-body">
          <h3>Design & fixed quote</h3>
          <p>You get a clear scope of works and a fixed-price quote before anything starts — the number you agree is the number you pay.</p>
        </div>
      </div>
      <div class="process-item reveal">
        <div class="process-line"></div>
        <div class="process-num mono">03</div>
        <div class="process-thumb"><img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=200&q=80" alt="" loading="lazy"></div>
        <div class="process-body">
          <h3>Build</h3>
          <p>One dedicated project lead, a fixed crew, and regular progress updates — you always know exactly where the job stands.</p>
        </div>
      </div>
      <div class="process-item reveal">
        <div class="process-line"></div>
        <div class="process-num mono">04</div>
        <div class="process-thumb"><img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=200&q=80" alt="" loading="lazy"></div>
        <div class="process-body">
          <h3>Handover & guarantee</h3>
          <p>A full sign-off walkthrough, snagging resolved before we leave, and every job backed by a 5-year workmanship guarantee.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== PORTFOLIO ===================== -->
<section id="portfolio" style="background:var(--paper-2);">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Recent transformations</span>
      <h2>Drag to see the difference.</h2>
      <p>Example project layouts — replace with real before/after photography from your completed jobs for maximum impact.</p>
    </div>
    <div class="portfolio-tabs reveal">
      <button class="ptab active" data-target="loft">Loft Conversion</button>
      <button class="ptab" data-target="kitchen">Kitchen Refit</button>
      <button class="ptab" data-target="ext">Rear Extension</button>
    </div>
    <div class="compare-wrap reveal" id="compareWrap">
      <div class="compare-panel before">
        <div class="img-fill before">
          <img id="beforeImg" src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1400&q=80" alt="Before" loading="lazy">
        </div>
        <span class="tag">BEFORE</span>
        <h4 id="beforeLabel">Unused loft space</h4>
      </div>
      <div class="compare-panel after" id="afterPanel">
        <div class="img-fill after">
          <img id="afterImg" src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=1400&q=80" alt="After" loading="lazy">
        </div>
        <span class="tag">AFTER — MAXMARK</span>
        <h4 id="afterLabel">Bedroom + en-suite with dormer</h4>
      </div>
      <div class="compare-handle" id="compareHandle">
        <div class="grip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 7l-5 5 5 5M16 7l5 5-5 5"/></svg></div>
      </div>
    </div>
    <div class="compare-caption">
      <span>Drag the handle to compare</span>
      <a href="#quote" class="btn btn-ghost-paper" style="padding:9px 18px;font-size:13px;">Get a quote for this <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== FULL-BLEED IMAGE BANNER ===================== -->
<section class="image-banner">
  <div class="bg-img"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1800&q=80" alt="" loading="lazy"></div>
  <div class="wrap">
    <span class="eyebrow light" style="justify-content:center;color:var(--brass-light);">DESIGN · BUILD · DELIVER</span>
    <h2>One team. Every trade. Zero hand-offs.</h2>
    <p>From the first site visit to the final tile — every step is handled by our in-house crew, with one project lead and one fixed price.</p>
    <div class="cta-row">
      <a href="#quote" class="btn btn-brass">Get my free quote <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <a href="tel:+447397087600" class="btn btn-outline">Call 07397 087600</a>
    </div>
  </div>
</section>

<!-- ===================== QUOTE CALCULATOR ===================== -->
<section class="quote-section" id="quote">
  <div class="grid-bg2"></div>
  <div class="wrap" style="position:relative;z-index:2;">
    <div class="section-head center reveal" style="margin-left:auto;margin-right:auto;">
      <span class="eyebrow light" style="justify-content:center;">Instant estimate</span>
      <h2 style="color:var(--paper-2);">Get a ballpark price in 60 seconds.</h2>
      <p style="color:var(--slate-light);">Answer three quick questions for an indicative range — then book a free site visit for an exact fixed quote.</p>
    </div>

    <div class="quote-box reveal">
      <div class="quote-progress">
        <span class="done" data-step="1"><i></i></span>
        <span data-step="2"><i></i></span>
        <span data-step="3"><i></i></span>
        <span data-step="4"><i></i></span>
      </div>

      <!-- STEP 1 -->
      <div class="quote-step active" data-step="1">
        <span class="step-label">STEP 1 OF 3</span>
        <h3>What are we building?</h3>
        <div class="option-grid" id="serviceOptions">
          <button class="opt-card" data-value="loft" data-label="Loft Conversion">
            <svg class="oi" viewBox="0 0 24 24"><path d="M3 10l9-7 9 7M5 9v11h14V9"/></svg>
            <div class="ot">Loft Conversion</div><div class="od">Dormer, hip-to-gable or mansard</div>
          </button>
          <button class="opt-card" data-value="extension" data-label="House Extension">
            <svg class="oi" viewBox="0 0 24 24"><path d="M4 21V9l8-6 8 6v12M9 21v-6h6v6"/></svg>
            <div class="ot">House Extension</div><div class="od">Single or double-storey</div>
          </button>
          <button class="opt-card" data-value="kitchenbath" data-label="Kitchen / Bathroom">
            <svg class="oi" viewBox="0 0 24 24"><path d="M4 10h16v10H4zM8 10V6a4 4 0 018 0v4"/></svg>
            <div class="ot">Kitchen / Bathroom</div><div class="od">Full fit-out or refresh</div>
          </button>
          <button class="opt-card" data-value="fullreno" data-label="Full Renovation">
            <svg class="oi" viewBox="0 0 24 24"><path d="M4 4h16v16H4zM4 12h16"/></svg>
            <div class="ot">Full Renovation</div><div class="od">Whole flat or house</div>
          </button>
        </div>
      </div>

      <!-- STEP 2 -->
      <div class="quote-step" data-step="2">
        <span class="step-label">STEP 2 OF 3</span>
        <h3>What size is the project?</h3>
        <div class="option-grid cols-3" id="sizeOptions">
          <button class="opt-card" data-value="small" data-label="Small">
            <svg class="oi" viewBox="0 0 24 24"><rect x="6" y="6" width="12" height="12" rx="1"/></svg>
            <div class="ot">Small</div><div class="od">Single room / dormer</div>
          </button>
          <button class="opt-card" data-value="medium" data-label="Medium">
            <svg class="oi" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="1"/></svg>
            <div class="ot">Medium</div><div class="od">Multi-room / L-shape</div>
          </button>
          <button class="opt-card" data-value="large" data-label="Large">
            <svg class="oi" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="1"/></svg>
            <div class="ot">Large</div><div class="od">Whole floor / house</div>
          </button>
        </div>
        <div class="quote-nav">
          <button class="btn btn-outline" onclick="prevStep()">← Back</button>
        </div>
      </div>

      <!-- STEP 3 -->
      <div class="quote-step" data-step="3">
        <span class="step-label">STEP 3 OF 3</span>
        <h3>When are you looking to start?</h3>
        <div class="option-grid cols-3" id="timeOptions">
          <button class="opt-card" data-value="asap" data-label="ASAP">
            <svg class="oi" viewBox="0 0 24 24"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>
            <div class="ot">ASAP</div><div class="od">Ready to go now</div>
          </button>
          <button class="opt-card" data-value="soon" data-label="1–3 months">
            <svg class="oi" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l4 2"/></svg>
            <div class="ot">1–3 months</div><div class="od">Getting quotes now</div>
          </button>
          <button class="opt-card" data-value="planning" data-label="Just planning">
            <svg class="oi" viewBox="0 0 24 24"><path d="M4 19V6a2 2 0 012-2h9l5 5v10a2 2 0 01-2 2H6a2 2 0 01-2-2z"/></svg>
            <div class="ot">Just planning</div><div class="od">Exploring options</div>
          </button>
        </div>
        <div class="quote-nav">
          <button class="btn btn-outline" onclick="prevStep()">← Back</button>
        </div>
      </div>

      <!-- STEP 4: RESULT -->
      <div class="quote-step" data-step="4">
        <div class="quote-result">
          <span class="step-label" style="justify-content:center;display:flex;">YOUR ESTIMATE</span>
          <h3 id="resultTitle">Loft Conversion — Small</h3>
          <div class="range" id="resultRange">£35,000 – £45,000</div>
          <p class="caveat">This is an indicative range based on typical West London jobs, not a fixed quote. Final pricing depends on your property, materials and specification — confirmed after a free site visit.</p>
          <div class="contact-fields">
            <div class="field"><label>FIRST NAME</label><input type="text" id="quoteFirstName" placeholder="Jane" required></div>
            <div class="field"><label>PHONE</label><input type="tel" id="quotePhone" placeholder="07xxx xxxxxx" required></div>
            <div class="field full"><label>EMAIL</label><input type="email" id="quoteEmail" placeholder="you@email.com" required></div>
            <div class="field full"><label>POSTCODE</label><input type="text" id="quotePostcode" placeholder="e.g. TW3 1AB"></div>
          </div>
          <div class="quote-nav" style="justify-content:space-between;">
            <button class="btn btn-outline" onclick="prevStep()">← Back</button>
            <button class="btn btn-signal" id="submitQuoteBtn" onclick="submitQuote()">Send me my exact quote <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M5 12h14M13 6l6 6-6 6"/></svg></button>
          </div>
        </div>
      </div>

      <!-- STEP 5: THANK YOU -->
      <div class="quote-step" data-step="5">
        <div class="thankyou">
          <div class="check"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
          <h3>Request received.</h3>
          <p class="caveat" style="margin-top:10px;">A member of the MaxMark team will call you within one working day to book your free site visit. In a hurry? Call <a href="tel:+447397087600" style="color:var(--brass-light);">07397 087600</a> directly.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== TESTIMONIALS ===================== -->
<section id="testimonials">
  <div class="wrap">
    <div class="section-head center reveal">
      <span class="eyebrow" style="justify-content:center;">Client feedback</span>
      <h2>What it's like working with us.</h2>
      <p>Example testimonials — replace with real client quotes and Google/Checkatrade review links once available.</p>
    </div>
    <div class="testi-wrap reveal">
      <div class="testi-arrows">
        <button class="icon-btn" style="color:var(--ink);border-color:var(--line);" onclick="testiMove(-1)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><path d="M15 18l-6-6 6-6"/></svg></button>
        <button class="icon-btn" style="color:var(--ink);border-color:var(--line);" onclick="testiMove(1)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><path d="M9 6l6 6-6 6"/></svg></button>
      </div>
      <div style="overflow:hidden;">
        <div class="testi-track" id="testiTrack">
          <div class="testi-card">
            <div class="stars">★★★★★</div>
            <p class="quote">"They turned our loft into an extra bedroom in ten weeks, on the exact price they quoted. No excuses, no delays — just showed up and got on with it."</p>
            <div class="testi-meta"><div class="testi-avatar"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=120&q=80" alt="Sarah H"></div><div><div class="testi-name">S. Hughes</div><div class="testi-role">Loft Conversion, Hounslow</div></div></div>
          </div>
          <div class="testi-card">
            <div class="stars">★★★★★</div>
            <p class="quote">"Communication was the difference. We always knew what stage the extension was at and never had to chase for an update."</p>
            <div class="testi-meta"><div class="testi-avatar"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&q=80" alt="Raj P"></div><div><div class="testi-name">R. Patel</div><div class="testi-role">Rear Extension, Ealing</div></div></div>
          </div>
          <div class="testi-card">
            <div class="stars">★★★★★</div>
            <p class="quote">"Fair pricing, tidy site every day, and the finish on the kitchen tiling is honestly better than I pictured. Already booked them for the bathroom."</p>
            <div class="testi-meta"><div class="testi-avatar"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=120&q=80" alt="Maya T"></div><div><div class="testi-name">M. Thompson</div><div class="testi-role">Kitchen Refit, Chiswick</div></div></div>
          </div>
        </div>
      </div>
      <div class="testi-dots" id="testiDots"></div>
    </div>
  </div>
</section>

<!-- ===================== GALLERY STRIP ===================== -->
<section style="background:var(--paper-2);">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">On the tools</span>
      <h2>A closer look at the work.</h2>
      <p>Snapshots from current and recent sites — replace with your own photography as jobs complete.</p>
    </div>
    <div class="gallery-strip reveal">
      <a href="#portfolio" class="gallery-tile">
        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=500&q=80" alt="Construction site" loading="lazy">
        <span class="gallery-caption">Site prep, W6</span>
      </a>
      <a href="#portfolio" class="gallery-tile">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=500&q=80" alt="Tools and materials" loading="lazy">
        <span class="gallery-caption">On the tools</span>
      </a>
      <a href="#portfolio" class="gallery-tile">
        <img src="https://images.unsplash.com/photo-1572883454114-1cf0031ede2a?auto=format&fit=crop&w=500&q=80" alt="Workers reviewing plans" loading="lazy">
        <span class="gallery-caption">Planning the build</span>
      </a>
      <a href="#portfolio" class="gallery-tile">
        <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=500&q=80" alt="Construction" loading="lazy">
        <span class="gallery-caption">Structural work</span>
      </a>
      <a href="#portfolio" class="gallery-tile">
        <img src="https://images.unsplash.com/photo-1556909114-44e3e70034e2?auto=format&fit=crop&w=500&q=80" alt="Kitchen fit-out" loading="lazy">
        <span class="gallery-caption">Kitchen fit-out</span>
      </a>
      <a href="#portfolio" class="gallery-tile">
        <img src="https://images.unsplash.com/photo-1620626011761-996317b8d101?auto=format&fit=crop&w=500&q=80" alt="Bathroom" loading="lazy">
        <span class="gallery-caption">Bathroom tiling</span>
      </a>
      <a href="#portfolio" class="gallery-tile">
        <img src="https://images.unsplash.com/photo-1600210492493-0946911123ea?auto=format&fit=crop&w=500&q=80" alt="Interior finish" loading="lazy">
        <span class="gallery-caption">Snagging & finish</span>
      </a>
      <a href="#portfolio" class="gallery-tile">
        <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=500&q=80" alt="Completed home" loading="lazy">
        <span class="gallery-caption">Handover day</span>
      </a>
    </div>
  </div>
</section>

<!-- ===================== FAQ ===================== -->
<section id="faq">
  <div class="wrap" style="max-width:820px;">
    <div class="section-head reveal">
      <span class="eyebrow">Common questions</span>
      <h2>Before you get in touch.</h2>
    </div>
    <div class="reveal">
      <div class="faq-item open">
        <button class="faq-q">Do I need planning permission for a loft conversion?<span class="plus"></span></button>
        <div class="faq-a"><p>Most loft conversions fall under Permitted Development and don't need full planning permission, but it depends on your property and any prior extensions. We check this for you during the free consultation, before any design work begins.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">How long does a typical project take?<span class="plus"></span></button>
        <div class="faq-a"><p>A single dormer loft conversion typically runs 8–12 weeks. Extensions and full renovations vary more with scope — you'll get a realistic timeline as part of your fixed quote, before you commit to anything.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Are you insured and fully certified?<span class="plus"></span></button>
        <div class="faq-a"><p>Yes — we carry full public liability insurance and all electrical and gas work is completed by certified trades and signed off to building regulations.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Is the site visit and quote really free?<span class="plus"></span></button>
        <div class="faq-a"><p>Yes, no obligation. We'll visit, measure up, talk through your options and send a written fixed-price quote — you decide what happens next.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q">How does payment work?<span class="plus"></span></button>
        <div class="faq-a"><p>We agree a staged payment schedule tied to project milestones before work starts, so you're always paying for work that's actually been completed.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FINAL CTA ===================== -->
<section class="final-cta" id="contact">
  <div class="wrap final-cta-inner">
    <span class="eyebrow light reveal" style="justify-content:center;">Ready when you are</span>
    <h2 class="reveal">Let's put a fixed price on your project.</h2>
    <p class="reveal">Book a free, no-obligation site visit — most homeowners get a written quote within 48 hours.</p>
    <div class="cta-row reveal">
      <a href="#quote" class="btn btn-brass">Start my free quote <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <a href="tel:+447397087600" class="btn btn-outline">Call 07397 087600</a>
    </div>
    <div class="slots-badge reveal"><span class="pulse-dot" style="background:#e4572e;"></span> Only 3 free site-visit slots left this week</div>
  </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer>
  <div class="wrap">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="#home" class="footer-logo" aria-label="MaxMark Builders Home">
          <img src="{{ asset('logo.png') }}" alt="MaxMark Builders Logo">
        </a>
        <p>Professional building & renovation services across West London — from single-room refreshes to full home transformations.</p>
        <div class="social-row">
          <a href="https://www.instagram.com/maxmarkbuilders" aria-label="Instagram" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
          <a href="tel:+447397087600" aria-label="Call"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 011.12 4.18 2 2 0 013.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.3 12.3 0 002.81.68A2 2 0 0122 16.92z"/></svg></a>
          <a href="mailto:maxmarkbuilders@gmail.com" aria-label="Email"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/></svg></a>
        </div>
      </div>
      <div>
        <h4>NAVIGATE</h4>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About us</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4>SERVICES</h4>
        <ul>
          <li><a href="#services">Loft Conversions</a></li>
          <li><a href="#services">House Extensions</a></li>
          <li><a href="#services">Kitchens & Bathrooms</a></li>
          <li><a href="#services">Electrical Works</a></li>
          <li><a href="#services">Plumbing & Heating</a></li>
        </ul>
      </div>
      <div>
        <h4>CONTACT</h4>
        <ul class="foot-contact">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 011.12 4.18 2 2 0 013.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.3 12.3 0 002.81.68A2 2 0 0122 16.92z"/></svg> +44 7397 087600</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/></svg> maxmarkbuilders@gmail.com</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> Serving West London & surrounding areas</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© MaxMark Builders 2026. All rights reserved.</span>
      <div style="display:flex;gap:20px;">
        <a href="#">Privacy Policy</a>
        <a href="#">Cookie Settings</a>
      </div>
    </div>
  </div>
</footer>

<!-- ===================== FLOATING ELEMENTS ===================== -->
<a href="#quote" class="float-cta" id="floatCta">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>
  Get Free Quote
</a>

<div class="mobile-bar">
  <a href="tel:+447397087600"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 011.12 4.18 2 2 0 013.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.3 12.3 0 002.81.68A2 2 0 0122 16.92z"/></svg>Call</a>
  <a href="https://wa.me/447397087600" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>WhatsApp</a>
  <a href="#quote" class="primary"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>Free Quote</a>
</div>

<script>
/* ---------- Header shrink on scroll ---------- */
const header = document.getElementById('siteHeader');
const floatCta = document.getElementById('floatCta');
window.addEventListener('scroll', () => {
  header.classList.toggle('shrink', window.scrollY > 40);
  floatCta.classList.toggle('show', window.scrollY > 700);
}, { passive:true });

/* ---------- Mobile nav drawer ---------- */
const burgerBtn = document.getElementById('burgerBtn');
const navDrawer = document.getElementById('navDrawer');
const closeDrawer = document.getElementById('closeDrawer');
burgerBtn?.addEventListener('click', () => navDrawer.classList.add('open'));
closeDrawer?.addEventListener('click', () => navDrawer.classList.remove('open'));
navDrawer.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navDrawer.classList.remove('open')));

/* ---------- Scroll reveal ---------- */
const revealEls = document.querySelectorAll('.reveal');
const io = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
}, { threshold:0.12 });
revealEls.forEach(el => io.observe(el));

/* stagger index for children */
document.querySelectorAll('.stagger').forEach(parent => {
  Array.from(parent.children).forEach((child,i) => child.style.setProperty('--i', i));
});

/* process line reveal */
document.querySelectorAll('.process-item').forEach(el => {
  const obs = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
  }, { threshold:0.4 });
  obs.observe(el);
});

/* ---------- Animated counters ---------- */
const counters = document.querySelectorAll('.stat-num');
const counterIO = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    const el = entry.target;
    const target = parseInt(el.dataset.count, 10);
    const suffix = el.dataset.suffix || '';
    let current = 0;
    const duration = 1400;
    const start = performance.now();
    function tick(now) {
      const p = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - p, 3);
      current = Math.round(eased * target);
      el.textContent = current + suffix;
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
    counterIO.unobserve(el);
  });
}, { threshold:0.6 });
counters.forEach(c => counterIO.observe(c));

/* ---------- Before / After slider ---------- */
const compareWrap = document.getElementById('compareWrap');
const afterPanel = document.getElementById('afterPanel');
const handle = document.getElementById('compareHandle');
let dragging = false;
function setSlide(x) {
  const rect = compareWrap.getBoundingClientRect();
  let pct = ((x - rect.left) / rect.width) * 100;
  pct = Math.max(4, Math.min(96, pct));
  afterPanel.style.clipPath = `inset(0 0 0 ${pct}%)`;
  handle.style.left = pct + '%';
}
handle.addEventListener('pointerdown', (e) => { dragging = true; handle.setPointerCapture(e.pointerId); });
window.addEventListener('pointerup', () => dragging = false);
window.addEventListener('pointermove', (e) => { if (dragging) setSlide(e.clientX); });
compareWrap.addEventListener('click', (e) => setSlide(e.clientX));

const portfolioData = {
  loft: { before:'Unused loft space', after:'Bedroom + en-suite with dormer',
          beforeImg:'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1400&q=80',
          afterImg:'https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=1400&q=80' },
  kitchen: { before:'Dated, closed-off kitchen', after:'Open-plan kitchen-diner',
          beforeImg:'https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=1400&q=80',
          afterImg:'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&w=1400&q=80' },
  ext: { before:'Cramped rear reception', after:'Full-width kitchen extension',
          beforeImg:'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1400&q=80',
          afterImg:'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1400&q=80' }
};
document.querySelectorAll('.ptab').forEach(tab => {
  tab.addEventListener('click', () => {
    document.querySelectorAll('.ptab').forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    const d = portfolioData[tab.dataset.target];
    document.getElementById('beforeLabel').textContent = d.before;
    document.getElementById('afterLabel').textContent = d.after;
    document.getElementById('beforeImg').src = d.beforeImg;
    document.getElementById('afterImg').src = d.afterImg;
    setSlide(compareWrap.getBoundingClientRect().left + compareWrap.getBoundingClientRect().width/2);
  });
});

/* ---------- Quote calculator ---------- */
let quoteState = { service:null, serviceLabel:'', size:null, sizeLabel:'', time:null };
let currentStep = 1;

const priceTable = {
  loft: { small:[35000,45000], medium:[45000,65000], large:[65000,90000] },
  extension: { small:[30000,45000], medium:[45000,70000], large:[70000,120000] },
  kitchenbath: { small:[8000,15000], medium:[15000,30000], large:[30000,55000] },
  fullreno: { small:[15000,30000], medium:[30000,60000], large:[60000,150000] }
};

function goToStep(step) {
  document.querySelectorAll('.quote-step').forEach(s => s.classList.remove('active'));
  document.querySelector(`.quote-step[data-step="${step}"]`).classList.add('active');
  document.querySelectorAll('.quote-progress span').forEach(s => {
    s.classList.toggle('done', parseInt(s.dataset.step) <= Math.min(step,4));
  });
  currentStep = step;
}
function prevStep() { goToStep(Math.max(1, currentStep - 1)); }

document.getElementById('serviceOptions').addEventListener('click', (e) => {
  const card = e.target.closest('.opt-card'); if (!card) return;
  document.querySelectorAll('#serviceOptions .opt-card').forEach(c => c.classList.remove('selected'));
  card.classList.add('selected');
  quoteState.service = card.dataset.value;
  quoteState.serviceLabel = card.dataset.label;
  setTimeout(() => goToStep(2), 280);
});
document.getElementById('sizeOptions').addEventListener('click', (e) => {
  const card = e.target.closest('.opt-card'); if (!card) return;
  document.querySelectorAll('#sizeOptions .opt-card').forEach(c => c.classList.remove('selected'));
  card.classList.add('selected');
  quoteState.size = card.dataset.value;
  quoteState.sizeLabel = card.dataset.label;
  setTimeout(() => goToStep(3), 280);
});
document.getElementById('timeOptions').addEventListener('click', (e) => {
  const card = e.target.closest('.opt-card'); if (!card) return;
  document.querySelectorAll('#timeOptions .opt-card').forEach(c => c.classList.remove('selected'));
  card.classList.add('selected');
  quoteState.time = card.dataset.value;
  setTimeout(() => {
    const range = priceTable[quoteState.service][quoteState.size];
    document.getElementById('resultTitle').textContent = `${quoteState.serviceLabel} — ${quoteState.sizeLabel}`;
    document.getElementById('resultRange').textContent =
      `£${range[0].toLocaleString()} – £${range[1].toLocaleString()}`;
    goToStep(4);
  }, 280);
});
function submitQuote() {
  const firstNameInp = document.getElementById('quoteFirstName');
  const phoneInp = document.getElementById('quotePhone');
  const emailInp = document.getElementById('quoteEmail');
  const postcodeInp = document.getElementById('quotePostcode');
  const submitBtn = document.getElementById('submitQuoteBtn');

  let valid = true;
  [firstNameInp, phoneInp, emailInp].forEach(inp => {
    if (!inp || !inp.value.trim()) {
      if (inp) inp.style.borderColor = '#e4572e';
      valid = false;
    } else {
      if (inp) inp.style.borderColor = '';
    }
  });

  if (!valid) return;

  if (submitBtn) {
    submitBtn.disabled = true;
    submitBtn.style.opacity = '0.7';
    submitBtn.innerText = 'Sending...';
  }

  const estimateText = document.getElementById('resultRange')?.textContent || '';
  const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

  fetch('/quote', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-TOKEN': csrfToken
    },
    body: JSON.stringify({
      first_name: firstNameInp.value.trim(),
      phone: phoneInp.value.trim(),
      email: emailInp.value.trim(),
      postcode: postcodeInp ? postcodeInp.value.trim() : '',
      service: quoteState.serviceLabel || quoteState.service || 'Building Service',
      size: quoteState.sizeLabel || quoteState.size || '',
      time: quoteState.time || '',
      estimate: estimateText
    })
  })
  .then(res => res.json())
  .then(data => {
    goToStep(5);
  })
  .catch(err => {
    console.error('Quote submission error:', err);
    goToStep(5);
  })
  .finally(() => {
    if (submitBtn) {
      submitBtn.disabled = false;
      submitBtn.style.opacity = '1';
    }
  });
}

/* ---------- Testimonials carousel ---------- */
const testiTrack = document.getElementById('testiTrack');
const testiCards = document.querySelectorAll('.testi-card');
const testiDotsWrap = document.getElementById('testiDots');
let testiIndex = 0;
testiCards.forEach((_, i) => {
  const b = document.createElement('button');
  if (i === 0) b.classList.add('active');
  b.addEventListener('click', () => { testiIndex = i; updateTesti(); });
  testiDotsWrap.appendChild(b);
});
function updateTesti() {
  testiTrack.style.transform = `translateX(-${testiIndex * 100}%)`;
  testiDotsWrap.querySelectorAll('button').forEach((b,i) => b.classList.toggle('active', i === testiIndex));
}
function testiMove(dir) {
  testiIndex = (testiIndex + dir + testiCards.length) % testiCards.length;
  updateTesti();
}
setInterval(() => testiMove(1), 6000);

/* ---------- FAQ accordion ---------- */
document.querySelectorAll('.faq-item').forEach(item => {
  const q = item.querySelector('.faq-q');
  const a = item.querySelector('.faq-a');
  if (item.classList.contains('open')) a.style.maxHeight = a.scrollHeight + 'px';
  q.addEventListener('click', () => {
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => { i.classList.remove('open'); i.querySelector('.faq-a').style.maxHeight = 0; });
    if (!isOpen) { item.classList.add('open'); a.style.maxHeight = a.scrollHeight + 'px'; }
  });
});
</script>
</body>
</html>
