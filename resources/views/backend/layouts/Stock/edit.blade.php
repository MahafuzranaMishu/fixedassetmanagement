@extends('backend.master')
@section('content')
<h1>Update Stock Information</h1>

<form action="{{route('Stock.update',$Stocks->id)}}" method="post">
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
            <label for="st">Unit</label>
            <input value="{{$Stocks->Unit}}" class="form-control" name="Unit" id="st" type="text" placeholder="Enter Unit "></input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
