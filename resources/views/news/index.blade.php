@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    @foreach ($news as $new)
        <div class="post-preview">
            <a href="/posts/{{$new->id}}">
                <h2 class="post-title">
                    {{$new->title}}
                </h2>
                <img class="w-100" src="{{ asset('uploads/news/' . $new->image) }}">
            </a>
            <p class="post-meta">
                Posted by
                <a href="#">{{$new->user->name}}</a>
                on {{$new->created_at->toFormattedDateString()}}
            </p>
        </div>
    @endforeach
    </div>
</div>
</div>
@endsection