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

    public function search(Request $request){
        
        if ($request->ajax()) {

            // dd($request);
          
            $data = Cad::where('nome', 'LIKE', $request->nome.'%')->get();
           
            $output = '';

            if (count($data) > 0) {
                foreach ($data as $row){
                    $log = $row->logs->first();
                    $output .= "<tr class=table-tr data-href=\"{{url('monitor/admin', [$row->id])}}\">
                                 <td> $row->id </td>
                                 <td> $row->nome </td>
                                 <td> $log[sistema] </td>
                                 <td> $row->lictgcman </td>
                                 <td> $row->lictgcmandatareg </td>
                                 <td> $log[data] </td>
                                 <td> $log[pcuser] </td>
                                 <td> $log[pcname] </td>
                                 <td> $log[pclocalip] </td>
                                 <td> $log[pcremip] </td>
                                 <td><span class='fi-brush'></span></td>
                               </tr>";
                }              
              //dd($output);
            }
            else {
             
                $output .= '<tr><td>Nenhum registro encontrado.</td></tr>';
            }
           
            return $output;
        }
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
