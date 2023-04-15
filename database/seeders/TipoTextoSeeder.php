<?php

namespace Database\Seeders;

use App\Models\TipoTexto;
use Illuminate\Database\Seeder;

class TipoTextoSeeder extends Seeder
{
    static $tipo_textos =[
        [
            'tipo'=>"Alfabeto",
            'img'=>null,
            'estado'=>"on",
        ], [
            'tipo'=>"Questões",
            'img'=>null,
            'estado'=>"on",
        ],[
            'tipo'=>"Comidas",
            'img'=>null,
            'estado'=>"on",
        ],[
            'tipo'=>"Saudações",
            'img'=>null,
            'estado'=>"on",
        ],[
            'tipo'=>"Números",
            'img'=>null,
            'estado'=>"on",
        ],
    ];
    public function run()
    {
        foreach(Self::$tipo_textos as $tipo_texto){
            TipoTexto::create($tipo_texto);
        }
    }
}
