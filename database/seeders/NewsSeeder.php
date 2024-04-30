<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class newsSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        DB::table('News')->insert([
            ['title' => 'VTDT skolnieki piedalās zemes stundā', 'imageURL' => "vtdt.png", "description"=> "VTDT skolnieki izslēdz elektrību un atzīme zemes stundu", 'category' => "news", 'created_at' => $now],
            ['title' => 'VT atverto durvju diena norisināsies 20.06.24', 'imageURL' => "vtdt.png", "description"=> "Vamieras tehnikumā atvērto  rvju iena norisināsies 20.06.24 datumā 10:00 no rīta", 'category' => "atverto durvju diena", 'created_at' => $now],
            ['title' => 'Jaunumi vērtēšanas sistēmā', 'imageURL' => "vtdt.png", "description"=> "sekmīga atzīme sākās no 20%", 'category' => "nolikums", 'created_at' => $now],
            ['title' => 'Brīvlaiku datumi','imageURL' => "vtdt.png", "description"=> "viss gads bus brivs!!!!", 'category' => "brīvlaiki", 'created_at' => $now],
        ]);
    }
}