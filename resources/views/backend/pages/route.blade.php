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

      <svg class="bi">
        <use xlink:href="#file-earmark" />
      </svg>
      Route data
    </a>
  </li>
</div>




<form action="{{route('route.store')}}" method="post">
  @csrf
  <label for="from">From:</label><br>
  <select name="from" id="form" class="custom-select px-4" style="height: 50px;">
    <option selected>Choose...</option>
    @foreach($datas as $data)
    <option value="{{$data->name}}">{{$data->name}}</option>
    @endforeach
  </select>
  <br>
  <br>
  <label for="to">To:</label><br>
  <select name="to" id="to" class="custom-select px-4" style="height: 50px;">
    <option selected>Choose...</option>
    @foreach($datas as $data)
    <option value="{{$data->name}}">{{$data->name}}</option>
    @endforeach
  </select>
  <br>
  <br>
  <label for="sName">Supervisor Name</label><br>
  <input type="text" id="sName" name="supervisor_name" value="" required><br>
  <br>

  <label for="sPhone">Supervisor Phone No</label><br>
  <input type="integer" id="sPhone" name="supervisor_phone" value="" required><br>
  <br>

  <label for="date">Date</label><br>
  <input type="date" id="date" name="date" min="{{ date('Y-m-d') }}" required><br>
  <br>

  <label for="time">Departure Time</label><br>
  <input type="time" id="time" name="time" value="" required><br>
  <br>

  <label for="fare">Fare</label><br>
  <input type="text" id="fare" name="fare" value=""><br>

  <label for="type">Type:</label><br>
  <select name="type" id="type" class="custom-select px-4" style="height: 50px;">
    <option selected>Choose...</option>
    <option value="Ac">Ac</option>
    <option value="Non Ac">Non Ac</option>

  </select>

  <label for="busId">Bus ID:</label><br>
  <input type="number" name="bus_id" required> <br><br>
  <button class="btn btn-success" type="submit">Submit</button>

</form>
@endsection