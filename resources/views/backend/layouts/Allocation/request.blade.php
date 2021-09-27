@extends('backend.master')
@section('content')
<h1>Request List</h1>


    @if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">User Name</th>
        <th scope="col">Asset Name</th>
        <th scope="col">Unit</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
        
        
    </tr>
    </thead>
    <tbody>

@foreach($Allocationreq as $Allocation)
    <tr>
        <th scope="row">{{$Allocation->id}}</th>
        <td>{{$Allocation->user->name}}</td>
        <td>{{$Allocation->asset->name}}</td>
        <td>{{$Allocation->unit}}</td>
        <td>{{$Allocation->status}}</td>
        <td>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Confirmation   
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{route('Allocation.approve',[$Allocation->id,'status'=>'approved'])}}">Approve</a>
                    <a class="dropdown-item" href="{{route('Allocation.approve',[$Allocation->id,'status'=>'cancelled'])}}">Cancel</a>
                
                </div>
            </div>
                    
        </td>
    </tr>
@endforeach
    </tbody>
</table>
{{$Allocationreq->links('pagination::bootstrap-4')}}
@endsection