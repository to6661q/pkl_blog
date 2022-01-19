@extends('template_backend.home')
@section('sub-judul','Daftar Postingan Profil')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>
@endif
    <a href="{{ route('profilposts.create')}}" class="btn btn-primary btn-sm">Tambah Postingan Profil</a>
    <br>
    <br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Judul Postingan Profil</th>
            <th>Kategori</th>
            <th>Kreator</th>
            <th>Thumbnail</th>
            <th>Pilihan</th>
        </thead>
        <tbody>
            @foreach ($profilposts as $result =>$hasil)
            <tr>
                <td>{{ $result + $profilposts -> firstitem()}}</td>
                <td>{{ $hasil->profiljudul }}</td>   
                <td>{{ $hasil->profilnamec }}</td>
                <td>{{$hasil->users->name }}</td>
                <td><img src="{{ asset($hasil->profilgambar) }}" 
                class="img-fluid" style="width:100px" ></td>
                <td>
                    <form action="{{ route('profilposts.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('profilposts.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $profilposts->links() }}
@endsection