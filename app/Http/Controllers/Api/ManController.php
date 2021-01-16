<?php

namespace App\Http\Controllers\Api;

use App\Models\Cad;
use App\Http\Controllers\Controller;

class ManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $cads = Cad::with('logs')->where('cl', 'S')->get();

        return view('monitor', ['cads' => $cads]);
    }

    public function showdet(Cad $cad)
    {        
        return view('monitordet', ['cad'=> $cad]);
    }
}
