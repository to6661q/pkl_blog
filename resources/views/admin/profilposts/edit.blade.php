@extends('template_backend.home')
@section('sub-judul','Edit Postingan Profil')
@section('content')
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
<form action="{{ route('profilposts.update', $profilposts->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
    <div class="form-group">
        <label>Judul Postingan Profil :</label>
        <input type="text" class="form-control" name="profiljudul" value="{{ $profilposts->profiljudul}}">
    </div>
    <div class="form-group">
        <label>Kategori :</label>
        <select class="form-control" name="profilcategory_id">
            <option value="" holder>Pilih kategori postingan profil :</option>
            @foreach($profilcategory as $result)
                <option value="{{ $result->id }}"
                    @if( $profilposts->profilcategory_id == $result->id)
                        selected
                    @endif
                >{{ $result -> profilnamec }}</option>
            @endforeach    
        </select>
    </div>
    <div class="form-group">
        <label>Konten :</label>
        <textarea class="form-control" name="profilcontent" id="profilcontent">{{$profilposts->profilcontent}}</textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail :</label>
        <input class="form-control" type="file" name="profilgambar">
    </div>
    <div class="form-group">
        <button class="btn btn-primary ">Simpan</button>
    </div>
</form>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'profilcontent' );
</script>
@endsection