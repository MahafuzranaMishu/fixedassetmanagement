@extends('backend.master')
@section('content')
<h1>Enter Allocation Information</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif
<form action="{{route('Allocation.Store')}}" method="post">
        @csrf
        
        <div class="form-group">
                            <label for="User_ID">Select User ID</label>
                            <select class="form-control" name="userid" id="">
                                @foreach($Users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
         </div>

         
       
        <div class="form-group">
                            <label for="Asset_ID">Select Asset ID</label>
                            <select class="form-control" name="assetid" id="">
                                @foreach($Assets as $Asset)
                                <option value="{{$Asset->id}}">{{$Asset->name}}</option>
                                @endforeach
                            </select>
         </div>
         <div class="form-group">
            <label for="st">Unit</label>
            <textarea class="form-control" name="unit" id="st" type="text" placeholder="Enter unit "></textarea>
        </div>
        
        <div class="form-group">
            <label for="st">Details</label>
            <textarea class="form-control" name="status" id="st" type="text" placeholder="Enter Details "></textarea>
        </div>
        <div class="form-group">
            <label for="Dt">Date</label>
            <input class="form-control" name="date" id="dt" type="date" placeholder="Enter Allocation Date "></input >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
