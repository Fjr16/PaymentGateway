<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Wahana PM</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>
    <li class="nav-item {{ request()->is('data/penjualan*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('penjualan') }}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Penjualan</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('data/about*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('about') }}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>About</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('data/header*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('header') }}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Header</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('data/contact*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('contact') }}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Contact</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('data/wahana*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('wahana') }}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Wahana</span>
        </a>
    </li>
    <li class="nav-item {{ request()->is('data/tiket*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('tiket') }}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tiket Wahana</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        Data User
    </div>
    <li class="nav-item {{ request()->is('data/user*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ route('user') }}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
            <span>User</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
