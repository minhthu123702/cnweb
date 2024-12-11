<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class LibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Sinh 10 thư viện ngẫu nhiên
            DB::table('libraries')->insert([
                'name' => $faker->company . ' Library', // Tên thư viện
                'address' => $faker->address, // Địa chỉ ngẫu nhiên
                'contact_number' => $faker->phoneNumber, // Số điện thoại ngẫu nhiên
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}