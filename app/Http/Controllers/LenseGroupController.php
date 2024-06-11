<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flow;
use App\Models\LensGroup;
use App\Models\Prescription;
use App\Models\LensProduct;
use App\Models\Clip;


class LenseGroupController extends Controller
{

    public function addlensGroup(Request $request) {
        $newLensGroup = new LensGroup();
        $newLensGroup->prescription_id  = $request->presciptionId; 
        $newLensGroup->display_title = $request->lensgroup_title; 
        $newLensGroup->prescription_description = $request->lensgroup_description;
        $newLensGroup->save();
    
        return response()->json([
            'message' => 'LensGroup added successfully',
            'success' => true,
            'newLensGroup'=>$newLensGroup
        ]);
       
    }
}
