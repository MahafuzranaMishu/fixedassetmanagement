@extends('backend.master')
@section('content')
<h1>Category List</h1>

<a href="{{route('category.create')}}" class="btn btn-info">
    <i class="bi bi-list-nested"></i>
    Create New Category</a>

    @if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Category Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
{{--categories--}}
{{--@dd($categories)--}}
@foreach($categories as $category)
    <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>{{$category->status}}</td>
        <td>
            <a href="{{route('category.asset',$category->id)}}" class="btn btn-primary">view</a>
            <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('category.delete',$category->id)}}"><i class="material-icons">Delete</i></a>
        <a href="{{route('category.edit',$category->id)}}"><i class="material-icons">Edit</i></a>
        </td>
    </tr>
@endforeach
    </tbody>
</table>
{{$categories->links('pagination::bootstrap-4')}}
@endsection
