<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Texto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tipo_texto',
       'texto',
       'video',
       'img',
        'estado',
    ];

    public function 
}
