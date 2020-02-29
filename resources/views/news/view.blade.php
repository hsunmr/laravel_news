@extends('layouts.app')

@section('content')
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
            <div class="news-preview">
                <a href="{{route('news.show',$news->id)}}">
                    <h2 class="news-title">
                        {{$news->title}}
                    </h2>
                    <h4>
                    @foreach ($news->categories as $category)
                        #{{$category->name}}
                    @endforeach
                    </h4>
                    <img class="w-100" src="{{ asset('uploads/news/' . $news->image) }}">
                </a>
                <h3 class="post-subtitle">
                    {{$news->content}}
                </h3>
                <p class="news-meta">
                    Posted by
                    <a href="#">{{$news->user->name}}</a>
                    on {{$news->created_at->toFormattedDateString()}}
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="text-center">網友留言</h3>
    <div class="row  justify-content-center">
      <div class="col-md-10">
        @foreach ($news->comments as $comment)
          <div style="border: 2px solid black;border-radius: 50px 25px;" class="mt-3 p-2">{{$comment->body}}</div>
        @endforeach
        <div></div>
      </div>
    </div>
</div>
  
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form method="POST" action="{{route('comment.store',$news->id)}}">
                @csrf
                <div class="form-group">
                <label for="body">Comment</label>
                <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-outline-primary" value="Add Comment"/>
            </form>
        </div>
</div>
@endsection