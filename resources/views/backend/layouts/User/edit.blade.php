@extends('backend.master')
@section('content')
<h1>Update User</h1>

<form action="{{route('User.update',$users->id)}}" method="post">
  @method('PUT') 

        @csrf
        <div class="form-group">
            <label for="name">Enter User Name</label>
            <input value="{{$users->name}}" name="user_name" id="name" type="text" class="form-control" placeholder="Enter User Name">
        </div>
        <div class="form-group">
            <label for="name">Enter User Designation </label>
            <input value="{{$users->designation}}" name="designation" id="name" type="text" class="form-control" placeholder="Enter User Designation">
        </div>
        <div class="form-group">
            <label for="E">Email</label>
            <input value="{{$users->email}}" class="form-control" name="email" id="E" type="Email" placeholder="Enter Email"></input>
        </div>
        <div class="form-group">
            <label for="p">Enter Password</label>
            <input value="{{$users->password}}" name="password" id="name" type="password" class="form-control" placeholder="Enter your password">
        </div>
        <div class="form-group">
            <label for="ph">Mobile number</label>
            <input value="{{$users->password}}" class="form-control" name="mobileno" id="ph" type="text" placeholder="Enter Mobile no"></input>
        </div>
        <div class="form-group">
            <label for="name">Enter User Address </label>
            <input value="{{$users->address}}" name="Address" id="name" type="text" class="form-control" placeholder="Enter User Address">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
