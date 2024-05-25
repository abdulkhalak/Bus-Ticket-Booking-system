<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
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
            ->whereDate('booking_date', request()->date)
            ->pluck('seat_no')->toArray();

        // dd($route );
        return view('frontend.pages.seat', compact('route', 'bookedSeats', 'counters'));
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
        foreach ($arr as $seat) {

            Seat::create([
                'bookseat_id' => $booking->id,
                'seat_no' => $seat,
                'fare' => $route->fare,
                'route_id' => $route->id,
                'booking_date' =>   $booking->date
            ]);
            //insert into booking details
        }

        return redirect()->route('user.seat',$booking->id);
        // return redirect()->back();
    }


    public function userseat($bookingId)
    {
        // $userseat = Bookseat::where('passengerID',auth('userGuard')->user()->id)->get();

        $bookingDetails = Bookseat::with(['route', 'seats'])->find($bookingId);

        if ($bookingDetails) {
            $route = $bookingDetails->route;
           
            $seats = $bookingDetails->seats;
            $totalFare =$bookingDetails->seats->pluck('fare')->sum();
            // dd($totalFare);
        } else {
            $route = null;
            $seats = collect();
            $totalFare = 0;
        }
        // dd($bookingDetails);

        // $this->makepayment($bookingDetails);
        notify()->success('Ticket book Successful');
        return view('frontend.pages.userseat', compact('bookingDetails', 'route', 'seats', 'totalFare'));
    }

    public function seatDelete($s_id)
    {

        $seat = Bookseat::find($s_id);
        $seat->delete();

        return redirect()->back();
    }


    public function makepay($id)
    {
       
        $booking = Bookseat::with(['route', 'seats'])->find($id);
        // dd($bookingDetails);

        if ($booking) {
    
            $totalFare =$booking->seats->pluck('fare')->sum();

            $this->payment($booking, $totalFare);
            return redirect()->route('user.seat',$id);
            // dd($totalFare);
        } 

        notify()->error("something went wrong. Please try again.");
        return redirect()->back();
        // $booking=Bookseat::find($id);
       
    }


    public function payment($booking, $totalFare)
    {
       
        // dd($firstBooking);
        $post_data = array();
        $post_data['total_amount'] = (int)$totalFare; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] =$booking->id ; // tran_id must be unique
        
        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $booking->passengerName;
        $post_data['cus_email'] = $booking->passengerEmail;
       
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";
        #Before  going to initiate the payment order status need to insert or update as Pending.

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');
        

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }
}
