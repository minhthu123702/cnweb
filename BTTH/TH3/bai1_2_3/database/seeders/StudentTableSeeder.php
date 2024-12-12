<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $classID = DB::table('classes')->pluck('id')->toArray();

        for ($i = 0; $i < 30; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'date_of_birth' => $faker->date(),
                'parent_phone' => $faker->phoneNumber(),
                'class_id' => $faker->randomElement($classID)
            ]);
        }
    }
}
