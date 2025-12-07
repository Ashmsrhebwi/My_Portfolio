@extends('admin.layouts.master')

@section('title', 'Add Admin')

@section('content')
<div class="card">
    <h1>Add New Admin</h1>
    <span class="text-muted">Create a new admin user</span>

    <form action="{{ route('admin.admins.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name" class="form-label">Full Name *</label>
            <input type="text" name="name" id="name" class="form-control" 
                   value="{{ old('name') }}" placeholder="Enter admin name" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email Address *</label>
            <input type="email" name="email" id="email" class="form-control" 
                   value="{{ old('email') }}" placeholder="Enter admin email" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="form-label">Password *</label>
                    <input type="password" name="password" id="password" class="form-control" 
                           placeholder="Enter password" required>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password *</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                           class="form-control" placeholder="Confirm password" required>
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Create Admin
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