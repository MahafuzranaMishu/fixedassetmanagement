@extends('backend.master')
@section('content')
<h1>Fixed Asset Stock List</h1>


<a class="btn btn-primary" href="{{route('Stock.Create')}}" role="button">Add New Asset</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Asset ID</th>
      <th scope="col">Unit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Stocks as $Stock)
    <tr>
      <th scope="row">{{$Stock->id}}</th>
      <td>{{$Stock->Asset->name}}</td>
     
      <td>{{$Stock->Unit}}</td>
    </tr>
    @endforeach
</tbody>
</table>
{{$Stocks->links('pagination::bootstrap-4')}}
    @endsection