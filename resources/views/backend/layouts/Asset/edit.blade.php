@extends('backend.master')
@section('content')
<h1>Update Fixed Asset Info</h1>

<form action="{{route('Asset.update',$Assets->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
                            <label for="asset_name">Select Category</label>
                            <select class="form-control" name="category_id" id="">
                                @foreach($categories as $category)
                                <option @if($Assets->category_id==$category->id)
                                selected
                                @endif
                                 value="{{$category->id}}">{{$category->name}}
                                </option>
                             @endforeach
                            </select>
         </div>
        <div class="form-group">
            <label for="name">Enter Asset Name</label>
            <input   name="asset_name" id="name" type="text" class="form-control" placeholder="Enter Category Name">
        </div>

        <div class="form-group">
            <label for="E">Details</label>
            <input  value="{{$Assets->details}}" class="form-control" name="Details" id="E" type="text" placeholder="Enter Details"></input>
        </div>
        <div class="form-group">
            <label for="p">Enter Price</label>
            <input value="{{$Assets->price}}" name="price" id="name" type="text" class="form-control" placeholder="Enter Asset Price">
        </div>
        <div class="form-group">
         <label for="description">Upload Product Image</label>
         <input type="file" class="form-control" name="image">
      </div>>
      <div class="form-group">
            <label for="name">Enter Asset Unit</label>
            <input value="{{$Assets->unit}}" name="unit" id="name" type="text" class="form-control" placeholder="Enter Asset Unit">
        </div>
        <div class="form-group">
            <label for="st">Status</label>
            <input value="{{$Assets->status}}" class="form-control" name="status" id="st" type="text" placeholder="Enter Status "></input>
        </div>
        <div class="form-group">
            <label for="Dt">Date</label>
            <input value="{{$Assets->buyingdate}}" class="form-control" name="date" id="dt" type="date" placeholder="Enter Buying date "></input>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
