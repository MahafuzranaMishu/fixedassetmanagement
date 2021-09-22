@extends('backend.master')
@section('content')

    <h1>Edit category Info</h1>

    {{-- hidden,email , text, file, password, submit, number--}}
    {{--     1. Form Level validation       --}}
    {{--     1. Server side validation       --}}

    <form action="{{route('category.update',$category->id)}}" method="post">
       
       @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Enter Category Name</label>
            <input value="{{$category->name}}" name="category_name" id="name" type="text" class="form-control" placeholder="Enter Category Name">
        </div>

        <div class="form-group">
            <label for="d">Description</label>
            <input value="{{$category->details}}" class="form-control" name="description" id="d" placeholder="Enter Description"></input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
