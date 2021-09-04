@extends('frontend.master')
@section('contents')
<h1>Signup Here</h1>

<div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
           

            <form action="{{route('signup.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter User Name</label>
            <input name="user_name" id="name" type="text" class="form-control" placeholder="Enter User Name">
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

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

        </div>
        <div class="col-md-3"></div>
    </div>

    
@endsection
