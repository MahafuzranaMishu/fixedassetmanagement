@extends('backend.master')
@section('content')
<h1>User List</h1>

<a href="{{route('User.create')}}" class="btn btn-info">
    <i class="bi bi-list-nested"></i>
    Add User</a>

    @if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

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
        <th scope="col">Action</th>
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
        
        <td class="">
        <a href="{{route('own.asset',$User->id)}}" class="btn btn-primary">view</a>                               
        <a onclick="return confirm('Are you sure you want to delete this item?'); " href="{{route('User.delete',$User->id)}}" class="btn btn-danger"  ><i class="material-icons">Delete</i> </a>
        <a href="{{route('User.edit',$User->id)}}" class="btn btn-warning"  ><i class="material-icons">Edit</i></a>

        </td>

    </tr>
    @endforeach
    </tbody>
</table>

@endsection
