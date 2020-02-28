@extends('layouts.app')

@section('content')
<h3 class="text-center">CREATE NEWS</h3>
@if ($errors->any())
<div class="container">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<div id="news-create" class="container">
    <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" accept="image/*" class="form-control file-upload mb-3" id="image" >
        </div>
        
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection