@extends('backend.master')
@section('content')
<h1>Stock Request List</h1>


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
        <th scope="col">Reason</th>
        <th scope="col">Unit</th>
        <th scope="col">Request</th>
        
        
    </tr>
    </thead>
    <tbody>

@foreach($Allocationreq as $Allocation)
    <tr>
        <th scope="row">{{$Allocation->id}}</th>
        <td>{{$Allocation->user->name}}</td>
        <td>{{$Allocation->asset->name}}</td>
        <td>{{$Allocation->reason}}</td>
        <td>{{$Allocation->unit}}</td>
        <td>@if($Allocation->is_requested == 1)
                Requested
            @else

            @endif
        </td>
    </tr>
@endforeach
    </tbody>
</table>
{{$Allocationreq->links('pagination::bootstrap-4')}}
@endsection