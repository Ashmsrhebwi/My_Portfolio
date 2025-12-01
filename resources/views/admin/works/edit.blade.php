{{-- resources/views/admin/works/edit.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Edit Work')

@section('content')
<div class="card">
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
                     style="object-fit: cover; border-radius: 8px; margin-left: 10px;" 
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
<style>
    .card {
        background: var(--dark-card);
        border-radius: var(--border-radius);
        padding: 30px;
        border: 1px solid var(--border);
        max-width: 800px;
        margin: 0 auto;
    }

    h1 {
        color: var(--primary-light);
        margin-bottom: 10px;
        font-size: 28px;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        border-radius: var(--border-radius);
        text-decoration: none;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: var(--transition);
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
    }

    .btn-secondary {
        background: var(--border);
        color: var(--text);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: var(--text);
        font-weight: 500;
    }

    .form-control {
        width: 100%;
        padding: 12px 16px;
        border-radius: var(--border-radius);
        border: 1px solid var(--border);
        background: rgba(30, 41, 59, 0.5);
        color: var(--text);
        font-size: 15px;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }

    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .text-muted {
        color: var(--text-muted);
    }

    .alert {
        border: none;
        border-radius: var(--border-radius);
        padding: 16px 20px;
        margin-bottom: 20px;
    }

    .alert-danger {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
        border: 1px solid rgba(239, 68, 68, 0.2);
    }

    .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    @media (max-width: 768px) {
        .card {
            padding: 25px;
            margin: 0;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
        
        .row {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush