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
@include('admin.statistics.styles')
@endpush