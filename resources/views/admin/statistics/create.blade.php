{{-- resources/views/admin/statistics/create.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Add Statistic')

@section('content')
<div class="card create-edit-card">
    <h1>Add New Statistic</h1>
    <p class="text-muted">Create a new statistic for your portfolio</p>

    <form action="{{ route('admin.statistics.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" 
                           placeholder="e.g. Web Development" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="value" class="form-label">Value (%)</label>
                    <input type="number" name="value" id="value" class="form-control" 
                           min="0" max="100" placeholder="e.g. 85" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="icon" class="form-label">Icon (FontAwesome)</label>
                    <input type="text" name="icon" id="icon" class="form-control" 
                           placeholder="e.g. fas fa-code">
                    <div class="text-muted small mt-1">
                        Example: fas fa-code, fab fa-js, fas fa-palette
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="order" class="form-label">Display Order</label>
                    <input type="number" name="order" id="order" class="form-control" 
                           placeholder="e.g. 1" value="0">
                    <div class="text-muted small mt-1">
                        Lower numbers appear first
                    </div>
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Create Statistic
            </button>
            <a href="{{ route('admin.statistics.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Cancel
            </a>
        </div>
    </form>
</div>
@endsection

@push('styles')
@include('admin.statistics.styles')
@endpush