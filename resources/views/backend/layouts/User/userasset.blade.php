@extends('backend.master')
@section('content')

    <h1>My Asset list</h1>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Asset Name</th>
            <th scope="col">Unit</th>
        </tr>
        </thead>
        <tbody>
      
        @foreach($assets as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->asset->name}}</td>
                <td>{{$data->unit}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{route('user.request')}}" class="btn btn-primary">Request for Asset</a>

@endsection