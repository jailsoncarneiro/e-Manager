<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
   use HasFactory;
   
   protected $fillable = ['foto1', 'descricao_res', 'descricao', 'precovar', 'est'];
  
//    $orders = Order::with('products')->get();

//         return view('admin.orders.index', compact('orders'));

   public function imagens()
    {
        return $this->hasMany('App\Models\ProdutoImg', 'fk', 'id_produto');
    }

    public function precos()
    {
        return $this->hasMany('App\Models\ProdutoPrc', 'fk', 'id_produto');
    }
}
