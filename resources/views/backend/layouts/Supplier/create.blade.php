@extends('backend.master')
@section('content')
<h1>Add Supplier Info</h1>

<form action="{{route('Supplier.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter Supplier Name</label>
            <input name="name" id="name" type="text" class="form-control" placeholder="Enter User Name">
        
        <div class="form-group">
            <label for="E">Email</label>
            <textarea class="form-control" name="email" id="E" type="Email" placeholder="Enter Email"></textarea>
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