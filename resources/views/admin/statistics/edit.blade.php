{{-- resources/views/admin/statistics/edit.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Edit Statistic')

@section('content')
<div class="card create-edit-card">
    <h1>Edit Statistic</h1>
    <p class="text-muted">Update statistic information</p>

    <form action="{{ route('admin.statistics.update', $statistic->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" 
                           value="{{ old('title', $statistic->title) }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="value" class="form-label">Value (%)</label>
                    <input type="number" name="value" id="value" class="form-control" 
                           min="0" max="100" value="{{ old('value', $statistic->value) }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="icon" class="form-label">Icon (FontAwesome)</label>
                    <input type="text" name="icon" id="icon" class="form-control" 
                           value="{{ old('icon', $statistic->icon) }}" placeholder="e.g. fas fa-code">
                    @if($statistic->icon)
                    <div class="current-icon">
                        <span class="text-muted small">Current icon:</span>
                        <i class="{{ $statistic->icon }}"></i>
                        <span class="text-muted small">{{ $statistic->icon }}</span>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="order" class="form-label">Display Order</label>
                    <input type="number" name="order" id="order" class="form-control" 
                           value="{{ old('order', $statistic->order) }}">
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Statistic
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