<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('img/logo.png') }}"rel="icon">
        @yield('head')
        <title>LoveMyPhone</title>
    </head>
    
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" width="55" ></a>
                <a class="navbar-brand" href="{{ url('/') }}">Accueil</a>
                <a class="navbar-brand" href="{{ url('/products') }}">Nos produits</a>
                <a class="navbar-brand" href="{{ url('/contact') }}">Contactez-nous</a>
                <a class="navbar-brand" href=@auth"{{ route('cart') }}"@else"{{ route('login') }}"@endauth>Panier</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">@lang('Connexion')</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">@lang('Inscription')</a></li>
                        @else
                            <li class="nav-item">
                                <a id="logout" class="nav-link" href="{{ route('logout') }}">@lang('Déconnexion')</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
            @yield('header')
        </header>
        <br>
        
        @yield('content')
        
        <footer id='monFooter' class="text-white bg-dark">
        	<p>&copy; Hamza Serhane & Benjamin Bonsignore - DTA 2018-2019</p>
        </footer>
        
        <script src="{{ asset('js/app.js') }}"></script>
        
        @yield('script')
        
        <script>
            $(() => {
                $('#logout').click((e) => {
                    e.preventDefault()
                    $('#logout-form').submit()
                })
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>