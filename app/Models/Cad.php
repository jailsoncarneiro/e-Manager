<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cad extends User
{
    use HasFactory;

    protected $table = 'cads';

    public function enderecos()
    {
        return $this->hasMany('App\Models\CadEnd', 'fk', 'id');
    }

    public function logs()
    {
        return $this->hasMany('App\Models\CadsLog', 'idcad', 'id');
    }

    // public function telefones()
    // {
    //     return $this->hasMany('App\Models\Cad/Tel', 'fk', 'id');
    // }

    // public function ops()
    // {
    //     return $this->hasMany('App\Models\Cad/Com', 'fk', 'id');
    // }

    // public function ops()
    // {
    //     return $this->hasMany('App\Models\Cad/Com', 'fk', 'id');
    // }
}
