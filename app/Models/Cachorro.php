<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cachorro extends Model
{
    protected $table = "cachorro";

    public function dono()
    {
        return $this->hasMany(Dono::class,'id_dono', 'id');
    }
}
