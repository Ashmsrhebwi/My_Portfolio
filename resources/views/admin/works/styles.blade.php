{{-- resources/views/admin/works/styles.blade.php --}}
@push('styles')
<style>
    /* Common Styles for all works pages */
    .card {
        background: var(--dark-card);
        border-radius: var(--border-radius);
        padding: 30px;
        border: 1px solid var(--border);
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

    .btn-warning {
        background: #f59e0b;
        color: white;
    }

    .btn-danger {
        background: #ef4444;
        color: white;
    }

    .btn-secondary {
        background: var(--border);
        color: var(--text);
    }

    .btn-outline-primary {
        border: 1px solid var(--primary);
        color: var(--primary);
        background: transparent;
    }

    .btn-outline-primary:hover {
        background: var(--primary);
        color: white;
    }

    .btn-sm {
        padding: 8px 16px;
        font-size: 13px;
    }

    .text-muted {
        color: var(--text-muted);
    }

    .mb-4 {
        margin-bottom: 20px;
    }

    .mt-2 {
        margin-top: 10px;
    }

    .mt-3 {
        margin-top: 15px;
    }

    .mt-4 {
        margin-top: 20px;
    }

    /* Form Common Styles */
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

    textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }

    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    /* Alert Styles */
    .alert {
        border: none;
        border-radius: var(--border-radius);
        padding: 16px 20px;
        margin-bottom: 20px;
    }

    .alert-danger {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
        border: 1px solid rgba(239, 68, 68, 0.2);
    }

    .alert-success {
        background: rgba(52, 211, 153, 0.1);
        color: #34d399;
        border: 1px solid rgba(52, 211, 153, 0.2);
    }

    /* Index Page Specific */
    .table-container {
        overflow-x: auto;
        margin-top: 20px;
        border-radius: var(--border-radius);
        border: 1px solid var(--border);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: var(--dark-card);
    }

    th, td {
        padding: 15px 20px;
        text-align: left;
        border-bottom: 1px solid var(--border);
    }

    th {
        background: rgba(51, 65, 85, 0.5);
        color: var(--primary-light);
        font-weight: 600;
    }

    tr:hover {
        background: rgba(124, 58, 237, 0.05);
    }

    .actions {
        display: flex;
        gap: 8px;
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: var(--text-muted);
    }

    .empty-state i {
        font-size: 48px;
        margin-bottom: 15px;
        opacity: 0.5;
    }

    /* Create/Edit Page Specific */
    .card.create-edit-card {
        max-width: 800px;
        margin: 0 auto;
    }

    .small {
        font-size: 13px;
    }

    .mt-1 {
        margin-top: 5px;
    }

    /* Image Styles */
    img[width="60"],
    img[width="80"] {
        object-fit: cover;
        border-radius: 8px;
    }

    /* Utility Classes */
    .d-flex {
        display: flex;
    }
    
    .align-items-center {
        align-items: center;
    }
    
    .gap-2 {
        gap: 8px;
    }
    
    .gap-3 {
        gap: 12px;
    }

    .mb-0 {
        margin-bottom: 0;
    }

    .mb-2 {
        margin-bottom: 10px;
    }

    .mb-3 {
        margin-bottom: 15px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .card {
            padding: 25px;
        }
        
        .form-actions,
        .actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
        
        .row {
            grid-template-columns: 1fr;
        }
        
        .card.create-edit-card {
            margin: 0;
        }
    }
</style>
@endpush