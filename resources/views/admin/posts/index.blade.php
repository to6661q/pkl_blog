@extends('template_backend.home')
@section('sub-judul','Daftar Berita')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>
@endif
    <a href="{{ route('posts.create')}}" class="btn btn-primary btn-sm">Tambah Berita</a>
    <br>
    <br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Judul Berita</th>
            <th>Kategori</th>
            <th>Tags</th>
            <th>Kreator</th>
            <th>Thumbnail</th>
            <th>Pilihan</th>
        </thead>
        <tbody>
            @foreach ($posts as $result =>$hasil)
            <tr>
                <td>{{ $result + $posts -> firstitem()}}</td>
                <td>{{ $hasil->judul }}</td>   
                <td>{{ $hasil->profilslug }}</td>
                <td>@foreach ($hasil -> tags as $tags2)
                    <ul>
                        <h6><span class="badge badge-info">{{ $tags2->name }}</span></h6>
                    </ul>
                    @endforeach
                </td>
                <td>{{$hasil->users->name }}</td>
                <td><img src="{{ asset($hasil->gambar) }}" 
        class="img-fluid" style="width:100px" ></td>
                <td>
                    <form action="{{ route('posts.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('posts.edit', $hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection