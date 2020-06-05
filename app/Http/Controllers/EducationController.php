<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Http\Response;

class EducationController extends Controller
{
    public function getEducationAll()
    {
        $dataP = Education::all();
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
                'educations' => $dataP
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
