@extends('template_backend.home')
@section('sub-judul','Recycle Dokumen')
@section('content')

@if(Session::has('success'))

    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>

@endif

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
                    <form action="{{ route('dokumen.kill', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route('dokumen.restore', $hasil->id) }}" class="btn btn-info btn-sm" style="background-color:#134281">Restore</a>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

    {{ $dokumen->links() }}

@endsection