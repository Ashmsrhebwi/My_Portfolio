{{-- resources/views/admin/layouts/styles.blade.php --}}
<style>
    :root {
        --primary: #7c3aed;
        --primary-dark: #6d28d9;
        --primary-light: #8b5cf6;
        --dark-bg: #0f172a;
        --dark-card: #1e293b;
        --dark-sidebar: #151521;
        --text: #f1f5f9;
        --text-muted: #94a3b8;
        --border: #334155;
        --border-radius: 12px;
        --transition: all 0.3s ease;
        --shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        --shadow-hover: 0 12px 40px rgba(0, 0, 0, 0.4);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    }

    body {
        background: var(--dark-bg);
        color: var(--text);
        min-height: 100vh;
        line-height: 1.6;
    }

    .wrapper {
        display: flex;
        min-height: 100vh;
    }

    /* === SIDEBAR - نفسو بكل الصفحات === */
    .sidebar {
        width: 280px;
        background: linear-gradient(180deg, var(--dark-sidebar) 0%, #0f1120 100%);
        padding: 30px 25px;
        border-right: 1px solid var(--border);
        flex-shrink: 0;
        position: sticky;
        top: 0;
        height: 100vh;
        overflow-y: auto;
        z-index: 100;
        box-shadow: var(--shadow);
    }

    .sidebar-header {
        text-align: center;
        margin-bottom: 40px;
        padding-bottom: 20px;
        border-bottom: 1px solid var(--border);
    }

    .sidebar h2 {
        font-size: 24px;
        color: var(--primary-light);
        font-weight: 800;
        letter-spacing: -0.5px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .sidebar-nav {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .sidebar a {
        display: flex;
        align-items: center;
        gap: 12px;
        color: var(--text-muted);
        text-decoration: none;
        padding: 14px 16px;
        font-size: 15px;
        font-weight: 500;
        border-radius: var(--border-radius);
        transition: var(--transition);
        position: relative;
        border: 1px solid transparent;
    }

    .sidebar a::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 3px;
        background: var(--primary);
        border-radius: 0 4px 4px 0;
        transform: scaleY(0);
        transition: var(--transition);
    }

    .sidebar a:hover {
        background: rgba(124, 58, 237, 0.1);
        color: var(--text);
        transform: translateX(5px);
        border-color: rgba(124, 58, 237, 0.2);
    }

    .sidebar a:hover::before {
        transform: scaleY(1);
    }

    .sidebar a i {
        font-size: 16px;
        width: 20px;
        text-align: center;
        transition: var(--transition);
    }

    .sidebar a:hover i {
        transform: scale(1.1);
        color: var(--primary-light);
    }

    .sidebar a.active {
        background: linear-gradient(90deg, rgba(124, 58, 237, 0.2), rgba(124, 58, 237, 0.1));
        color: var(--primary-light);
        border-color: rgba(124, 58, 237, 0.3);
    }

    .sidebar a.active::before {
        transform: scaleY(1);
        background: linear-gradient(to bottom, var(--primary), var(--primary-light));
    }

    .sidebar a.active i {
        color: var(--primary-light);
    }

    .sidebar a.logout {
        margin-top: 30px;
        background: linear-gradient(90deg, rgba(239, 68, 68, 0.1), rgba(239, 68, 68, 0.05));
        color: #ef4444 !important;
        border: 1px solid rgba(239, 68, 68, 0.2);
        position: relative;
        overflow: hidden;
    }

    .sidebar a.logout::before {
        background: #ef4444;
    }

    .sidebar a.logout:hover {
        background: #ef4444;
        color: white !important;
        transform: translateX(5px);
    }

    .sidebar a.logout:hover i {
        color: white;
    }

    .sidebar a.logout::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        transform: rotate(45deg);
        transition: var(--transition);
    }

    .sidebar a.logout:hover::after {
        transform: rotate(45deg) translate(50%, 50%);
    }

    /* المحتوى الرئيسي */
    .content {
        flex: 1;
        padding: 40px;
        background: var(--dark-bg);
        min-height: 100vh;
        position: relative;
    }

    .content::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(124, 58, 237, 0.1) 0%, transparent 70%);
        filter: blur(60px);
        z-index: 0;
    }

    /* Scrollbar Styles */
    .sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .sidebar::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
    }

    .sidebar::-webkit-scrollbar-thumb {
        background: var(--primary);
        border-radius: 10px;
    }

    .sidebar::-webkit-scrollbar-thumb:hover {
        background: var(--primary-light);
    }

    /* === RESPONSIVE === */
    @media (max-width: 1024px) {
        .sidebar {
            width: 240px;
            padding: 25px 20px;
        }
        
        .content {
            padding: 30px;
        }
    }

    @media (max-width: 768px) {
        .wrapper {
            flex-direction: column;
        }
        
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
            padding: 20px;
            border-right: none;
            border-bottom: 1px solid var(--border);
        }
        
        .sidebar-nav {
            flex-direction: row;
            overflow-x: auto;
            gap: 5px;
            padding-bottom: 10px;
        }
        
        .sidebar-nav::-webkit-scrollbar {
            height: 4px;
        }
        
        .sidebar a {
            white-space: nowrap;
            padding: 12px 15px;
            flex-direction: column;
            text-align: center;
            gap: 5px;
            font-size: 13px;
            min-width: 100px;
        }
        
        .sidebar a::before {
            width: 100%;
            height: 3px;
            top: auto;
            bottom: 0;
            left: 0;
            border-radius: 4px 4px 0 0;
        }
        
        .sidebar a:hover {
            transform: translateY(-2px);
        }
        
        .content {
            padding: 20px;
        }
        
        .content::before {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .sidebar h2 {
            font-size: 20px;
        }
        
        .sidebar a {
            min-width: 80px;
            padding: 10px 12px;
            font-size: 12px;
        }
        
        .content {
            padding: 15px;
        }
    }

    /* Animation for active link */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateX(-10px); }
        to { opacity: 1; transform: translateX(0); }
    }

    .sidebar a.active {
        animation: fadeIn 0.3s ease-out;
    }
</style>