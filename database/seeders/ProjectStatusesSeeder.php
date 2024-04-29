<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProjectStatusesSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        DB::table('project_statuses')->insert([
            ['name' => 'In Progress', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Completed', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'On Hold', 'created_at' =>$now, 'updated_at' => $now],
            ['name' => 'Pending Approval', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}