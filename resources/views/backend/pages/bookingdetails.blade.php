@extends('backend.master')

@section('content')

<div class="container" style="max-width: 600px; margin: 50px auto; padding: 20px; border-radius: 8px; background-color: #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    
    <div class="booking-details" style="margin-bottom: 20px;" id="ticket">
    <h1 style="text-align: center; margin-bottom: 20px; color: #333;">User Booking Details</h1>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Destination: </span>
            <span class="booking-details-value" style="color: #333;">From {{$route->from}} to {{$route->to}}</span>
        </div>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Passenger Name:</span>
            <span class="booking-details-value" style="color: #333;">{{ auth('userGuard')->user()->name }}</span>
        </div>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Bus ID:</span>
            <span class="booking-details-value" style="color: #333;">{{$route->bus_id}}</span>
        </div>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Seat Number:</span>
            <span class="booking-details-value" style="color: #333;">
                @foreach ($seats as $seat)
                <span class="seat-number" style="padding: 5px 10px; margin-right: 5px; background-color: #007bff; color: #fff; border-radius: 4px;">{{$seat->seat_no}}</span>
                @endforeach
            </span>
        </div>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Total Fare:</span>
            <span class="booking-details-value" style="color: #333;">
                {{ number_format($totalFare, 2) }} BDT
            </span>
        </div>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Booking Date:</span>
            <span class="booking-details-value" style="color: #333;">{{ $bookingDetails->first()->date }}</span>
        </div>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Time:</span>
            <span class="booking-details-value" style="color: #333;">{{ date('h:i A', strtotime($route->time)) }}</span>
        </div>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Payment Status:</span>
            <span class="booking-details-value" style="color: #333;">Paid</span>
        </div>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Booking Status:</span>
            <span class="booking-details-value" style="color: #333;">Confirmed</span>
        </div>
        <div class="booking-details-row" style="display: flex; justify-content: space-between; margin-bottom: 10px; padding: 10px; background-color: #f2f2f2; border-radius: 4px;">
            <span class="booking-details-label" style="font-weight: bold; color: #555;">Contact Info:</span>
            <span class="booking-details-value" style="color: #333;">123-456-7890</span>
        </div>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <button onclick="printDiv('ticket')" style="padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; border: none; border-radius: 4px; cursor: pointer;">Print</button>
    </div>
</div>

<script type="text/javaScript">
    function printDiv(divId) {
     var printContents = document.getElementById(divId).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

@endsection
