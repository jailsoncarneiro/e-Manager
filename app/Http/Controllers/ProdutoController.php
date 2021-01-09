<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function getIndex () {
        $produtos = Produto::get();
                
        //var_dump($produtos);
        return view('partials.anova', ['produtos' => $produtos]);
    }
}
