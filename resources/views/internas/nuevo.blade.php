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
            <li class="sidebar-item selected">
              <a class="sidebar-link active" href="/nuevo" aria-expanded="false">
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
            <h5 class="card-title fw-semibold mb-4">Empleados: Nuevo</h5>
            <form action="{{ route('nuevoup') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="c_empleado" class="form-label">Clave Empleado</label>
                <input type="text" class="form-control" id="c_empleado" name="c_empleado" value="{{ old('c_empleado') }}" required autofocus>
              </div>
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
              </div>
              <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" value="{{ old('edad') }}">
              </div>
              <div class="mb-3">
                <label for="f_nacimiento" class="form-label">Fecha Nacimiento</label>
                <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" value="{{ old('f_nacimiento') }}" required>
              </div>
              <div class="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <input type="text" class="form-control" id="genero" name="genero" value="{{ old('genero') }}">
              </div>
              <div class="mb-3">
                <label for="s_base" class="form-label">Sueldo Base</label>
                <input type="text" class="form-control" id="s_base" name="s_base" value="{{ old('s_base') }}" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary">Crear</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>