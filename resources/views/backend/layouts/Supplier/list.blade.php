@extends('backend.master')
@section('content')
<h1>Supplier List</h1>

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
    </tr>
    </thead>
    <tbody>
        @foreach($supply as $key=>$data)
    <tr>
        <th scope="row">{{$key+0}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->mobileno}}</td>
        <td>{{$data->address}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
 {{$supply->links('pagination::bootstrap-4')}} 
@endsection
