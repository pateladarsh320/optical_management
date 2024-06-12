<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flow;
use App\Models\LensGroup;
use App\Models\Prescription;
use App\Models\LensProduct;
use App\Models\Clip;

class ClipController extends Controller
{
    public function addLensClip(Request $request) {
        $newclip = new Clip();
        $newclip->prescription_id = $request->lensproductId; 
        $newclip->clip_on_prize = $request->clip_price;
        $newclip->clip_on_quantity = $request->clip_quantity; 
        $newclip->clip_on_type = $request->clip_type; 
        $newclip->clip_on_name = $request->clip_Name;
        if ($request->hasFile('clip_image')) {
            $image = $request->file('clip_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $folderPath = public_path('lensClip');
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);
            }      
            $image->move($folderPath, $imageName);
            $newclip->image = $imageName; 
        }
        $newclip->save();
    
        return response()->json([
            'message' => 'Clip added successfully',
            'success' => true,
            'newclip'=>$newclip
        ]);
       
    }
}
