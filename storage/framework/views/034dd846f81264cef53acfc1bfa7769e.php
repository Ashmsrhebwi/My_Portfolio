
<style>
    /* ===================== MAIN CONTAINER ===================== */
    .card {
        background: var(--dark-card);
        border-radius: var(--border-radius);
        padding: 30px;
        border: 1px solid var(--border);
        max-width: 1200px;
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

    /* ===================== TABLES ===================== */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: var(--dark-card);
        border-radius: var(--border-radius);
        overflow: hidden;
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

    /* ===================== ICON PREVIEW ===================== */
    .icon-preview {
        margin-top: 15px;
    }

    .icon-preview h6 {
        color: var(--text);
        font-size: 14px;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .preview-box {
        padding: 15px;
        border: 1px solid var(--border);
        border-radius: var(--border-radius);
        background: rgba(30, 41, 59, 0.3);
        display: inline-flex;
        align-items: center;
        gap: 15px;
        color: var(--text);
    }

    #icon-preview {
        font-size: 28px;
        color: var(--primary);
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(124, 58, 237, 0.1);
        border-radius: 12px;
    }

    #icon-text {
        font-family: 'Monaco', 'Courier New', monospace;
        font-size: 13px;
        color: var(--text-muted);
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

    /* ===================== EMPTY STATE ===================== */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: var(--text-muted);
        background: rgba(30, 41, 59, 0.3);
        border-radius: var(--border-radius);
        border: 1px solid var(--border);
        margin-top: 30px;
    }

    .empty-state i {
        font-size: 48px;
        margin-bottom: 15px;
        opacity: 0.5;
        color: var(--primary);
    }

    .empty-state h3 {
        color: var(--text);
        font-size: 20px;
        margin-bottom: 10px;
        font-weight: 600;
    }

    /* ===================== ALERTS & MESSAGES ===================== */
    .text-danger {
        color: #ef4444;
        font-size: 13px;
        margin-top: 5px;
        display: block;
    }

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
        
        .preview-box {
            flex-direction: column;
            text-align: center;
            gap: 10px;
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
            padding: 12px 14px;
            font-size: 14px;
        }
        
        #icon-preview {
            font-size: 24px;
            width: 40px;
            height: 40px;
        }
    }
</style><?php /**PATH C:\Users\Shahm.s\Desktop\MyPortfilio\laravel\resources\views/admin/services/styles.blade.php ENDPATH**/ ?>