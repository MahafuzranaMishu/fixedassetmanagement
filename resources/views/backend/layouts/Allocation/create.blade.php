@extends('backend.master')
@section('content')
<h1>Enter Allocation Information</h1>

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
                            <label for="User_ID">Select User name</label>
                            <select class="form-control" name="username" id="">
                                @foreach($Users as $user)
                                <option value="{{$user->name}}">{{$user->id}}</option>
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
                            <label for="Asset_name">Select Asset Name</label>
                            <select class="form-control" name="assetname" id="">
                                @foreach($Assets as $Asset)
                                <option value="{{$Asset->name}}">{{$Asset->name}}</option>
                                @endforeach
                            </select>
         </div>
        
        <div class="form-group">
            <label for="st">Details</label>
            <textarea class="form-control" name="status" id="st" type="text" placeholder="Enter Details "></textarea>
        </div>
        <div class="form-group">
            <label for="Dt">Date</label>
            <textarea class="form-control" name="date" id="dt" type="text" placeholder="Enter Allocation Date "></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
