<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flow;
use App\Models\LensGroup;
use App\Models\Prescription;
use App\Models\LensProduct;
use App\Models\Clip;
use App\Models\LensFrames;

class lensFrameController extends Controller
{
    public function addLensFrame(Request $request) {
        $newLensFrame = new LensFrames();
        $newLensFrame->prescription_id = $request->lensproductframeId; 
        $newLensFrame->clip_on_prize = $request->clip_price1;
        $newLensFrame->clip_on_quantity = $request->clip_quantity1; 
        $newLensFrame->clip_on_type = $request->clip_type1; 
        $newLensFrame->clip_on_name = $request->clip_Name1;
        if ($request->hasFile('clip_image1')) {
            $image = $request->file('clip_image1');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $folderPath = public_path('lensFrame');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }      
            $image->move($folderPath, $imageName);
            $newLensFrame->image = $imageName; 
        }
        $newLensFrame->save();
    
        return response()->json([
            'message' => 'Lens Frame added successfully',
            'success' => true,
            'newLensFrame'=>$newLensFrame
        ]);
       
    }
}
