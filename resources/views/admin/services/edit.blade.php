@extends('admin.layouts.master')

@section('title', 'Edit Service')

@section('content')
<div class="card">
    <h1>Edit Service</h1>
    <span class="text-muted">Update service information</span>
    
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Service Name *</label>
            <input type="text" name="name" id="name" class="form-control" 
                   value="{{ old('name', $service->name) }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="icon">Icon Class *</label>
            <input type="text" name="icon" id="icon" class="form-control" 
                   value="{{ old('icon', $service->icon) }}" required placeholder="fas fa-cog">
            <small class="text-muted">Enter Font Awesome icon class (e.g., fas fa-cog, fas fa-laptop-code)</small>
            @error('icon')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            
            <div class="icon-preview">
                <h6>Preview:</h6>
                <div class="preview-box">
                    <i id="icon-preview" class="{{ old('icon', $service->icon) }}"></i>
                    <span id="icon-text">{{ old('icon', $service->icon) }}</span>
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Service
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
@include('admin.services.editScripts')
@endpush