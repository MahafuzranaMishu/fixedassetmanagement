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

        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

    <form action="{{route('signup.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter User Name</label>
            <input required name="user_name" id="name" type="text" class="form-control" placeholder="Enter User Name">
        </div>

        <div class="form-group">
            <label for="E">Email</label>
            <input required name="email" id="E" type="email" class="form-control" placeholder="Enter Email"></textarea>
        </div>
        <div class="form-group">
            <label for="p">Enter Password</label>
            <input required name="password" id="name" type="password" class="form-control" placeholder="Enter your password">
        </div>
        <div class="form-group">
            <label for="ph">Mobile number</label>
            <input required name="mobileno" id="ph" type="text" class="form-control" placeholder="Enter Mobile no"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{route('home')}}" role="button">Back</a>
    </form>

        </div>
        <div class="col-md-3"></div>
    </div>

    
@endsection
