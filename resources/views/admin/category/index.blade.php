@extends('template_backend.home')
@section('sub-judul','Daftar Kategori Berita')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>
@endif

    <a href="{{ route('category.create')}}" class="btn btn-primary btn-sm" style="background-color:#134281">Tambah Kategori</a>
    <br>
    <br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Pilihan</th>
        </thead>

        <tbody>

            @foreach ($category as $result =>$hasil)

            <tr>
                <td>{{ $result + $category -> firstitem()}}</td>
                <td>{{ $hasil->namec }}</td>
                <td>
                    <form action="{{ route('category.destroy', $hasil->id) }}" method="POST">

                        @csrf
                        @method('delete')
                        <a href="{{ route('category.edit', $hasil->id) }}" class="btn btn-primary btn-sm" style="background-color:#134281">Edit</a>

                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

    {{ $category->links() }}
    
@endsection