@extends('template_profilblog.content')
@section('isi')

<h2 class="title" style="text-align:center;">Daftar Postingan Berita</h2>
<br>
<div class="col-md-8 hot-post-left">
					@foreach($data as $list_posts) 
					<div class="post post-row">
						<a class="post-img" href="{{ route('blog.isi', $list_posts->slug ) }} "><img src="{{ asset($list_posts->gambar)}}" alt="{{ $list_posts->judul }}" style="width:333px;height:222px;"></a>
						<div class="post-body">
							<div class="post-category">
								<a>{{ $list_posts->namec }}</a>
							</div>
							<h4 class="post-title"><a href="{{ route('blog.isi', $list_posts->slug ) }}">{{ $list_posts->judul }}</a></h4>
							<ul class="post-meta">
								<li>{{ $list_posts->users->name }}</a></li>
								<li>{{ $list_posts->created_at }}</li>
		
							</ul>
							
						</div>
					</div>
				
				@endforeach
				<center>{{ $data->links() }}</center>
				</div>
				<br><div class="col-md-4">
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