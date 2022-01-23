@extends('template_backend.home')
@section('sub-judul','Tambah TPENGADUANta')
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
<form action="{{ route('pengaduanmasyarakat.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label>Nama Orang Pengaduan:</label>
        <input type="text" class="form-control" multiple="" name="nama">
    </div>

    <div class="form-group">
        <label>email :</label>
        <input type="text" class="form-control" multiple="" name="email">
    </div>

    <div class="form-group">
        <label>Isi Pengaduan :</label>
        <textarea class="form-control" name="pengaduancontent" id="pengaduancontent"></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-primary ">Simpan</button>
    </div>
</form>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'pengaduancontent' );
</script>



@endsection