<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel News</title>

    <!-- Scripts -->

    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        header{
            height:604px;
            background-color:#6597BD;
            justify-content: center;
            align-items: center;
            display: flex;
            margin:0 27px 0 27px;
        }
        footer{
            background-color: #6597BD;
            color:white;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #F15B5B;
        }
        img{
            width: auto;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light bg-white navbar-expand-lg ">
            <div class="container-fluid">
                
                <a class="navbar-brand" href="/">
                    <img src="https://via.placeholder.com/103x52?text=LOGO" width="103" height="52" class="d-inline-block align-top" alt="">
                </a>
            
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbar-item" aria-controls="nnavbar-item" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-item">
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('news.index')}}">news</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      create
                                    </a>
                                  
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item" href="{{route('news.create')}}">news</a>
                                      <a class="dropdown-item" href="{{route('category.index')}}">category</a>
                                    </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </li>
                          
                        @endguest
    
                        </li>
                    </ul>
                </div>
          </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="py-6 text-center p-3"> footer</footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
