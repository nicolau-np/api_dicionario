<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTexto extends Model
{
    use HasFactory;

    protected $fillable = [
       'tipo',
       'estado',
    ];

    public function textos(){
        return $this->hasMany(Texto::class, 'id_tipo_texto', 'id');
    }
}
