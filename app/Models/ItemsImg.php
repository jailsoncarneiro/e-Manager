<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsImg extends Model
{
    use HasFactory;
//    protected $table = 'items_img';    
    protected $fillable = ['caminho'];
}
