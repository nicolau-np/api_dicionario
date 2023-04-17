<?php

namespace Database\Seeders;

use App\Models\TipoTexto;
use Illuminate\Database\Seeder;

class TipoTextoSeeder extends Seeder
{
    static $tipo_textos =[
        [
            'tipo'=>"Alfabeto",
            'img'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh8VZUWtubvm1QZ2hYoeQQqYyMoWQguI9mlA&usqp=CAU",
            'estado'=>"on",
        ], [
            'tipo'=>"Questões",
            'img'=>"https://www.freeiconspng.com/thumbs/question-mark-icon/3d-question-mark-icon-blue-color-picture-6.png",
            'estado'=>"on",
        ],[
            'tipo'=>"Comidas",
            'img'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxmEnetPrdPcsaCYmooRb2kATdocOR_o7uTQ&usqp=CAU",
            'estado'=>"on",
        ],[
            'tipo'=>"Saudações",
            'img'=>"https://cdn-icons-png.flaticon.com/512/774/774502.png",
            'estado'=>"on",
        ],[
            'tipo'=>"Números",
            'img'=>"https://img.freepik.com/free-vector/counting-number-0-9-math-symbols_1308-102627.jpg?w=2000",
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
