<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3"> Admin </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ @$sidenav['dashboard'] }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administration
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ @$sidenav['users'] }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Admins</h6>
                <a class="collapse-item" href="#">All Admin</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ @$sidenav['slider'] }}">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-layer-group"></i>
            <span>Sliders</span></a>
    </li>

    <li class="nav-item {{ @$sidenav['volunteer'] }}">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user-plus"></i>
            <span>Volunteers</span></a>
    </li>

    <li class="nav-item {{ @$sidenav['donors'] }}">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user-secret"></i>
            <span>Donor</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Contents
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ @$sidenav['cause'] }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ourCause" aria-expanded="true" aria-controls="ourCause">
            <i class="fas fa-fw fa-sign"></i>
            <span>Cause</span>
        </a>
        <div id="ourCause" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Our Cause</h6>
                <a class="collapse-item" href="#">All Cause</a>
                <a class="collapse-item" href="#">Inactive Admin</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->