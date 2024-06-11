<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flow;
use App\Models\LensGroup;
use App\Models\Prescription;
use App\Models\LensProduct;
use App\Models\Clip;

class FlowController extends Controller
{
    public function addFlow(Request $request){
        
        $flow= Flow::where('id', '3')->first();
        $prescription= Prescription::where('flow_id', '3')->get();
        $lensGroup= LensGroup::where('prescription_id', '2')->get();
        return view('flow.addflow',['flow'=>$flow, 'prescriptions'=>$prescription, 'lensGroups'=>$lensGroup]);
    }

      //     $Resident= Resident::where('id', $id)->first();
        //     $residentId= $Resident->id;
        //     $Documents = Document::where('resident_id', $residentId)->where('request_type',null)->get();
        //     return view('superadmin::resident.resident_details',['Resident'=>$Resident, 'Documents'=>$Documents]);
}
