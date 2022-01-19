<footer id="footer" style="background-color:#00ccff" >
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget" >
						<h3 class="footer-title" style="color:black">Ikuti Kami</h3>
						<ul class="contact-social">
							<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title" style="color:black">Categories</h3>
						<div class="category-widget">
							<ul>
								@fach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
				<div class="footer-widget">
						<div class="section-title">
							<h3 class="footer-title" style="color:black">Kategori Berita</h3>
						</div>
						<div class="category-widget">
							<ul class="list-group list-group-flush">
								@foreach($category_widget as $result2)
									<li >
										<a href="{{ route('blog.category', $result2->slug)}}" style="color:black">{{ $result2 -> namec}}
											<span style="color:black">{{ $result2->posts->count() }}</span>
										</a>
									</li>
									@endforeach
							</ul>
						</div>
					</div>
					
				</div>
				<div class="col-md-3">
				<div class="footer-widget">
				<h3 class="footer-title" style="color:black">Kadcita</h3>
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
			<!-- /row -->
		</div>
</body>		<!-- /container -->
	</footer>
	<script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/main.js') }}"></script>
</html>