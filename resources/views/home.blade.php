<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
    <link
			rel="stylesheet"
			href="{{ asset('front/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('front/fontawesome/css/all.css') }}">
		<script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-sm fixed-top" style="margin-top: ">
        <div class="container">
          <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('portofolio') }}">Saya</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/profile') }}">Tambah Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/portofolio') }}">Show Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/kontak') }}">Kotak Masuk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">logout</a>
              </li>
              </ul>
          </div>
        </div>
      </nav>
      {{-- <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
        <a href="/" class="d-block p-3 link-dark text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
          <svg class="bi pe-none" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="visually-hidden">Icon-only</span>
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
          <li class="nav-item">
            <a href="{{ url('/profile') }}" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
              <i class="fa fa-house"></i>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard"><use xlink:href="#speedometer2"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#grid"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"></use></svg>
            </a>
          </li>
        </ul>
        <div class="dropdown border-top">
          <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="" alt="mdo" width="24" height="24" class="rounded-circle">
          </a>`
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div> --}}
     
      <div class="container" style="margin-top: 8%">
        @yield('content')
      </div>
        {{-- <div class="container" style="margin-top: 10%">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card"> --}}
                        {{-- <div class="card-header">{{ __('Dashboard') }}</div>
        
                        <div class="card-body"> --}}
                            {{-- @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            {{ __('You are logged in!') }} --}}
                        {{-- </div> --}}
                        {{-- <div class="card-footer">
                            <div class="mb-3 text-center">
                                <h1>Welcome!!</h1>
                            <a id="navbarDropdown" class="nav-link dropdown-item me-auto mb-5" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 <h3 class="text-info">>>> {{ Auth::user()->name }} <<<</h3>
                            </a>
                        </div>
                        <div class="mb-3 text-center">
                            <a class="btn btn-success me-2 " href="{{ ('portofolio') }}">To Portofolio</a>
                            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
</body>
</html>



