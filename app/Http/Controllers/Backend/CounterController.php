<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CounterController extends Controller
{
    public function ViewCounter()
    {
        
        
     return view('backend.pages.counter');
    }



    public function CounterData()
    {
        $counters = Counter::paginate(10);
     return view('backend.pages.counterdata', compact('counters'));
    }



    public function StoreCounter(Request $request){


        $checkValidation=Validator::make($request->all(),[

            'locationID'=>'required',
            'counterName'=>'required',
            'contract'=>'required',


        ]);
        
  Counter::create([

    'locationID'=>$request->locationID,
    'counterName'=>$request->counterName,
    'contract'=>$request->contract,
    
]);

return redirect()->back();
    }

 
}
