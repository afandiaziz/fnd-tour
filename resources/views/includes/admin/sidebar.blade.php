<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">
            FNDTour Admin
        </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('travel-package.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Travel Package</span>
        </a>
    </li>
    
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Gallery Travel</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('transaction.index') }}">
            <i class="fas fa-fw fa-money"></i>
            <span>Transaction</span>
        </a>
    </li> --}}
    
    <hr class="sidebar-divider">
    
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
</ul>
