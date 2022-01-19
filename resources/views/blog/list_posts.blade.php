@extends('template_blog.content')
@section('isi')
<div class="col-md-8 hot-post-left">


					@foreach($data as $list_posts) 
					<div class="post post-row">
						<a class="post-img" href="{{ route('blog.isi', $list_posts->slug ) }} "><img src="{{ asset($list_posts->gambar)}}" alt="{{ $list_posts->judul }}" style="width:333px;height:222px;"></a>
						<div class="post-body">
							<div class="post-category">
								<a>{{ $list_posts->category->namec }}</a>
							</div>
							<h3 class="post-title"><a href="{{ route('blog.isi', $list_posts->slug ) }}">{{ $list_posts->judul }}</a></h3>
							<ul class="post-meta">
								<li>{{ $list_posts->users->name }}</a></li>
								<li>{{ $list_posts->created_at }}</li>
		
							</ul>
							
						</div>
					</div>
				
				@endforeach
				<center>{{ $data->links() }}</center>
				</div>

													<!-- /post -->
@endsection