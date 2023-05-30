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
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Birthday</th>
    <th>Actions</th>
</tr>
</thead>
<tbody class="table-group-divider">
        @foreach ($authors as $author)
        <tr class="table-primary" >
        <td>    <br>
        {{$author->name}}
        </td>
        <td>{{$author->email}}</td>
        <td>{{$author->phone}}</td>
        <td>{{$author->birthday}}</td>
        <td>
            <a href="{{url("/authors/".$author->id)}}" class="btn btn-danger">View</a>
            <a href="{{url("/authors/".$author->id."/edit")}}" class="btn btn-warning">Edit</a>
            <form action="{{url("/authors/".$author->id)}}" method="post" class="d-inline">
            {{ method_field('DELETE') }}
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
</tbody>
</table>
<a href="{{url("/authors/create")}}" class="btn btn-success">Add a new author</a>
</div>

@endsection
