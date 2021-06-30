<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cachorro extends Model
{
    protected $table = "cachorro";

    public function dono()
    {
        return $this->belongsTo(Dono::class,'id_dono');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class,'id_produto');
    }
}
