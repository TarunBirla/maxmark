<!-- ===================== FOOTER ===================== -->
<footer>
  <div class="wrap">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="{{ route('home') }}" class="footer-logo" aria-label="MaxMark Builders Home">
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
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('home') }}#about">About us</a></li>
          <li><a href="{{ route('home') }}#projects">Projects</a></li>
          <li><a href="{{ route('home') }}#portfolio">Portfolio</a></li>
          <li><a href="{{ route('home') }}#faq">FAQ</a></li>
          <li><a href="{{ route('contact.show') }}">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4>SERVICES</h4>
        <ul>
          <li><a href="{{ route('services.show', 'loft-conversions') }}">Loft Conversions</a></li>
          <li><a href="{{ route('services.show', 'house-extensions') }}">House Extensions</a></li>
          <li><a href="{{ route('services.show', 'kitchens-bathrooms') }}">Kitchens & Bathrooms</a></li>
          <li><a href="{{ route('services.show', 'electrical-works') }}">Electrical Works</a></li>
          <li><a href="{{ route('services.show', 'plumbing-heating') }}">Plumbing & Heating</a></li>
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
