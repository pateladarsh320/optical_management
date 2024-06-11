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

class productReflectingController extends Controller
{
    public function addLensReflect(Request $request) {
        $newLensReflect = new LensReflect();

        $newLensReflect->lensindex_id  = $request->lensindex_id; 

        if($request->has('antireflectingcoat')) {
            $newLensReflect->lensindexType = $request->antireflectingcoat;
        }
        if($request->has('tint')) {
            $newLensReflect->lensindexType = $request->tint;
        }

        $newLensReflect->price = $request->reflectindex_price; 
        $newLensReflect->recommded = $request->reflect_recomnded;
        $newLensReflect->coating_type = $request->reflectCoting_type; 
        $newLensReflect->coating_name = $request->reflectCoating_Name;
        $newLensReflect->description = $request->reflect_description;
        $newLensReflect->save();
    
        return response()->json([
            'message' => 'LensReflect added successfully',
            'success' => true,
            'newLensReflect'=>$newLensReflect
        ]);
       
    }
}
