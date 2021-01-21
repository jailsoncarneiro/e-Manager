<?php

namespace App\Http\Controllers\Api;

use App\Models\Cad;
use App\Http\Controllers\Controller;
use App\Models\CadsLog;
use Illuminate\Http\Request;

class ManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $cads = Cad::with('logs', 'enderecos')->get();

        return view('monitor', ['cads' => $cads]);
    }

    public function showdet(Cad $cad)
    {        
        // dd($cad->logs);
        return view('monitordet', ['cad'=> $cad]);
    }
}
