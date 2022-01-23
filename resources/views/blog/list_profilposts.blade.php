@extends('template_profilblog.content')
@section('isi')

<div class="container">	
	<h2 class="title" style="text-align:center;">Profil</h2>

@foreach($profildata as $post_terbaru)
	<div class="col-md-4">
		<div class="post post-sm">
			<div class="post-body" style="text-align:center;">
				<div class="post-category">
							<h4 href="{{ route('profilblog.isi', $post_terbaru-> slug) }}">{{ $post_terbaru->profilcategory->profilnamec}}</h4>
						</div>
						
					</div>
			<a class="post-img" href="{{ route('profilblog.isi', $post_terbaru-> slug) }}">
				<img src="{{ $post_terbaru->profilgambar }}" alt=""  onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="height:240px"></a>
		</div>
		</div>	

	@endforeach
				<center>{{ $profildata->links() }}</center>
				</div>						
@endsection
