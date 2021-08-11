@extends('backend.master')
@section('content')
<h1>Enter Repair Information</h1>

  
<form action="{{route('Repair.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="p">Enter Asset Id</label>
            <input name="assetid" id="name" type="text" class="form-control" placeholder="Enter Asset ID">
        </div>
        <div class="form-group">
            <label for="ph">Asset Name</label>
            <textarea class="form-control" name="assetname" id="ph" type="text" placeholder="Enter Asset name "></textarea>
        </div>
        <div class="form-group">
            <label for="st">Details</label>
            <textarea class="form-control" name="details" id="st" type="text" placeholder="Enter Details "></textarea>
        </div>
        <div class="form-group">
            <label for="ph">Repair Company Name</label>
            <textarea class="form-control" name="Companyname" id="ph" type="text" placeholder="Enter Asset name "></textarea>
        </div>
        <div class="form-group">
            <label for="Dt">Delivery Date</label>
            <textarea class="form-control" name="date" id="dt" type="text" placeholder="Enter Delivery Date "></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
