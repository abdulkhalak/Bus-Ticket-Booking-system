@extends('backend.master')

@section('content')
    <h1>Bus List</h1>


    <a href="{{ route('category.form') }}" class="btn btn-success">Modify</a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Bus Image</th>
                <th scope="col">bus Name</th>
                <th scope="col"> Status</th>
                {{-- <th scope="col">Description</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categories as $data)
               
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>
                       <img width="70px" src="{{url('/uploads/category/'.$data->image)}}" alt="">
                    </td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->status }}</td>
                   
                    <td>
                        <a class="btn btn-info" href="{{ route('category.edit', $data->id) }}">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="{{ route('bus.delete', $data->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach


        </tbody>

    </table>

    {{ $categories->links() }}
@endsection
