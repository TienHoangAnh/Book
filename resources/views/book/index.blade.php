@extends('layout.layout')
@section('title', 'Book List')
@section('content')

<div class="table-responsive">

<table class="table table-striped
table-hover
table-borderless
table-primary
align-middle">
<thead class="table-light">
<tr>
    <th>Title</th>
    <th>Author</th>
    <th>Action</th>
</tr>
</thead>
<tbody class="table-group-divider">
        @foreach ($books as $book)
        <tr class="table-primary" >
        <td>
            {{$book->title}}
        </td>
        <td>
            <a href="{{url("/books/".$book->id)}}" class="btn btn-danger">{{$book->author->name}}</a>

            {{-- <a href="">{{$book->author->name}}</a> --}}
        </td>
        <td>
            <a href="{{url("/books/".$book->id)}}" class="btn btn-danger">View</a>
            <a href="{{url("/books/".$book->id."/edit")}}" class="btn btn-warning">Edit</a>
            <form action="{{url("/books/".$book->id)}}" method="post" class="d-inline">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
</tbody>
</table>
<a href="{{url("/books/create")}}" class="btn btn-success">Add a new book</a>
</div>

@endsection
