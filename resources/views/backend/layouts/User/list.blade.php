@extends('backend.master')
@section('content')
<h1>User List</h1>

<a href="{{route('User.create')}}" class="btn btn-info">
    <i class="bi bi-list-nested"></i>
    Register as User</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
    </tr>
    </thead>
    <tbody>
        @foreach($users as $User)
    <tr>
        <th scope="row">{{$User->id}}</th>
        <td>{{$User->name}}</td>
        <td>{{$User->email}}</td>
        <td>{{$User->mobileno}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
