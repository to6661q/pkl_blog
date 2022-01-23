@extends('template_backend.home')
@section('sub-judul','Daftar Pengaduan Masyarakat')
@section('content')
@if(Session::has('success'))

    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>

@endif
    
<br>
<br>
    <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <th>No</th>
            <th>Nama Pengaduan</th>
            <th>Email</th>
            <th>Isi Pengaduan</th>
            <th>Tanggal</th>
        </thead>

        <tbody>
            @foreach ($pengaduanmasyarakat as $result =>$hasil)
            <tr>
                <td>{{ $result + $pengaduanmasyarakat -> firstitem()}}</td>
                <td>{{ $hasil->nama }}</td>
                <td>{{ $hasil->email }}</td>
                <td>{!! $hasil->pengaduancontent !!}</td>
                <td>{{ $hasil->created_at }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>

    {{ $pengaduanmasyarakat->links() }}

@endsection