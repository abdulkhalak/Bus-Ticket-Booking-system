@extends('backend.master')

@section('content')

<style>
    form {
  max-width: 300px;
  margin: 0 auto;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  box-sizing: border-box;
}

input[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

</style>

<div>


<li class="nav-item">
  
              <a class="nav-link d-flex align-items-center gap-2" href="{{route('location.data')}}">
                
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
               Location Data
              </a>
            </li>
            </div>

<form action="{{route('location.store')}}" method="post">
  @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="locationName" value=""><br>
  <label for="status">Status:</label><br>
  <input type="text" id="status" name="status" value="Active"><br><br>
  <input type="submit" value="Submit">
</form>
@endsection