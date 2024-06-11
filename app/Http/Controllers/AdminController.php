<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addFlow(Request $request){
        return view('flow.addflow');
    }

       

     
}
