<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio Egii</title>
    <link
			rel="stylesheet"
			href="{{ asset('front/css/bootstrap.min.css') }}" />
		<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('front/fontawesome/css/all.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-sm fixed-top">
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
              {{-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('portofolio') }}">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('viewpo') }}">Portofolio</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{  url('portofolio') }}">Exit</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <div class="container" style="margin-top: 8%">
        @yield('konten')
      </div>
</body>
</html>