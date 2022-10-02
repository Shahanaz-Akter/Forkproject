<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function tt(){
        return view("testview");
    }
    public function tt2(Request $request){
        //dd($data);
        Test::create([
                  
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);
        
    }
}
