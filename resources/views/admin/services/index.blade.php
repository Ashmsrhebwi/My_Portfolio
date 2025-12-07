@extends('admin.layouts.master')

@section('title', 'Manage Services')

@section('content')
<div class="card">
    <h1>Our Services</h1>
    <span class="text-muted">Manage your portfolio services and offerings</span>
    
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Add New Service
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
        </div>
    @endif

    @if($services->count() > 0)
    <div class="table-container">
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
                    <td>
                        <strong>{{ $service->name }}</strong>
                    </td>
                    <td>
                        @if($service->icon)
                            <div class="d-flex align-items-center gap-3">
                                <div class="service-icon-preview">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                                <span class="text-muted">{{ $service->icon }}</span>
                            </div>
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
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this service?')">
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
@include('admin.services.styles')
@endpush

@push('scripts')
@include('admin.services.indexScripts')
@endpush