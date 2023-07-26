<!doctype html>
<html lang="{{ __('en') }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prueba</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ __('Languages') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                          <div class="message-body">
                            <a href="/locale/es" class="d-flex align-items-center gap-2 dropdown-item">
                              <p class="mb-0 fs-3">{{ __('Spanish') }}</p>
                            </a>
                            <a href="/locale/en" class="d-flex align-items-center gap-2 dropdown-item">
                              <p class="mb-0 fs-3">{{ __('English') }}</p>
                            </a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </nav>
                @include('alert.messages')
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>