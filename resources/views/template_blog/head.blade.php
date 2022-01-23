<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- META UNTUK GOOGLE MAX:100-140 -->
	<meta name="description" content=""/> 

	<!-- META UNTUK FACEBOOK -->
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta property="og:url" content="">

	<!-- META UNTUK TWITTER -->
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">
	<meta name="twitter:card" content="">

	<title>Bojonegara Serangkab</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<header id="header">	
		<div id="nav">
			<div id="nav-bottom" style="background-color:#00ccff">
				<div class="container">
					<ul class="nav-menu" style="text-align:left;">
						<img src="{{ asset('public/frontend/img/Logo_kabupaten_serang.png') }}" alt="" weight="42px" height="53px">	
							<li><a href="{{ url('') }}">Beranda</a></li>
							<li><a href="{{ route('profilblog.list') }}">Profil</a></li>	
							<li><a href="{{ route('blog.list') }}">Berita</a></li>	
							<li><a href="{{ route('galeriblog.list') }}">Galeri</a></li>
							<li><a href="{{ route('dokumen.tampil_dokumen') }}">Dokumen</a></li>
							<li><a href="{{ route('pengaduanblog.isi') }}">Pengaduan</a></li>
							<li><a href=""><button class="search-btn" ><i class="fa fa-search" ></i></button>
								<div id="nav-search">
									<form action="{{ route( 'blog.cari')}}">
										<input class="input" name="cari" placeholder="Cari....">
									</form>
									<button class="nav-close search-close">
										<span></span>
									</button></div>
								</a>
							</li>		
					</ul>
					
				</div>
				<div class="text-center"style="text-align:center;">
			<img  src="{{ asset('public/frontend/img/fix-header-bojonegara-2.png') }}" alt="" height="10">
			</div>
			</div>
			<div class="text-center">
			<img  src="{{ asset('public/frontend/img/kecamatan-bojonegara_1619666865.jpg') }}" alt="" height="500">
			</div>
		</div>
		
		
	</header>