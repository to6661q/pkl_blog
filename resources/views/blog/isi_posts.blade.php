@extends('template_profilblog.content')
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
<br><br><br><br><br><div class="col-md-4">
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
@endsection