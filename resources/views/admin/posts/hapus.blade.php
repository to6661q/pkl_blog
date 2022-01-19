@extends('template_backend.home')
@section('sub-judul','Recycle Berita')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>
@endif
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Judul Berita</th>
            <th>Kategori</th>
            <th>Tags</th>
            <th>Thumbnail</th>
            <th>Pilihan</th>
        </thead>
        <tbody>
            @foreach ($posts as $result =>$hasil)
            <tr>
                <td>{{ $result + $posts -> firstitem()}}</td>
                <td>{{ $hasil->judul }}</td>
                <td>{{ $hasil -> namec }}</td>
                <td>@foreach ($hasil -> tags as $tags2)
                    <ul>
                        <li>{{ $tags2->name }}</li>
                    </ul>
                    @endforeach
                </td>
                <td><img src="{{ asset($hasil->gambar) }}" 
        class="img-fluid" style="width:100px" ></td>
                <td>
                    <form action="{{ route('posts.kill', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('posts.restore', $hasil->id) }}" class="btn btn-info btn-sm">Restore</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection