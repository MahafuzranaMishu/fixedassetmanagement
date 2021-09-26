@extends('backend.master')
@section('content')
<h1>Update Supplier Info</h1>

<form action="{{route('Supplier.update',$suppliers->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Enter Supplier Name</label>
            <input value="{{$suppliers->name}}" name="name" id="name" type="text" class="form-control" placeholder="Enter User Name">
        
        <div class="form-group">
            <label for="E">Email</label>
            <input value="{{$suppliers->email}}" class="form-control" name="email" id="E" type="Email" placeholder="Enter Email"></input>
        </div>
      
        <div class="form-group">
            <label for="ph">Mobile number</label>
            <input value="{{$suppliers->mobileno}}" class="form-control" name="mobileno" id="ph" type="text" placeholder="Enter Mobile no"></input>
        </div>
        <div class="form-group">
            <label for="name">Enter User Address </label>
            <input value="{{$suppliers->address}}" name="Address" id="name" type="text" class="form-control" placeholder="Enter User Address">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection