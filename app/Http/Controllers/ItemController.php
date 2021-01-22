<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function getIndex () {
        $items = Item::get();
                
        //dd($produtos);
        return view('shopcart.index', ['items' => $items]);
    }
}
