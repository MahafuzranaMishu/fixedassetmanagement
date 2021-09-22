@extends('backend.master')
@section('content')
<h1>FixedAsset Allocation List</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<a class="btn btn-primary" href="{{route('Allocation.create')}}" role="button"> Add New Allocationt</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User ID</th>
      <!-- <th scope="col">Name</th> -->
      <th scope="col">Asset ID</th>
      <!-- <th scope="col">Asset Name</th> -->
      <th scope="col">Details</th>
      <th scope="col">Allocation date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Allocations as $Allocation)
  <tr>
      <th scope="row">{{$Allocation->id}}</th>
      <td>{{$Allocation->User->name}}</td>
      <!-- <td>{{$Allocation->username}}</td> -->
      <td>{{$Allocation->Asset->name}}</td>
      <!-- <td>{{$Allocation->assetname}}</td> -->
      <td>{{$Allocation->details}}</td>
      <td>{{$Allocation->allocationdate}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$Allocations->links('pagination::bootstrap-4')}}
@endsection