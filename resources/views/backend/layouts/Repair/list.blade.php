@extends('backend.master')
@section('content')
<h1>Repair List</h1>


<a class="btn btn-primary" href="{{route('Repair.create')}}" role="button">Enter Repair Info</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Asset ID</th>
      <th scope="col">Details</th>
      <th scope="col">Repair Company Name</th>
      <th scope="col">Delivery date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Repairs as $Repair)
    <tr>
      <th scope="row">{{$Repair->id}}</th>
      <td>{{$Repair->Asset->name}}</td>
      <td>{{$Repair->details}}</td>
      <td>{{$Repair->repaircompanyname}}</td>
      <td>{{$Repair->deliverydate}}
    </tr>
    @endforeach
</tbody>
</table>
{{$Repairs->links('pagination::bootstrap-4')}}
    @endsection