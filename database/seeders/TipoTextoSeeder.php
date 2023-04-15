<?php

namespace Database\Seeders;

use App\Models\TipoTexto;
use Illuminate\Database\Seeder;

class TipoTextoSeeder extends Seeder
{
    static $tipo_textos =[
        [
            'tipo'=>"Alfabeto",
            'estado'=>"on",
        ], [
            'tipo'=>"Questões",
            'estado'=>"on",
        ],[
            'tipo'=>"Comidas",
            'estado'=>"on",
        ],[
            'tipo'=>"Saudações",
            'estado'=>"on",
        ],[
            'tipo'=>"Números",
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
