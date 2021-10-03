@extends('backend.master')
@section('content')
<h1>Enter Allocation Request</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif
<form action="{{route('user.request.asset')}}" method="post">
        @csrf
        
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
            <input class="form-control" name="unit" id="st" type="text" required placeholder="Enter unit "></input>
        </div>
        <div class="form-group">
            <label for="st">Reason</label>
            <input class="form-control" name="reason" id="st" type="text" required placeholder="Enter Reason "></input>
        </div>
        
        
      

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection