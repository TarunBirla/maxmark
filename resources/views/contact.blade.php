@extends('layouts.app')

@section('title', 'Contact Us — MaxMark Builders')
@section('meta_description', 'Get in touch with MaxMark Builders for a free quote or site visit on loft conversions, extensions, and renovations across West London.')

@push('styles')
<style>
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
.contact-hero h1{font-size:clamp(28px,4.5vw,56px); margin:18px 0 16px;}
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
.info-card a, .info-card p{font-size:18px; font-weight:600; color:var(--paper-2); line-height:1.4; word-break:break-word;}
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
  transition:border-color .25s; width:100%;
}
.form-group input:focus, .form-group textarea:focus{border-color:var(--brass-light);}
.form-group textarea{resize:vertical; min-height:130px;}
.field-error{color:var(--signal); font-size:12px; font-weight:500;}

.mobile-bar{
  display:none; position:fixed; bottom:0; left:0; right:0; z-index:200; background:var(--ink); border-top:1px solid var(--line-dark);
  padding:8px 12px; gap:8px;
}
.mobile-bar a{flex:1; display:flex; flex-direction:column; align-items:center; gap:3px; font-size:10.5px; color:var(--paper-2); padding:6px 0; font-weight:600; text-align:center;}
.mobile-bar a svg{width:19px;height:19px; stroke:var(--brass-light);}
.mobile-bar a.primary{background:var(--brass); border-radius:6px; color:var(--ink); padding:6px 8px;}

@media(max-width:1080px){
  .contact-grid{grid-template-columns:1fr;}
}
@media(max-width:900px){
  .mobile-bar{display:flex;}
  body{padding-bottom:58px;}
}
@media(max-width:640px){
  .contact-main{padding:48px 0;}
  .form-grid{grid-template-columns:1fr;}
  .form-box{padding:24px 16px;}
  .form-box button{width:100%;}
  .info-card{padding:20px 16px; gap:14px;}
  .info-card a, .info-card p{font-size:16px;}
}
</style>
@endpush

@section('content')
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

<div class="mobile-bar">
  <a href="tel:+447397087600"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 011.12 4.18 2 2 0 013.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L7.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.3 12.3 0 002.81.68A2 2 0 0122 16.92z"/></svg>Call</a>
  <a href="https://wa.me/447397087600" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>WhatsApp</a>
  <a href="{{ route('home') }}#quote" class="primary"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>Free Quote</a>
</div>
@endsection
