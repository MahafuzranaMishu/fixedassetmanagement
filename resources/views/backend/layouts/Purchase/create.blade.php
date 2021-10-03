@extends('backend.master')
@section('content')
<h1>Enter Purchase</h1>

<form action="{{route('Purchase.store')}}" method="post">
        @csrf
        <div class="form-group">
                            <label for="asset_name">Select Asset</label>
                            <select class="form-control" name="asset_id" id="">
                                @foreach($Assets as $Asset)
                                <option value="{{$Asset->id}}">{{$Asset->name}}</option>
                                @endforeach
                            </select>
         </div>
         <div class="form-group">
                            <label for="asset_name">Select Supplier</label>
                            <select class="form-control" name="supplier_id" id="">
                                @foreach($suppliers as $supplier)
                                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
         </div>
        
         <div class="form-group">
            <label for="E">Units</label>
            <textarea class="form-control" name="Unit" id="E" type="text" required placeholder="Enter Unit"></textarea>
        </div>

        <div class="form-group">
            <label for="E">Details</label>
            <textarea class="form-control" name="Details" id="E" type="text" required placeholder="Enter Details"></textarea>
        </div>
        <div class="form-group">
            <label for="p">Enter Price</label>
            <input name="price" id="name" type="text" class="form-control" required placeholder="Enter Asset Price">
        </div>
       
        <div class="form-group">
            <label for="Dt">Date</label>
            <input class="form-control" name="date" id="dt" type="text" required placeholder="Enter Date "></input>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
