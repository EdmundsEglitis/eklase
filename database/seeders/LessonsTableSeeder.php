<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = [
            'sistemu programmēšana',
            'matemaātika',
            'angļu valoda',
            'latviešu valoda',
        ];

        foreach ($lessons as $lesson) {
            DB::table('all_lessons')->insert([
                'lessons' => $lesson,
            ]);
        }
    }
}