@extends('template_profilblog.content')
@section('isi')

    <table class="table table-striped table-hover table-sm table-bordered">
        <thead >
            <th style="text-align:center;">No</th>
            <th style="text-align:center;">Keterangan</th>
            <th style="text-align:center;">File</th>
            <th style="text-align:center;">Pilihan</th>
        </thead>

        <tbody>
            @foreach ($dokumen as $result =>$hasil)

            <tr>
                <td style="text-align:center;">{{ $result + $dokumen -> firstitem()}}</td>
                <td>{{ $hasil->keterangan }}</td> 
                <td>
                    <iframe src="{{ asset($hasil->file) }}" style="width: 100%;height: 100%;border: none;">
                    </iframe></td>
                <td style="text-align:center;">
                    <a href="{{ asset($hasil->file) }}" class="btn btn-primary btn-sm" style="background-color:#134281" download>Download</a></td>
            </tr>

            @endforeach

        </tbody>
    </table>

    {{ $dokumen->links() }}

@endsection