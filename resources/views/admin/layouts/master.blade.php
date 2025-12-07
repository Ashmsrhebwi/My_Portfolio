<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @include('admin.layouts.styles')
    @stack('styles')
</head>
<body>

<div class="wrapper">
    <!-- الـ Sidebar الموحد -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2><i class="fas fa-crown"></i> Admin Panel</h2>
        </div>
        <nav class="sidebar-nav">
            <a href="{{ route('admin.dashboard.dashboard') }}" class="{{ request()->routeIs('admin.dashboard.dashboard') ? 'active' : '' }}">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.hero.edit') }}" class="{{ request()->routeIs('admin.hero.*') ? 'active' : '' }}">
                <i class="fas fa-bolt"></i>
                <span>Manage Hero</span>
            </a>
            <a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                <i class="fas fa-cogs"></i>
                <span>Manage Services</span>
            </a>
            <a href="{{ route('admin.statistics.index') }}" class="{{ request()->routeIs('admin.statistics.*') ? 'active' : '' }}">
                <i class="fas fa-chart-pie"></i>
                <span>Statistics</span>
            </a>
            <a href="{{ route('admin.works.index') }}" class="{{ request()->routeIs('admin.works.*') ? 'active' : '' }}">
                <i class="fas fa-briefcase"></i>
                <span>Manage Works</span>
            </a>
            <a href="{{ route('admin.admins.index') }}" class="{{ request()->routeIs('admin.admins.*') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                <span>Manage Admins</span>
            </a>
            <a href="{{ route('admin.dashboard.logout') }}" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </nav>
    </aside>

    <!-- المحتوى المتغير -->
    <main class="content">
        @yield('content')
    </main>
</div>

@stack('scripts')
</body>
</html>