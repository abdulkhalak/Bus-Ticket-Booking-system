<?php

namespace App\Http\Controllers;
use App\Models\Seat;
use App\Models\Bookseat;
use App\Models\Passanger;
use Illuminate\Http\Request;

class ReportController extends Controller
{
public function ViewReport(){

    $bookseats= Bookseat::count();
    $seats = Seat::count();
    // dd($seats);
    
    $bookingDetails = Bookseat::with('seats')->get();

    // Calculate total fare from all booked seats
    $totalFare = $bookingDetails->sum(function ($booking) {
        return $booking->seats->sum('fare');
    });
    
    return view('backend.pages.report',compact('bookseats','seats', 'totalFare'));
}
}
