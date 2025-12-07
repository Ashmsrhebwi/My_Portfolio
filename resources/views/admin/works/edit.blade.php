{{-- resources/views/admin/works/edit.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Edit Work')

@section('content')
<div class="card create-edit-card">
    <h1>Edit Work</h1>
    <p class="text-muted">Update project information</p>

    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <div class="d-flex align-items-center gap-2 mb-2">
                <i class="fas fa-exclamation-triangle"></i>
                <strong>Please fix the following errors:</strong>
            </div>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.works.update', $work) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Project Title</label>
                    <input type="text" name="title" id="title" class="form-control" 
                           value="{{ old('title', $work->title) }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="link" class="form-label">Project Link</label>
                    <input type="url" name="link" id="link" class="form-control" 
                           value="{{ old('link', $work->link) }}">
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea name="description" id="description" class="form-control" 
                      rows="4">{{ old('description', $work->description) }}</textarea>
        </div>

        <div class="form-group mb-4">
            <label for="image" class="form-label">Image URL</label>
            <input type="url" name="image" id="image" class="form-control" 
                   value="{{ old('image', $work->image) }}">
            @if($work->image)
            <div class="mt-2">
                <span class="text-muted small">Current image:</span>
                <img src="{{ $work->image }}" width="80" height="80" 
                     alt="Current image">
            </div>
            @endif
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Work
            </button>
            <a href="{{ route('admin.works.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Cancel
            </a>
        </div>
    </form>
</div>
@endsection

@push('styles')
@include('admin.works.styles')
@endpush