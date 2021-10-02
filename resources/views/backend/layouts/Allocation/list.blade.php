@extends('backend.master')
@section('content')
<h1>FixedAsset Allocation List</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

<a class="btn btn-primary" href="{{route('Allocation.create')}}" role="button"> Add New Allocationt</a>
<a class="btn btn-Secondary" href="{{route('Allocation.request')}}" role="button"> View Asset Request</a>
 <div id="printableArea">  
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
      <th scope="col">Action</th>
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
 </div>
      <td class="">
                                         
         <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('Allocation.delete',$Allocation->id)}}" class="btn btn-danger"><i class="material-icons">Delete</i></a>
         <a href="{{route('Allocation.edit',$Allocation->id)}}"  class="btn btn-info"><i class="material-icons">Edit</i></a>
                                                                    
      </td>
    </tr>
  </div>

    @endforeach
  </tbody>
 </table>


   <div>
     <button class="btn btn-success" onclick="printDiv('printableArea')">
     <i class="bi bi-printer"></i> Print Report
     </button>
  </div>
 <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
 
</div>
{{$Allocations->links('pagination::bootstrap-4')}}
@endsection