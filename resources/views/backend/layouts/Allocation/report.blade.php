@extends('backend.master')
@section('content')
<h1>FixedAsset Allocation List</h1>
@if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
@endif


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
      
    </tr>
  </div>

    @endforeach
  </tbody>
 </table>

 </div>
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
 

{{$Allocations->links('pagination::bootstrap-4')}}
@endsection