<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Protocolo de atención - Protección Civil')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        :root {
            --primary-blue: #0d47a1;
            --primary-blue-light: #1565c0;
            --primary-orange: #e65100;
            --primary-orange-light: #ef6c00;
            --bg-light: #f4f6f9;
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --text-light: #94a3b8;
            --border-color: #e2e8f0;
            --sidebar-bg: #1e293b;
            --success: #16a34a;
            --warning: #d97706;
            --danger: #dc2626;
            --sidebar-width: 260px;
            --topbar-height: 60px;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--bg-light);
            display: flex;
            flex-direction: column;
            color: var(--text-dark);
            min-height: 100vh;
        }
        .topbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: var(--primary-blue);
            height: var(--topbar-height);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 100;
        }
        .topbar__brand {
            display: flex;
            gap: 16px;
            align-items: center;
        }
        .topbar__toggle {
            background: transparent;
            border: none;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .topbar__logo {
            height: 36px;
            border-radius: 50%;
        }
        .topbar__title {
            font-weight: 700;
            font-size: 1.1rem;
            color: white;
        }
        .topbar__actions {
            display: flex;
            align-items: center;
            gap: 16px;
            color: white;
        }
        .topbar__actions button {
            background: transparent;
            border: none;
            color: white;
            cursor: pointer;
            display: flex;
        }
        .sidebar {
            position: fixed;
            top: var(--topbar-height);
            bottom: 0;
            left: 0;
            width: var(--sidebar-width);
            background-color: var(--sidebar-bg);
            color: white;
            transition: transform 0.3s ease;
            z-index: 90;
            overflow-y: auto;
            padding-top: 12px;
        }
        .sidebar--collapsed {
            transform: translateX(-100%);
        }
        .sidebar__section-title {
            text-transform: uppercase;
            font-size: 0.7rem;
            color: #64748b;
            padding: 16px 20px 8px;
            font-weight: 700;
            letter-spacing: 0.05em;
        }
        .sidebar__link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            color: #cbd5e1;
            text-decoration: none;
            transition: 0.2s;
            border-left: 3px solid transparent;
            font-size: 0.9rem;
        }
        .sidebar__link:hover {
            background-color: rgba(255,255,255,0.05);
            color: white;
        }
        .sidebar__link--active {
            background-color: rgba(230,81,0,0.15);
            color: var(--primary-orange);
            border-left-color: var(--primary-orange);
            font-weight: 600;
        }
        .main {
            margin-left: var(--sidebar-width);
            padding: 24px 28px;
            transition: margin-left 0.3s ease;
            min-height: calc(100vh - var(--topbar-height));
        }
        .main--expanded {
            margin-left: 0;
        }
        .layout__body {
            display: flex;
            margin-top: var(--topbar-height);
            flex: 1;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        }
        .card__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border-color);
        }
        .card__title {
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--primary-blue);
        }
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            flex-wrap: wrap;
            gap: 12px;
        }
        .page-header__title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text-dark);
        }
        .page-header__subtitle {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-top: 4px;
        }
        .form-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 16px;
        }
        .col-12 { grid-column: span 12; }
        .col-6 { grid-column: span 6; }
        .col-4 { grid-column: span 4; }
        .col-3 { grid-column: span 3; }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        .form-group__label {
            font-size: 0.8rem;
            font-weight: 600;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }
        .form-group__control {
            padding: 10px 12px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 0.9rem;
            font-family: inherit;
            transition: 0.2s;
            background-color: white;
        }
        .form-group__control:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(13,71,161,0.1);
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            font-family: inherit;
            transition: 0.2s;
            text-decoration: none;
        }
        .btn--primary {
            background-color: var(--primary-orange);
            color: white;
        }
        .btn--primary:hover {
            background-color: var(--primary-orange-light);
        }
        .btn--secondary {
            background-color: #e2e8f0;
            color: #475569;
        }
        .btn--secondary:hover {
            background-color: #cbd5e1;
        }
        .btn--outline {
            background-color: transparent;
            border: 2px solid var(--border-color);
            color: var(--text-dark);
        }
        .btn--danger {
            background-color: var(--danger);
            color: white;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 24px;
            padding-top: 16px;
            border-top: 1px solid var(--border-color);
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar--mobile-open {
                transform: translateX(0);
            }
            .main {
                margin-left: 0;
                padding: 16px;
            }
        }
        @media (max-width: 600px) {
            .col-6, .col-4, .col-3 {
                grid-column: span 12;
            }
            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }
        }
        @stack('styles')
    </style>
</head>
<body>
    <header class="topbar">
        <div class="topbar__brand">
            <button class="topbar__toggle" id="sidebarToggle">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <img class="topbar__logo" src="/logo.jfif" alt="Logo" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'36\' height=\'36\'><circle cx=\'18\' cy=\'18\' r=\'18\' fill=\'%23ffffff\'/></svg>'">
            <span class="topbar__title">Protocolo de atención – Protección Civil</span>
        </div>
        <div class="topbar__actions">
            <button><span class="material-symbols-outlined">notifications</span></button>
            <button><span class="material-symbols-outlined">account_circle</span></button>
        </div>
    </header>

    <div class="layout__body">
        <aside class="sidebar" id="sidebar">
            <div class="sidebar__section-title">Principal</div>
            <a href="#" class="sidebar__link" data-page="dashboard">
                <span class="material-symbols-outlined">dashboard</span> Dashboard
            </a>
            <a href="#" class="sidebar__link" data-page="reports-index">
                <span class="material-symbols-outlined">assignment</span> Reportes EDAN
            </a>
            
            <div class="sidebar__section-title">Acciones</div>
            <a href="#" class="sidebar__link" data-page="reports-create">
                <span class="material-symbols-outlined">add_circle</span> Nuevo Reporte
            </a>
            <a href="#" class="sidebar__link" data-page="settings">
                <span class="material-symbols-outlined">settings</span> Configuración
            </a>
        </aside>

        <main class="main" id="mainContent">
            @yield('content')
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');

            sidebarToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                if (window.innerWidth > 768) {
                    sidebar.classList.toggle('sidebar--collapsed');
                    mainContent.classList.toggle('main--expanded');
                } else {
                    sidebar.classList.toggle('sidebar--mobile-open');
                }
            });

            document.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                        sidebar.classList.remove('sidebar--mobile-open');
                    }
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
