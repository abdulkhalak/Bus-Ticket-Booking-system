<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bookseat;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function ViewTicket()
    {

      $booking = Bookseat::where('passengerID',auth('userGuard')->user()->id)->get();
      return view('backend.pages.ticket',compact('booking'));
    }


    public function bookingDetails($id)
    {
        $bookingDetails = Bookseat::with(['route', 'seats'])->find($id);
        // dd($bookingDetails);

        // Ensure bookingDetails are not empty
        if ($bookingDetails) {
            $route = $bookingDetails->route;
            $seats = $bookingDetails->seats;
            $totalFare = $bookingDetails->seats->pluck('fare')->sum();
            // dd($totalFare);
        } else {
            $route = null;
            $seats = collect();
            $totalFare = 0;
        }

        return view('backend.pages.bookingdetails', compact('bookingDetails', 'route', 'seats', 'totalFare'));
       
    }
  
}
