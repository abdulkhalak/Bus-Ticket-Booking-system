@extends('backend.master')

@section('content')
    <h1>Modify Bus</h1>


    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="">Bus Name</label>
            <input required name="cat_name" type="text" class="form-control" id="" placeholder="Enter Bus name">
        </div>

<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" class="form-control" placeholder="Enter description"></textarea>
        </div>


        <div class="form-group">
            <label for="">Upload Image</label>
            <input name="category_image" type="file" class="form-control" id="" placeholder="Enter image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
