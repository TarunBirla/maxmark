@extends('layouts.app')

@section('title', 'MaxMark Builders — Building & Renovation, Done Right')
@section('meta_description', 'Loft conversions, extensions, full renovations across West London. Free quote in 60 seconds, fully insured, 5-year guarantee.')

@push('styles')
<style>
/* ===================== REVEAL ===================== */
.reveal{opacity:0;transform:translateY(28px);transition:opacity .8s var(--ease), transform .8s var(--ease);}
.reveal.in{opacity:1;transform:translateY(0);}
.stagger > *{transition-delay:calc(var(--i,0) * 90ms);}

/* ===================== HERO ===================== */
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
.hero h1{font-size:clamp(28px,4.6vw,64px); margin:22px 0 20px; max-width:620px;}
.hero h1 .accent{color:var(--brass-light); font-style:italic; font-weight:500;}
.hero p.lede{font-size:17.5px; color:var(--slate-light); max-width:500px; margin-bottom:34px;}
.cta-row{display:flex; gap:14px; flex-wrap:wrap; margin-bottom:38px;}
.trust-row{display:flex; align-items:center; gap:26px; flex-wrap:wrap;}
.trust-item{display:flex; align-items:center; gap:9px; font-size:13.5px; color:var(--slate-light);}
.stars{color:var(--brass-light); letter-spacing:2px; font-size:14px;}
.trust-item b{color:var(--paper-2); font-family:'JetBrains Mono',monospace; font-weight:600;}
.divider-dot{width:4px;height:4px;border-radius:50%;background:var(--line-dark); flex-shrink:0;}

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
  position:absolute; left:14px; bottom:14px; background:rgba(18,22,28,.85);
  backdrop-filter:blur(8px); color:var(--paper-2); font-family:'JetBrains Mono',monospace;
  font-size:11px; letter-spacing:.12em; padding:7px 12px; max-width:calc(100% - 28px);
}
.bento-img .tag .dot{display:inline-block;width:6px;height:6px;border-radius:50%;background:var(--brass-light);margin-right:6px;vertical-align:middle;}
.hero-badge{
  position:absolute; top:18px; right:18px; background:var(--brass); color:var(--ink);
  font-family:'JetBrains Mono',monospace; font-size:11px; font-weight:600; letter-spacing:.1em;
  padding:8px 14px; z-index:3;
}

/* marquee */
.marquee-section{background:var(--paper-2); border-bottom:1px solid var(--line); border-top:1px solid var(--line); padding:20px 0; overflow:hidden; width:100%; max-width:100vw;}
.marquee-track{display:flex; gap:56px; width:max-content; animation:scroll 26s linear infinite;}
.marquee-track span{display:flex; align-items:center; gap:10px; font-family:'JetBrains Mono',monospace; font-size:13px; color:var(--slate); white-space:nowrap;}
.marquee-track svg{width:15px;height:15px;stroke:var(--brass); flex-shrink:0;}
@keyframes scroll{from{transform:translateX(0);}to{transform:translateX(-50%);}}

/* ===================== SECTION GENERIC ===================== */
section{padding:80px 0;}
.section-head{max-width:680px; margin-bottom:56px;}
.section-head h2{font-size:clamp(26px,3.4vw,44px); margin:16px 0 14px; color:var(--ink);}
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
  transition:transform .4s var(--ease); display:block;
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

/* ===================== SERVICES ===================== */
.services-grid{display:grid; grid-template-columns:repeat(4,1fr); gap:1px; background:var(--line); border:1px solid var(--line);}
.service-card{
  background:var(--paper-2); padding:32px 26px; position:relative; overflow:hidden;
  transition:background .35s var(--ease); display:block; text-decoration:none; color:inherit;
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
  margin-bottom:22px; transition:border-color .3s, background .3s; background:rgba(255,255,255,.7); flex-shrink:0;
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
.stat-box .stat-num{font-family:'Space Grotesk',sans-serif; font-size:clamp(30px,4vw,56px); font-weight:700; color:var(--brass-light); line-height:1;}
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
  display:flex; align-items:center; gap:10px; max-width:calc(100% - 40px);
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
  position:relative; width:80px; height:80px; overflow:hidden; border:1px solid var(--line); flex-shrink:0;
}
.process-thumb img{width:100%;height:100%;object-fit:cover; filter:saturate(.85);}
.process-body h3{font-size:22px; margin-bottom:10px; color:var(--ink);}
.process-body p{color:var(--slate); max-width:560px; font-size:15px;}
.process-item .process-line{
  position:absolute; left:0; top:0; height:0; width:2px; background:var(--brass); transition:height 1s var(--ease);
}
.process-item.in .process-line{height:100%;}

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
.compare-caption{margin-top:16px; display:flex; justify-content:space-between; align-items:center; font-size:13.5px; color:var(--slate); flex-wrap:wrap; gap:10px;}

/* ===================== FULL-BLEED IMAGE BANNER ===================== */
.image-banner{
  position:relative; padding:140px 0; overflow:hidden; color:#fff; text-align:center;
}
.image-banner .bg-img{position:absolute; inset:0; z-index:0;}
.image-banner .bg-img img{width:100%;height:100%;object-fit:cover;}
.image-banner .bg-img::after{content:''; position:absolute; inset:0; background:linear-gradient(120deg, rgba(18,22,28,.88) 0%, rgba(18,22,28,.6) 100%);}
.image-banner .wrap{position:relative; z-index:1; max-width:820px;}
.image-banner h2{color:#fff; font-size:clamp(26px,3.6vw,46px); margin:16px 0 18px;}
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
  border:1px solid var(--line-dark); padding:20px 18px; text-align:left; transition:all .25s var(--ease); background:transparent; width:100%;
}
.opt-card:hover{border-color:var(--slate-light);}
.opt-card.selected{border-color:var(--brass); background:rgba(184,134,59,.1);}
.opt-card .oi{width:30px;height:30px; margin-bottom:12px; stroke:var(--brass-light); fill:none; stroke-width:1.5;}
.opt-card .ot{font-weight:600; font-size:15px; margin-bottom:4px; color:var(--paper-2);}
.opt-card .od{font-size:12.5px; color:var(--slate-light);}
.quote-nav{display:flex; justify-content:space-between; margin-top:34px; gap:12px; flex-wrap:wrap;}
.quote-result{text-align:center; padding:20px 0;}
.quote-result .range{font-family:'Space Grotesk',sans-serif; font-size:clamp(28px,4vw,46px); color:var(--brass-light); margin:14px 0 10px;}
.quote-result .caveat{font-size:12.5px; color:var(--slate-light); max-width:440px; margin:0 auto 28px;}
.contact-fields{display:grid; grid-template-columns:1fr 1fr; gap:14px; text-align:left;}
.contact-fields label{grid-column:1/-1; margin-top:6px;}
.field{display:flex; flex-direction:column; gap:6px;}
.field label{font-size:12px; font-family:'JetBrains Mono',monospace; color:var(--slate-light); letter-spacing:.06em;}
.field input{
  background:var(--ink); border:1px solid var(--line-dark); color:var(--paper-2); padding:13px 14px; font-size:14.5px; border-radius:1px;
  transition:border-color .2s; width:100%;
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
.testi-card p.quote{font-family:'Space Grotesk',sans-serif; font-size:clamp(17px,2.4vw,27px); font-weight:500; line-height:1.5; color:var(--ink); margin-bottom:26px;}
.testi-meta{display:flex; align-items:center; justify-content:center; gap:12px;}
.testi-avatar{width:54px;height:54px;border-radius:50%;background:var(--ink);color:var(--brass-light);display:flex;align-items:center;justify-content:center;font-family:'Space Grotesk';font-weight:700;font-size:15px;overflow:hidden; border:2px solid var(--paper-2); box-shadow:0 4px 14px rgba(0,0,0,.12); flex-shrink:0;}
.testi-avatar img{width:100%;height:100%;object-fit:cover;}
.testi-name{font-weight:600; font-size:14.5px;}
.testi-role{font-size:13px; color:var(--slate);}
.testi-dots{display:flex; justify-content:center; gap:8px; margin-top:34px;}
.testi-dots button{width:8px;height:8px;border-radius:50%;background:var(--line);transition:all .3s;}
.testi-dots button.active{background:var(--brass); width:22px; border-radius:6px;}
.testi-arrows{position:absolute; top:40%; left:-56px; right:-56px; display:flex; justify-content:space-between;}

/* ===================== GALLERY ===================== */
.gallery-strip{
  display:grid; grid-template-columns:repeat(4, 1fr); gap:10px; margin-top:30px;
}
.gallery-tile{
  position:relative; aspect-ratio:1/1; overflow:hidden; background:var(--ink-2); cursor:pointer; display:block;
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
  width:100%; display:flex; justify-content:space-between; align-items:center; padding:24px 0;
  font-size:16.5px; font-weight:600; text-align:left; color:var(--ink);
}
.faq-q .plus{width:22px;height:22px;position:relative; flex-shrink:0; margin-left:16px;}
.faq-q .plus::before,.faq-q .plus::after{content:'';position:absolute;background:var(--brass);top:50%;left:50%;transform:translate(-50%,-50%);}
.faq-q .plus::before{width:14px;height:1.5px;}
.faq-q .plus::after{width:1.5px;height:14px;transition:transform .3s var(--ease);}
.faq-item.open .plus::after{transform:translate(-50%,-50%) rotate(90deg) scaleY(0);}
.faq-a{max-height:0; overflow:hidden; transition:max-height .4s var(--ease);}
.faq-a p{padding-bottom:24px; color:var(--slate); font-size:14.5px; max-width:640px; line-height:1.7;}

/* ===================== FINAL CTA ===================== */
.final-cta{
  background:linear-gradient(120deg, var(--ink) 0%, #241c12 100%); color:var(--paper-2); position:relative; overflow:hidden;
}
.final-cta::before{
  content:''; position:absolute; width:900px; height:900px; border-radius:50%;
  background:radial-gradient(circle, rgba(228,87,46,.12), transparent 65%); top:-400px; left:-200px;
}
.final-cta-inner{position:relative; z-index:2; text-align:center; max-width:680px; margin:0 auto;}
.final-cta h2{font-size:clamp(26px,4vw,48px); margin:18px 0 18px;}
.final-cta p{color:var(--slate-light); margin-bottom:36px; font-size:16.5px;}
.final-cta .cta-row{justify-content:center;}
.slots-badge{
  display:inline-flex; align-items:center; gap:10px; background:rgba(228,87,46,.12); border:1px solid rgba(228,87,46,.35);
  padding:9px 18px; border-radius:30px; font-family:'JetBrains Mono',monospace; font-size:12.5px; color:#f0a68a; margin-top:30px;
}

/* ===================== PAGE FLOATING ELEMENTS ===================== */
.float-cta{
  position:fixed; bottom:26px; right:26px; z-index:200; display:flex; align-items:center; gap:10px;
  background:var(--brass); color:var(--ink); padding:15px 22px; border-radius:40px; font-weight:600; font-size:14px;
  box-shadow:0 16px 34px rgba(184,134,59,.35); transition:transform .3s var(--ease), opacity .3s;
  opacity:0; transform:translateY(16px) scale(.94); pointer-events:none;
}
.float-cta.show{opacity:1; transform:translateY(0) scale(1); pointer-events:auto;}
.float-cta:hover{transform:translateY(-3px) scale(1.03);}
.float-cta svg{width:16px;height:16px;}

.mobile-bar{
  display:none; position:fixed; bottom:0; left:0; right:0; z-index:200; background:var(--ink); border-top:1px solid var(--line-dark);
  padding:8px 12px; gap:8px;
}
.mobile-bar a{flex:1; display:flex; flex-direction:column; align-items:center; gap:3px; font-size:10.5px; color:var(--paper-2); padding:6px 0; font-weight:600; text-align:center;}
.mobile-bar a svg{width:19px;height:19px; stroke:var(--brass-light);}
.mobile-bar a.primary{background:var(--brass); border-radius:6px; color:var(--ink); padding:6px 8px;}
.mobile-bar a.primary svg{stroke:var(--ink);}

/* ===================== RESPONSIVE BREAKPOINTS ===================== */
@media(max-width:1080px){
  .hero-inner{grid-template-columns:1fr;}
  .services-grid{grid-template-columns:repeat(2,1fr);}
  .advantages{grid-template-columns:1fr;}
  .stats-row{grid-template-columns:repeat(2,1fr); row-gap:32px;}
  .gallery-strip{grid-template-columns:repeat(3,1fr);}
  .testi-arrows{display:none;}
}

@media(max-width:900px){
  .float-cta{display:none !important;}
  .mobile-bar{display:flex;}
  body{padding-bottom:58px;}
  .projects-bento{grid-template-columns:repeat(2,1fr); grid-auto-rows:200px;}
  .bento-tile.t1{grid-column:span 2; grid-row:span 2;}
  .bento-tile.t2,.bento-tile.t3,.bento-tile.t4,.bento-tile.t5{grid-column:span 1;}
  .bento-tile.t6,.bento-tile.t7{grid-column:span 2;}
  .about-strip{grid-template-columns:1fr; gap:32px;}
}

@media(max-width:640px){
  section{padding:64px 0;}
  .services-grid{grid-template-columns:1fr;}
  .option-grid,.option-grid.cols-3{grid-template-columns:1fr;}
  .contact-fields{grid-template-columns:1fr;}
  .quote-box{padding:24px 16px;}
  .process-item{grid-template-columns:1fr; gap:12px;}
  .process-thumb{width:100%; height:120px;}
  .cta-row{flex-direction:column; align-items:stretch;}
  .cta-row .btn{width:100%;}
  .gallery-strip{grid-template-columns:repeat(2,1fr);}
  .about-features{grid-template-columns:1fr;}
  .compare-wrap{aspect-ratio:4/3;}
  .image-banner{padding:80px 0;}
}

@media(max-width:480px){
  .projects-bento{grid-template-columns:1fr; grid-auto-rows:190px;}
  .bento-tile.t1,.bento-tile.t2,.bento-tile.t3,.bento-tile.t4,.bento-tile.t5,.bento-tile.t6,.bento-tile.t7{grid-column:span 1; grid-row:span 1;}
  .hero-bento{display:flex; flex-direction:column; height:auto; gap:10px;}
  .bento-img{height:180px;}
  .bento-img.main{height:240px;}
  .trust-row{gap:10px; justify-content:flex-start;}
  .divider-dot{display:none;}
  .stats-row{grid-template-columns:repeat(2,1fr); gap:20px 10px;}
  .stat-box .stat-num{font-size:32px;}
  .gallery-strip{grid-template-columns:1fr;}
}

/* ===================== VIDEO SHOWCASE SECTION ===================== */
.video-showcase-section {
  padding: 88px 0;
  background: var(--paper-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  position: relative;
  overflow: hidden;
}
.video-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 56px;
  align-items: center;
}
.video-content h2 {
  font-size: clamp(26px, 3.4vw, 42px);
  margin: 16px 0 18px;
  color: var(--ink);
  line-height: 1.25;
}
.video-content p {
  color: var(--slate);
  font-size: 16.5px;
  line-height: 1.7;
  margin-bottom: 28px;
}
.video-preview-card {
  position: relative;
  aspect-ratio: 16/9;
  background: var(--ink) url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
  border: 1px solid var(--line-dark);
  border-radius: 4px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0,0,0,0.18);
  cursor: pointer;
}
.video-preview-card video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.85;
  transition: transform .6s var(--ease), opacity .4s var(--ease);
}
.video-preview-card:hover video {
  transform: scale(1.05);
  opacity: 0.95;
}
.video-overlay-gradient {
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at center, rgba(7, 13, 30, 0.2) 0%, rgba(7, 13, 30, 0.75) 100%);
  pointer-events: none;
}
.play-btn-large {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: var(--brass);
  color: var(--ink);
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all .35s var(--ease);
  box-shadow: 0 10px 25px rgba(184, 134, 59, 0.4);
  z-index: 3;
}
.play-btn-large svg {
  width: 32px;
  height: 32px;
  margin-left: 4px;
  fill: var(--ink);
}
.play-btn-large .play-pulse {
  position: absolute;
  inset: -8px;
  border-radius: 50%;
  border: 2px solid var(--brass-light);
  animation: pulse-ring 2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
}
@keyframes pulse-ring {
  0% { transform: scale(0.85); opacity: 0.8; }
  100% { transform: scale(1.35); opacity: 0; }
}
.video-preview-card:hover .play-btn-large {
  transform: translate(-50%, -50%) scale(1.1);
  background: var(--brass-light);
  box-shadow: 0 14px 30px rgba(184, 134, 59, 0.6);
}
.video-badge-tag {
  position: absolute;
  bottom: 16px;
  left: 16px;
  background: rgba(7, 13, 30, 0.85);
  backdrop-filter: blur(8px);
  color: var(--paper-2);
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  letter-spacing: .12em;
  padding: 6px 12px;
  border-radius: 2px;
  display: flex;
  align-items: center;
  gap: 6px;
}
.video-badge-tag .dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--brass-light);
}

/* ===================== VIDEO LIGHTBOX MODAL ===================== */
.video-modal-backdrop {
  display: none;
  position: fixed;
  inset: 0;
  z-index: 9999;
  background: rgba(7, 13, 30, 0.92);
  backdrop-filter: blur(10px);
  align-items: center;
  justify-content: center;
  padding: 24px;
  opacity: 0;
  transition: opacity .3s ease;
}
.video-modal-backdrop.active {
  display: flex;
  opacity: 1;
}
.video-modal-container {
  position: relative;
  width: 100%;
  max-width: 1000px;
  background: var(--ink);
  border: 1px solid var(--line-dark);
  border-radius: 6px;
  overflow: hidden;
  box-shadow: 0 25px 60px rgba(0,0,0,0.5);
}
.video-modal-close {
  position: absolute;
  top: 14px;
  right: 18px;
  z-index: 10;
  background: rgba(7, 13, 30, 0.7);
  color: var(--paper-2);
  border: 1px solid var(--line-dark);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  font-size: 24px;
  line-height: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all .2s;
}
.video-modal-close:hover {
  background: var(--brass);
  color: var(--ink);
  border-color: var(--brass);
}
.video-player-wrapper {
  position: relative;
  width: 100%;
  aspect-ratio: 16/9;
  background: #000;
}
.video-player-wrapper video {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

@media (max-width: 900px) {
  .video-grid {
    grid-template-columns: 1fr;
    gap: 32px;
  }
  .play-btn-large {
    width: 64px;
    height: 64px;
  }
  .play-btn-large svg {
    width: 24px;
    height: 24px;
  }
  .video-modal-backdrop {
    padding: 12px;
  }
  .video-modal-close {
    top: 8px;
    right: 8px;
    width: 34px;
    height: 34px;
    font-size: 20px;
  }
}
/* ===================== DOUBLE GLAZING BY MATERIAL ===================== */
.glazing-section {
  background: var(--paper-2);
  padding: 80px 0;
  border-bottom: 1px solid var(--line);
}
.glazing-head {
  text-align: center;
  max-width: 820px;
  margin: 0 auto 40px;
}
.glazing-head h2 {
  font-size: clamp(28px, 3.8vw, 46px);
  color: var(--ink);
  font-family: 'Space Grotesk', sans-serif;
  margin: 12px 0 16px;
  font-weight: 700;
  letter-spacing: -0.02em;
}
.glazing-head p.sub {
  color: var(--slate);
  font-size: 16px;
  line-height: 1.6;
  max-width: 720px;
  margin: 0 auto 16px;
}
.show-all-btn {
  background: transparent;
  border: none;
  color: var(--ink);
  font-weight: 700;
  font-size: 14.5px;
  font-family: 'Space Grotesk', sans-serif;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  text-decoration: underline;
  text-underline-offset: 4px;
  padding: 4px 8px;
  transition: color 0.2s, transform 0.2s;
}
.show-all-btn:hover {
  color: var(--brass);
}
.show-all-btn svg {
  width: 15px;
  height: 15px;
  transition: transform 0.3s var(--ease);
}
.show-all-btn.expanded svg {
  transform: rotate(180deg);
}

.glazing-extra-info {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s var(--ease), opacity 0.4s var(--ease), margin 0.4s var(--ease);
  opacity: 0;
  margin-top: 0;
  text-align: left;
  background: var(--paper);
  border: 1px solid var(--line);
  padding: 0 24px;
  border-radius: 8px;
}
.glazing-extra-info.active {
  max-height: 400px;
  opacity: 1;
  margin-top: 20px;
  padding: 24px;
}
.glazing-extra-info h4 {
  font-size: 16px;
  color: var(--ink);
  margin-bottom: 8px;
}
.glazing-extra-info p {
  font-size: 14px;
  color: var(--slate);
  line-height: 1.6;
  margin-bottom: 12px;
}

.glazing-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  max-width: 880px;
  margin: 36px auto 0;
}
.glazing-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
  transition: transform 0.35s var(--ease), box-shadow 0.35s var(--ease), border-color 0.35s var(--ease);
  cursor: pointer;
  display: flex;
  flex-direction: column;
  position: relative;
}
.glazing-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 30px rgba(0, 0, 0, 0.1);
  border-color: var(--brass);
}
.glazing-card-img {
  width: 100%;
  aspect-ratio: 4/3;
  overflow: hidden;
  background: #f8fafc;
  position: relative;
}
.glazing-card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s var(--ease);
}
.glazing-card:hover .glazing-card-img img {
  transform: scale(1.05);
}
.glazing-card-body {
  padding: 16px 18px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #ffffff;
  border-top: 1px solid #f1f5f9;
}
.glazing-card-body h3 {
  font-size: 16px;
  font-weight: 600;
  color: var(--ink);
  font-family: 'Space Grotesk', sans-serif;
  margin: 0;
  transition: color 0.25s;
}
.glazing-card:hover .glazing-card-body h3 {
  color: var(--brass);
}
.glazing-card-arrow {
  width: 26px;
  height: 26px;
  border-radius: 50%;
  background: #f8fafc;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #94a3b8;
  transition: background 0.25s, color 0.25s, transform 0.25s;
  flex-shrink: 0;
}
.glazing-card-arrow svg {
  width: 14px;
  height: 14px;
  stroke-width: 2.5;
}
.glazing-card:hover .glazing-card-arrow {
  background: var(--brass);
  color: #ffffff;
  transform: translateX(3px);
}

/* Material Details Modal */
.material-modal-backdrop {
  position: fixed;
  inset: 0;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  z-index: 99999;
  background: rgba(18, 22, 28, 0.75);
  backdrop-filter: blur(8px);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s var(--ease);
  overflow-y: auto;
}
.material-modal-backdrop.active {
  opacity: 1;
  pointer-events: auto;
}
.material-modal-container {
  background: #ffffff;
  width: 100%;
  max-width: 820px;
  max-height: 85vh;
  overflow-y: auto;
  border-radius: 16px;
  box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
  position: relative;
  margin: auto;
  transform: scale(0.95) translateY(10px);
  transition: transform 0.35s var(--ease);
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
}
.material-modal-backdrop.active .material-modal-container {
  transform: scale(1) translateY(0);
}
.material-modal-close {
  position: absolute;
  top: 16px;
  right: 16px;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: rgba(18, 22, 28, 0.08);
  border: none;
  font-size: 24px;
  line-height: 1;
  color: var(--ink);
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10;
  transition: background 0.2s, color 0.2s;
}
.material-modal-close:hover {
  background: var(--ink);
  color: #ffffff;
}
.material-modal-img {
  background: #f8fafc;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 24px;
  border-right: 1px solid #f1f5f9;
}
.material-modal-img img {
  width: 100%;
  max-height: 380px;
  object-fit: contain;
  border-radius: 8px;
}
.material-modal-content {
  padding: 36px 32px 32px;
  display: flex;
  flex-direction: column;
}
.material-modal-tag {
  display: inline-block;
  font-family: 'JetBrains Mono', monospace;
  font-size: 11px;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--brass);
  background: rgba(184, 134, 59, 0.1);
  padding: 4px 10px;
  border-radius: 4px;
  width: max-content;
  margin-bottom: 12px;
  font-weight: 600;
}
.material-modal-content h3 {
  font-size: 26px;
  color: var(--ink);
  font-family: 'Space Grotesk', sans-serif;
  margin-bottom: 10px;
  font-weight: 700;
}
.material-modal-desc {
  font-size: 14.5px;
  color: var(--slate);
  line-height: 1.6;
  margin-bottom: 20px;
}
.material-specs-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
  margin-bottom: 20px;
  background: #f8fafc;
  padding: 14px;
  border-radius: 8px;
  border: 1px solid #e2e8f0;
}
.spec-item {
  display: flex;
  flex-direction: column;
  gap: 2px;
}
.spec-label {
  font-size: 11px;
  font-family: 'JetBrains Mono', monospace;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.spec-value {
  font-size: 13.5px;
  font-weight: 600;
  color: var(--ink);
}
.material-features-list {
  list-style: none;
  padding: 0;
  margin: 0 0 24px;
  display: flex;
  flex-direction: column;
  gap: 8px;
}
.material-features-list li {
  font-size: 13.5px;
  color: var(--slate);
  display: flex;
  align-items: center;
  gap: 8px;
}
.material-features-list li svg {
  width: 16px;
  height: 16px;
  stroke: var(--brass);
  flex-shrink: 0;
}
.material-modal-cta {
  margin-top: auto;
  display: flex;
  gap: 12px;
}

@media (max-width: 900px) {
  .glazing-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
    max-width: 100%;
  }
  .material-modal-backdrop {
    padding: 12px;
  }
  .material-modal-container {
    grid-template-columns: 1fr;
    max-height: 85vh;
    width: 100%;
    margin: auto;
    border-radius: 12px;
  }
  .material-modal-img {
    border-right: none;
    border-bottom: 1px solid #f1f5f9;
    padding: 16px;
    background: #f8fafc;
  }
  .material-modal-img img {
    max-height: 180px;
    object-fit: contain;
  }
  .material-modal-content {
    padding: 20px 16px;
  }
  .material-modal-content h3 {
    font-size: 20px;
  }
  .material-modal-desc {
    font-size: 13.5px;
    margin-bottom: 14px;
  }
}
/* ===================== DOUBLE GLAZING STYLES ===================== */
.styles-section {
  background: var(--paper-2);
  padding: 80px 0 60px;
  border-bottom: 1px solid var(--line);
}
.styles-head {
  text-align: center;
  max-width: 860px;
  margin: 0 auto 48px;
}
.styles-head h2 {
  font-size: clamp(28px, 3.8vw, 46px);
  color: var(--ink);
  font-family: 'Space Grotesk', sans-serif;
  margin: 12px 0 16px;
  font-weight: 700;
  letter-spacing: -0.02em;
}
.styles-head p.sub {
  color: var(--slate);
  font-size: 16px;
  line-height: 1.6;
  max-width: 780px;
  margin: 0 auto;
}

.styles-container {
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.styles-grid-top {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}
.styles-grid-bottom {
  display: flex;
  justify-content: center;
  gap: 24px;
  flex-wrap: wrap;
}
.styles-grid-bottom .style-card {
  width: calc(33.333% - 16px);
  max-width: 360px;
}

.style-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
  transition: transform 0.35s var(--ease), box-shadow 0.35s var(--ease), border-color 0.35s var(--ease);
  cursor: pointer;
  display: flex;
  flex-direction: column;
  position: relative;
}
.style-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 36px rgba(0, 0, 0, 0.12);
  border-color: var(--brass);
}
.style-card-img {
  width: 100%;
  aspect-ratio: 4/3;
  overflow: hidden;
  background: #f8fafc;
  position: relative;
}
.style-card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s var(--ease);
}
.style-card:hover .style-card-img img {
  transform: scale(1.05);
}

/* Green Bestseller Ribbon */
.ribbon-badge {
  position: absolute;
  top: 18px;
  left: -28px;
  background: #48bb78;
  color: #ffffff;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.05em;
  padding: 4px 30px;
  transform: rotate(-45deg);
  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
  z-index: 5;
  text-transform: uppercase;
  font-family: 'Space Grotesk', sans-serif;
}

.style-card-body {
  padding: 18px 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #ffffff;
  border-top: 1px solid #f1f5f9;
}
.style-card-body h3 {
  font-size: 17px;
  font-weight: 600;
  color: var(--ink);
  font-family: 'Space Grotesk', sans-serif;
  margin: 0;
  transition: color 0.25s;
}
.style-card:hover .style-card-body h3 {
  color: var(--brass);
}
.style-card-arrow {
  width: 26px;
  height: 26px;
  border-radius: 50%;
  background: #f8fafc;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #94a3b8;
  transition: background 0.25s, color 0.25s, transform 0.25s;
  flex-shrink: 0;
}
.style-card-arrow svg {
  width: 14px;
  height: 14px;
  stroke-width: 2.5;
}
.style-card:hover .style-card-arrow {
  background: var(--brass);
  color: #ffffff;
  transform: translateX(3px);
}

/* Responsive Breakpoints for Styles Section */
@media (max-width: 1024px) {
  .styles-grid-top {
    grid-template-columns: repeat(2, 1fr);
    gap: 18px;
  }
  .styles-grid-bottom {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 18px;
  }
  .styles-grid-bottom .style-card {
    width: 100%;
    max-width: none;
  }
}
@media (max-width: 600px) {
  .styles-grid-top,
  .styles-grid-bottom {
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
  }
  .style-card-body {
    padding: 14px 12px;
  }
  .style-card-body h3 {
    font-size: 14.5px;
  }
  .ribbon-badge {
    font-size: 9.5px;
    padding: 3px 24px;
    top: 14px;
    left: -26px;
  }
}
</style>
@endpush

@section('content')
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
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 011.12 4.18 2 2 0 013.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.32 1.85.55 2.81.68A2 2 0 0122 16.92z"/></svg>
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
        <img src="kitchen.jpg" alt="Modern kitchen" loading="lazy">
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
      <a href="{{ route('services.show', 'loft-conversions') }}" class="service-card" style="--i:0">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">01</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M3 10l9-7 9 7M5 9v11h14V9M9 20v-6h6v6"/></svg></div>
          <div class="svc-title">Loft Conversions</div>
          <div class="svc-desc">Turn wasted roof space into a bedroom, office or bathroom that adds real resale value.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
      <a href="{{ route('services.show', 'house-extensions') }}" class="service-card" style="--i:1">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">02</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M4 21V9l8-6 8 6v12M9 21v-6h6v6"/></svg></div>
          <div class="svc-title">House Extensions</div>
          <div class="svc-desc">Single and double-storey extensions designed to extend your living space, not your stress.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
      <a href="{{ route('services.show', 'building-construction') }}" class="service-card" style="--i:2">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">03</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M3 21h18M6 21V8l6-4 6 4v13M10 21v-5h4v5"/></svg></div>
          <div class="svc-title">Building & Construction</div>
          <div class="svc-desc">Structural work, groundworks and new-builds handled by one accountable team from footings up.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
      <a href="{{ route('services.show', 'interior-renovation') }}" class="service-card" style="--i:3">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1600210491892-03d54c0aaf87?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">04</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4zM4 12h16M12 4v16"/></svg></div>
          <div class="svc-title">Interior Renovation</div>
          <div class="svc-desc">Full internal refits — plastering, flooring, joinery — finished to a standard that shows.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
      <a href="{{ route('services.show', 'kitchens-bathrooms') }}" class="service-card" style="--i:4">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">05</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M4 10h16v10H4zM8 10V6a4 4 0 018 0v4"/></svg></div>
          <div class="svc-title">Kitchens & Bathrooms</div>
          <div class="svc-desc">Design-led kitchen and bathroom fit-outs, from layout planning to the final tile.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
      <a href="{{ route('services.show', 'plumbing-heating') }}" class="service-card" style="--i:5">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">06</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M12 2s6 6.5 6 11.5a6 6 0 01-12 0C6 8.5 12 2 12 2z"/></svg></div>
          <div class="svc-title">Plumbing & Heating</div>
          <div class="svc-desc">Bathroom plumbing, boiler installs and heating systems that are built to just work.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
      <a href="{{ route('services.show', 'double-glazing-specialist') }}" class="service-card" style="--i:6">
        <div class="svc-photo"><img src="/s1.jpeg" alt="Double Glazing Specialist" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">07</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg></div>
          <div class="svc-title">Double Glazing Specialist</div>
          <div class="svc-desc">Bespoke uPVC, wooden, and aluminium double glazed window & door supply and precision installation.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
      <a href="{{ route('services.show', 'external-works') }}" class="service-card" style="--i:7">
        <div class="svc-photo"><img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=600&q=80" alt="" loading="lazy"></div>
        <div class="svc-content">
          <span class="svc-num">08</span>
          <div class="svc-icon"><svg viewBox="0 0 24 24"><path d="M3 20h18M5 20V10l7-6 7 6v10M9 20v-5h6v5"/></svg></div>
          <div class="svc-title">External Works</div>
          <div class="svc-desc">Driveways, patios, roofing and render — the finishing touches that frame the whole job.</div>
          <span class="svc-arrow">Learn more <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- ===================== VIDEO SHOWCASE SECTION ===================== -->
<section class="video-showcase-section" id="video">
  <div class="wrap">
    <div class="video-grid">
      <!-- Left Side: Content -->
      <div class="video-content reveal">
        <span class="eyebrow">EXCELLENCE IN CRAFTSMANSHIP</span>
        <h2>Watch How We Transform London Homes</h2>
        <p>From complex structural steelwork to high-end interior finishes, see our expert team at work across West London. We deliver fixed-price quality, full building control compliance, and 5-year workmanship guarantees on every project.</p>
        
      
          <a href="#services" class="btn btn-brass">
           Explore Our Services
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
       
      </div>

      <!-- Right Side: Video Preview Thumbnail with Play Button -->
      <div class="video-preview-wrap reveal">
        <div class="video-preview-card" onclick="openVideoModal()" role="button" aria-label="Play Project Video">
          <video class="preview-bg-video" autoplay loop muted playsinline preload="auto" poster="{{ !empty($videoSection['poster_url']) ? asset($videoSection['poster_url']) : 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80' }}">
            <source src="{{ asset($videoSection['video_url'] ?? '/video.mp4') }}#t=0.5" type="video/mp4">
          </video>
          <div class="video-overlay-gradient"></div>
          <button class="play-btn-large" aria-label="Play Video">
            <span class="play-pulse"></span>
            <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
          </button>
          <div class="video-badge-tag">
            <span class="dot"></span> WATCH SHOWCASE VIDEO
          </div>
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
        <img src="/imgs.jpg" alt="MaxMark team on site reviewing plans">
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

<!-- ===================== DOUBLE GLAZING STYLES ===================== -->
<section class="styles-section" id="glazing-styles">
  <div class="wrap">
    <div class="styles-head reveal">
      <h2>Browse Double Glazing Styles</h2>
      <p class="sub">Find the right double glazing for your home from our extensive range of styles. Choose a classic casement, the timeless style of a traditional sash window or modern designer flush windows. Whatever you’re looking for, we’ve got the window style to suit you.</p>
    </div>

    <div class="styles-container reveal">
      <!-- Top Row: 4 Cards -->
      <div class="styles-grid-top">
        <!-- 1. Casement Windows (Bestseller) -->
        <div class="style-card" onclick="openStyleModal('casement')" role="button" tabindex="0">
          <div class="style-card-img">
            <div class="ribbon-badge">Bestseller</div>
            <img src="/b1.webp" alt="Casement Windows" loading="lazy">
          </div>
          <div class="style-card-body">
            <h3>Casement Windows</h3>
            <div class="style-card-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
            </div>
          </div>
        </div>

        <!-- 2. Sash Windows -->
        <div class="style-card" onclick="openStyleModal('sash')" role="button" tabindex="0">
          <div class="style-card-img">
            <img src="/b2.webp" alt="Sash Windows" loading="lazy">
          </div>
          <div class="style-card-body">
            <h3>Sash Windows</h3>
            <div class="style-card-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
            </div>
          </div>
        </div>

        <!-- 3. Flush Windows -->
        <div class="style-card" onclick="openStyleModal('flush')" role="button" tabindex="0">
          <div class="style-card-img">
            <img src="/b3.webp" alt="Flush Windows" loading="lazy">
          </div>
          <div class="style-card-body">
            <h3>Flush Windows</h3>
            <div class="style-card-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
            </div>
          </div>
        </div>

        <!-- 4. Bay Windows -->
        <div class="style-card" onclick="openStyleModal('bay')" role="button" tabindex="0">
          <div class="style-card-img">
            <img src="/b4.jpg" alt="Bay Windows" loading="lazy">
          </div>
          <div class="style-card-body">
            <h3>Bay Windows</h3>
            <div class="style-card-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Row: 3 Cards Centered -->
      <div class="styles-grid-bottom">
        <!-- 5. Cottage Windows -->
        <div class="style-card" onclick="openStyleModal('cottage')" role="button" tabindex="0">
          <div class="style-card-img">
            <img src="/b5.webp" alt="Cottage Windows" loading="lazy">
          </div>
          <div class="style-card-body">
            <h3>Cottage Windows</h3>
            <div class="style-card-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
            </div>
          </div>
        </div>

        <!-- 6. Tilt and Turn -->
        <div class="style-card" onclick="openStyleModal('tilt_turn')" role="button" tabindex="0">
          <div class="style-card-img">
            <img src="/b6.webp" alt="Tilt and Turn" loading="lazy">
          </div>
          <div class="style-card-body">
            <h3>Tilt and Turn</h3>
            <div class="style-card-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
            </div>
          </div>
        </div>

        <!-- 7. Shaped Windows -->
        <div class="style-card" onclick="openStyleModal('shaped')" role="button" tabindex="0">
          <div class="style-card-img">
            <img src="/b7.webp" alt="Shaped Windows" loading="lazy">
          </div>
          <div class="style-card-body">
            <h3>Shaped Windows</h3>
            <div class="style-card-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== DOUBLE GLAZING BY MATERIAL ===================== -->
<section class="glazing-section" id="glazing-materials">
  <div class="wrap">
    <div class="glazing-head reveal">
      <h2>Browse Double Glazing by Material</h2>
      <p class="sub">
        Choose from uPVC, wooden, or aluminium for your double glazed windows. Each material delivers boasts brilliant energy efficiency and security performance for a warmer and more secure home. Whether you're adding a new modern look or replacing like for like, our window materials are versatile and customisable to suit your needs.
      </p>
      <!-- <button class="show-all-btn" id="toggleMaterialInfo" onclick="toggleGlazingInfo()">
        <span>Show all</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
      </button>

      <div class="glazing-extra-info" id="glazingExtraInfo">
        <h4>High-Performance Windows Crafted For Modern Living</h4>
        <p>Whether you're looking to preserve classic period aesthetics with solid engineered timber, minimize maintenance with durable uPVC, or achieve sleek architectural sightlines with thermal-break aluminium, MaxMark Builders provides complete supply and precision installation backed by a 5-year workmanship guarantee.</p>
        <p>All our double glazed units feature argon gas fillings, low-emissivity (Low-E) glass coatings, and multi-point shoot-bolt locks for optimum thermal efficiency and peace of mind.</p>
      </div> -->
    </div>

    <div class="glazing-grid reveal">
      <!-- Card 1: uPVC Windows -->
      <div class="glazing-card" onclick="openMaterialModal('upvc')" role="button" tabindex="0">
        <div class="glazing-card-img">
          <img src="/1.jpg" alt="uPVC Windows" loading="lazy">
        </div>
        <div class="glazing-card-body">
          <h3>uPVC Windows</h3>
          <div class="glazing-card-arrow">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
          </div>
        </div>
      </div>

      <!-- Card 2: Wooden Windows -->
      <div class="glazing-card" onclick="openMaterialModal('wooden')" role="button" tabindex="0">
        <div class="glazing-card-img">
          <img src="2.jpg" alt="Wooden Windows" loading="lazy">
        </div>
        <div class="glazing-card-body">
          <h3>Wooden Windows</h3>
          <div class="glazing-card-arrow">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
          </div>
        </div>
      </div>

      <!-- Card 3: Aluminium Windows -->
      <div class="glazing-card" onclick="openMaterialModal('aluminium')" role="button" tabindex="0">
        <div class="glazing-card-img">
          <img src="/3.webp" alt="Aluminium Windows" loading="lazy">
        </div>
        <div class="glazing-card-body">
          <h3>Aluminium Windows</h3>
          <div class="glazing-card-arrow">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
          </div>
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
        <form id="quoteForm" action="{{ route('quote.submit') }}" method="POST" onsubmit="submitQuote(event)">
          @csrf
          <input type="hidden" name="service" id="quoteHiddenService">
          <input type="hidden" name="size" id="quoteHiddenSize">
          <input type="hidden" name="time" id="quoteHiddenTime">
          <input type="hidden" name="estimate" id="quoteHiddenEstimate">

          <div class="quote-result">
            <span class="step-label" style="justify-content:center;display:flex;">YOUR ESTIMATE</span>
            <h3 id="resultTitle">Loft Conversion — Small</h3>
            <div class="range" id="resultRange">£35,000 – £45,000</div>
            <p class="caveat">This is an indicative range based on typical West London jobs, not a fixed quote. Final pricing depends on your property, materials and specification — confirmed after a free site visit.</p>
            <div class="contact-fields">
              <div class="field"><label>FIRST NAME</label><input type="text" id="quoteFirstName" name="first_name" placeholder="Jane" required></div>
              <div class="field"><label>PHONE</label><input type="tel" id="quotePhone" name="phone" placeholder="07xxx xxxxxx" required></div>
              <div class="field full"><label>EMAIL</label><input type="email" id="quoteEmail" name="email" placeholder="you@email.com" required></div>
              <div class="field full"><label>POSTCODE</label><input type="text" id="quotePostcode" name="postcode" placeholder="e.g. TW3 1AB"></div>
            </div>
            <div class="quote-nav" style="justify-content:space-between;">
              <button type="button" class="btn btn-outline" onclick="prevStep()">← Back</button>
              <button type="submit" class="btn btn-signal" id="submitQuoteBtn">Send me my exact quote <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M5 12h14M13 6l6 6-6 6"/></svg></button>
            </div>
          </div>
        </form>
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

<!-- ===================== FLOATING ELEMENTS ===================== -->
<a href="#quote" class="float-cta" id="floatCta">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>
  Get Free Quote
</a>

<div class="mobile-bar">
  <a href="tel:+447397087600"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 011.12 4.18 2 2 0 013.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.3 12.3 0 002.81.68A2 2 0 0122 16.92z"/></svg>Call</a>
  <a href="https://wa.me/447397087600" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>WhatsApp</a>
</div>

<!-- ===================== VIDEO LIGHTBOX MODAL ===================== -->
<div class="video-modal-backdrop" id="videoModal" onclick="handleModalBackdropClick(event)" aria-hidden="true">
  <div class="video-modal-container">
    <button class="video-modal-close" onclick="closeVideoModal()" aria-label="Close Video">&times;</button>
    <div class="video-player-wrapper">
      <video id="mainLightboxVideo" controls playsinline preload="metadata">
        <source src="{{ asset($videoSection['video_url'] ?? '/video.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video playback.
      </video>
    </div>
  </div>
</div>

<!-- ===================== GLAZING MATERIAL DETAILS MODAL ===================== -->
<div class="material-modal-backdrop" id="materialModal" onclick="handleMaterialBackdropClick(event)" aria-hidden="true">
  <div class="material-modal-container">
    <button class="material-modal-close" onclick="closeMaterialModal()" aria-label="Close modal">&times;</button>
    
    <div class="material-modal-img">
      <img id="mModalImg" src="" alt="">
    </div>
    
    <div class="material-modal-content">
      <span class="material-modal-tag" id="mModalTag">A+ ENERGY RATED</span>
      <h3 id="mModalTitle">uPVC Windows</h3>
      <p class="material-modal-desc" id="mModalDesc"></p>
      
      <div class="material-specs-grid">
        <div class="spec-item">
          <span class="spec-label">Thermal Rating</span>
          <span class="spec-value" id="mSpecThermal">A+ Rated (1.1 W/m²K)</span>
        </div>
        <div class="spec-item">
          <span class="spec-label">Acoustic dB</span>
          <span class="spec-value" id="mSpecSound">Up to 40dB reduction</span>
        </div>
        <div class="spec-item">
          <span class="spec-label">Security</span>
          <span class="spec-value" id="mSpecSecurity">PAS 24 Multi-Point</span>
        </div>
        <div class="spec-item">
          <span class="spec-label">Maintenance</span>
          <span class="spec-value" id="mSpecMaint">Ultra-Low</span>
        </div>
      </div>

      <ul class="material-features-list" id="mModalFeatures">
        <!-- populated dynamically -->
      </ul>

      <div class="material-modal-cta">
        <a href="#quote" onclick="closeMaterialModal()" class="btn btn-brass" style="width:100%;text-align:center;justify-content:center;">Get a quote for this window <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      </div>
    </div>
  </div>
</div>

<!-- ===================== GLAZING STYLE DETAILS MODAL ===================== -->
<div class="material-modal-backdrop" id="styleModal" onclick="handleStyleBackdropClick(event)" aria-hidden="true">
  <div class="material-modal-container">
    <button class="material-modal-close" onclick="closeStyleModal()" aria-label="Close modal">&times;</button>
    
    <div class="material-modal-img">
      <img id="sModalImg" src="" alt="">
    </div>
    
    <div class="material-modal-content">
      <span class="material-modal-tag" id="sModalTag">BESTSELLER · CLASSIC</span>
      <h3 id="sModalTitle">Casement Windows</h3>
      <p class="material-modal-desc" id="sModalDesc"></p>
      
      <div class="material-specs-grid">
        <div class="spec-item">
          <span class="spec-label">Opening Action</span>
          <span class="spec-value" id="sSpecOpening">Side / Top Hinged</span>
        </div>
        <div class="spec-item">
          <span class="spec-label">Thermal Rating</span>
          <span class="spec-value" id="sSpecThermal">A+ Rated (1.1 W/m²K)</span>
        </div>
        <div class="spec-item">
          <span class="spec-label">Security</span>
          <span class="spec-value" id="sSpecSecurity">PAS 24 Multi-Point</span>
        </div>
        <div class="spec-item">
          <span class="spec-label">Glass Options</span>
          <span class="spec-value" id="sSpecGlass">Double / Triple Glazed</span>
        </div>
      </div>

      <ul class="material-features-list" id="sModalFeatures">
        <!-- populated dynamically -->
      </ul>

      <div class="material-modal-cta">
        <a href="#quote" onclick="closeStyleModal()" class="btn btn-brass" style="width:100%;text-align:center;justify-content:center;">Get a quote for this style <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
/* ---------- Float CTA scroll ---------- */
const floatCta = document.getElementById('floatCta');
window.addEventListener('scroll', () => {
  if (floatCta) floatCta.classList.toggle('show', window.scrollY > 700);
}, { passive:true });

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
  if (!compareWrap || !afterPanel || !handle) return;
  const rect = compareWrap.getBoundingClientRect();
  let pct = ((x - rect.left) / rect.width) * 100;
  pct = Math.max(4, Math.min(96, pct));
  afterPanel.style.clipPath = `inset(0 0 0 ${pct}%)`;
  handle.style.left = pct + '%';
}
if (handle && compareWrap) {
  handle.addEventListener('pointerdown', (e) => { dragging = true; handle.setPointerCapture(e.pointerId); });
  window.addEventListener('pointerup', () => dragging = false);
  window.addEventListener('pointermove', (e) => { if (dragging) setSlide(e.clientX); });
  compareWrap.addEventListener('click', (e) => setSlide(e.clientX));
}

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
    if (d && compareWrap) {
      if (document.getElementById('beforeLabel')) document.getElementById('beforeLabel').textContent = d.before;
      if (document.getElementById('afterLabel')) document.getElementById('afterLabel').textContent = d.after;
      if (document.getElementById('beforeImg')) document.getElementById('beforeImg').src = d.beforeImg;
      if (document.getElementById('afterImg')) document.getElementById('afterImg').src = d.afterImg;
      setSlide(compareWrap.getBoundingClientRect().left + compareWrap.getBoundingClientRect().width/2);
    }
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
  const targetStep = document.querySelector(`.quote-step[data-step="${step}"]`);
  if (targetStep) targetStep.classList.add('active');
  document.querySelectorAll('.quote-progress span').forEach(s => {
    s.classList.toggle('done', parseInt(s.dataset.step) <= Math.min(step,4));
  });
  currentStep = step;
}
function prevStep() { goToStep(Math.max(1, currentStep - 1)); }

const serviceOpt = document.getElementById('serviceOptions');
if (serviceOpt) {
  serviceOpt.addEventListener('click', (e) => {
    const card = e.target.closest('.opt-card'); if (!card) return;
    document.querySelectorAll('#serviceOptions .opt-card').forEach(c => c.classList.remove('selected'));
    card.classList.add('selected');
    quoteState.service = card.dataset.value;
    quoteState.serviceLabel = card.dataset.label;
    setTimeout(() => goToStep(2), 280);
  });
}

const sizeOpt = document.getElementById('sizeOptions');
if (sizeOpt) {
  sizeOpt.addEventListener('click', (e) => {
    const card = e.target.closest('.opt-card'); if (!card) return;
    document.querySelectorAll('#sizeOptions .opt-card').forEach(c => c.classList.remove('selected'));
    card.classList.add('selected');
    quoteState.size = card.dataset.value;
    quoteState.sizeLabel = card.dataset.label;
    setTimeout(() => goToStep(3), 280);
  });
}

const timeOpt = document.getElementById('timeOptions');
if (timeOpt) {
  timeOpt.addEventListener('click', (e) => {
    const card = e.target.closest('.opt-card'); if (!card) return;
    document.querySelectorAll('#timeOptions .opt-card').forEach(c => c.classList.remove('selected'));
    card.classList.add('selected');
    quoteState.time = card.dataset.value;
    setTimeout(() => {
      const range = priceTable[quoteState.service][quoteState.size];
      if (document.getElementById('resultTitle')) document.getElementById('resultTitle').textContent = `${quoteState.serviceLabel} — ${quoteState.sizeLabel}`;
      if (document.getElementById('resultRange')) document.getElementById('resultRange').textContent =
        `£${range[0].toLocaleString()} – £${range[1].toLocaleString()}`;
      goToStep(4);
    }, 280);
  });
}

function submitQuote(event) {
  if (event) event.preventDefault();

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

  const serviceVal = quoteState.serviceLabel || quoteState.service || 'Building Service';
  const sizeVal = quoteState.sizeLabel || quoteState.size || '';
  const timeVal = quoteState.time || '';

  if (document.getElementById('quoteHiddenService')) document.getElementById('quoteHiddenService').value = serviceVal;
  if (document.getElementById('quoteHiddenSize')) document.getElementById('quoteHiddenSize').value = sizeVal;
  if (document.getElementById('quoteHiddenTime')) document.getElementById('quoteHiddenTime').value = timeVal;
  if (document.getElementById('quoteHiddenEstimate')) document.getElementById('quoteHiddenEstimate').value = estimateText;

  fetch('/quote', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'X-CSRF-TOKEN': csrfToken,
      'X-Requested-With': 'XMLHttpRequest'
    },
    body: JSON.stringify({
      _token: csrfToken,
      first_name: firstNameInp.value.trim(),
      phone: phoneInp.value.trim(),
      email: emailInp.value.trim(),
      postcode: postcodeInp ? postcodeInp.value.trim() : '',
      service: serviceVal,
      size: sizeVal,
      time: timeVal,
      estimate: estimateText
    })
  })
  .then(res => {
    if (!res.ok) {
      console.warn('Fetch response not ok, status:', res.status);
    }
    return res.json();
  })
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
if (testiTrack && testiDotsWrap && testiCards.length) {
  testiCards.forEach((_, i) => {
    const b = document.createElement('button');
    if (i === 0) b.classList.add('active');
    b.addEventListener('click', () => { testiIndex = i; updateTesti(); });
    testiDotsWrap.appendChild(b);
  });
}
function updateTesti() {
  if (testiTrack && testiDotsWrap) {
    testiTrack.style.transform = `translateX(-${testiIndex * 100}%)`;
    testiDotsWrap.querySelectorAll('button').forEach((b,i) => b.classList.toggle('active', i === testiIndex));
  }
}
function testiMove(dir) {
  if (!testiCards.length) return;
  testiIndex = (testiIndex + dir + testiCards.length) % testiCards.length;
  updateTesti();
}
if (testiCards.length) {
  setInterval(() => testiMove(1), 6000);
}

/* ---------- FAQ accordion ---------- */
document.querySelectorAll('.faq-item').forEach(item => {
  const q = item.querySelector('.faq-q');
  const a = item.querySelector('.faq-a');
  if (q && a) {
    if (item.classList.contains('open')) a.style.maxHeight = a.scrollHeight + 'px';
    q.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(i => { i.classList.remove('open'); const ia = i.querySelector('.faq-a'); if (ia) ia.style.maxHeight = 0; });
      if (!isOpen) { item.classList.add('open'); a.style.maxHeight = a.scrollHeight + 'px'; }
    });
  }
});

/* ---------- Video Lightbox Modal Script ---------- */
function openVideoModal() {
  const modal = document.getElementById('videoModal');
  const video = document.getElementById('mainLightboxVideo');
  if (modal && video) {
    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    video.play().catch(function(err) {
      console.log('Autoplay play request deferred:', err);
    });
  }
}

function closeVideoModal() {
  const modal = document.getElementById('videoModal');
  const video = document.getElementById('mainLightboxVideo');
  if (modal && video) {
    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    video.pause();
    video.currentTime = 0;
  }
}

function handleModalBackdropClick(event) {
  if (event.target && event.target.id === 'videoModal') {
    closeVideoModal();
  }
}

/* ---------- Glazing Materials & Modal Data Script ---------- */
const glazingMaterialsData = {
  upvc: {
    title: 'uPVC Double Glazed Windows',
    tag: 'A+ ENERGY RATED · BESTSELLER',
    img: '/1.jpg',
    desc: 'uPVC double glazed windows are the UK\'s most popular window choice. Engineered for maximum thermal insulation, noise reduction, and zero rot or maintenance.',
    specs: {
      thermal: 'A+ Rated (1.1 W/m²K)',
      sound: 'Up to 40dB reduction',
      security: 'PAS 24 Shoot-bolt Locks',
      maint: 'Ultra-Low Wipe Clean'
    },
    features: [
      'Argon gas-filled double glazing with Low-E thermal coating',
      'High impact-resistant unplasticised PVC multi-chambered frame',
      'Available in Casement, Flush Sash, Tilt & Turn, and French styles',
      'Multi-point locking mechanism with key-locking handles',
      'Wide choice of finishes: Smooth White, Anthracite Grey, Chartwell Green'
    ]
  },
  wooden: {
    title: 'Timber & Wooden Windows',
    tag: 'HERITAGE CHARM · FSC CERTIFIED TIMBER',
    img: '/2.jpg',
    desc: 'Crafted from premium engineered hardwood or softwood, our wooden windows offer timeless architectural elegance, natural warmth, and exceptional longevity.',
    specs: {
      thermal: 'A Rated Natural Insulation',
      sound: 'Up to 42dB reduction',
      security: 'Heavy Duty Friction Hinges',
      maint: 'Factory Micro-porous Finish'
    },
    features: [
      'Sustainably sourced FSC® certified engineered timber (Oak, Accoya)',
      'Ideal for period restorations, Listed buildings, and Conservation areas',
      'Micro-porous micropaint finish resists peeling and weather damage',
      'Traditional box sash cord-and-weights or modern friction hinges',
      'Durable dual-weather seal gaskets eliminate cold draughts'
    ]
  },
  aluminium: {
    title: 'Aluminium Double Glazed Windows',
    tag: 'ULTRA-SLIM FRAME · MODERN ARCHITECTURE',
    img: '/3.webp',
    desc: 'Featuring ultra-slim sightlines and remarkable structural strength, aluminium windows let in maximum natural light while providing a crisp contemporary look.',
    specs: {
      thermal: 'A Rated Polyamide Break',
      sound: 'Up to 38dB reduction',
      security: 'Heavy-Duty Multi-Point',
      maint: 'Zero Maintenance Powder Coat'
    },
    features: [
      'Ultra-slim frame profiles for maximum light and uninterrupted views',
      'Polyamide thermal break technology prevents heat transfer',
      'Durable marine-grade powder-coated finish in 200+ RAL colors',
      'Resists warping, rusting, and fading in harsh weather conditions',
      'Complements contemporary extensions, bi-fold doors, and skylights'
    ]
  }
};

function toggleGlazingInfo() {
  const extraInfo = document.getElementById('glazingExtraInfo');
  const btn = document.getElementById('toggleMaterialInfo');
  if (extraInfo && btn) {
    const isExpanded = extraInfo.classList.contains('active');
    if (isExpanded) {
      extraInfo.classList.remove('active');
      btn.classList.remove('expanded');
      btn.querySelector('span').innerText = 'Show all';
    } else {
      extraInfo.classList.add('active');
      btn.classList.add('expanded');
      btn.querySelector('span').innerText = 'Show less';
    }
  }
}

function openMaterialModal(key) {
  const data = glazingMaterialsData[key];
  if (!data) return;

  document.getElementById('mModalImg').src = data.img;
  document.getElementById('mModalImg').alt = data.title;
  document.getElementById('mModalTag').innerText = data.tag;
  document.getElementById('mModalTitle').innerText = data.title;
  document.getElementById('mModalDesc').innerText = data.desc;
  
  document.getElementById('mSpecThermal').innerText = data.specs.thermal;
  document.getElementById('mSpecSound').innerText = data.specs.sound;
  document.getElementById('mSpecSecurity').innerText = data.specs.security;
  document.getElementById('mSpecMaint').innerText = data.specs.maint;

  const featuresUl = document.getElementById('mModalFeatures');
  featuresUl.innerHTML = data.features.map(f => `
    <li>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
      <span>${f}</span>
    </li>
  `).join('');

  const modal = document.getElementById('materialModal');
  if (modal) {
    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
}

function closeMaterialModal() {
  const modal = document.getElementById('materialModal');
  if (modal) {
    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
}

function handleMaterialBackdropClick(event) {
  if (event.target && event.target.id === 'materialModal') {
    closeMaterialModal();
  }
}

/* ---------- Glazing Styles & Modal Data Script ---------- */
const glazingStylesData = {
  casement: {
    title: 'Casement Windows',
    tag: 'BESTSELLER · CLASSIC FAVOURITE',
    img: '/b1.webp',
    desc: 'Casement windows are hinged at the side or top and open outwards. Highly versatile, weather-tight, and energy efficient, they suit almost any home architectural style.',
    specs: {
      opening: 'Side / Top Outward Hinge',
      thermal: 'A+ Rated (1.1 W/m²K)',
      security: 'PAS 24 Shoot-bolt Locks',
      glass: 'Double / Triple Glazed'
    },
    features: [
      'High weather resistance with dual-action continuous seals',
      'Wide opening aperture for maximum natural airflow & ventilation',
      'Available in uPVC, Timber & Aluminium with friction stay hinges',
      'Multi-point locking mechanism with key-locking safety handles',
      'Customizable frame colors, dummy sashes, and decorative lead work'
    ]
  },
  sash: {
    title: 'Sash Windows',
    tag: 'PERIOD ELEGANCE · TIMLESS DESIGN',
    img: '/b2.webp',
    desc: 'Traditional vertical sliding sash windows combine period charm with modern energy efficiency, perfect for Georgian, Victorian, and Edwardian property restorations.',
    specs: {
      opening: 'Vertical Sliding Double Sash',
      thermal: 'A Rated Energy Glass',
      security: 'Concealed Locks & Restrictors',
      glass: 'Acoustic Double Glazed'
    },
    features: [
      'Authentic box sash styling with smooth spiral balance or weight mechanisms',
      'Inward tilt-in feature for safe, effortless glass cleaning from inside',
      'High-performance pile weather seals eliminate cold draughts & rattles',
      'Heritage horn details, deep bottom rails, and decorative astragal bars',
      'Available in FSC certified engineered timber and low-maintenance uPVC'
    ]
  },
  flush: {
    title: 'Flush Windows',
    tag: 'MODERN DESIGNER · SLEEK SIGHTLINES',
    img: '/b3.webp',
    desc: 'Flush casement windows sit completely flush within the outer frame when closed, recreating traditional timber joinery with clean contemporary lines.',
    specs: {
      opening: 'Flush Side / Top Hinge',
      thermal: 'A+ Rated Insulated Frame',
      security: 'Multi-Point Shoot-bolt',
      glass: 'Double / Triple Glazed'
    },
    features: [
      'Ultra-flat exterior profile mimicking traditional period timber sashes',
      'Complements both heritage restorations and modern minimalist builds',
      'Concealed friction hinges for unobtrusive, seamless exterior view',
      'Advanced multi-chambered frame design for optimal heat retention',
      'Wide array of woodgrain foil coatings and architectural matte finishes'
    ]
  },
  bay: {
    title: 'Bay Windows',
    tag: 'PANORAMIC VIEWS · MAXIMUM LIGHT',
    img: '/b4.jpg',
    desc: 'Bay and bow windows project outwards from the main wall, creating extra internal room space while flooding your living area with panoramic natural sunlight.',
    specs: {
      opening: 'Multi-Section Casement / Sash',
      thermal: 'High-grade Insulated Bays',
      security: 'Reinforced Corner Posts',
      glass: 'Low-E Toughened Safety Glass'
    },
    features: [
      '180-degree wide panoramic view of gardens and outdoor surroundings',
      'Creates decorative interior alcove seating or extended floor space',
      'Engineered heavy-duty structural bay pole supports for ceiling loads',
      'Custom angles available in 3-segment, 5-segment, or rounded bow styles',
      'Combines opening casement or sash sections with fixed picture panes'
    ]
  },
  cottage: {
    title: 'Cottage Windows',
    tag: 'RUSTIC CHARM · GEORGIAN BARS',
    img: '/b5.webp',
    desc: 'Cottage style windows feature authentic Georgian or astragal grid bars, bringing rustic countryside warmth and classic architectural character to your home.',
    specs: {
      opening: 'Side / Top Outward Hinge',
      thermal: 'A Rated Thermal Glass',
      security: 'Multi-Point Shoot-bolt',
      glass: 'Double Glazed Low-E'
    },
    features: [
      'Custom Georgian bar grids inside double glazed units or surface-mounted astragal bars',
      'Ideal for stone cottages, rural farmhouses, and heritage village properties',
      'High security friction stay hinges with multi-point perimeter locks',
      'Durable weather-proof finishes in Chartwell Green, Cream, and Oak',
      'Excellent acoustic damping for peaceful interior comfort'
    ]
  },
  tilt_turn: {
    title: 'Tilt & Turn Windows',
    tag: 'VERSATILE OPENING · EASY CLEAN',
    img: '/b6.webp',
    desc: 'Dual-action tilt and turn windows open inwards from the top for secure, rain-proof ventilation, or swing fully inward from the side for safe cleaning.',
    specs: {
      opening: 'Inward Tilt & Turn Dual Action',
      thermal: 'A+ Rated Multi-Chamber',
      security: 'Perimeter Locking Gearing',
      glass: 'Acoustic Double / Triple'
    },
    features: [
      'Top-tilt action provides safe, rain-resistant draft-free ventilation',
      'Side-turn action opens 90 degrees inwards for effortless cleaning without ladders',
      'Ideal safety design for high-rise apartments and upper floor bedrooms',
      'Heavy-duty hardware supports large glass pane sizes for expansive views',
      'Concealed locking points along all four sides for maximum intruder protection'
    ]
  },
  shaped: {
    title: 'Shaped & Architectural Windows',
    tag: 'BESPOKE GEOMETRIC · ARCHITECTURAL STATEMENT',
    img: '/b7.webp',
    desc: 'Custom-engineered arched, circular, triangular, or gable windows designed to form striking architectural statements in specialized structural openings.',
    specs: {
      opening: 'Fixed Picture / Custom Hinge',
      thermal: 'A Rated Custom Double Glazed',
      security: 'Internal Bead Glazing',
      glass: 'Solar Control / Toughened'
    },
    features: [
      'Precision made-to-measure for unique roof pitches, apex gables, and arches',
      'Seamless aesthetic matching with surrounding standard double glazing',
      'Solar-control glass options to prevent summer overheating in tall gables',
      'Available in uPVC, Timber, and Slimline Aluminium frame profiles',
      'Focal point architectural feature that boosts property value'
    ]
  }
};

function openStyleModal(key) {
  const data = glazingStylesData[key];
  if (!data) return;

  document.getElementById('sModalImg').src = data.img;
  document.getElementById('sModalImg').alt = data.title;
  document.getElementById('sModalTag').innerText = data.tag;
  document.getElementById('sModalTitle').innerText = data.title;
  document.getElementById('sModalDesc').innerText = data.desc;
  
  document.getElementById('sSpecOpening').innerText = data.specs.opening;
  document.getElementById('sSpecThermal').innerText = data.specs.thermal;
  document.getElementById('sSpecSecurity').innerText = data.specs.security;
  document.getElementById('sSpecGlass').innerText = data.specs.glass;

  const featuresUl = document.getElementById('sModalFeatures');
  featuresUl.innerHTML = data.features.map(f => `
    <li>
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
      <span>${f}</span>
    </li>
  `).join('');

  const modal = document.getElementById('styleModal');
  if (modal) {
    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
}

function closeStyleModal() {
  const modal = document.getElementById('styleModal');
  if (modal) {
    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
}

function handleStyleBackdropClick(event) {
  if (event.target && event.target.id === 'styleModal') {
    closeStyleModal();
  }
}

document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') {
    closeVideoModal();
    closeMaterialModal();
    closeStyleModal();
  }
});
</script>
@endpush
