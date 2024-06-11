<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flow;
use App\Models\LensGroup;
use App\Models\Prescription;
use App\Models\LensProduct;
use App\Models\Clip;
use App\Models\LensIndex;
use App\Models\LensReflect;
use App\Models\Engraving;

class EngravingController extends Controller
{
    public function addEngraving(Request $request) {
        $newaddEngraving = new Engraving();
        $newaddEngraving->prescription_id   = $request->presciptionIdEngraving; 
        $newaddEngraving->personalize_frame = $request->engraving_frame;
        $newaddEngraving->price = $request->engravingprice; 
        $newaddEngraving->save();
    
        return response()->json([
            'message' => 'Engraving added successfully',
            'success' => true,
            'newaddEngraving'=>$newaddEngraving
        ]);
       
    }
}
