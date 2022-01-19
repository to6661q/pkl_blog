@extends('template_profilblog.content')
@section('isi')

@foreach($profildata as $isi_profilposts)

<div class="post">
	<div class="post post-thumb">
		<a class="post-img" href="{{ route('blog.isi', $isi_profilposts->slug ) }} ">
			<img src="{{ asset($isi_profilposts->profilgambar)}}" alt="{{ $isi_profilposts->profiljudul }}" style="height: 480px;"></a>	
	</div>
</div>

<div class="col-md-8 hot-post-left">
<br>
	<div class="section-row ">
		<div class="container">
			<div class="row">
					<div class="post-category">
						<a href="">{{ $isi_profilposts->profilnamec}}</a>
					</div>
						<h1 style="text-align:center;">{{ $isi_profilposts->profiljudul}}</h1>
					</div>
			</div>
</header>

<div class="container well" style="text-align:center;">
   {!! $isi_profilposts->profilcontent !!}
</div>

	
</div>
@endforeach
</div>
@endsection








