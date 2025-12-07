{{-- ملف CSS مشترك لجميع صفحات Admins --}}
<style>
    /* ===================== MAIN CONTAINER ===================== */
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
        font-weight: 700;
    }

    .text-muted {
        color: var(--text-muted);
        font-size: 14px;
        margin-bottom: 20px;
        display: block;
    }

    /* ===================== BUTTONS ===================== */
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

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(124, 58, 237, 0.4);
    }

    .btn-warning {
        background: #f59e0b;
        color: white;
    }

    .btn-warning:hover {
        background: #d97706;
        transform: translateY(-2px);
    }

    .btn-danger {
        background: #ef4444;
        color: white;
    }

    .btn-danger:hover {
        background: #dc2626;
        transform: translateY(-2px);
    }

    .btn-secondary {
        background: var(--border);
        color: var(--text);
    }

    .btn-secondary:hover {
        background: var(--text-muted);
        color: white;
    }

    .btn-sm {
        padding: 8px 16px;
        font-size: 13px;
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

    /* ===================== TABLES ===================== */
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

    /* ===================== FORMS ===================== */
    .form-group {
        margin-bottom: 20px;
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
        padding: 12px 16px;
        border-radius: var(--border-radius);
        border: 1px solid var(--border);
        background: rgba(30, 41, 59, 0.5);
        color: var(--text);
        font-size: 15px;
        transition: var(--transition);
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }

    input[type="file"].form-control {
        background: transparent;
        padding: 10px 0;
    }

    /* ===================== LAYOUT ===================== */
    .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }

    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .actions {
        display: flex;
        gap: 8px;
    }

    /* ===================== COMPONENTS ===================== */
    .admin-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 18px;
    }

    .badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
    }

    .bg-primary {
        background: var(--primary);
        color: white;
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

    /* ===================== ALERTS ===================== */
    .alert {
        border: none;
        border-radius: var(--border-radius);
        padding: 16px 20px;
        margin-bottom: 20px;
    }

    .alert-success {
        background: rgba(52, 211, 153, 0.1);
        color: #34d399;
        border: 1px solid rgba(52, 211, 153, 0.2);
    }

    .alert-danger {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
        border: 1px solid rgba(239, 68, 68, 0.2);
    }

    .success {
        background: #02f97aff;
        color: var(--success-text);
        border-radius: var(--border-radius);
        padding: 12px 16px;
        font-size: 14px;
        margin-bottom: 20px;
        border: 1px solid rgba(52, 211, 153, 0.2);
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: bold;
    }

    /* ===================== FILE INFO ===================== */
    .file-info {
        font-size: 12px;
        color: var(--text-muted);
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    /* ===================== UTILITIES ===================== */
    .mb-3 {
        margin-bottom: 20px;
    }

    .mb-4 {
        margin-bottom: 20px;
    }

    .mt-3 {
        margin-top: 20px;
    }

    .text-danger {
        color: #ef4444;
        font-size: 13px;
        margin-top: 5px;
        display: block;
    }

    /* ===================== RESPONSIVE ===================== */
    @media (max-width: 768px) {
        .card {
            padding: 25px;
            margin: 0 15px;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
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
        
        table {
            font-size: 14px;
        }
        
        th, td {
            padding: 12px 15px;
        }
    }

    @media (max-width: 480px) {
        .card {
            padding: 20px;
        }
        
        h1 {
            font-size: 24px;
        }
        
        .form-control {
            padding: 10px 14px;
            font-size: 14px;
        }
    }
</style>