@extends('backend.master')
@section('content')
<h1>Enter Purchase</h1>

<form action="{{route('Purchase.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter Asset Name</label>
            <input name="asset_name" id="name" type="text" class="form-control" placeholder="Enter Category Name">
        </div>

        <div class="form-group">
            <label for="E">Details</label>
            <textarea class="form-control" name="Details" id="E" type="text" placeholder="Enter Details"></textarea>
        </div>
        <div class="form-group">
            <label for="p">Enter Price</label>
            <input name="price" id="name" type="text" class="form-control" placeholder="Enter Asset Price">
        </div>
        <div class="form-group">
            <label for="ph">Image</label>
            <textarea class="form-control" name="image" id="ph" type="text" placeholder="Enter Image link "></textarea>
        </div>
        <div class="form-group">
            <label for="st">Status</label>
            <textarea class="form-control" name="status" id="st" type="text" placeholder="Enter Status "></textarea>
        </div>
        <div class="form-group">
            <label for="Dt">Date</label>
            <textarea class="form-control" name="date" id="dt" type="text" placeholder="Enter Image link "></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
