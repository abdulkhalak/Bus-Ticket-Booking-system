<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function ViewTicket()
    {
      return view('backend.pages.ticket');
    }
  
}
