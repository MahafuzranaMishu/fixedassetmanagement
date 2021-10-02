@extends('backend.master')
@section('content')
<h1>Repair List</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<a class="btn btn-primary" href="{{route('Repair.create')}}" role="button">Enter Repair Info</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Asset ID</th>
      <th scope="col">Allocation ID</th>
      <th scope="col">Reason</th>
      <th scope="col">Repair Company Name</th>
      <th scope="col">Delivery date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Repairs as $Repair)
    <tr>
      <th scope="row">{{$Repair->id}}</th>
      <td>{{$Repair->Asset->name}}</td>
      <td>{{$Repair->allocation_id}}</td>
      <td>{{$Repair->reason}}</td>
      <td>{{$Repair->repaircompanyname}}</td>
      <td>{{$Repair->deliverydate}}
      <td class="">                                
        <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('Repair.delete',$Repair->id)}}"class="btn btn-danger"><i class="material-icons">Delete</i></a>
         <a href="{{route('Repair.edit',$Repair->id)}}"class="btn btn-warning"><i class="material-icons">Edit</i></a>                                                       
        </td>
    </tr>
    @endforeach
</tbody>
</table>
{{$Repairs->links('pagination::bootstrap-4')}}
    @endsection