@extends('admin.layouts.master')

@section('content')
<div class="card">
    <h1>Our Services</h1>
    <p class="text-muted">Manage your portfolio services and offerings</p>
    
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add New Service
    </a>

    @if($services->count() > 0)
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Service Name</th>
                <th>Icon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $i => $service)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $service->name }}</td>
                <td>
                    @if($service->icon)
                        <i class="{{ $service->icon }}"></i>
                        <span class="text-muted" style="margin-left: 8px;">{{ $service->icon }}</span>
                    @else
                        <span class="text-muted">No icon</span>
                    @endif
                </td>
                <td>
                    <div class="actions">
                        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this service?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="empty-state">
        <i class="fas fa-cogs"></i>
        <h3>No Services Yet</h3>
        <p class="text-muted">Start by adding your first service</p>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Add First Service
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

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(124, 58, 237, 0.4);
    }

    .btn-warning {
        background: #f59e0b;
        color: white;
    }

    .btn-danger {
        background: #ef4444;
        color: white;
    }

    .btn-sm {
        padding: 8px 16px;
        font-size: 13px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: var(--dark-card);
        border-radius: var(--border-radius);
        overflow: hidden;
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

    .mb-3 {
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