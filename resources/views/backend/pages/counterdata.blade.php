@extends('backend.master')
@section('content')

<h1>Counter</h1>


    <a href="{{route('counter')}}" class="btn btn-success">Modify</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Location Id</th>
               
                <th scope="col">Counter Name</th>
                <th scope="col">Contract</th>
               
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($counters as $data)
           
               <tr>
               <td>{{ $data->locationID}}</td>
                    <td>{{ $data->counterName}}</td>
                    <td>{{ $data->contract}}</td>
                    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>


               
               </tr>
            @endforeach


        </tbody>

    </table>
    {{$counters->links()}}

@endsection