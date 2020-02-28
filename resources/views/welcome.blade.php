<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
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
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-white navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/103x52?text=LOGO" width="103" height="52" class="d-inline-block align-top" alt="">
            </a>
        
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbar-item" aria-controls="nnavbar-item" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-item">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">news</a>
                    </li>
                    <li class="nav-item">
                        @guest
                            <a class="nav-link" href="{{route('login')}}">login</a>
                        @endguest
                        @auth
                            <a class="nav-link" href="{{route('login')}}">Hi! {{ Auth::user()->name }}</a>
                        @endauth

                    </li>
                </ul>
            </div>
      </div>
    </nav>
    <header>
        <h1 style="color:#F15B5B">LARAVEL NEWS</h1>
    </header>
    <section class="container-fluid p-5" id="home-content">
        <h3 class="text-center">HOT NEWS</h3>
        <div class="item p-3">
            <div class="row">
                <div class="col-md">
                    <img class='w-100'src="https://via.placeholder.com/600x350" alt="">
                </div>
                <div class="col-md">
                   tesxt
                </div>
            </div>
        </div>
        <div class="item p-3">
            <div class="row">
                <div class="col-md">
                   tesxt
                </div>
                <div class="col-md">
                    <img class='w-100'src="https://via.placeholder.com/600x350" alt="">
                </div>
            </div>
        </div>

    </section>
    <footer class="py-6 text-center p-3"> footer</footer>
</body>
</html>