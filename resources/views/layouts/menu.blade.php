@yield('menu')
<!-- Page Wrapper -->
<div id="wrapper">

 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fa-solid fa-gears"></i>
    </div>
    <div class="sidebar-brand-text mx-3">RTICS<sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/">
    <i class="fa-solid fa-house"></i>        
    <span>Inicio</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item active1">
    <a class="nav-link" href="/typeofusers">
    <i class="fa-sharp fa-solid fa-users"></i> 
    <span>Tipo de usuario</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item active3">
    <a class="nav-link" href="/classrooms">
    <i class="fa-solid fa-landmark"></i>
    <span>Aulas</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item active2">
    <a class="nav-link" href="/directions">
    <i class="fa-solid fa-route"></i>       
    <span>Direccion</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item active4">
    <a class="nav-link" href="/users">
    <i class="fa-regular fa-user"></i>
    <span>Usuario</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item active5">
    <a class="nav-link" href="/reports">
    <i class="fa-solid fa-folder-open"></i>
    <span>Reportes</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->


 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                    <!-- <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg"> -->
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Perfil
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Ajustes
                    </a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Salir
                    </a> -->
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->