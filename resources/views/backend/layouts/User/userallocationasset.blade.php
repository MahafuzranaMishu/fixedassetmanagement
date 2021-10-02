@extends('backend.master')
@section('content')
    
   
    
 <div id="printableArea">
     <P>Employes Assets Report</p>
      <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Asset Name</th>
            <th scope="col">Unit</th>
        </tr>
        </thead>
        <tbody>
      
        @foreach($assets as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->user->name}}</td>
                <td>{{$data->asset->name}}</td>
                <td>{{$data->unit}}</td>

            </tr>
        @endforeach
        </tbody>
      </table>
 </div>

 <div>
     <button class="btn btn-primary" onclick="printDiv('printableArea')">
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

   

@endsection