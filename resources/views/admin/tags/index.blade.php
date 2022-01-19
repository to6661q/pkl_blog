@extends('template_backend.home')
@section('sub-judul','Daftar Tags Berita')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>
@endif
    <a href="{{ route('tags.create')}}" class="btn btn-primary btn-sm">Tambah Tags</a>
    <br>
    <br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Tags</th>
            <th>Pilihan</th>
        </thead>
        <tbody>
            @foreach ($tags as $result =>$hasil)
            <tr>
                <td>{{ $result + $tags -> firstitem()}}</td>
                <td>{{ $hasil->name }}</td>
                <td>
                    <form action="{{ route('tags.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('tags.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tags->links() }}
@endsection