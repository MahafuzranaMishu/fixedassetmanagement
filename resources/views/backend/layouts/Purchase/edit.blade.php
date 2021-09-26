@extends('backend.master')
@section('content')
<h1>Enter Purchase</h1>

<form action="{{route('Purchase.update',$purchases->id)}}" method="post">
       @method('PUT')
       @csrf
        <div class="form-group">
                            <label for="asset_name">Select Asset</label>
                            <select class="form-control" name="asset_id" id="">
                                @foreach($Assets as $Asset)
                                <option
                                 value="{{$Asset->id}}">{{$Asset->name}}
                                </option>
                                @endforeach
                            </select>
         </div>
         <div class="form-group">
                            <label for="asset_name">Select Supplier</label>
                            <select class="form-control" name="supplier_id" id="">
                                @foreach($suppliers as $supplier)
                                <option  @if($purchases->supplier_id==$supplier->id)
                                  selected
                                  @endif
                                 value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
         </div>
        
         <div class="form-group">
            <label for="E">Units</label>
            <input value="{{$purchases->unit}}" class="form-control" name="Unit" id="E" type="text" placeholder="Enter Details"></input>
        </div>

        <div class="form-group">
            <label for="E">Details</label>
            <input value="{{$purchases->details}}" class="form-control" name="Details" id="E" type="text" placeholder="Enter Details"></input>
        </div>
        <div class="form-group">
            <label for="p">Enter Price</label>
            <input value="{{$purchases->price}}" name="price" id="name" type="text" class="form-control" placeholder="Enter Asset Price">
        </div>
        <div class="form-group">
            <label for="ph">Image</label>
            <input value="{{$purchases->image}}" class="form-control" name="image" id="ph" type="text" placeholder="Enter Image link "></input>
        </div>
        <div class="form-group">
            <label for="st">Status</label>
            <input value="{{$purchases->status}}" class="form-control" name="status" id="st" type="text" placeholder="Enter Status "></input>
        </div>
        <div class="form-group">
            <label for="Dt">Date</label>
            <input value="{{$purchases->buyingdate}}" class="form-control" name="date" id="dt" type="text" placeholder="Enter Image link "></input>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
