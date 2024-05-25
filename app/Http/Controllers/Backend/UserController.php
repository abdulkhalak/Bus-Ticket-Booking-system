<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bookseat;
use App\Models\Coustomerlogin;
use App\Models\Route;
use App\Models\Seat;
use App\Models\Userlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function customerlogin()
    {
        return view('frontend.pages.customerlogin');
    }

    public function coustomerdoLogin(Request $request)
    {

        // dd($request->all());
        $checkValidation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($checkValidation->failed()) {
            notify()->error($checkValidation->getMessageBag());
            return redirect()->back();
        }

        Coustomerlogin::create([

            'name' => ($request->name),
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password),

        ]);
        notify()->success('Registration successful');

        return redirect()->route('login.user');
    }



    public function login()
    {
        return view('backend.pages.login');
    }

    public function doLogin(Request $request)
    {
        $userInput = $request->except('_token');

        $checkLogin = Auth::attempt($userInput);
        $checkLogin = auth()->attempt($userInput);
        if ($checkLogin) {
            // notify()->success('Login successful');
            return redirect()->route('dashboard');
        }
        notify()->error('Invalid credentials.');
        return redirect()->back();
    }

    public function signout()
    {
        auth()->logout();
        notify()->success('Logout successful');
        return view('backend.pages.login');
    }

    public function loginuser()
    {

        return view('frontend.pages.loginuser');
    }
    public function userdoLogin(Request $request)
    {

        // dd($request->all());

        $userInput = ['email' => $request->email, 'password' => $request->password];
        $checkLogin = auth()->guard('userGuard')->attempt($userInput);

        if ($checkLogin) {


            // dd("Login hoisea");
            // notify()->success('Login successful');
            return redirect()->route('homepage');
        }

        //dd("Login Hoi Nai");
        // notify()->error('Invalid credentials.');
        return redirect()->back();
    }

    public function logout()
    {
        auth('userGuard')->logout();
        notify()->success('Logout successful');
        return redirect()->route('homepage');
    }

    public function userprofile()
    {
        $booking = Bookseat::where('passengerID',auth('userGuard')->user()->id)->orderBy('id','desc')->get();

        return view('frontend.pages.userprofile', compact('booking'));
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

        return view('frontend.pages.bookingdetails', compact('bookingDetails', 'route', 'seats', 'totalFare'));
       
    }
}
