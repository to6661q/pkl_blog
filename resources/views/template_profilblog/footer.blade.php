<footer id="footer" style="background-color:#00ccff" >
		<div class="container">
			<div class="row">

				<div class="col-md-3">
					<div class="footer-widget" >
						<h3 class="footer-title" style="color:black">Ikuti :</h3>
						<br>
						<ul class="contact-social">
							<li><a href="https://web.facebook.com/" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://youtube.com" class="social-google-plus"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://instagram.com" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title" style="color:black">Hubungi :</h3>
						<br>
						<div class="widget">
							<ul >
								<li><i class="fa fa-phone" style="color:#134281" ></i></li>
								<li><a href=""style="color:#134281" >123-4567-89</a></li>
								<br>
								<li><i class="fa fa-envelope" style="color:#134281" ></i></li>
								<li><a href="https://mail.google.com/mail/u/0/#inbox?compose=new"style="color:#134281" >adminbojonegara@serangkab.com</a></li>
								<br>
								<li><i class="fa fa-map-marker" style="color:#134281"></i></li>
								<li><a href="https://goo.gl/maps/FKs6R5rboTjMy9Ze8" style="color:#134281" >Jl. Raya Bojonegara No.Desa, Bojonegara, Cilegon, Kabupaten Serang, Banten 42455 </a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title" style="color:black">Menu :</h3>
						<br>
						<div class="widget">
							<ul class="menu" style="text-align:left;">
								<li><i class="fa fa-home" style="color:#134281" ></i>
									<a href="{{ url('') }}" style="color:#134281">&ensp;Beranda</a></li>
								<li><i class="fa fa-user-circle" style="color:#134281" ></i>
									<a href="{{ route('profilblog.list') }}" style="color:#134281">&ensp;Profil</a></li>	
								<li><i class="fa fa-paste" style="color:#134281" ></i>
									<a href="{{ route('blog.list') }} " style="color:#134281">&ensp;Berita</a></li>	
								<li><i class="fa fa-image" style="color:#134281" ></i>
									<a href="{{ route('galeriblog.list') }}" style="color:#134281">&ensp;Galeri</a></li>
								<li><i class="fa fa-file" style="color:#134281" ></i>
									<a href="{{ route('dokumen.tampil_dokumen') }}" style="color:#134281">&ensp;Dokumen</a></li>
								<li><i class="fa fa-exclamation-circle" style="color:#134281" ></i>
									<a href="{{ route('pengaduanblog.isi') }}" style="color:#134281">&ensp;Pengaduan</a></li>	

							</ul>
							
						</div>
						
					</div>
				</div>
	
			</div>
			<div class="footer-bottom row">	
				<div class="footer-copyright">
					<a href="" style="color:black">Copyright &copy;
						<script >document.write(new Date().getFullYear());</script>
							<a href="" style="color:black"> Dinas Komunikasi, Informatika, Persandian dan Statistik - Kecamatan Bojonegara Kabupaten Serang</a> 
					</a>
				</div>
			</div>

		</div>
	</body>	

	</footer>

	<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/main.js') }}"></script>

</html>