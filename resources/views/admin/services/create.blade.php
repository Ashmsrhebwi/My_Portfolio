@extends('admin.layouts.master')

@section('title', 'Add Service')

@section('content')
<div class="card">
    <h1>Add New Service</h1>
    <span class="text-muted">Create a new service for your portfolio</span>
    
    <form action="{{ route('admin.services.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">Service Name *</label>
            <input type="text" name="name" id="name" class="form-control" 
                   value="{{ old('name') }}" placeholder="e.g. Web Development" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="icon">Icon Class *</label>
            <input type="text" name="icon" id="icon" class="form-control" 
                   value="{{ old('icon') }}" required placeholder="fas fa-cog">
            <small class="text-muted">Enter Font Awesome icon class (e.g., fas fa-cog, fas fa-laptop-code)</small>
            @error('icon')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            
            <div class="icon-preview">
                <h6>Preview:</h6>
                <div class="preview-box">
                    <i id="icon-preview" class="{{ old('icon', 'fas fa-cog') }}"></i>
                    <span id="icon-text">{{ old('icon', 'fas fa-cog') }}</span>
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Save Service
            </button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Cancel
            </a>
        </div>
    </form>
</div>
@endsection

@push('styles')
@include('admin.services.styles')
@endpush

@push('scripts')
@include('admin.services.createScripts')
@endpush