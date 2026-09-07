<!-- ===================== STICKY HEADER WRAPPER ===================== -->
<div class="header-sticky-wrapper">
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
      <a href="{{ route('home') }}" class="logo" aria-label="MaxMark Builders Home">
        <img src="{{ asset('logo.png') }}" alt="MaxMark Builders Logo">
      </a>
      <nav class="main-nav">
        <ul>
          <li><a class="nav-link {{ request()->routeIs('home') && !request()->has('slug') ? 'active' : '' }}" href="{{ route('home') }}" data-section="home">Home</a></li>
          <li><a class="nav-link" href="{{ route('home') }}#about" data-section="about">About</a></li>
          <li class="has-mega">
            <a class="nav-link {{ request()->routeIs('services.show') ? 'active' : '' }}" href="{{ route('home') }}#services" data-section="services">Services</a>
            <div class="mega">
              <a href="{{ route('services.show', 'loft-conversions') }}" class="{{ request()->is('services/loft-conversions') ? 'active-mega' : '' }}"><svg viewBox="0 0 24 24"><path d="M3 10l9-7 9 7M5 9v11h14V9"/></svg>Loft Conversions</a>
              <a href="{{ route('services.show', 'house-extensions') }}" class="{{ request()->is('services/house-extensions') ? 'active-mega' : '' }}"><svg viewBox="0 0 24 24"><path d="M4 21V9l8-6 8 6v12M9 21v-6h6v6"/></svg>House Extensions</a>
              <a href="{{ route('services.show', 'building-construction') }}" class="{{ request()->is('services/building-construction') ? 'active-mega' : '' }}"><svg viewBox="0 0 24 24"><path d="M3 21h18M6 21V8l6-4 6 4v13"/></svg>Building & Construction</a>
              <a href="{{ route('services.show', 'interior-renovation') }}" class="{{ request()->is('services/interior-renovation') ? 'active-mega' : '' }}"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4zM4 12h16"/></svg>Interior Renovation</a>
              <a href="{{ route('services.show', 'kitchens-bathrooms') }}" class="{{ request()->is('services/kitchens-bathrooms') ? 'active-mega' : '' }}"><svg viewBox="0 0 24 24"><path d="M4 10h16v10H4zM8 10V6a4 4 0 018 0v4"/></svg>Kitchens & Bathrooms</a>
              <a href="{{ route('services.show', 'plumbing-heating') }}" class="{{ request()->is('services/plumbing-heating') ? 'active-mega' : '' }}"><svg viewBox="0 0 24 24"><path d="M12 2s6 6 6 11a6 6 0 01-12 0c0-5 6-11 6-11z"/></svg>Plumbing & Heating</a>
              <a href="{{ route('services.show', 'electrical-works') }}" class="{{ request()->is('services/electrical-works') ? 'active-mega' : '' }}"><svg viewBox="0 0 24 24"><path d="M13 2L4 14h6l-1 8 9-12h-6l1-8z"/></svg>Electrical Works</a>
              <a href="{{ route('services.show', 'external-works') }}" class="{{ request()->is('services/external-works') ? 'active-mega' : '' }}"><svg viewBox="0 0 24 24"><path d="M3 20h18M5 20V10l7-6 7 6v10"/></svg>External Works</a>
            </div>
          </li>
          <li><a class="nav-link" href="{{ route('home') }}#projects" data-section="projects">Projects</a></li>
          <li><a class="nav-link" href="{{ route('home') }}#portfolio" data-section="portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="{{ route('home') }}#faq" data-section="faq">FAQ</a></li>
          <li><a class="nav-link {{ request()->routeIs('contact.show') ? 'active' : '' }}" href="{{ route('contact.show') }}" data-section="contact">Contact</a></li>
        </ul>
      </nav>
      <div class="header-actions">
        <a href="tel:+447397087600" class="icon-btn" aria-label="Call MaxMark Builders">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.68 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.32 1.85.55 2.81.68A2 2 0 0122 16.92z"/></svg>
        </a>
        <a href="{{ route('home') }}#quote" class="btn btn-brass">Get Free Quote <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        <button class="burger" id="burgerBtn" aria-label="Open menu">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
        </button>
      </div>
    </div>
  </header>
</div>

<div class="nav-drawer" id="navDrawer">
  <button class="close-drawer" id="closeDrawer" aria-label="Close menu"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 6l12 12M18 6L6 18"/></svg></button>
  <ul>
    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
    <li><a href="{{ route('home') }}#about">About</a></li>
    <li><a href="{{ route('home') }}#services" class="{{ request()->routeIs('services.show') ? 'active' : '' }}">Services</a></li>
    <li><a href="{{ route('home') }}#projects">Projects</a></li>
    <li><a href="{{ route('home') }}#portfolio">Portfolio</a></li>
    <li><a href="{{ route('home') }}#faq">FAQ</a></li>
    <li><a href="{{ route('contact.show') }}" class="{{ request()->routeIs('contact.show') ? 'active' : '' }}">Contact</a></li>
    <li><a href="{{ route('home') }}#quote" class="btn btn-brass" style="margin-top:20px;font-size:16px;">Get Free Quote</a></li>
  </ul>
</div>
