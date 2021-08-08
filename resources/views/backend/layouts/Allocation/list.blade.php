@extends('backend.master')
@section('content')
<h1>Fixed Asset List</h1>


<a class="btn btn-primary" href="{{route('Allocation.create')}}" role="button">Create New Asset</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Asset ID</th>
      <th scope="col">Asset Name</th>
      <th scope="col">Details</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
@endsection