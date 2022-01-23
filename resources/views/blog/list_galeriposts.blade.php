@extends('template_profilblog.content')
@section('isi')

<div class="container">	
	<h2 class="title" style="text-align:center;">Galeri Dokumentasi</h2>

@foreach($data as $post_terbaru)
	<div class="col-md-4">
		<div class="post post-sm">
			<div class="post-body" style="text-align:center;">
				<div class="post-category">
					<a href="{{ route('blog.isi', $post_terbaru-> slug) }}">{{ $post_terbaru->namec}}</a>
				</div>
						
			</div>
			<a class="post-img" href="{{ route('blog.isi', $post_terbaru-> slug) }}">
				<img src="{{ $post_terbaru->gambar }}" alt=""  onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="height:240px"></a>
		</div>
	</div>	
@endforeach

    <div class="gallery-wrap">
    <div class="container">

</div>
</div>







				<center>{{ $data->links() }}</center>
				</div>	
									
@endsection
