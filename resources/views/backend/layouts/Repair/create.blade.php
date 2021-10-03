@extends('backend.master')
@section('content')
<h1>Enter Repair Information</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif  
<form action="{{route('Repair.store')}}" method="post">
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
                            <label for="Allocation_ID">Select Allocation ID</label>
                            <select class="form-control" name="allocationid" id="allocationid">
                                @foreach($Allocations as $Allocation)
                                <option value="{{$Allocation->id}}">{{$Allocation->id}}</option>
                                @endforeach
                            </select>
         </div>
        <div class="form-group">
            <label for="st">Reason</label>
            <textarea class="form-control" name="details" id="st" type="text" required placeholder="Enter Details "></textarea>
        </div>
        <div class="form-group">
            <label for="ph">Repair Company Name</label>
            <input class="form-control" name="Companyname" id="ph" type="text" required placeholder="Enter Asset name "></input>
        </div>
        <div class="form-group">
            <label for="Dt">Delivery Date</label>
            <input class="form-control" name="date" id="dt" type="date" required placeholder="Enter Delivery Date "></input>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
