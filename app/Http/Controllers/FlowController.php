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
    public function dashboard(Request $request){
      return view('dashboard.index');
    }
    public function index(Request $request){
      $flow= Flow::get();
      return view('flow.index',['flow'=>$flow]);
    }
    
    public function addFlow(Request $request){
        
        $flow= Flow::where('id', '3')->first();
        $prescription= Prescription::where('flow_id', '3')->get();
        $lensGroup= LensGroup::where('prescription_id', '2')->get();
        return view('flow.addflow',['flow'=>$flow, 'prescriptions'=>$prescription, 'lensGroups'=>$lensGroup]);
    }

    public function addNewFlow(Request $request){
        
      $flow= Flow::where('id', '3')->first();
      $prescription= Prescription::where('flow_id', '3')->get();
      $lensGroup= LensGroup::where('prescription_id', '2')->get();
      return view('flow.add_new_flow',['flow'=>$flow, 'prescriptions'=>$prescription, 'lensGroups'=>$lensGroup]);
  }

     
}
