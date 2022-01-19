@extends('template_backend.home')
@section('sub-judul','Daftar Kategori Postingan Profil')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>
@endif
    <a href="{{ route('profilcategory.create')}}" class="btn btn-primary btn-sm">Tambah Kategori Postingan Profil</a>
    <br>
    <br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Kategori Postingan Profil</th>
            <th>Pilihan</th>
        </thead>
        <tbody>
            @foreach ($profilcategory as $result =>$hasil)
            <tr>
                <td>{{ $result + $profilcategory -> firstitem()}}</td>
                <td>{{ $hasil->profilnamec }}</td>
                <td>
                    <form action="{{ route('profilcategory.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('profilcategory.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $profilcategory->links() }}
@endsection