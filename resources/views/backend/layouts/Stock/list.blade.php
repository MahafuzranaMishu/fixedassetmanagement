@extends('backend.master')
@section('content')
<h1>Fixed Asset Stock List</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<a class="btn btn-primary" href="{{route('Stock.Create')}}" role="button">Add New Asset</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Asset ID</th>
      <th scope="col">Unit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Stocks as $Stock)
    <tr>
      <th scope="row">{{$Stock->id}}</th>
      <td>{{$Stock->Asset->name}}</td>
     
      <td>{{$Stock->Unit}}</td>

      <td class="">                                
        <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('Stock.delete',$Stock->id)}}"class="btn btn-danger"><i class="material icons">Delete</i></a>
         <a  href="{{route('Stock.edit',$Stock->id)}}"class="btn btn-warning"><i class="">Edit</i></a>                                                       
        </td>
    </tr>
    @endforeach
</tbody>
</table>
{{$Stocks->links('pagination::bootstrap-4')}}
    @endsection