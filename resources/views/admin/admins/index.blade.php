@extends('admin.layouts.master')

@section('title', 'Manage Admins')

@section('content')
<div class="card">
    <h1>Manage Admins</h1>
    <span class="text-muted">Add, edit or remove admin users</span>
    
    <a href="{{ route('admin.admins.create') }}" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Add New Admin
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

    @if($admins->count() > 0)
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="admin-avatar">
                                {{ strtoupper(substr($admin->name, 0, 1)) }}
                            </div>
                            <span>{{ $admin->name }}</span>
                            @if($admin->id == auth()->guard('admin')->id())
                            <span class="badge bg-primary">You</span>
                            @endif
                        </div>
                    </td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        @if($admin->created_at)
                            {{ $admin->created_at->format('Y-m-d') }}
                        @else
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.admins.edit', $admin->id) }}" 
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            @if($admin->id != auth()->guard('admin')->id())
                            <form action="{{ route('admin.admins.destroy', $admin->id) }}" 
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure you want to delete this admin?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="empty-state">
        <i class="fas fa-users"></i>
        <h3>No Admins Yet</h3>
        <p class="text-muted">Start by adding your first admin</p>
        <a href="{{ route('admin.admins.create') }}" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Add First Admin
        </a>
    </div>
    @endif
</div>
@endsection

@push('styles')
@include('admin.admins.styles')
@endpush