@extends('frontend.master_webpage')

@section('content')


  <style>
   
    .seat {
      display: inline-block;
      width: 60px;
      height: 45px;
      background-color: #bdc3c7;
      margin: 8px;
      cursor: pointer;
      border-radius: 10px;
      position: relative;
      transition: background-color 0.3s;
    }
    .seat.available:hover {
      background-color: #2ecc71;
    }
    .seat.booked {
      background-color: #e74c3c;
      cursor: not-allowed;
    }
    .seat.selected {
      background-color: #3498db;
    }
    .seat::after {
      content: attr(data-seat);
      color: #fff;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 20px;
    }
    .status {
      font-size: 5px;
      color: #34495e;
      position: absolute;
      bottom: 5px;
      left: 50%;
      transform: translateX(-50%);
    }
    .seating-area {
      position: relative;
    }
    .form-container {
      display: none; /* Initially hidden */
      position: absolute;
      top: 0;
      right: -300px; /* Position off-screen */
      transition: right 0.5s ease;
      width: 600px; /* Set a fixed width for the form */
      background-color: #f9f9f9; /* Background color for the form */
      padding: 20px; /* Padding inside the form */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add some shadow for a better look */
    }
    .form-container.show {
      right: 0; /* Slide into view */
    }
    form {
      display: inline-block;
    }
    input[type="text"], input[type="email"], input[type="tel"], select {
      padding: 10px;
      margin: 10px 0;
      width: 100%;
    }
    button {
      padding: 5px 10px;
      background-color: #3498db;
      border: none;
      color: white;
      cursor: pointer;
      border-radius: 5px;
    }
    .cancel-button {
      background-color: #e74c3c;
    }
  </style>

<body>

<div class="container">
  <br>

  <h3>Location: {{$route->from}} to {{$route->to}}</h3>

  <div class="seating-area">
    @for ($i = 1; $i <= 10; $i++)
      <div class="row">
        @for ($j = 1; $j <= 4; $j++)
          @php
              $seatId = chr(64 + $i) . $j;
              $isBooked = in_array($seatId, $bookedSeats);
          @endphp
          <div class="seat {{ $isBooked ? 'booked' : 'available' }}" data-seat="{{ $seatId }}" {{ $isBooked ? 'disabled' : '' }}></div>
        @endfor
      </div>
    @endfor

    <div class="form-container">
      <form id="bookingForm" action="{{route('bookseat', $route->id)}}" method="post">
        @csrf
        <input type="hidden" value="{{$route->id}}" name="route_id">
        <input type="hidden" value="{{request()->date}}" name="date">
        <div class="selected-seat">
          <h3>Selected Seat: <span id="selectedSeatNumber">None</span></h3>
          <h3>Ticket Price: <span id="ticketPrice">{{$route->fare}}</span></h3>
          <h3>Date: {{request()->date}}</h3>
        </div>
        <select name="boarding" required>
          <option value="">Pickup Point</option>
          @foreach($counters as $data)
          <option value="{{$data->counterName}}">{{$data->counterName}}</option>
          @endforeach
        </select>
        <select name="dropping" required>
          <option value="">Dropping Point</option>
          @foreach($counters as $data)
          <option value="{{$data->counterName}}">{{$data->counterName}}</option>
          @endforeach
        </select>
        <input type="text" name="name" placeholder="Passenger Name" value="{{auth('userGuard')->user()->name}}" required>
        <input type="email" name="email" placeholder="Passenger Email" value="{{auth('userGuard')->user()->email}}" required>
        <input type="tel" name="phone" placeholder="Passenger Phone Number" required>
        <input type="hidden" name="seat" id="seatNumber">

        <button class="btn btn-success" type="submit">Book Seat</button>
        <button class="cancel-button" type="button" id="cancelButton">Cancel</button>
      </form>
    </div>
  </div>

</div>

<script>
  document.querySelectorAll('.seat').forEach(seat => {
    seat.addEventListener('click', () => {
      if (!seat.classList.contains('booked') && !seat.classList.contains('selected')) {
        const selectedSeats = document.querySelectorAll('.seat.selected').length;
        if (selectedSeats < 4) {
          seat.classList.toggle('selected');
          updateSelectedSeats();
        } else {
          alert('You can only book up to 4 seats. If you want more seats then contact 01798223658');
        }
      } else if (seat.classList.contains('selected')) {
        seat.classList.remove('selected');
        updateSelectedSeats();
      }
    });
  });

  function updateSelectedSeats() {
    const selectedSeats = document.querySelectorAll('.seat.selected');
    const selectedSeatsNumber = [];

    selectedSeats.forEach(seat => {
      selectedSeatsNumber.push(seat.getAttribute('data-seat'));
    });

    document.querySelector('#selectedSeatNumber').textContent = selectedSeatsNumber.join(', ');
    document.querySelector('#ticketPrice').innerText = selectedSeatsNumber.length * {{$route->fare}};
    
    const formContainer = document.querySelector('.form-container');
    if (selectedSeats.length > 0) {
      formContainer.style.display = 'inline-block';
      setTimeout(() => {
        formContainer.classList.add('show');
      }, 0); // Add a small delay to ensure the display property is set before animation
    } else {
      formContainer.classList.remove('show');
      setTimeout(() => {
        formContainer.style.display = 'none';
      }, 500); // Delay hiding the form until after the animation completes
    }

    // Convert selectedSeatsNumber to array of seat numbers
    const seatArray = selectedSeatsNumber.map(seat => seat.split(','));
    const flatSeatArray = seatArray.flat(); // Flatten the array

    document.querySelector('#seatNumber').value = flatSeatArray.join(','); // Set the seat numbers as comma-separated string
  }

  document.querySelector('#cancelButton').addEventListener('click', () => {
    document.querySelectorAll('.seat.selected').forEach(seat => {
      seat.classList.remove('selected');
    });
    updateSelectedSeats();
  });
</script>

</body>

@endsection
