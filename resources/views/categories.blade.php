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
<div class="container" id="category">
    <div class="row">
        <div class="col-md">
            <h3>Categories</h3>
            @foreach ($categories as $category)
                <h4>{{$category->name}}</h4>
            @endforeach
        </div>
        <div class="col-md">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">新增</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection