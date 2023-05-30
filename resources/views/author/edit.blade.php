@extends('layout.layout')
@section('title', 'Edit Book')
@section('content')

<form action="/authors/{{$author->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Author name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Author name" value="{{$author->name}}">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Author email" value="{{$author->email}}">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Author phone" value="{{$author->phone}}">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author birthday</label>
        <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Author birthday" value="{{$author->birthday}}">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author biography</label>
        <input type="text" class="form-control" id="biography" name="biography" placeholder="Author biography" value="{{$author->biography}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
