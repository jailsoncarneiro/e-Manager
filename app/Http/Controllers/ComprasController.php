<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function getIndex ($user) {
        $items = Item::get();
                
        //dd($produtos);
        return view('compras.index', ['user' => $user, 'produtos' => $items]);
    }
}
