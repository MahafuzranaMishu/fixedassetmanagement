@extends('backend.master')
@section('content')
<h1>Purchase List</h1>


<a class="btn btn-primary" href="{{route('Purchase.create')}}" role="button">Enter Purchase Info</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Buyingdate</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Purchases as $Purchase)
    <tr>
      <th scope="row">{{$Purchase->id}}</th>
      <td>{{$Purchase->name}}</td>
      <td>{{$Purchase->details}}</td>
      <td>{{$Purchase->price}}</td>
      <td>{{$Purchase->image}}</td>
      <td>{{$Purchase->status}}</td>
      <td>{{$Purchase->buyingdate}}</td>
    </tr>
@endforeach
  </tbody>
</table>
{{$Purchases->links('pagination::bootstrap-4')}}
@endsection