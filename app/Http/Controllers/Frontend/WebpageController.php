<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Bookseat;
use App\Models\Counter;
use App\Models\Location;
use App\Models\Route;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebpageController extends Controller
{
    public function homepage()
    {

        $locations = Location::all();
        return view('frontend.pages.homepage.homepage', compact('locations'));
    }

    public function about_us()
    {
        return view('frontend.pages.about_us.about_us');
    }

    public function search(Request $request)
    {
        $verRoutes = Route::where('from', $request->from)
            ->where('to', $request->to)
            ->where('type', $request->type)
            ->get();
        // dd($request->all());
        return view('frontend.pages.search', compact('verRoutes'));
    }


    public function seat($rId)
    {
        $counters = Counter::all();
        // dd(request()->date);
        $route = Route::find($rId);
        $bookedSeats = Seat::where('route_id', $rId)
                        ->whereDate('booking_date',request()->date)
                        ->pluck('seat_no')->toArray();

        // dd($route );
        return view('frontend.pages.seat', compact('route','bookedSeats', 'counters'));
      
    }


    public function storebookseat(Request $request, $rId)
    {
        // dd($request->all());

        $route = Route::find($rId);
        // dd($route );

        $checkValidation = Validator::make($request->all(), [
            'boarding' => 'required',
            'dropping' => 'required',
            'name' => 'required',
            'id' => 'required',
            'email' => 'required',
            'phone' => 'required',
            
        ]);
        
        // insert data into booking table
        $booking = Bookseat::create([
            'pickupPoint' => $request->boarding,
            'droppingPoint' => $request->dropping,
            'passengerName' => $request->name,
            'passengerID' => auth('userGuard')->user()->id,
            'passengerEmail' => $request->email,
            'passengerPhoneNumber' => $request->phone,
            'date' => $request->date,
            'route_id' => $route->id,
          
        ]);



        //foreach($request->seat as $seat)
        $arr = explode(',', $request->seat);
        // dd($arr);
        foreach($arr as $seat){

            Seat::create([
                'bookseat_id'=> $booking->id,
                'seat_no'=> $seat,
                'fare'=> $route->fare, 
                'route_id' => $route->id,
                'booking_date' =>   $booking->date
            ]);
        //insert into booking details
    }

        return redirect()->route('user.seat');
        // return redirect()->back();
}


    public function userseat()
    {
        // $userseat = Bookseat::where('passengerID',auth('userGuard')->user()->id)->get();

        $bookingDetails = Bookseat::with(['route', 'seats'])
        ->where('passengerID', auth('userGuard')->user()->id)
        ->get();

        if ($bookingDetails->isNotEmpty()) {
            $route = $bookingDetails->first()->route;
            $seats = $bookingDetails->pluck('seats')->flatten();
            $totalFare = $seats->sum('fare');
            // dd($totalFare);
        } else {
            $route = null;
            $seats = collect();
            $totalFare = 0;
        }
        // dd($bookingDetails);
        return view('frontend.pages.userseat', compact('bookingDetails', 'route', 'seats', 'totalFare'));
    }

    public function seatDelete($s_id)
    {

        $seat = Bookseat::find($s_id);
        $seat->delete();

        return redirect()->back();
    }
    
}
