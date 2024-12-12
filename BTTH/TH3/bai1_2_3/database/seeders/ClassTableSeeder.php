<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('classes')->insert([
                'grade_level' => $faker->randomElement(['kindergarten', 'first_grade', 'second_grade', 'third_grade', 'fourth_grade', 'fifth_grade', 'sixth_grade', 'seventh_grade', 'eighth_grade', 'ninth_grade', 'tenth_grade', 'eleventh_grade', 'twelfth_grade']),
                'room_number' => $faker->randomElement(['VH1', 'VH2', 'VH3', 'VH4', 'VH5', 'VH6', 'VH7', 'VH8', 'VH9', 'VH10'])
            ]);
        }
    }
}