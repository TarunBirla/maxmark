@extends('layouts.app')

@section('title', 'Admin — Video & Content Management | MaxMark Builders')

@push('styles')
<style>
.admin-header {
  background: var(--ink);
  color: var(--paper-2);
  padding: 48px 0 32px;
  border-bottom: 1px solid var(--line-dark);
}
.admin-header h1 {
  font-size: clamp(24px, 3.5vw, 36px);
  margin-bottom: 8px;
}
.admin-header p {
  color: var(--slate-light);
  font-size: 15px;
}

.admin-body {
  padding: 48px 0 80px;
  background: var(--paper);
}

.admin-grid {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: 36px;
  align-items: start;
}

.admin-card {
  background: var(--paper-2);
  border: 1px solid var(--line);
  padding: 32px;
  border-radius: 4px;
}

.admin-card h2 {
  font-size: 20px;
  color: var(--ink);
  margin-bottom: 20px;
  font-family: 'Space Grotesk', sans-serif;
  border-bottom: 1px solid var(--line);
  padding-bottom: 12px;
}

.form-group {
  margin-bottom: 22px;
}

.form-group label {
  display: block;
  font-size: 13px;
  font-weight: 600;
  color: var(--ink);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 8px;
  font-family: 'JetBrains Mono', monospace;
}

.form-control {
  width: 100%;
  padding: 12px 16px;
  background: var(--paper);
  border: 1px solid var(--line);
  border-radius: 2px;
  font-size: 15px;
  color: var(--ink);
  font-family: inherit;
  transition: border-color .2s;
}

.form-control:focus {
  outline: none;
  border-color: var(--brass);
}

textarea.form-control {
  min-height: 120px;
  resize: vertical;
}

.alert-success {
  background: rgba(46, 125, 50, 0.1);
  border: 1px solid #2e7d32;
  color: #1b5e20;
  padding: 14px 18px;
  border-radius: 2px;
  margin-bottom: 24px;
  font-size: 14px;
  font-weight: 500;
}

.alert-danger {
  background: rgba(198, 40, 40, 0.1);
  border: 1px solid #c62828;
  color: #b71c1c;
  padding: 14px 18px;
  border-radius: 2px;
  margin-bottom: 24px;
  font-size: 14px;
}

.video-preview-box {
  width: 100%;
  background: var(--ink);
  border: 1px solid var(--line-dark);
  border-radius: 4px;
  overflow: hidden;
  position: relative;
  aspect-ratio: 16/9;
}

.video-preview-box video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.video-meta {
  margin-top: 14px;
  font-size: 13px;
  color: var(--slate);
  font-family: 'JetBrains Mono', monospace;
  word-break: break-all;
}

@media (max-width: 900px) {
  .admin-grid {
    grid-template-columns: 1fr;
  }
}
</style>
@endpush

@section('content')

<!-- Header -->
<div class="admin-header">
  <div class="wrap">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
      <div>
        <span class="eyebrow" style="color: var(--brass-light);">ADMIN CONTROL PANEL</span>
        <h1>Welcome Video Section Management</h1>
        <p>Edit homepage video section text content, upload custom videos, or update CTA buttons.</p>
      </div>
      <a href="{{ route('home') }}#video" class="btn btn-outline" target="_blank" style="color: var(--paper-2); border-color: var(--line-dark);">
        View Homepage Video →
      </a>
    </div>
  </div>
</div>

<!-- Main Body -->
<div class="admin-body">
  <div class="wrap">

    @if(session('success'))
      <div class="alert-success">
        ✓ {{ session('success') }}
      </div>
    @endif

    @if($errors->any())
      <div class="alert-danger">
        <ul style="margin: 0; padding-left: 18px;">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="admin-grid">
      
      <!-- Left: Form -->
      <div class="admin-card">
        <h2>Content & Video Settings</h2>

        <form action="{{ route('admin.video.update') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="eyebrow">Eyebrow / Small Heading</label>
            <input type="text" name="eyebrow" id="eyebrow" class="form-control" value="{{ old('eyebrow', $videoSection['eyebrow'] ?? '') }}" required>
          </div>

          <div class="form-group">
            <label for="heading">Main Heading</label>
            <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading', $videoSection['heading'] ?? '') }}" required>
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description', $videoSection['description'] ?? '') }}</textarea>
          </div>

          <div class="form-group">
            <label for="button_text">Button Text (Optional)</label>
            <input type="text" name="button_text" id="button_text" class="form-control" value="{{ old('button_text', $videoSection['button_text'] ?? '') }}">
          </div>

          <div class="form-group">
            <label for="button_link">Button Link (Optional)</label>
            <input type="text" name="button_link" id="button_link" class="form-control" value="{{ old('button_link', $videoSection['button_link'] ?? '') }}">
          </div>

          <hr style="border: 0; border-top: 1px solid var(--line); margin: 24px 0;">

          <div class="form-group">
            <label for="video_file">Upload / Replace Video (MP4 / WebM / MOV up to 100MB)</label>
            <input type="file" name="video_file" id="video_file" class="form-control" accept="video/mp4,video/webm,video/ogg,video/quicktime">
            <small style="color: var(--slate); font-size: 12px; margin-top: 4px; display: block;">
              Select a new video file to replace the current default video on the Welcome page.
            </small>
          </div>

          <div class="form-group">
            <label for="poster_file">Upload Cover / Thumbnail Poster Image (Optional JPG/PNG)</label>
            <input type="file" name="poster_file" id="poster_file" class="form-control" accept="image/jpeg,image/png,image/webp">
            <small style="color: var(--slate); font-size: 12px; margin-top: 4px; display: block;">
              Custom thumbnail image displayed on the video card before play is clicked.
            </small>
          </div>

          <div style="display: flex; gap: 14px; margin-top: 28px; flex-wrap: wrap;">
            <button type="submit" class="btn btn-brass">
              Save Changes
            </button>
          </div>
        </form>
      </div>

      <!-- Right: Current Video Preview -->
      <div>
        <div class="admin-card">
          <h2>Active Video Preview</h2>
          
          <div class="video-preview-box">
            <video controls playsinline preload="metadata">
              <source src="{{ asset($videoSection['video_url'] ?? '/video.mp4') }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>

          <div class="video-meta">
            <strong>Current Video URL:</strong><br>
            <code>{{ asset($videoSection['video_url'] ?? '/video.mp4') }}</code>
          </div>

          <form action="{{ route('admin.video.reset') }}" method="POST" style="margin-top: 20px;" onsubmit="return confirm('Are you sure you want to reset back to default /video.mp4?')">
            @csrf
            <button type="submit" class="btn btn-outline" style="width: 100%; color: var(--ink); border-color: var(--line);">
              ↺ Reset to Default `/video.mp4`
            </button>
          </form>
        </div>
      </div>

    </div>

  </div>
</div>

@endsection
