<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{
   public function Viewlocation()
   {
    return view('backend.pages.location');
   }


   public function locationData()
   {
       $locations = Location::paginate(5);
    return view('backend.pages.locationdata', compact('locations'));
   }






   
   public function locationStore(Request $request)
   {
      $checkValidation=Validator::make($request->all(),[
         'locationName'=>'required',
     ]);
     if ($checkValidation->fails())
     {
      notify()->error("something wrong");
      return redirect()->back();
     }

     Location::create([
      'name'=>$request->locationName,
      'status'=>$request->status,

     ]);
     notify()->success('Location given');
     


     return redirect()->back();
   }
}
