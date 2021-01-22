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
        return $this->hasMany('App\Models\ItemImg', 'fk', 'id');
    }

    public function precos()
    {
        return $this->hasMany('App\Models\ItemPrc', 'fk', 'id');
    }
}
