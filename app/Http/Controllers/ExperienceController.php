<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Http\Response;

class ExperienceController extends Controller
{
    public function getExperienceAll()
    {
        $dataP = Experience::all();
        if (is_null($dataP) || $dataP == '' ){
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'response' => 'no data'
            ],400);    
        }elseif(is_object($dataP)){
            return response()->json([
                'code' => 200,
                'status' => 'success',
                'experience' => $dataP
            ],200);
        }else{
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'response' => 'error internal'
            ],400);
        }
    }
}
