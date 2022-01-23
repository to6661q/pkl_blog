@extends('template_backend.home')
@section('sub-judul','Edit Admin')
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

<form action="{{ route('user.update', $user->id) }}" method="POST">
@csrf

@method('put')

    <div class="form-group">
        <label>Username :</label>
        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
    </div>

    <div class="form-group">
        <label>Email :</label>
        <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly>
    </div>

    <div class="form-group">
        <label>Status :</label>
        <select type="text" class="form-control" name="type">
            <option value="" holder>Pilih status admin</option>

            <option value="1" holder
                @if($user->type == 1)
                    selected
                @endif
            >Administrator</option>

            <option value="0" holder
            @if($user->type == 0)
                    selected
                @endif
            >Author</option>

        </select>
    
    </div>

    <div class="form-group">
        <label>Password :</label>
        <input type="text" class="form-control" name="password">
    </div>

    <div class="form-group">
        <button class="btn btn-primary " style="background-color:#134281">Simpan</button>
    </div>

</form>

@endsection