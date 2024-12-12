<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table("medicines")->insert([
              'name' => $faker->randomElement(['Paracetamol', 'Ibuprofen', 'Amoxicillin', 'Cephalexin', 'Omeprazole', 'Pantoprazole']),
                'brand' => $faker->randomElement(['Long Châu', 'Phúc An Khang', 'Nhà thuốc FPT', 'Mediplanet']),
                'dosage' => $faker->numberBetween(10, 100) . ' mg',
                'form' => $faker->randomElement(['Viên nén', 'Viên nang', 'Bột thuốc', 'Dung dịch', 'Hỗn dịch', 'Siro']),
                'price'=> $faker->numberBetween(10, 100) ,
                'stock'=> $faker->numberBetween(10, 1000) ,
                'created_at' => now(),
                'updated_at' => now(), 
            ]);
        }
        //
    }
}
