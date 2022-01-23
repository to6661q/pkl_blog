@extends('template_backend.home')
@section('sub-judul','Daftar Dokumen')
@section('content')

@if(Session::has('success'))

    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>

@endif

    <a href="{{ route('dokumen.create')}}" class="btn btn-primary btn-sm" style="background-color:#134281">Tambah Dokumen</a>
    <br>
    <br>

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Keterangan</th>
            <th>File</th>
            <th>Pilihan</th>
        </thead>

        <tbody>

            @foreach ($dokumen as $result =>$hasil)

            <tr>
                <td>{{ $result + $dokumen -> firstitem()}}</td>
                <td>{{ $hasil->keterangan }}</td>   
                <td><iframe src="{{ asset($hasil->file) }}" style="width: 100%;height: 100%;border: none;"></iframe></td>
                <td>
                    <form action="{{ route('dokumen.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('dokumen.edit', $hasil->id) }}" class="btn btn-primary btn-sm" style="background-color:#134281">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

    {{ $dokumen->links() }}

@endsection