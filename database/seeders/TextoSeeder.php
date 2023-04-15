<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Texto;

class TextoSeeder extends Seeder
{
    static $textos = [
        [
            'id_tipo_texto'=>1,
            'texto'=>"Pão",
            'video'=>"https://youtu.be/B_-oV4l8ivw",
            'img'=>null,
             'estado'=>"on",
        ], [
            'id_tipo_texto'=>1,
            'texto'=>"Banana",
            'video'=>"https://www.youtube.com/watch?v=ktLYrQhwg6Q",
            'img'=>null,
             'estado'=>"on",
        ],
    ];
    public function run()
    {
        foreach(Self::$textos as $texto){
            Texto::create($texto);
        }
    }
}
