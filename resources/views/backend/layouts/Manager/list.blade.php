@extends('backend.master')
@section('content')
<h1>Manager List</h1>

<a href="{{route('Manager.create')}}" class="btn btn-info">
    <i class="bi bi-list-nested"></i>
    Add New Manager</a>

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

        @foreach($Admins as $Admin)
    <tr>
        <th scope="row">{{$Admin->id}}</th>
        <td>{{$Admin->name}}</td>
        <td>{{$Admin->email}}</td>
        <td>{{$Admin->mobileno}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
