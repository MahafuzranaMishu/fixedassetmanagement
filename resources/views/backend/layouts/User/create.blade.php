@extends('backend.master')
@section('content')
<h1>Create User</h1>

<form action="{{route('User.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter User Name</label>
            <input name="user_name" id="name" type="text" class="form-control" placeholder="Enter User Name">
        </div>
        <div class="form-group">
            <label for="name">Enter User Designation </label>
            <input name="designation" id="name" type="text" class="form-control" placeholder="Enter User Designation">
        </div>
        <div class="form-group">
            <label for="E">Email</label>
            <textarea class="form-control" name="email" id="E" type="Email" placeholder="Enter Email"></textarea>
        </div>
        <div class="form-group">
            <label for="p">Enter Password</label>
            <input name="password" id="name" type="password" class="form-control" placeholder="Enter your password">
        </div>
        <div class="form-group">
            <label for="ph">Mobile number</label>
            <textarea class="form-control" name="mobileno" id="ph" type="text" placeholder="Enter Mobile no"></textarea>
        </div>
        <div class="form-group">
            <label for="name">Enter User Address </label>
            <input name="Address" id="name" type="text" class="form-control" placeholder="Enter User Address">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
