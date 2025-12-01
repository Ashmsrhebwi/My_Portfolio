{{-- resources/views/admin/works/index.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Our Works')

@section('content')
<div class="card">
    <h1>Our Works</h1>
    <p class="text-muted">Manage your portfolio projects and works</p>

    <a href="{{ route('admin.works.create') }}" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Add New Work
    </a>

    @if(session('success'))
        <div class="alert alert-success mb-4">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    @if($works->count() > 0)
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($works as $i => $work)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>
                        <strong>{{ $work->title }}</strong>
                    </td>
                    <td>
                        <span class="text-muted">
                            {{ Str::limit($work->description, 50) }}
                        </span>
                    </td>
                    <td>
                        @if($work->image)
                        <img src="{{ $work->image }}" width="60" height="60" 
                             style="object-fit: cover; border-radius: 8px;" 
                             alt="{{ $work->title }}">
                        @else
                        <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>
                        @if($work->link)
                        <a href="{{ $work->link }}" target="_blank" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-external-link-alt"></i> Visit
                        </a>
                        @else
                        <span class="text-muted">No link</span>
                        @endif
                    </td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.works.edit', $work) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.works.destroy', $work) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure you want to delete this work?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="empty-state">
        <i class="fas fa-briefcase"></i>
        <h3>No Works Yet</h3>
        <p class="text-muted">Start by adding your first project</p>
        <a href="{{ route('admin.works.create') }}" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Add First Work
        </a>
    </div>
    @endif
</div>
@endsection

@push('styles')
<style>
    .card {
        background: var(--dark-card);
        border-radius: var(--border-radius);
        padding: 30px;
        border: 1px solid var(--border);
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

    .btn-warning {
        background: #f59e0b;
        color: white;
    }

    .btn-danger {
        background: #ef4444;
        color: white;
    }

    .btn-outline-primary {
        border: 1px solid var(--primary);
        color: var(--primary);
        background: transparent;
    }

    .btn-outline-primary:hover {
        background: var(--primary);
        color: white;
    }

    .btn-sm {
        padding: 8px 16px;
        font-size: 13px;
    }

    .table-container {
        overflow-x: auto;
        margin-top: 20px;
        border-radius: var(--border-radius);
        border: 1px solid var(--border);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: var(--dark-card);
    }

    th, td {
        padding: 15px 20px;
        text-align: left;
        border-bottom: 1px solid var(--border);
    }

    th {
        background: rgba(51, 65, 85, 0.5);
        color: var(--primary-light);
        font-weight: 600;
    }

    tr:hover {
        background: rgba(124, 58, 237, 0.05);
    }

    .actions {
        display: flex;
        gap: 8px;
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: var(--text-muted);
    }

    .empty-state i {
        font-size: 48px;
        margin-bottom: 15px;
        opacity: 0.5;
    }

    .alert {
        border: none;
        border-radius: var(--border-radius);
        padding: 16px 20px;
        margin-bottom: 20px;
    }

    .alert-success {
        background: rgba(52, 211, 153, 0.1);
        color: #34d399;
        border: 1px solid rgba(52, 211, 153, 0.2);
    }

    .mb-4 {
        margin-bottom: 20px;
    }

    .text-muted {
        color: var(--text-muted);
    }

    @media (max-width: 768px) {
        .actions {
            flex-direction: column;
        }
        
        .btn-sm {
            width: 100%;
            justify-content: center;
        }
    }
</style>
@endpush