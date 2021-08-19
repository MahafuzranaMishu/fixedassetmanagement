@extends('backend.master')
@section('content')
<h1>Fixed Asset List</h1>


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
      <th scope="col">Status</th>
      <th scope="col">Buyingdate</th>
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
      <td>{{$Asset->image}}</td>
      <td>{{$Asset->status}}</td>
      <td>{{$Asset->buyingdate}}</td>
    </tr>
@endforeach
  </tbody>
</table>
{{$Assets->links('pagination::bootstrap-4')}}
@endsection