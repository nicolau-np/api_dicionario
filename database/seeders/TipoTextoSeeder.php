<?php

namespace Database\Seeders;

use App\Models\TipoTexto;
use Illuminate\Database\Seeder;

class TipoTextoSeeder extends Seeder
{
    static $tipo_textos =[
        [
            'tipo'=>"Alfabeto",
            'img'=>"assets/images/alfabeto.png",
            'estado'=>"on",
        ], [
            'tipo'=>"Questões",
            'img'=>"assets/images/questao.png",
            'estado'=>"on",
        ],[
            'tipo'=>"Comidas",
            'img'=>"assets/images/comida.png",
            'estado'=>"on",
        ],[
            'tipo'=>"Saudações",
            'img'=>"assets/images/saudacao.png",
            'estado'=>"on",
        ],[
            'tipo'=>"Números",
            'img'=>"assets/images/numero.png",
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
