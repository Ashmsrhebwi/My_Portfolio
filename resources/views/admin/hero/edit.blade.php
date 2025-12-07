@extends('admin.layouts.master')

@section('title', 'Edit Hero Section')

@section('content')
<div class="card">
    <h1>Edit Hero Section</h1>
    <p>Update your portfolio's main presentation section</p>

    @if(session('success'))
        <div class="success">
            <i class="fas fa-check-circle"></i>
            {{ session('success') }}
        </div>
    @endif

    <!-- Preview Section -->
    <div class="preview-card">
        <div class="preview-header">
            @if($hero->profile_image)
                <img src="{{ asset('storage/' . $hero->profile_image) }}" 
                     class="preview-avatar" 
                     alt="{{ $hero->name }}">
            @else
                <div class="preview-avatar" style="display: flex; align-items: center; justify-content: center; background: var(--primary);">
                    <i class="fas fa-user fa-2x" style="color: white;"></i>
                </div>
            @endif
            
            <div class="preview-info">
                <h3>{{ $hero->name }}</h3>
                <div class="role">{{ $hero->role }}</div>
                <div class="bio">{{ Str::limit($hero->bio, 100) }}</div>
            </div>
        </div>
        
        <div class="preview-actions">
            @if($hero->open_to_work)
                <span class="badge available">
                    <i class="fas fa-circle fa-xs"></i> Open to Work
                </span>
            @endif
            
            @if($hero->cv_file)
                <a href="{{ route('hero.downloadCv', $hero->cv_file) }}" 
                   class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-download"></i> Download CV
                </a>
            @endif
        </div>
    </div>

    <!-- Edit Form -->
    <form action="{{ route('admin.hero.update') }}" method="POST" enctype="multipart/form-data" class="hero-form">
        @csrf
        
        <div class="form-section">
            <h3>Basic Information</h3>
            <div class="row">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" name="name" id="name" 
                           value="{{ old('name', $hero->name) }}" 
                           placeholder="Enter your full name"
                           required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="role">Professional Role *</label>
                    <input type="text" name="role" id="role" 
                           value="{{ old('role', $hero->role) }}" 
                           placeholder="e.g. Full Stack Developer"
                           required>
                    @error('role')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="bio">Professional Bio</label>
                <textarea name="bio" id="bio" 
                          placeholder="Write a compelling introduction about yourself..."
                          rows="4">{{ old('bio', $hero->bio) }}</textarea>
                @error('bio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-section">
            <h3>Media & Files</h3>
            <div class="row">
                <div class="form-group">
                    <label for="profile_image">Profile Image</label>
                    <input type="file" name="profile_image" id="profile_image" 
                           accept="image/*" class="form-control">
                    @error('profile_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @if($hero->profile_image)
                        <div class="file-info">
                            <i class="fas fa-image"></i>
                            <span>Current: {{ basename($hero->profile_image) }}</span>
                        </div>
                    @endif
                    <small class="text-muted">Recommended: 400x400px, JPG or PNG</small>
                </div>

                <div class="form-group">
                    <label for="cv_file">CV Document</label>
                    <input type="file" name="cv_file" id="cv_file" 
                           accept=".pdf,.doc,.docx" class="form-control">
                    @error('cv_file')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @if($hero->cv_file)
                        <div class="file-info">
                            <i class="fas fa-file-pdf"></i>
                            <span>Current: {{ basename($hero->cv_file) }}</span>
                        </div>
                    @endif
                    <small class="text-muted">Max: 5MB, PDF/DOC/DOCX</small>
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3>Availability</h3>
            <div class="toggle-group">
                <label class="switch">
                    <input type="checkbox" name="open_to_work" 
                           id="open_to_work" 
                           {{ $hero->open_to_work ? 'checked' : '' }}>
                    <span class="slider"></span>
                </label>
                <span class="toggle-label">Open to work opportunities</span>
            </div>
            <small class="text-muted">When enabled, a badge will appear on your portfolio</small>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Save Changes
            </button>
            <a href="{{ route('admin.dashboard.dashboard') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>
@endsection

@push('styles')
@include('admin.hero.styles')
@endpush

@push('scripts')
@include('admin.hero.heroScripts')
@endpush