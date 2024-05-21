@extends('backend.master')
@section('content')

<h1>Location</h1>


    <a href="{{route('location')}}" class="btn btn-success">Modify</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Location Id</th>
               
                
                <th scope="col">Status</th>
               
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($locations as $data)
           
               <tr>
               <td>{{ $data->name}}</td>
                    <td>{{ $data->status}}</td>
                    
                    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>


               
               </tr>
            @endforeach


        </tbody>

    </table>
    {{$locations->links()}}

@endsection