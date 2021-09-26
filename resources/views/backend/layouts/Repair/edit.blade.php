@extends('backend.master')
@section('content')
<h1>Enter Repair Information</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif  

<form action="{{route('Repair.update',$repair->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
                            <label for="Asset_ID">Select Asset ID</label>
                            <select class="form-control" name="assetid" id="">
                                @foreach($Assets as $Asset)
                                <option  @if($repair->Asset_id==$Asset->id)
                                  selected
                                  @endif
                                value="{{$Asset->id}}">{{$Asset->name}}</option>
                                @endforeach
                            </select>
         </div>
         <div class="form-group">
                            <label for="Allocation_ID">Select Allocation ID</label>
                            <select class="form-control" name="allocationid" id="allocationid">
                                @foreach($Allocations as $Allocation)
                                
                                <option  @if($repair->Allocation_id==$Allocation->id)
                                  selected
                                  @endif
                                 value="{{$Allocation->id}}">{{$Allocation->id}}</option>
                                @endforeach
                            </select>
         </div>
        <div class="form-group">
            <label for="st">Reason</label>
            <input value="{{$repair->reason}}"  class="form-control" name="details" id="st" type="text" placeholder="Enter Details "></input>
        </div>
        <div class="form-group">
            <label for="ph">Repair Company Name</label>
            <input value="{{$repair->repaircompanyname}}" class="form-control" name="Companyname" id="ph" type="text" placeholder="Enter Asset name "></input>
        </div>
        <div class="form-group">
            <label for="Dt">Delivery Date</label>
            <input value="{{$repair->deliverydate}}" class="form-control" name="date" id="dt" type="text" placeholder="Enter Delivery Date "></input>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
