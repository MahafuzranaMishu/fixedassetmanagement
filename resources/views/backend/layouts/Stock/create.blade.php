@extends('backend.master')
@section('content')
<h1>Enter Stock Information</h1>

<form action="{{route('stock.store')}}" method="post">
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
            <label for="st">Unit</label>
            <textarea class="form-control" name="Unit" id="st" type="text" placeholder="Enter Unit "></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
