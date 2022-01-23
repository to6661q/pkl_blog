@extends('template_backend.home')
@section('sub-judul','Tambah Kategori Postingan Profil')
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

<form action="{{ route('profilcategory.store') }}" method="POST">

@csrf
    <div class="form-group">
        <label>Nama Kategori Postingan Profil :</label>
        <input type="text" class="form-control" name="profilnamec">
    </div>

    <div class="form-group">
        <button class="btn btn-primary " style="background-color:#134281">Simpan</button>
    </div>

</form>

@endsection