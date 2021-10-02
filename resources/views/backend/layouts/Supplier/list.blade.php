@extends('backend.master')
@section('content')
<h1>Supplier List</h1>
@if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

<a href="{{route('Supplier.create')}}" class="btn btn-info">
    <i class="bi bi-list-nested"></i>
    Add Supplier info</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($supply as $data)
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->mobileno}}</td>
        <td>{{$data->address}}</td>
        <td class="">                                
        <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('Supplier.delete',$data->id)}}"class="btn btn-danger"><i class="material-icons">Delete</i></a>
        <a href="{{route('Supplier.edit',$data->id)}}" class="btn btn-warning"><i class="material-icons">Edit</i></a>                                                          
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
 {{$supply->links('pagination::bootstrap-4')}} 
@endsection
