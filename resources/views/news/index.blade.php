@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="container">
    @if (session('success'))
      <div id="success-message" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
</div>
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    @foreach ($news as $new)
        <div class="news-preview">
            <a href="{{route('news.show',$new->id)}}">
                <h2 class="news-title">
                    {{$new->title}}
                </h2>
                <img class="w-100" src="{{ asset('uploads/news/' . $new->image) }}">
            </a>
            <p class="news-meta">
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