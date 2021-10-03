@extends('backend.master')
@section('content')
<h1>Create Manager</h1>

<form action="{{route('Admin.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter User Name</label>
            <input required name="user_name" id="name" type="text" class="form-control" placeholder="Enter Category Name">
        </div>

        <div class="form-group">
            <label for="E">Email</label>
            <textarea class="form-control" name="email" id="E" type="Email"  required placeholder="Enter Email"></textarea>
        </div>
        <div  class="form-group">
            <label for="p">Enter Password</label>
            <input required name="password" id="name" type="password" class="form-control" placeholder="Enter your password">
        </div>
        <div class="form-group">
            <label for="ph">Mobile number</label>
            <textarea class="form-control"  required name="mobileno" id="ph" type="text" placeholder="Enter Mobile no"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
