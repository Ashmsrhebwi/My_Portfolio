{{-- resources/views/admin/statistics/edit.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Edit Statistic')

@section('content')
<div class="card">
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
                    <div class="current-icon mt-2">
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
<style>
    .card {
        background: var(--dark-card);
        border-radius: var(--border-radius);
        padding: 30px;
        border: 1px solid var(--border);
        max-width: 800px;
        margin: 0 auto;
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

    .btn-secondary {
        background: var(--border);
        color: var(--text);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: var(--text);
        font-weight: 500;
    }

    .form-control {
        width: 100%;
        padding: 12px 16px;
        border-radius: var(--border-radius);
        border: 1px solid var(--border);
        background: rgba(30, 41, 59, 0.5);
        color: var(--text);
        font-size: 15px;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary);
    }

    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .text-muted {
        color: var(--text-muted);
    }

    .current-icon {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 12px;
        background: rgba(124, 58, 237, 0.1);
        border-radius: var(--border-radius);
    }

    .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    @media (max-width: 768px) {
        .card {
            padding: 25px;
            margin: 0;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
        
        .row {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush