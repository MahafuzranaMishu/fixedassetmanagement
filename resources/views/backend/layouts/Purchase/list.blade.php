@extends('backend.master')
@section('content')
<h1>Purchase List</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<a class="btn btn-primary" href="{{route('Purchase.create')}}" role="button">Enter Purchase Info</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Asset Name</th>
      <th scope="col">Supplier Name</th>
      <th scope="col">Unit</th>
      <th scope="col">Details</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Buyingdate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Purchases as $Purchase)
    <tr>
      <th scope="row">{{$Purchase->id}}</th>
      <td>{{$Purchase->Asset->name}}</td>
      <td>{{$Purchase->Supplier->name}}</td>
      <td>{{$Purchase->unit}}</td>
      <td>{{$Purchase->details}}</td>
      <td>{{$Purchase->price}}</td>
      <td>{{$Purchase->image}}</td>
      <td>{{$Purchase->status}}</td>
      <td>{{$Purchase->buyingdate}}</td>
      <td class="">                                
        <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('Purchase.Delete',$Purchase->id)}}" class="btn btn-danger"><i class="material-icons">Delete</i></a>
                                                                
        </td>
    </tr>
@endforeach
  </tbody>
</table>
{{$Purchases->links('pagination::bootstrap-4')}}
@endsection