@extends('backend.master')
@section('content')
<h1>User List</h1>

<a href="{{route('User.create')}}" class="btn btn-info">
    <i class="bi bi-list-nested"></i>
    Add User</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Designation</th>
        <th scope="col">Type</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Address</th>
    </tr>
    </thead>
    <tbody>
        @foreach($user as $key=>$User)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$User->name}}</td>
        <td>{{$User->designation}}</td>
        <td>{{$User->role}}</td>
        <td>{{$User->email}}</td>
        <td>{{$User->mobileno}}</td>
        <td>{{$User->address}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection
