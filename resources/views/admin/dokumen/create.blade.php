@extends('template_backend.home')
@section('sub-judul','Tambah Dokumen')
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

<form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="form-group">
        <label>Keterangan Dokumen :</label>
        <input type="text" class="form-control" multiple="" name="keterangan">
    </div>

    <div class="form-group">
        <label>File :</label>
        <input class="form-control" type="file" name="file">
    </div>

    <div class="form-group">
        <button class="btn btn-primary " style="background-color:#134281">Simpan</button>
    </div>

</form>

@endsection