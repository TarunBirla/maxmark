@extends('layouts.app')

@section('title', $service['title'] . ' — MaxMark Builders London')
@section('meta_description', $service['summary'])

@push('styles')
<style>
/* ===================== SERVICE HERO ===================== */
.service-hero {
  background: var(--ink);
  color: var(--paper-2);
  padding: 88px 0 64px;
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid var(--line-dark);
}
.service-hero .grid-bg {
  position: absolute; inset: 0;
  background-image: linear-gradient(var(--line-dark) 1px, transparent 1px), linear-gradient(90deg, var(--line-dark) 1px, transparent 1px);
  background-size: var(--grid-unit) var(--grid-unit);
  opacity: .4;
}
.service-hero-inner { position: relative; z-index: 2; }
.breadcrumbs {
  font-family: 'JetBrains Mono', monospace;
  font-size: 12px;
  color: var(--slate-light);
  margin-bottom: 16px;
  display: flex;
  align-items: center;
  gap: 8px;
}
.breadcrumbs a { color: var(--brass-light); transition: color .2s; }
.breadcrumbs a:hover { color: var(--paper-2); }
.service-hero h1 {
  font-size: clamp(36px, 4.5vw, 56px);
  margin: 14px 0 18px;
  max-width: 800px;
}
.service-hero p.summary-lead {
  font-size: 18px;
  color: var(--paper-2);
  line-height: 1.6;
  max-width: 780px;
  font-weight: 500;
  margin-bottom: 28px;
}
.hero-cta-btns { display: flex; gap: 16px; flex-wrap: wrap; }

/* ===================== OVERVIEW & FEATURES ===================== */
.service-overview-section { padding: 80px 0; background: var(--paper); }
.overview-grid {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: 48px;
  align-items: start;
}
.overview-text h2 { font-size: 32px; color: var(--ink); margin-bottom: 18px; }
.overview-text p { color: var(--slate); font-size: 16px; line-height: 1.7; margin-bottom: 24px; }

.features-card {
  background: var(--paper-2);
  border: 1px solid var(--line);
  padding: 36px;
  border-radius: 2px;
  margin-top: 30px;
}
.features-card h3 { font-size: 20px; color: var(--ink); margin-bottom: 20px; font-family: 'Space Grotesk', sans-serif; }
.features-list { display: flex; flex-direction: column; gap: 14px; }
.features-list li {
  display: flex; align-items: flex-start; gap: 12px;
  font-size: 15px; color: var(--ink); font-weight: 500;
}
.features-list li svg {
  width: 20px; height: 20px; stroke: var(--brass); flex-shrink: 0; margin-top: 2px;
}

.sticky-sidebar-card {
  background: var(--ink-2);
  color: var(--paper-2);
  padding: 36px;
  border: 1px solid var(--line-dark);
  position: sticky;
  top: 104px;
}
.sticky-sidebar-card h3 { font-size: 22px; margin-bottom: 12px; color: var(--paper-2); }
.sticky-sidebar-card p { font-size: 14px; color: var(--slate-light); margin-bottom: 24px; line-height: 1.6; }

/* ===================== GALLERY SECTION ===================== */
.gallery-section {
  padding: 88px 0;
  background: var(--ink);
  color: var(--paper-2);
  border-top: 1px solid var(--line-dark);
  border-bottom: 1px solid var(--line-dark);
}
.gallery-section .section-head h2 { font-size: 36px; color: var(--paper-2); }
.gallery-section .section-head p { color: var(--slate-light); font-size: 16px; margin-top: 8px; }

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 48px;
}
.gallery-item {
  position: relative;
  overflow: hidden;
  border: 1px solid var(--line-dark);
  background: var(--ink-2);
  border-radius: 2px;
  cursor: pointer;
}
.gallery-item.big {
  grid-column: span 2;
  aspect-ratio: 16/9;
}
.gallery-item.medium {
  grid-column: span 1;
  aspect-ratio: 4/3;
}
.gallery-item.small {
  grid-column: span 1;
  aspect-ratio: 1/1;
}
.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform .6s var(--ease);
}
.gallery-item:hover img {
  transform: scale(1.08);
}
.gallery-item-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 40%, rgba(7, 13, 30, 0.85) 100%);
  opacity: 0;
  transition: opacity .35s var(--ease);
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 24px;
}
.gallery-item:hover .gallery-item-overlay {
  opacity: 1;
}
.gallery-item-overlay h4 { font-size: 18px; color: var(--paper-2); margin-bottom: 4px; }
.gallery-item-overlay p { font-size: 13px; color: var(--brass-light); font-family: 'JetBrains Mono', monospace; }

/* ===================== PROCESS SECTION ===================== */
.process-section { padding: 88px 0; background: var(--paper-2); }
.process-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-top: 48px; }
.process-card {
  background: var(--paper);
  border: 1px solid var(--line);
  padding: 32px 24px;
  position: relative;
}
.process-card .p-num {
  font-family: 'JetBrains Mono', monospace;
  font-size: 14px;
  color: var(--brass);
  font-weight: 700;
  margin-bottom: 16px;
  display: block;
}
.process-card h3 { font-size: 18px; color: var(--ink); margin-bottom: 10px; }
.process-card p { font-size: 14px; color: var(--slate); line-height: 1.6; }

/* ===================== OTHER SERVICES CAROUSEL/GRID ===================== */
.other-services-section { padding: 80px 0; background: var(--paper); }
.services-nav-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 36px; }
.svc-nav-card {
  background: var(--paper-2);
  border: 1px solid var(--line);
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: all .25s var(--ease);
}
.svc-nav-card:hover {
  border-color: var(--brass);
  background: var(--ink);
  color: var(--paper-2);
  transform: translateY(-2px);
}
.svc-nav-card h4 { font-size: 16px; margin-bottom: 6px; }
.svc-nav-card span { font-size: 12px; font-family: 'JetBrains Mono', monospace; color: var(--brass); }

/* Lightbox Modal */
.lightbox-modal {
  display: none;
  position: fixed; inset: 0; z-index: 500;
  background: rgba(7, 13, 30, 0.95);
  backdrop-filter: blur(8px);
  align-items: center; justify-content: center;
  padding: 40px;
}
.lightbox-modal.active { display: flex; }
.lightbox-modal img { max-width: 90vw; max-height: 80vh; object-fit: contain; border: 1px solid var(--line-dark); }
.lightbox-close {
  position: absolute; top: 24px; right: 24px;
  color: var(--paper-2); font-size: 32px; cursor: pointer;
  width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
}

@media (max-width: 1080px) {
  .overview-grid { grid-template-columns: 1fr; }
  .sticky-sidebar-card { position: static; }
  .gallery-grid { grid-template-columns: repeat(2, 1fr); }
  .gallery-item.big { grid-column: span 2; }
  .process-grid { grid-template-columns: repeat(2, 1fr); }
  .services-nav-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
  .service-hero { padding: 56px 0 40px; }
  .gallery-grid { grid-template-columns: 1fr; }
  .gallery-item.big { grid-column: span 1; aspect-ratio: 4/3; }
  .process-grid { grid-template-columns: 1fr; }
  .services-nav-grid { grid-template-columns: 1fr; }
  .hero-cta-btns { flex-direction: column; width: 100%; }
  .hero-cta-btns .btn { width: 100%; justify-content: center; text-align: center; }
}
@media (max-width: 480px) {
  .features-card { padding: 20px 16px; }
  .sticky-sidebar-card { padding: 24px 18px; }
  .process-card { padding: 24px 18px; }
  .svc-nav-card { padding: 16px; }
  .lightbox-modal { padding: 16px; }
}
</style>
@endpush

@section('content')

<!-- ===================== HERO BANNER ===================== -->
<section class="service-hero">
  <div class="grid-bg"></div>
  <div class="wrap service-hero-inner">
    <div class="breadcrumbs">
      <a href="{{ route('home') }}">Home</a> <span>/</span>
      <a href="{{ route('home') }}#services">Services</a> <span>/</span>
      <span style="color: var(--paper-2);">{{ $service['title'] }}</span>
    </div>
    
    <span class="eyebrow">STEP {{ $service['number'] }} · {{ $service['eyebrow'] }}</span>
    <h1>{{ $service['title'] }}</h1>
    <p class="summary-lead">{{ $service['summary'] }}</p>

    <div class="hero-cta-btns">
      <a href="{{ route('home') }}#quote" class="btn btn-brass">
        Get Free Quote for {{ $service['title'] }}
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a href="tel:+447397087600" class="btn btn-outline">Call +44 7397 087600</a>
    </div>
  </div>
</section>

<!-- ===================== OVERVIEW & FEATURES ===================== -->
<section class="service-overview-section">
  <div class="wrap">
    <div class="overview-grid">
      
      <!-- Left Column: Detailed Description -->
      <div class="overview-text">
        <h2>Professional {{ $service['title'] }} Services in London</h2>
        <p>{{ $service['overview'] }}</p>
        
        <div class="features-card">
          <h3>Key Features & Standards Included</h3>
          <ul class="features-list">
            @foreach($service['features'] as $feature)
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M20 6L9 17l-5-5"/>
                </svg>
                <span>{{ $feature }}</span>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

      <!-- Right Column: Sticky Quote Card -->
      <div>
        <div class="sticky-sidebar-card">
          <h3>Request a Fixed Quote</h3>
          <p>Book a free 60-second site visit and get a detailed written quote for your {{ strtolower($service['title']) }} project.</p>
          
          <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 20px;">
            <div style="font-size: 13px; color: var(--brass-light); font-family: 'JetBrains Mono', monospace;">✔ 5-Year Workmanship Guarantee</div>
            <div style="font-size: 13px; color: var(--brass-light); font-family: 'JetBrains Mono', monospace;">✔ Fully Insured (£5M Public Liability)</div>
            <div style="font-size: 13px; color: var(--brass-light); font-family: 'JetBrains Mono', monospace;">✔ Building Regs & Party Wall Approval</div>
          </div>

          <a href="{{ route('home') }}#quote" class="btn btn-brass" style="width: 100%;">
            Calculate {{ $service['title'] }} Cost
          </a>
          <a href="tel:+447397087600" class="btn btn-outline" style="width: 100%; margin-top: 10px;">
            Call 07397 087600
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===================== PHOTO GALLERY ===================== -->
<section class="gallery-section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow" style="color: var(--brass-light);">Project Gallery</span>
      <h2>Recent {{ $service['title'] }} Projects</h2>
      <p>Explore real work photos showcasing our craftsmanship, layouts, and high-end finishes across West London.</p>
    </div>

    <div class="gallery-grid">
      @foreach($service['gallery'] as $index => $item)
        <div class="gallery-item {{ $item['size'] ?? 'medium' }}" onclick="openLightbox('{{ $item['url'] }}', '{{ $item['title'] }}')">
          <img src="{{ $item['url'] }}" alt="{{ $item['title'] }}" loading="lazy">
          <div class="gallery-item-overlay">
            <h4>{{ $item['title'] }}</h4>
            <p>{{ $item['caption'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ===================== PROCESS STEPS ===================== -->
<section class="process-section">
  <div class="wrap">
    <div class="section-head center" style="text-align: center;">
      <span class="eyebrow" style="justify-content: center;">Step-by-step workflow</span>
      <h2>How We Deliver Your {{ $service['title'] }}</h2>
    </div>

    <div class="process-grid">
      @foreach($service['process'] as $p)
        <div class="process-card">
          <span class="p-num">STEP {{ $p['step'] }}</span>
          <h3>{{ $p['title'] }}</h3>
          <p>{{ $p['desc'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ===================== OTHER SERVICES BROWSER ===================== -->
<section class="other-services-section">
  <div class="wrap">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 16px;">
      <div>
        <span class="eyebrow">Explore More</span>
        <h2>Browse Other Services</h2>
      </div>
      <a href="{{ route('home') }}#services" class="btn btn-outline" style="color: var(--ink); border-color: var(--line);">View All Services</a>
    </div>

    <div class="services-nav-grid">
      @foreach($allServices as $otherSlug => $otherService)
        @if($otherSlug !== $service['slug'])
          <a href="{{ route('services.show', $otherSlug) }}" class="svc-nav-card">
            <div>
              <span>{{ $otherService['number'] }}</span>
              <h4>{{ $otherService['title'] }}</h4>
            </div>
            <div style="font-size: 12px; color: var(--slate); margin-top: 10px;">Learn more →</div>
          </a>
        @endif
      @endforeach
    </div>
  </div>
</section>

<!-- Lightbox Modal -->
<div class="lightbox-modal" id="lightboxModal" onclick="closeLightbox()">
  <span class="lightbox-close">&times;</span>
  <img id="lightboxImg" src="" alt="Enlarged Project Photo">
</div>

@endsection

@push('scripts')
<script>
function openLightbox(url, title) {
  const modal = document.getElementById('lightboxModal');
  const img = document.getElementById('lightboxImg');
  if (modal && img) {
    img.src = url;
    img.alt = title;
    modal.classList.add('active');
  }
}
function closeLightbox() {
  const modal = document.getElementById('lightboxModal');
  if (modal) modal.classList.remove('active');
}
</script>
@endpush
