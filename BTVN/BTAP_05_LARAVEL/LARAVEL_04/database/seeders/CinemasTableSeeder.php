<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CinemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('cinemas')->insert([
                'name' => $faker->company . ' Cinema', // Tên rạp chiếu
                'location' => $faker->address, // Địa chỉ
                'total_seats' => $faker->numberBetween(100, 500), // Số ghế từ 100 đến 500
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
