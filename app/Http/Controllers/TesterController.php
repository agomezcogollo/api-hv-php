<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;

class TesterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.basic');
    }

    public function index()
    {   
        $p = \App\Models\Profile::all();
        return \Response::json($p, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'categories' => $p
        ],200);
        
        $p = \App\Models\Profile::all();
        dd( $p );
        return view('welcome');
    }
    
    public function indexSecond()
    {   
        $p = \App\Models\Profile::all();
        return \Response::json($p, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'categories' => $p
        ],200);
        
        $p = \App\Models\Profile::all();
        dd( $p );
        return view('welcome');
    }

}
