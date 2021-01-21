<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function getIndex () {
        $produtos = Produto::get();
                
        //dd($produtos);
        return view('shopcart.index', ['produtos' => $produtos]);
    }
}
