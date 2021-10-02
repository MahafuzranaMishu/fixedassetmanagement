@extends('backend.master')
@section('content')
<h1>Fixed Asset List</h1>

@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif
<a class="btn btn-primary" href="{{route('Asset.create')}}" role="button">Create New Asset</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category ID</th>
      <th scope="col">Details</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Unit</th>
      <th scope="col">Status</th>
      <th scope="col">Buyingdate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Assets as $Asset)
    <tr>
      <th scope="row">{{$Asset->id}}</th>
      <td>{{$Asset->name}}</td>
      <td>{{$Asset->category->name}}</td>
      <td>{{$Asset->details}}</td>
      <td>{{$Asset->price}}</td>
      <td>
      <img src="{{url('/uploads/'.$Asset->image)}}" width="100px" alt="product image">
      </td>
      <td>{{$Asset->unit}}</td>
      <td>{{$Asset->status}}</td>
      <td>{{$Asset->buyingdate}}</td>
      <td class="">
                                         
      <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('Asset.delete',$Asset->id)}}"class="btn btn-danger" ><i class="material-icons">Delete</i></a>
      <a href="{{route('Asset.edit',$Asset->id)}}" class="btn btn-warning"><i class="material-icons">Edit</i></a>
                                 
      </td>
    </tr>
@endforeach
  </tbody>
</table>
{{$Assets->links('pagination::bootstrap-4')}}
@endsection