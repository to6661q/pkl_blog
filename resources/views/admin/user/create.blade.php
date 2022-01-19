@extends('template_backend.home')
@section('sub-judul','Tambah Admin')
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
<form action="{{ route('user.store') }}" method="POST">
@csrf
    <div class="form-group">
        <label>Username :</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Email :</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label>Status :</label>
        <select type="text" class="form-control" name="type">
            <option value="" holder>Pilih status admin</option>
            <option value="1" holder>Administrator</option>
            <option value="0" holder>Author</option>
        </select>
    </div>
    <div class="form-group">
        <label>Password :</label>
        <input type="text" class="form-control" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary ">Simpan</button>
    </div>
</form>
@endsection