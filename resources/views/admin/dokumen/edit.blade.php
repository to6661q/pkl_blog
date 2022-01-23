@extends('template_backend.home')
@section('sub-judul','Edit Dokumen')
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

<form action="{{ route('dokumen.update', $dokumen->id) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('PATCH')

    <div class="form-group">
        <label>Keterangan :</label>
        <input type="text" class="form-control" name="keterangan" value="{{ $dokumen->keterangan}}">
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