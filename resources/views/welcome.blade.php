@extends('layouts.app')

@section('content')
    <header>
        <h1 style="color:#F15B5B">LARAVEL NEWS</h1>
    </header>
    <section class="container-fluid p-5" id="home-content">
        <h3 class="text-center">HOT NEWS</h3>
        @foreach ($news as $new)
        <div class="item p-3">
            <div class="row">
                @if($loop->index % 2 == 0)
                <div class="col">
                    <img class='w-100'src="{{asset('uploads/news/' . $new->image)}}" alt="">
                </div>
                <div class="col-md">
                    <h3>{{$new->title}}</h3>
                   {{$new->content}}
                </div>        
                @else
                <div class="col-md">
                    <h3>{{$new->title}}</h3>
                   {{$new->content}}
                </div>   
                <div class="col-md">
                    <img class='w-100'src="{{asset('uploads/news/' . $new->image)}}" alt="">
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </section>
@endsection


