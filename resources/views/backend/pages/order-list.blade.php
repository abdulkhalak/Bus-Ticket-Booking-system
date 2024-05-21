
@extends('backend.master')


@section('content')
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
}

.bus-route {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}

.bus-route th, .bus-route td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

.bus-route th {
    background-color: #f2f2f2;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Route</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Bus Route</h2>

<table class="bus-route">
  <th>Dhaka TO Cox's Bazar</th>
  <tr>
    <th>Bus Stop</th>
    <th>Arrival Time</th>
    <th>Option</th>
  </tr>
  
  <tr>
    <td>Central Station</td>
    <td>8:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Main Street</td>
    <td>10:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>City Park</td>
    <td>12:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Library</td>
    <td>3:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Final Destination</td>
    <td>9:00 PM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
 
</table>
<br>

<table class="bus-route">
<th>Dhaka To Rajshahi</th>
  <tr>
    <th>Bus Stop</th>
    <th>Arrival Time</th>
    <th>Option</th>
  </tr>
  <tr>
    <td>Central Station</td>
    <td>8:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Main Street</td>
    <td>8:15 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>City Park</td>
    <td>8:30 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Library</td>
    <td>8:45 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Final Destination</td>
    <td>9:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
 
</table>
<br>
<table class="bus-route">
<th>Dhaka To Barisal</th>
  <tr>
    <th>Bus Stop</th>
    <th>Arrival Time</th>
    <th>Option</th>
  </tr>
  <tr>
    <td>Central Station</td>
    <td>8:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Main Street</td>
    <td>8:15 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>City Park</td>
    <td>8:30 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Library</td>
    <td>8:45 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Final Destination</td>
    <td>9:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <br>
  <table class="bus-route">
<th>Dhaka To Pabna</th>
  <tr>
    <th>Bus Stop</th>
    <th>Arrival Time</th>
    <th>Option</th>
  </tr>
  <tr>
    <td>Central Station</td>
    <td>8:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Main Street</td>
    <td>8:15 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>City Park</td>
    <td>8:30 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Library</td>
    <td>8:45 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
  <tr>
    <td>Final Destination</td>
    <td>9:00 AM</td>
    <td>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-success" href="">View</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
  </tr>
 
</table>
 


</body>
</html>


@endsection