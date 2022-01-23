@extends('template_profilblog.content')
@section('isi')

@if(count($errors)>0)
    @foreach($errors->all() as $errors)
    <div class="alert alert-danger" role="alert">
        {{ $errors}}
    </div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>
@endif

<div class="col-md-8 hot-post-left">
<form action="{{ route('pengaduanmasyarakat.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<h1>Pengaduan Masyarakat</h1>
<br>
<div class="section-row">
	<div class="section-title">
		<h2 class="title"></h2>
	</div>
		<p>Pemerintah Daerah Kecamatan Bojonegara Kabupaten Serang menerima pengaduan masyarakat melalui portal website ini.
		Pengaduan tersebut dapat berupa saran, kritik ataupun keluhan dari masyarakat khususnya masyarakat di Daerah Kecamatan Bojonegara Kabupaten Serang Provinsi Banten.</p>
		<p>Pengaduan masyarakat juga dapat diakses melalui fitur berikut ini :</p>
	
		<ul class="contact">
			<li><i class="fa fa-phone" style="color:#134281" ></i>
				<a href="">123-4567-89</a></li>
			<li><i class="fa fa-envelope" style="color:#134281" ></i>
				<a href="https://mail.google.com/mail/u/0/#inbox?compose=new">adminbojonegara@serangkab.com</a></li>
			<li><i class="fa fa-map-marker" style="color:#134281"></i>
				<a href="https://goo.gl/maps/FKs6R5rboTjMy9Ze8">Jl. Raya Bojonegara No.Desa, Bojonegara, Cilegon, Kabupaten Serang, Banten 42455 </a></li>
		</ul>
	</div>

	<br>
	<div class="section-row">
		<div class="section-title">
			<h2 class="title">Pengaduan Masyarakat Melalui Website Resmi</h2>
		</div>

	<form>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<input class="input" type="text" name="nama" placeholder="Nama">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<input class="input" type="text" name="email" placeholder="Email">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<textarea class="input" name="pengaduancontent" placeholder="Isi Pengaduan"></textarea>
				</div>
				<button class="tags-widget" style="background-color:#134281"><a style="color:white">Ajukan Pengaduan</a></button>
			</div>
		</div>
	</form>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'pengaduancontent' );
</script>

					</div>
				</div>
				<div class="col-md-4">
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Kategori Berita</h2></div>
								<div class="category-widget">
									<ul class="list-group list-group-flush">
										@foreach($category_widget as $result2)
											<li>
												<a href="{{ route('blog.category', $result2->slug)}}">{{ $result2 -> namec}}
													<span>{{ $result2->posts->count() }}</span></a>
											</li>
										@endforeach
									</ul>
								</div>
					</div>
				</div>
			</header>
		<br>
	</div>
</div>

@endsection