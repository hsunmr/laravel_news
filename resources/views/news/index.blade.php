@extends('layouts.app')

@section('content')
<h2 class="text-center">新聞列表</h2>
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
<div class="container mt-2 mb-5">
    <form action="{{route('news.index')}}" method="get">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <select name="categories" id="categories" class="form-control">
                    <option value="">全部</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="col-md-2">
                <input type="submit" value="搜尋" class="btn btn-outline-primary form-control">
            </div>
        </div>

    </form>
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