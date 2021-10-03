@extends('backend.master')
@section('content')
<h1>Add new Asset</h1>

<form action="{{route('Asset.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                            <label for="asset_name">Select Category</label>
                            <select class="form-control" name="category_id" id="">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
         </div>
        <div class="form-group">
            <label for="name">Enter Asset Name</label>
            <input name="asset_name" id="name" type="text" class="form-control" required placeholder="Enter Asset Name">
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
            <input class="form-control" name="date" id="dt" type="date" required placeholder="Enter Date "></input>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
