@extends('backend.master')
@section('content')
<h1>Manager List</h1>



<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
    </tr>
    </thead>
    <tbody>

        @foreach($user as $key=>$Admin)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$Admin->name}}</td>
        <td>{{$Admin->role}}</td>
        <td>{{$Admin->email}}</td>
        <td>{{$Admin->mobileno}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection