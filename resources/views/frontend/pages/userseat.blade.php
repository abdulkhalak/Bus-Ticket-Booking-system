
@extends('frontend.master_webpage')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Passenger Details</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<h2>Passenger Details</h2>
<!-- <a href="">Book seat</a> -->

<table>
  <tr>
    <th>Boarding Point</th>
    <th>Dropping Point</th>
    <th>Passenger Name</th>
    <th>Passenger ID</th>
    
    <th>Passenger Email</th>
    <th>Passenger Phone Number</th>
  </tr>
  
   
   @foreach ($userseat as $data)
           
         <tr>
               <td>{{ $data->pickupPoint}}</td>
               <td>{{ $data->droppingPoint}}</td>
               <td>{{ $data->passengerName}}</td>
               <td>{{ $data->passengerID}}</td>
              
               <td>{{ $data->passengerEmail}}</td>
               <td>{{ $data->passengerPhoneNumber}}</td>
                 

               <td>
                
                <a class="btn btn-danger" href="{{route('seat.delete',$data->id)}}">Cancel Seat</a>
                <a class="btn btn-success" href="">Make Payment</a>
            </td>

               
               </tr>
            @endforeach
  
  <!-- Add more rows as needed -->
</table>

</body>
</html>
@endsection