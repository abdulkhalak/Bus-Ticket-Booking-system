@extends('backend.master')
@section('content')

<h1>Route</h1>


<a href="{{route('route')}}" class="btn btn-success">Create</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Bus Id</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Fare</th>
            <th scope="col">type</th>
            <th scope="col">date</th>
            
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($routes as $data)

        <tr>
            <td>{{ $data->bus_id}}</td>
            <td>{{ $data->from}}</td>
            <td>{{ $data->to}}</td>
            <td>{{ $data->fare}}</td>
            <td>{{ $data->type}}</td>
            <td>{{ $data->created_at}}</td>
            

            <td>
                <a class="btn btn-info" href="{{route('route.edit.view',$data->id)}}">Edit</a>
                <a class="btn btn-success" href="{{route('route.view',$data->id)}}">View</a>
                <a class="btn btn-danger" href="{{route('route.delete',$data->id)}}">Delete</a>
            </td>



        </tr>
        @endforeach


    </tbody>

</table>
{{$routes->links()}}

@endsection