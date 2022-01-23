@extends('template_backend.home')
@section('sub-judul','Tambah Postingan Profil')
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

<form action="{{ route('profilposts.store') }}" method="POST" enctype="multipart/form-data">

@csrf

    <div class="form-group">
        <label>Judul Postingan Profil :</label>
        <input type="text" class="form-control" multiple="" name="profiljudul">
    </div>

    <div class="form-group">
        <label>Kategori :</label>
        <select class="form-control" name="profilcategory_id">
            <option value="" holder>Pilih kategori postingan Profil</option>
            @foreach($profilcategory as $result)
                <option value="{{ $result->id }}">{{ $result -> profilnamec }}</option>
            @endforeach 
        </select>
    </div>

    <div class="form-group">
        <label>Konten :</label>
        <textarea class="form-control" name="profilcontent" id="profilcontent"></textarea>
    </div>

    <div class="form-group">
        <label>Thumbnail :</label>
        <input class="form-control" type="file" name="profilgambar">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" style="background-color:#134281">Simpan</button>
    </div>

</form>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'profilcontent' );
</script>

@endsection