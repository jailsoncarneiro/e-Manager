<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadsEnd extends Model
{
    use HasFactory;
//    protected $table = 'cads_ends';

public function cid()
{
    return $this->hasOne('App\Models\Cidade', 'id', 'idcid');
}

}
