@extends('backend.master')
@section('content')
<h1>Enter Allocation Information</h1>

<form action="{{route('Allocation.Store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter User Id</label>
            <input name="userid" id="name" type="text" class="form-control" placeholder="Enter user Id">
        </div>

        <div class="form-group">
            <label for="E">User Name</label>
            <textarea class="form-control" name="username" id="E" type="text" placeholder="Enter  Name"></textarea>
        </div>
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
            <textarea class="form-control" name="status" id="st" type="text" placeholder="Enter Details "></textarea>
        </div>
        <div class="form-group">
            <label for="Dt">Date</label>
            <textarea class="form-control" name="date" id="dt" type="text" placeholder="Enter Allocation Date "></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
