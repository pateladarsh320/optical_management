<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flow;
use App\Models\LensGroup;
use App\Models\Prescription;
use App\Models\LensProduct;
use App\Models\Clip;

class PrescriptionController extends Controller
{
    public function addPrescription(Request $request) {
        $newflow = new Flow();
        $newflow->flow_title = $request->flow_name; 
        $newflow->status = '0';
        $newflow->save();
    
        $newprescription = new Prescription();
        $newprescription->flow_id  = $newflow->id; 
        $newprescription->prescription_type = $request->prescription_type; 
        $newprescription->display_title = $request->prescription_display_title;
        $newprescription->prescription_description = $request->prescription_display_description;
        $newprescription->save();
    
        return response()->json([
            'message' => 'Prescription added successfully',
            'success' => true,
            'newflow'=>$newflow,
            'newprescription'=>$newprescription
        ]);
    }
    
}
