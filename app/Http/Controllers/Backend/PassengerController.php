<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bookseat;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function ViewPassenger()
    {
        $userseat = Bookseat::all();
        

     return view('backend.pages.passenger', compact('userseat'));
    }
 
}
