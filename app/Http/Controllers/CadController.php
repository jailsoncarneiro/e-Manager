<?php

namespace App\Http\Controllers;

use App\Models\Cad;
use Illuminate\Http\Request;

class CadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cads = Cad::with('enderecos')->get();
        //dd($cads[0]);

        return view('cads.cadastro', ['cads' => $cads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
        return view('cads.cadsto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = new Cad();
        $cad->nome = $request->usuario;
        $cad->idendcob = 0;
        $cad->idendent = 0;        
        $cad->usuario = $request->usuario;
        $cad->senha = $request->senha;
        $cad->endcobend = $request->endcobend;
        $cad->endcobnum = $request->endcobnum;
        $cad->endcobcompl = $request->endcobcompl;
        $cad->endcobbairro = $request->endcobbairro;
        $cad->endcobidcid = $request->endcobidcid;
        $cad->endcobuf = $request->endcobuf;
        $cad->endcobcep = $request->endcobcep;
        $cad->save();
        return redirect()->route('cads.listall');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cad  $cad
     * @return \Illuminate\Http\Response
     */
    public function show(Cad $cad)
    {        
        return view('cads.listall');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cad  $cad
     * @return \Illuminate\Http\Response
     */
    public function edit(Cad $cad)
    {
        //dd($cad);
        return view('cads.cadedit', ['cad' => $cad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cad  $cad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cad $cad)
    {
        //dd($request, $cad);
//        dd($cad);
        $cad->usuario = $request->usuario;
        if ($request->has('senha'))
          $cad->senha = $request->senha;
        $cad->endcobend = $request->endcobend;
        $cad->endcobnum = $request->endcobnum;
        $cad->endcobcompl = $request->endcobcompl;
        $cad->endcobbairro = $request->endcobbairro;
        $cad->endcobidcid = $request->endcobidcid;
        $cad->endcobuf = $request->endcobuf;
        $cad->endcobcep = $request->endcobcep;
        $cad->save();
        //dd($request);
        return redirect()->route('cads.listall');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cad  $cad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cad $cad)
    {
        //
    }
}
