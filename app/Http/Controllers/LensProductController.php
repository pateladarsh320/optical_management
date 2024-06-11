<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flow;
use App\Models\LensGroup;
use App\Models\Prescription;
use App\Models\LensProduct;
use App\Models\Clip;

class LensProductController extends Controller
{
    public function addlensproduct(Request $request) {
        $newLensProduct = new LensProduct();
        $newLensProduct->lensgroup_id  = $request->groupId; 
        $newLensProduct->display_title = $request->lensproduct_title; 
        $newLensProduct->description = $request->lensproduct_description;
        $newLensProduct->save();
    
        return response()->json([
            'message' => 'LensGroup added successfully',
            'success' => true,
            'newLensProduct'=>$newLensProduct
        ]);
       
    }
}
