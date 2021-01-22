<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   use HasFactory;

//   protected $table = 'items';
   
   protected $fillable = ['descricaores', 'descricao'];
  
//    $orders = Order::with('products')->get();

//         return view('admin.orders.index', compact('orders'));

   public function imagens()
    {
        return $this->hasMany('App\Models\ItemsImg', 'fk', 'id');
    }

    public function precos()
    {
        return $this->hasMany('App\Models\ItemsPrc', 'fk', 'id');
    }
}
