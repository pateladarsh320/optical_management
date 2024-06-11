<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flow;
use App\Models\LensGroup;
use App\Models\Prescription;
use App\Models\LensProduct;
use App\Models\Clip;
use App\Models\LensIndex;

class LensIndexController extends Controller
{
    
    public function addlensIndex(Request $request) {
        $newLensIndex = new LensIndex();
        $newLensIndex->lensproduct_id  = $request->lensproductId; 
        $newLensIndex->recommded = $request->product_recomnded;
        $newLensIndex->index_price = $request->index_prize; 
        $newLensIndex->index_type = $request->product_indextype;
        $newLensIndex->index_name  = $request->product_indexName; 
        $newLensIndex->description = $request->product_description;
        $newLensIndex->save();
    
        return response()->json([
            'message' => 'LensGroup added successfully',
            'success' => true,
            'newLensIndex'=>$newLensIndex
        ]);
       
    }
}
