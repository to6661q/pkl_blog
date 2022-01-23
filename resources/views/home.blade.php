@extends('template_backend.home')

@section('content')

<div class="container">
    <h6 class="header">{{ __('Hai') }} {{ Auth::user()->name}}
            @if (session('status'))
                <div class="alert alert-success" role="alert"> 
                    {{ session('status') }}
                </div>
            @endif
                    {{ __(', Anda berhasil login sebagai admin.') }}
               </div>
    </h6>
    <div class="row justify-content-left">    
        <div class="col-md">
            <div class="card">     
			<img  src="{{ asset('public/frontend/img/kecamatan-bojonegara_1619666865.jpg') }}" alt="">
            </div>
        </div>
    </div>

@endsection