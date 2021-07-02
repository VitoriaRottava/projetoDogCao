<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "agenda";


    public function dono()
    {
        return $this->belongsTo(Dono::class,'id_dono');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class,'id_produto');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class,'id_funcionario');
    }

    public function cachorro()
    {
        return $this->belongsTo(Cachorro::class,'id_cachorro');
    }
}
