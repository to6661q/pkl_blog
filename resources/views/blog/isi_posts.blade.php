@extends('template_blog.content')
@section('isi')

@foreach($data as $isi_posts)

<div class="post">
	<div class="post post-thumb">
		<a class="post-img" href="{{ route('blog.isi', $isi_posts->slug ) }} ">
			<img src="{{ asset($isi_posts->gambar)}}" alt="{{ $isi_posts->judul }}" style="height: 480px;"></a>	
	</div>
</div>

<div class="col-md-8 hot-post-left">
<br>
	<div class="section-row ">
		<div class="container">
			<div class="row">
					<div class="post-category">
						<a href="">{{ $isi_posts->namec}}</a>
					</div>
						<h1>{{ $isi_posts->judul}}</h1>
							<ul class="post-meta">
								<li>{{ $isi_posts->users->name}}</li>
								<li>{{ $isi_posts->created_at}}</li>
							</ul>
					</div>
			</div>
</header>
		<br>
	{!! $isi_posts->content !!}
</div>
@endforeach
</div>
@endsection

	






