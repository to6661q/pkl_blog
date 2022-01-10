@extends('template_blog.content')

@section('isi')

	@foreach($data as $isi_posts)

	<div id="posts-header" class="page-header">
			<div class="page-header-bg" style="
			background-image: url( {{asset($isi_posts->gambar) }} );" 

			data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="posts-category">
							<a href="category.html">{{ $isi_posts->category->name }}</a>
						</div>
						<h1>{{ $isi_posts->judul }}</h1>
						<ul class="posts-meta">
							<li><a href="author.html">{{ $isi_posts->users->name }}</a></li>
							<li>{{ $isi_posts->created_at }}</li>
						
							<!-- <li><i class="fa fa-eye"></i> 807</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<div class="col-md-8 hot-posts-left">
	<br>
		<div class="section-row">



		{!! $isi_posts->content !!}

		</div>
	@endforeach
	</div>

@endsection