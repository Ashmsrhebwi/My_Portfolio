@extends('admin.layouts.master')

@section('title', 'Edit Admin')

@section('content')
<div class="card">
    <h1>Edit Admin: {{ $admin->name }}</h1>
    <span class="text-muted">Update admin information</span>

    <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name" class="form-label">Full Name *</label>
            <input type="text" name="name" id="name" class="form-control" 
                   value="{{ old('name', $admin->name) }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email Address *</label>
            <input type="email" name="email" id="email" class="form-control" 
                   value="{{ old('email', $admin->email) }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="form-label">New Password (Optional)</label>
                    <input type="password" name="password" id="password" class="form-control" 
                           placeholder="Leave empty to keep current password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                           class="form-control" placeholder="Confirm new password">
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Admin
            </button>
            <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Cancel
            </a>
        </div>
    </form>
</div>
@endsection

@push('styles')
@include('admin.admins.styles')
@endpush