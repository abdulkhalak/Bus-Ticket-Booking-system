@extends('frontend.master_webpage')

@section('content')

<style>
  /* General Styles */
  
  .container {
 
    background-color: #fff;
   
  }

  h2 {
    margin-top: 0;
    color: #333;
    text-align: center;
    font-size: 28px;
    font-weight: bold;
  }

  .card {
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 20px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
  }

  .card h5 {
    margin-top: 0;
    color: #007bff;
    font-size: 22px;
  }

  .card p {
    margin: 10px 0;
    color: #555;
    line-height: 1.6;
  }

  .btn {
    display: inline-block;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
    margin-right: 10px;
    font-size: 16px;
  }

  .btn:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
  }

  .btn-danger {
    background-color: #dc3545;
  }

  .btn-danger:hover {
    background-color: #c82333;
  }

  .btn-success {
    background-color: #28a745;
  }

  .btn-success:hover {
    background-color: #218838;
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    .container {
      padding: 15px;
    }

    .btn {
      width: 100%;
      margin: 10px 0;
    }
  }
</style>

<br>
<br>

<div class="container">
  <h2>Passenger Details</h2>
  <div class="card">
    <h5>From {{$bookingDetails->route->from}} to {{$bookingDetails->route->to}}</h5>
    <p><strong>Passenger Name:</strong> {{ $bookingDetails->passengerName }}</p>
    <p><strong>Pickup Point:</strong> {{ $bookingDetails->pickupPoint }}</p>
    <p><strong>Dropping Point:</strong> {{ $bookingDetails->droppingPoint }}</p>
    <p><strong>Seat:</strong> @foreach ($seats as $seat)
                <span class="seat-number" style="padding: 5px 10px; margin-right: 5px; background-color: #007bff; color: #fff; border-radius: 4px;">{{$seat->seat_no}}</span>
                @endforeach</p>
    <p><strong>Total Fare:</strong>  {{ number_format($totalFare, 2) }} BDT</p>
    <p><strong>Email:</strong> {{ $bookingDetails->passengerEmail }}</p>
    <p><strong>Phone Number:</strong> 0{{ $bookingDetails->passengerPhoneNumber }}</p>

    <a class="btn btn-warning" href="{{ route('make.pay', $bookingDetails->id) }}">Make Payment</a>
    <a class="btn btn-danger" href="{{ route('seat.delete', $bookingDetails->id) }}">Cancel Seat</a>
  
  </div>
</div>













@endsection
