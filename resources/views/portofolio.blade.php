<!-- @format -->
{{-- @extends('template')
@section('konten') --}}
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			http-equiv="X-UA-Compatible"
			content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0" />
		<title>Portofolio Egii</title>
		<link
			rel="stylesheet"
			href="{{ asset('front/css/bootstrap.min.css') }}" />
		<script src="{{ asset('front/js/bootstrap.bundle.js') }}"></script>
		<link rel="stylesheet" href="{{ asset('front/fontawesome/css/all.css') }}">
		<link rel="stylesheet" href="{{ asset('front/fontawesome/css/regular.css') }}">
	</head>
	<body style="font-family: Arial, Helvetica, sans-serif">
		
		
		<!-- Navbar -->
		{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
			<div class="container">
			  <a class="navbar-brand" href="#">My Profile</a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#home">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#about">About Me</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#projects">Project</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				  </li>
				  <li class="nav-item">
					@foreach ($profile as $key => $item )
					<a class="nav-link" href="profile/edit/{{ $item -> id }}">Edit Profil</a>
					@endforeach
				  </li>
				  <li class="nav-item">
					<div class="dropdown text-end">
						<a href="#" class="nav-link" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-app-store-ios"></i>	
						</a>
						<ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
						  <li><a class="dropdown-item" href="#">New project...</a></li>
						  <li><a class="dropdown-item" href="#">Settings</a></li>
						  <li><a class="dropdown-item" href="#">Profile</a></li>
						  <li><a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a></li>
						  <li><hr class="dropdown-divider"></li>
						  <li><a class="dropdown-item" href="#">Sign out</a></li>
						</ul>
					  </div>
					
				  </li>
				  
				</ul>
				
			  </div>
			</div>
			
		  </nav> --}}
		  <nav class="navbar navbar-dark bg-dark fixed-top">
			<div class="container-fluid" style="background-image: ">
			  <a class="navbar-brand" style="padding-left: 20px" href="#">My Profile</a>
			  <button class="navbar-toggler" style="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
				<span class="navbar-toggler-icon" style=""></span>
			  </button>
			  <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
				<div class="offcanvas-header bg-black">
				  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
				  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body" style="background-color: #131213b2">
				  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
					<li class="nav-item">
					  <a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About Me</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#projects">Project</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
					  </li>
					
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Opsi
					  </a>
					  <ul class="dropdown-menu dropdown-menu-dark">
						<li>
							<a class="dropdown-item" @foreach ($profile as $key => $item ) href="profile/edit/{{ $item -> id }}@endforeach">Edit Profil</a>
							</li>
							<li>
							  <a class="dropdown-item" href="{{ url('viewpo') }}">Tambah Project</a>
							</li>
						<li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
					</li>
				  </ul>
				</div>
			  </div>
			</div>
		  </nav>
		  

		<!-- Home -->
		@foreach ($profile as $key => $item)
		<section id="home" class="pt-5">
			<div class="container-fluid p-0">
				<div class="pt-5 pb-4 text-center" style="background-color:#37aafc " >
					<img src="/storage/{{ $item -> foto }}" alt="Egi Azwul Fikri" width="180" class="rounded-circle img-thumbnail">
					<h2 class="mt-3 fw-bold" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">{{ $item-> nama }}</h2>
					<p class="fs-5"><i>{{ $item -> status }}</i></p>
				</div>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path fill="#37aafc" fill-opacity="1" d="M0,224L0,32L120,32L120,288L240,288L240,160L360,160L360,32L480,32L480,128L600,128L600,192L720,192L720,32L840,32L840,64L960,64L960,288L1080,288L1080,64L1200,64L1200,64L1320,64L1320,160L1440,160L1440,0L1320,0L1320,0L1200,0L1200,0L1080,0L1080,0L960,0L960,0L840,0L840,0L720,0L720,0L600,0L600,0L480,0L480,0L360,0L360,0L240,0L240,0L120,0L120,0L0,0L0,0Z"></path>
			  </svg>
		</section>

		<!-- About Me -->
		<section id="about" class="pt-5">
			<div class="container" >
				<div class="p-5 text-center"style="background-image: {{ asset('front/foto/IMG-20210822-WA0024.jpg') }}"">
					<h3 class="fw-bold mb-3" style="background-color: ; border-radius:">About Me</h3>
					<h4>___________________________________________________________________</h4><br>
					<div class="row justify-content-center">
						<div class="col-md-4">
							<h4><b><i class="fa fa-birthday-cake me-1"></i> Birthday : </b></h4>
							<p>{{ $item -> tempatLahir }},{{ $item->tanggalLahir }}</p>
						</div>
						<div class="col-md-4">
							<h4><b><i class="fa fa-home me-2"></i>Alamat</b></h4>
							<p>{{ $item -> alamat }}</p>
						</div>
						<div class="col-md-4">
							<h4><b><i class="fa fa-pen-nib me-2"></i>Motto</b></h4>
							<p>{{ $item -> about }}</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		@endforeach
		
			
		
		<!-- Project -->
		<section id="projects" class="pt-5">
			<div class="container" >
				<div class="p-5 text-center" style="background-color:;  ">
					<h3 class="fw-bold text-dark mb-3"><i class="fa fa-bookmark me-3"></i>My Portofolio<i class="fa fa-bookmark ms-2"></i></h3>
					<div class="row justify-content-center">
						@foreach ($portofolio as $key => $item )
						<div class="col-md-4 mb-3">
							<div class="card">
								<img src="/storage/{{ $item -> foto }}" alt="" class="card-img-top" alt="Project 1">
								<div class="card-body" style="background-color: #e2e2e2">
									<h5 class="card-text"><b>{{ $item->namaPortofolio }}</b></h5>
									<p class="card-text bg-light" >{{ $item -> Deskripsi }}</p>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</section>
		
		<!-- Contact -->
		<section id="contact">
			<div class="container">
				<div class="p-5">
					<h3 class="fw-bold text-center mb-3">Contact Me</h3>
					<div class="row justify-content-center">
						<div class="col-md-6">
							<form action="kontak/create" method="post" id="form-contact">
								@csrf
								<div class="mb-3">
									<label for="nama" class="form-label">Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" id="nama" autocomplete="off">
								</div>
								<div class="mb-3">
									<label for="nama" class="form-label">Email</label>
									<input type="email" name="email" class="form-control" id="email" autocomplete="off">
								</div>
								<div class="mb-3">
									<label for="nama" class="form-label">Pesan</label>
									<textarea name="pesan" class="form-control" id="pesan" rows="3"></textarea>
								</div>
								<div class="mb-3 text-end">
									<input type="submit" class="btn btn-primary" value="Kirim">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<div class="container-fluid">
			<footer class="py-3 my-3 border-top">
				
					@foreach ($profile as $key => $item )
					<p class="text-center"> <i class="fa-brands fa-instagram text-decoration-none"></i>  {{ date('Y') }}<a href="{{ $item -> igAccount  }}" target="_blank" class="fw-bold
						text-decoration-none"> Egi Azwul Fikri</a></p>
					@endforeach 
					
			</footer>
		</div>
		
	</body>
	<script type="text/JavaScript">
		var links = documents.getElementsByClassName("nav-link");
		for (var i = 0; i < links.length; i++){
			links[i].addEventListener("click",function() {
				var current = document.getElementsByClassName("active");
				if (current.length > 0){
					current[0].className = current[0].className.replace("active","");
				}
				this.className += "active";
			});
		}
	</script>
	{{-- @endsection --}}
</html>
