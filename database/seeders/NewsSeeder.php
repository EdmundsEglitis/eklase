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
            ['title' => 'In Progress', 'category' => "news", 'created_at' => $now],
            ['title' => 'Completed', 'category' => "news", 'created_at' => $now],
            ['title' => 'On Hold', 'category' => "nolikums", 'created_at' => $now],
            ['title' => 'Pending Approval', 'category' => "brīvlaiki", 'created_at' => $now],
        ]);
    }
}