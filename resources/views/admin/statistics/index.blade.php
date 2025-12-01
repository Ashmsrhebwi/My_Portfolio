{{-- resources/views/admin/statistics/index.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Statistics')

@section('content')
<div class="card">
    <h1>Statistics</h1>
    <p class="text-muted">Manage your portfolio statistics and skills</p>
    
    <a href="{{ route('admin.statistics.create') }}" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Add New Statistic
    </a>

    @if($statistics->count() > 0)
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Value</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($statistics as $stat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            @if($stat->icon)
                                <i class="{{ $stat->icon }}"></i>
                            @endif
                            <span>{{ $stat->title }}</span>
                        </div>
                    </td>
                    <td>
                        <span class="badge">{{ $stat->value }}%</span>
                    </td>
                    <td>
                        <span class="text-muted">{{ $stat->order }}</span>
                    </td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.statistics.edit', $stat->id) }}" 
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.statistics.delete', $stat->id) }}" 
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure you want to delete this statistic?')">
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
        <i class="fas fa-chart-bar"></i>
        <h3>No Statistics Yet</h3>
        <p class="text-muted">Start by adding your first statistic</p>
        <a href="{{ route('admin.statistics.create') }}" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Add First Statistic
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

    .badge {
        background: var(--primary);
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
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