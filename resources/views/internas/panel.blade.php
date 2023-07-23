@extends('theme')

@section('content')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/panel" class="text-nowrap logo-img">
            Logo
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-building-skyscraper nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Empleados</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/nuevo" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Nuevo</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="/locale/es">{{ __('Spanish') }}</a> | 
              <a href="/locale/en">{{ __('English') }}</a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-flag fs-6"></i>
                      <p class="mb-0 fs-3">Opción 1</p>
                    </a>
                    <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-flag fs-6"></i>
                      <p class="mb-0 fs-3">Opción 2</p>
                    </a>
                    <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Cerrar Sesión</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            @include('alert.successful')
            <h5 class="card-title fw-semibold mb-4">Empleados</h5>
            <div class="table-responsive-sm">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Número de Empleado</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Sueldo base</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <th>######</th>
                    <th>Nombre Paterno Materno</th>
                    <th>$$$$$$</th>
                    <th>
                      <a href="/editar"><i class="ti ti-edit fs-6"></i></a>
                      <a href="/estatus/activo"><i class="ti ti-checkbox fs-6"></i></a>
                      <a href="/estatus/inactivo"><i class="ti ti-square-x fs-6"></i></a>
                      <a href="/eliminar"><i class="ti ti-trash fs-6"></i></a>
                    </th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>