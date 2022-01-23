<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('public/assets/js/scripts.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
   
    <div class="card" style="text-align:center;">
        <div class="text-center">
			<img  src="{{ asset('public/frontend/img/kecamatan-bojonegara_1619666865.jpg') }}" alt="" height="500">
		</div>
        
        <h3>Halaman Autentikasi Admin</h3>
            
        @guest
            @if (Route::has('login'))                    
                <a class="btn" href="{{ route('login') }}" style="background-color:#134281">{{ __('Masuk') }}</a>
            @endif

            @if (Route::has('register'))
                <a class="btn " href="{{ route('register') }}" style="background-color:#134281">{{ __('Daftar') }}</a>               
            @endif
                        
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </div>
                </li>
        @endguest
        
        <br>
        <br>         
  </div>
</div>
                
<main class="py-4"  style="text-align:center;">

    @yield('content')

</main>
    
</body>

</html>