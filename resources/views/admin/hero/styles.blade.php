{{-- resources/views/admin/hero/styles.blade.php --}}
@push('styles')
<style>
.card {
    background: var(--dark-card);
    border-radius: var(--border-radius);
    padding: 30px;
    border: 1px solid var(--border);
    max-width: 1000px;
    margin: 0 auto;
}

h1 {
    color: var(--primary-light);
    margin-bottom: 10px;
    font-size: 28px;
}

p {
    color: var(--text-muted);
    margin-bottom: 30px;
}

.success {
    background: rgba(52, 211, 153, 0.1);
    color: #34d399;
    border: 1px solid rgba(52, 211, 153, 0.2);
    padding: 12px 16px;
    border-radius: var(--border-radius);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.success i {
    font-size: 18px;
}

.preview-card {
    background: var(--dark-card);
    border: 1px solid var(--border);
    border-radius: var(--border-radius);
    padding: 20px;
    margin-bottom: 30px;
    box-shadow: var(--shadow);
}

.preview-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
}

.preview-avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--primary);
}

.preview-info h3 {
    color: var(--primary-light);
    margin-bottom: 5px;
    font-size: 24px;
}

.preview-info .role {
    color: var(--primary);
    font-weight: 600;
    margin-bottom: 10px;
}

.preview-info .bio {
    color: var(--text-muted);
    line-height: 1.5;
}

.preview-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 15px;
    border-top: 1px solid var(--border);
}

.badge.available {
    background: rgba(34, 197, 94, 0.1);
    color: #22c55e;
    border: 1px solid rgba(34, 197, 94, 0.3);
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.badge.available i {
    font-size: 8px;
}

.hero-form {
    margin-top: 30px;
}

.form-section {
    background: rgba(30, 41, 59, 0.3);
    border: 1px solid var(--border);
    border-radius: var(--border-radius);
    padding: 25px;
    margin-bottom: 20px;
}

.form-section h3 {
    color: var(--primary-light);
    margin-bottom: 20px;
    font-size: 18px;
    border-bottom: 1px solid var(--border);
    padding-bottom: 10px;
}

.row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: var(--text);
    font-weight: 500;
}

.form-group input[type="text"],
.form-group textarea,
.form-group input[type="file"] {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid var(--border);
    border-radius: var(--border-radius);
    background: rgba(30, 41, 59, 0.5);
    color: var(--text);
    font-size: 15px;
    transition: var(--transition);
}

.form-group input[type="text"]:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

.text-danger {
    color: #ef4444;
    font-size: 14px;
    margin-top: 5px;
    display: block;
}

.file-info {
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(124, 58, 237, 0.1);
    padding: 8px 12px;
    border-radius: var(--border-radius);
    margin-top: 10px;
}

.file-info i {
    color: var(--primary);
}

.text-muted {
    color: var(--text-muted);
    font-size: 13px;
    margin-top: 5px;
    display: block;
}

.toggle-group {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 10px;
}

.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--border);
    transition: .4s;
    border-radius: 34px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

input:checked + .slider {
    background-color: var(--primary);
}

input:checked + .slider:before {
    transform: translateX(26px);
}

.toggle-label {
    color: var(--text);
    font-weight: 500;
}

.form-actions {
    display: flex;
    gap: 12px;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid var(--border);
}

.btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    border-radius: var(--border-radius);
    font-weight: 600;
    border: none;
    cursor: pointer;
    transition: var(--transition);
    text-decoration: none;
    font-size: 15px;
}

.btn-primary {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: white;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow);
}

.btn-secondary {
    background: var(--border);
    color: var(--text);
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
}

.btn-sm {
    padding: 6px 12px;
    font-size: 14px;
}

.btn-outline-primary {
    background: transparent;
    color: var(--primary);
    border: 1px solid var(--primary);
}

.btn-outline-primary:hover {
    background: var(--primary);
    color: white;
}

@media (max-width: 768px) {
    .card {
        padding: 20px;
    }
    
    .row {
        grid-template-columns: 1fr;
    }
    
    .preview-header {
        flex-direction: column;
        text-align: center;
    }
    
    .preview-actions {
        flex-direction: column;
        gap: 15px;
        align-items: center;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}
</style>
@endpush