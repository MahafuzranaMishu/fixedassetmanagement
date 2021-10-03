@extends('backend.master')
@section('content')

    <h1>Asset under Supplier-</h1>

 <div id="printableArea">
    
      <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Supplier  Name</th>
            <th scope="col">Asset Name</th>
            <th scope="col">Unit</th>
            <!-- <th scope="col">Price</th> -->
        </tr>
        </thead>
        <tbody>
        {{--categories--}}
        {{--@dd($categories)--}}
        @foreach($assets as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->supplier->name}}</td>
                <td>{{$data->asset->name}}</td>
                <td>{{$data->unit}}</td>
                <!-- <td>{{$data->price}}</td> -->

            </tr>
        @endforeach
        </tbody>
      </table>
      <p>Asset Under Supplier Report</p>
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