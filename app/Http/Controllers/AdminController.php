<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addFlow(Request $request){
        return view('flow.addflow');
    }

        // public function ViewResidentdetails(Request $request, $id)
        // {
    
        //     $Resident= Resident::where('id', $id)->first();
        //     $residentId= $Resident->id;
        //     $Documents = Document::where('resident_id', $residentId)->where('request_type',null)->get();
        //     return view('superadmin::resident.resident_details',['Resident'=>$Resident, 'Documents'=>$Documents]);
        // }

    
}
