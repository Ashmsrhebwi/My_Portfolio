@extends('admin.layouts.master')

@section('content')
<div class="card">
    <h1>Edit Service</h1>
    
    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Service Name *</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $service->name) }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="icon">Icon Class *</label>
            <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon', $service->icon) }}" required placeholder="fas fa-cog">
            <small class="text-muted">Enter Font Awesome icon class (e.g., fas fa-cog, fas fa-laptop-code)</small>
            @error('icon')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            
            <div class="icon-preview mt-2">
                <h6>Preview:</h6>
                <div class="preview-box">
                    <i id="icon-preview" class="{{ $service->icon }}"></i>
                    <span id="icon-text">{{ $service->icon }}</span>
                </div>
            </div>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Update Service
            </button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
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
    max-width: 600px;
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
    font-size: 14px;
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
    margin-bottom: 25px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: var(--text);
    font-weight: 500;
    font-size: 14px;
}

.form-control {
    width: 100%;
    padding: 14px 16px;
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
    font-size: 13px;
}

.preview-box {
    padding: 15px;
    border: 1px solid var(--border);
    border-radius: var(--border-radius);
    background: rgba(30, 41, 59, 0.3);
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: var(--text);
}

#icon-preview {
    font-size: 24px;
    color: var(--primary);
}

.text-danger {
    color: #ef4444;
    font-size: 13px;
    margin-top: 5px;
    display: block;
}

@media (max-width: 768px) {
    .card {
        padding: 25px;
        margin: 0 15px;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .card {
        padding: 20px;
    }
    
    h1 {
        font-size: 24px;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const iconInput = document.getElementById('icon');
    const iconPreview = document.getElementById('icon-preview');
    const iconText = document.getElementById('icon-text');
    
    if (iconInput && iconPreview && iconText) {
        iconInput.addEventListener('input', function() {
            const iconClass = this.value.trim();
            iconPreview.className = iconClass;
            iconText.textContent = iconClass;
        });
    }
});
</script>
@endpush