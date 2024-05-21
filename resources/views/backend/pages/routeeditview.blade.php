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
  
              <a class="nav-link d-flex align-items-center gap-2" href="{{route('route.data')}}">
                
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
               Route data
              </a>
            </li>
            </div>




<form action="{{route('route.edit.view.update', $rDetails->id)}}" method="post">
    @method('put')
 @csrf
  <label for="from">From:</label><br>
  <input type="text" id="from" name="from" value="{{$rDetails->from}}"><br>
  <label for="to">To:</label><br>
  <input type="text" id="to" name="to" value="{{$rDetails->to}}"><br>
  <label for="fare">Fare</label><br>
  <input type="text" id="fare" name="fare" value="{{$rDetails->fare}}"><br>
  <label for="type">Type:</label><br>
  <input type="text" id="type" name="type" value="{{$rDetails->type}}"><br>
  <label for="busId">Bus ID:</label><br>
  <input type="text" id="busId" name="busId" value="{{$rDetails->bus_id}}"><br><br>
  <input type="submit" value="Submit">
</form>
@endsection