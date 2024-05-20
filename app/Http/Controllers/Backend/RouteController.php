<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RouteController extends Controller
{
  public function viewRoute()
  {
    $datas = Location::all();
    // dd($datas);
    return view('backend.pages.route', compact('datas'));
  }


  public function routeData()
  {
    $routes = Route::paginate(10);
    return view('backend.pages.routedata', compact('routes'));
  }






  public function storeRoute(Request $request)
  {
    $checkValidation = Validator::make($request->all(), [
      'from' => 'required',
      'to' => 'required',
      'fare' => 'required',
      'type' => 'required',
      'bus_id' => 'required',

    ]);

    Route::create([

      'from' => $request->from,
      'to' => $request->to,
      'fare' => $request->fare,
      'type' => $request->type,
      'bus_id' => $request->bus_id,
    ]);

    return redirect()->back();
  }

  public function routeDelete($r_id)
  {

    $route = Route::find($r_id);
    $route->delete();

    return redirect()->back();
  }




  public function routeEditview($r_id)
  {
    $rDetails = Route::find($r_id);

    return view('backend.pages.routeeditview', compact('rDetails'));
  }





  public function routeEditViewUpdate(Request $request, $r_id)
  {


    $rDetails = Route::find($r_id);

    $checkValidation = Validator::make($request->all(), [
      'from' => 'required',
      'to' => 'required',
      'fare' => 'required',
      'type' => 'required',
      'busId' => 'required',

    ]);

    $rDetails->update([

      'from' => $request->from,
      'to' => $request->to,
      'fare' => $request->fare,
      'type' => $request->type,
      'bus_id' => $request->busId,


    ]);

    return redirect()->route('route.data');
  }

  public function routeView($id)
  {
    $routeview = Route::find($id);


    return view('backend.pages.routeview', compact('routeview'));
  }
}
