<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Contact Us — MaxMark Builders</title>
<link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
<link rel="shortcut icon" type="image/png" href="{{ asset('logo.png') }}">
<link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
<meta name="description" content="Get in touch with MaxMark Builders for a free quote or site visit on loft conversions, extensions, and renovations across West London.">
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
::selection{background:var(--brass);color:var(--ink);}

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
.btn-signal{background:var(--signal); color:#fff;}
.btn-signal:hover{background:#ef6a41; transform:translateY(-2px); box-shadow:0 12px 24px rgba(228,87,46,.32);}
.btn svg{width:16px;height:16px;}
.icon-btn{width:44px;height:44px;border:1px solid var(--line-dark);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--paper-2);transition:border-color .25s, background .25s;}
.icon-btn:hover{border-color:var(--brass-light); background:rgba(184,134,59,.12);}
.icon-btn svg{width:18px;height:18px;}
.burger{display:none;}

/* mobile nav drawer */
.nav-drawer{
  position:fixed; inset:0; background:var(--ink); z-index:300; transform:translateX(100%); transition:transform .4s var(--ease);
  padding:100px 32px 40px; overflow-y:auto;
}
.nav-drawer.open{transform:translateX(0);}
.nav-drawer ul{display:flex; flex-direction:column; gap:6px;}
.nav-drawer a{font-family:'Space Grotesk'; font-size:26px; padding:14px 0; border-bottom:1px solid var(--line-dark); color:var(--paper-2);}
.close-drawer{position:absolute; top:28px; right:28px; width:44px;height:44px; color:var(--paper-2);}

/* ===================== HERO SECTION ===================== */
.contact-hero{
  background:var(--ink); color:var(--paper-2); padding:80px 0 60px; border-bottom:1px solid var(--line-dark);
  position:relative; overflow:hidden;
}
.contact-hero .grid-bg{
  position:absolute; inset:0;
  background-image:linear-gradient(var(--line-dark) 1px, transparent 1px), linear-gradient(90deg, var(--line-dark) 1px, transparent 1px);
  background-size:var(--grid-unit) var(--grid-unit); opacity:.4;
}
.contact-hero-inner{position:relative; z-index:2; text-align:center; max-width:680px; margin:0 auto;}
.contact-hero h1{font-size:clamp(36px,4.5vw,56px); margin:18px 0 16px;}
.contact-hero p{font-size:16.5px; color:var(--slate-light);}

/* ===================== CONTACT FORM & CARDS ===================== */
.contact-main{padding:80px 0;}
.contact-grid{display:grid; grid-template-columns:1fr 1.6fr; gap:40px; align-items:start;}

.info-cards{display:flex; flex-direction:column; gap:20px;}
.info-card{
  background:var(--ink-2); color:var(--paper-2); border:1px solid var(--line-dark); padding:30px; border-radius:2px;
  display:flex; gap:20px; align-items:flex-start;
}
.info-card-icon{
  width:48px; height:48px; border-radius:50%; background:rgba(184,134,59,.15); border:1px solid var(--brass);
  display:flex; align-items:center; justify-content:center; color:var(--brass-light); flex-shrink:0;
}
.info-card-icon svg{width:22px; height:22px;}
.info-card h3{font-size:12px; font-family:'JetBrains Mono',monospace; color:var(--brass-light); letter-spacing:.12em; text-transform:uppercase; margin-bottom:6px;}
.info-card a, .info-card p{font-size:18px; font-weight:600; color:var(--paper-2); line-height:1.4;}
.info-card a:hover{color:var(--brass-light);}

.form-box{
  background:var(--ink-2); border:1px solid var(--line-dark); padding:44px; color:var(--paper-2);
  box-shadow:0 30px 60px rgba(0,0,0,.25);
}
.form-box h2{font-size:28px; margin-bottom:10px;}
.form-box p{color:var(--slate-light); font-size:14.5px; margin-bottom:28px;}

.alert-success{
  background:rgba(95,191,123,.12); border:1px solid #5fbf7b; color:#5fbf7b; padding:16px 20px;
  font-size:14px; border-radius:2px; margin-bottom:24px; font-weight:500;
}
.alert-error{
  background:rgba(228,87,46,.12); border:1px solid var(--signal); color:#f0a68a; padding:16px 20px;
  font-size:14px; border-radius:2px; margin-bottom:24px; font-weight:500;
}

.form-grid{display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom:20px;}
.form-grid.full{grid-template-columns:1fr;}
.form-group{display:flex; flex-direction:column; gap:8px;}
.form-group label{font-family:'JetBrains Mono',monospace; font-size:11.5px; color:var(--brass-light); letter-spacing:.1em;}
.form-group label span{color:var(--signal);}
.form-group input, .form-group textarea{
  background:rgba(18,22,29,.6); border:1px solid var(--line-dark); color:var(--paper-2);
  padding:14px 16px; font-family:'Inter',sans-serif; font-size:14.5px; border-radius:2px; outline:none;
  transition:border-color .25s;
}
.form-group input:focus, .form-group textarea:focus{border-color:var(--brass-light);}
.form-group textarea{resize:vertical; min-height:130px;}
.field-error{color:var(--signal); font-size:12px; font-weight:500;}

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

.mobile-bar{
  display:none; position:fixed; bottom:0; left:0; right:0; z-index:200; background:var(--ink); border-top:1px solid var(--line-dark);
  padding:100px 14px 10px; gap:10px;
}
.mobile-bar a{flex:1; display:flex; flex-direction:column; align-items:center; gap:4px; font-size:10.5px; color:var(--paper-2); padding:6px 0; font-weight:600;}
.mobile-bar a svg{width:19px;height:19px; stroke:var(--brass-light);}
.mobile-bar a.primary{background:var(--brass); border-radius:8px; color:var(--ink);}

@media(max-width:1080px){
  nav.main-nav{display:none;}
  .burger{display:flex; width:44px;height:44px; align-items:center; justify-content:center; color:var(--paper-2);}
  .contact-grid{grid-template-columns:1fr;}
  .footer-grid{grid-template-columns:1fr 1fr; row-gap:40px;}
}
@media(max-width:640px){
  .wrap{padding:0 20px;}
  .form-grid{grid-template-columns:1fr;}
  .footer-grid{grid-template-columns:1fr;}
  .form-box{padding:30px 20px;}
}
</style>
</head>
<body>

<!-- ===================== TOP UTILITY BAR ===================== -->
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
    <a href="/" class="logo" aria-label="MaxMark Builders Home">
      <img src="{{ asset('logo.png') }}" alt="MaxMark Builders Logo">
    </a>
    <nav class="main-nav">
      <ul>
        <li><a class="nav-link" href="/">Home</a></li>
        <li><a class="nav-link" href="/#about">About</a></li>
        <li class="has-mega">
          <a class="nav-link" href="/#services">Services</a>
          <div class="mega">
            <a href="/#services"><svg viewBox="0 0 24 24"><path d="M3 10l9-7 9 7M5 9v11h14V9"/></svg>Loft Conversions</a>
            <a href="/#services"><svg viewBox="0 0 24 24"><path d="M4 21V9l8-6 8 6v12M9 21v-6h6v6"/></svg>House Extensions</a>
            <a href="/#services"><svg viewBox="0 0 24 24"><path d="M3 21h18M6 21V8l6-4 6 4v13"/></svg>Building & Construction</a>
            <a href="/#services"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4zM4 12h16"/></svg>Interior Renovation</a>
            <a href="/#services"><svg viewBox="0 0 24 24"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>Electrical Works</a>
            <a href="/#services"><svg viewBox="0 0 24 24"><path d="M12 2s6 6 6 11a6 6 0 01-12 0c0-5 6-11 6-11z"/></svg>Plumbing & Heating</a>
            <a href="/#services"><svg viewBox="0 0 24 24"><path d="M4 10h16v10H4zM8 10V6a4 4 0 018 0v4"/></svg>Kitchens & Bathrooms</a>
            <a href="/#services"><svg viewBox="0 0 24 24"><path d="M3 20h18M5 20V10l7-6 7 6v10"/></svg>External Works</a>
          </div>
        </li>
        <li><a class="nav-link" href="/#portfolio">Portfolio</a></li>
        <li><a class="nav-link" href="/#faq">FAQ</a></li>
        <li><a class="nav-link" href="/contact">Contact</a></li>
      </ul>
    </nav>
    <div class="header-actions">
      <a href="tel:+447397087600" class="icon-btn" aria-label="Call MaxMark Builders">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.32 1.85.55 2.81.68A2 2 0 0122 16.92z"/></svg>
      </a>
      <a href="/#quote" class="btn btn-brass">Get Free Quote <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <button class="burger" id="burgerBtn" aria-label="Open menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
      </button>
    </div>
  </div>
</header>

<div class="nav-drawer" id="navDrawer">
  <button class="close-drawer" id="closeDrawer" aria-label="Close menu"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 6l12 12M18 6L6 18"/></svg></button>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/#about">About</a></li>
    <li><a href="/#services">Services</a></li>
    <li><a href="/#portfolio">Portfolio</a></li>
    <li><a href="/#faq">FAQ</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>
</div>

<!-- ===================== HERO SECTION ===================== -->
<section class="contact-hero">
  <div class="grid-bg"></div>
  <div class="wrap contact-hero-inner">
    <span class="eyebrow" style="justify-content:center;">Get In Touch</span>
    <h1>Contact MaxMark Builders</h1>
    <p>Have a construction inquiry, quote request, or question? Send us a message and our team will get back to you promptly.</p>
  </div>
</section>

<!-- ===================== CONTACT FORM & CARDS ===================== -->
<main class="contact-main">
  <div class="wrap">
    <div class="contact-grid">

      <!-- Left Column: Info Cards -->
      <div class="info-cards">
        
        <div class="info-card">
          <div class="info-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/></svg>
          </div>
          <div>
            <h3>EMAIL ADDRESS</h3>
            <a href="mailto:maxmarkbuilders@gmail.com">maxmarkbuilders@gmail.com</a>
          </div>
        </div>

        <div class="info-card">
          <div class="info-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 011.12 4.18 2 2 0 013.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.3 12.3 0 002.81.68A2 2 0 0122 16.92z"/></svg>
          </div>
          <div>
            <h3>PHONE NUMBER</h3>
            <a href="tel:+447397087600">+44 7397 087600</a>
          </div>
        </div>

        <div class="info-card" style="background:var(--ink); border-color:var(--brass);">
          <div class="info-card-icon" style="background:var(--brass); color:var(--ink);">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <h3>LOCATION & COVERAGE</h3>
            <p style="font-size:15px; color:var(--paper-2); font-weight:400; line-height:1.6;">Serving West London & surrounding areas with high-end building & renovation work.</p>
          </div>
        </div>

      </div>

      <!-- Right Column: Form Box -->
      <div class="form-box">
        <h2>Send Us a Message</h2>
        <p>Fill out the form below and both you and our team will receive an email confirmation.</p>

        @if(session('success'))
          <div class="alert-success">
            ✓ {{ session('success') }}
          </div>
        @endif

        @if(session('error'))
          <div class="alert-error">
            ✕ {{ session('error') }}
          </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
          @csrf

          <div class="form-grid">
            <div class="form-group">
              <label for="name">YOUR NAME <span>*</span></label>
              <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="e.g. Jane Doe" required>
              @error('name')<span class="field-error">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
              <label for="email">EMAIL ADDRESS <span>*</span></label>
              <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="e.g. you@email.com" required>
              @error('email')<span class="field-error">{{ $message }}</span>@enderror
            </div>
          </div>

          <div class="form-grid">
            <div class="form-group">
              <label for="phone">PHONE NUMBER <span>*</span></label>
              <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" placeholder="e.g. +44 7397 087600" required>
              @error('phone')<span class="field-error">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
              <label for="subject">SUBJECT</label>
              <input type="text" name="subject" id="subject" value="{{ old('subject') }}" placeholder="e.g. Building Inquiry">
              @error('subject')<span class="field-error">{{ $message }}</span>@enderror
            </div>
          </div>

          <div class="form-grid full">
            <div class="form-group">
              <label for="message">MESSAGE <span>*</span></label>
              <textarea name="message" id="message" placeholder="Write your message or project details here..." required>{{ old('message') }}</textarea>
              @error('message')<span class="field-error">{{ $message }}</span>@enderror
            </div>
          </div>

          <button type="submit" class="btn btn-signal" style="padding:15px 36px; font-size:15px; margin-top:10px; cursor:pointer;">
            Submit Inquiry <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </button>

        </form>
      </div>

    </div>
  </div>
</main>

<!-- ===================== FOOTER ===================== -->
<footer>
  <div class="wrap">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="/" class="footer-logo" aria-label="MaxMark Builders Home">
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
          <li><a href="/">Home</a></li>
          <li><a href="/#about">About us</a></li>
          <li><a href="/#portfolio">Portfolio</a></li>
          <li><a href="/#faq">FAQ</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4>SERVICES</h4>
        <ul>
          <li><a href="/#services">Loft Conversions</a></li>
          <li><a href="/#services">House Extensions</a></li>
          <li><a href="/#services">Kitchens & Bathrooms</a></li>
          <li><a href="/#services">Electrical Works</a></li>
          <li><a href="/#services">Plumbing & Heating</a></li>
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
      <span>MaxMark Builders©. All rights reserved. 2026</span>
      <div style="display:flex;gap:20px;">
        <a href="#">Privacy Policy</a>
        <a href="#">Cookie Settings</a>
      </div>
    </div>
  </div>
</footer>

<script>
/* ---------- Header shrink on scroll ---------- */
const header = document.getElementById('siteHeader');
window.addEventListener('scroll', () => {
  if (header) header.classList.toggle('shrink', window.scrollY > 40);
}, { passive:true });

/* ---------- Mobile nav drawer ---------- */
const burgerBtn = document.getElementById('burgerBtn');
const navDrawer = document.getElementById('navDrawer');
const closeDrawer = document.getElementById('closeDrawer');
burgerBtn?.addEventListener('click', () => navDrawer.classList.add('open'));
closeDrawer?.addEventListener('click', () => navDrawer.classList.remove('open'));
navDrawer?.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navDrawer.classList.remove('open')));
</script>
</body>
</html>
