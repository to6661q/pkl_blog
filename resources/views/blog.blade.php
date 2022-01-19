@extends('template_blog.content')

@section('isi')

					<div class="post post-thumb">
						
					</div>
					<!-- /post -->
				</div>
			


				</div>

		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru-> slug) }}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height:200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">{{ $post_terbaru->namec}}</a>
									</div>
									<h3 class="post-title"><a href="#">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach

					<!-- /row -->

				</div>
				</div>
			<!-- /row -->
@endsection