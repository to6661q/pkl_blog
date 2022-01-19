@extends('template_backend.home')
@section('sub-judul','Tambah Berita')
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
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label>Judul Berita :</label>
        <input type="text" class="form-control" multiple="" name="judul">
    </div>
    <div class="form-group">
        <label>Kategori :</label>
        <select class="form-control" name="category_id">
            <option value="" holder>Pilih kategori</option>
            @foreach($category as $result)
                <option value="{{ $result->id }}">{{ $result -> namec }}</option>
            @endforeach 
        </select>
    </div>
    <div class="form-group">
        <label>Tags :</label>
            <select class="form-control select2" multiple="" name="tags[]">
                @foreach($tags as $tags)
                    <option value="{{ $tags->id }}">{{ ($tags->name) }}</option>
                @endforeach  
            </select>
     </div>
    <div class="form-group">
        <label>Konten :</label>
        <textarea class="form-control" name="content" id="content"></textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail :</label>
        <input class="form-control" type="file" name="gambar">
    </div>
    <div class="form-group">
        <button class="btn btn-primary ">Simpan</button>
    </div>
</form>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'content' );
</script>
@endsection