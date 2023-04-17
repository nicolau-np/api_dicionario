<?php

namespace Database\Seeders;

use App\Models\TipoTexto;
use Illuminate\Database\Seeder;

class TipoTextoSeeder extends Seeder
{
    static $tipo_textos =[
        [
            'tipo'=>"Alfabeto",
            'img'=>"https://scontent.flad4-1.fna.fbcdn.net/v/t39.30808-6/341703368_605774021430603_4700868752013258666_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeG4UE_tWvss5Ma--A3iGHoi2rekYFBXW5rat6RgUFdbmtWytdGm7OVAC6TWfFyzuQSGFvqQi-yG9A8AU6MA8IDM&_nc_ohc=RImGhH0FtUMAX-dQ5Kc&_nc_zt=23&_nc_ht=scontent.flad4-1.fna&oh=00_AfBGwMxM-WaB0x9TteMnzxgSg9FiYxbJFrpNuOcGwbiYgw&oe=64434D3E",
            'estado'=>"on",
        ], [
            'tipo'=>"Questões",
            'img'=>"https://scontent.flad4-1.fna.fbcdn.net/v/t39.30808-6/337290989_947887873018361_2605389124048266032_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGP5D7uDkto51Ay_s65LT3eNNfy7zJtHAk01_LvMm0cCYOnTaAcIiQRnXGniXt-f6EhIu-_Nur9ZpFKExcQfhnq&_nc_ohc=WMFiyA6CQAMAX-oZv8k&_nc_zt=23&_nc_ht=scontent.flad4-1.fna&oh=00_AfDHtyMcSL9OVnvqoCu2Pi2QILUMkB_ZU0oe1_GjEF4myw&oe=64430F34",
            'estado'=>"on",
        ],[
            'tipo'=>"Comidas",
            'img'=>"https://scontent.flad4-1.fna.fbcdn.net/v/t39.30808-6/336904846_616005540067510_7685025389456787576_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEBkdyQ8vsFh1X9ZOdl4YL5qnrX3JgO0qCqetfcmA7SoKHJpv2NIncSnP1OPbyTa13Fdli_KF1xQl8MvXaYfOOE&_nc_ohc=ebczkYIJAYgAX9err_2&_nc_zt=23&_nc_ht=scontent.flad4-1.fna&oh=00_AfCaQdQg8Yw_tclQpePtrp8ukgA5Amf-Kbz1M76AgqB5Ww&oe=64433CB8",
            'estado'=>"on",
        ],[
            'tipo'=>"Saudações",
            'img'=>"https://scontent.flad4-1.fna.fbcdn.net/v/t39.30808-6/336909476_225904840029121_68048960231751415_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHPTG0IU0ta9Fp2GLfT7InWrRVZjKXVxWatFVmMpdXFZh28wOu8zNoEE8KIohtx3oZHlos22d4ww2LUY_ho4p1p&_nc_ohc=-ksJJMZ1YggAX9UUglL&_nc_zt=23&_nc_ht=scontent.flad4-1.fna&oh=00_AfACZ-CSP-KeMerA_9pJJOVy8tHyfE91ApIabNettR-SQw&oe=6441796C",
            'estado'=>"on",
        ],[
            'tipo'=>"Números",
            'img'=>"https://scontent.flad4-1.fna.fbcdn.net/v/t39.30808-6/336926826_1362436487866818_9000559513188232575_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGh8uRsC_pAHTbjb9tRL-Lj7SwgItH6MYHtLCAi0foxgZNBpm5t0ujBXDw8DNM3EzXyRISxiDlShfqifc5G34Xc&_nc_ohc=oReW-_A26BcAX9NT_Px&_nc_zt=23&_nc_ht=scontent.flad4-1.fna&oh=00_AfDh-KvkAVaNcWnIEQ1Xv8e8G_gyh8s1ZJ46n2VgnIKcJg&oe=6441D38E",
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
