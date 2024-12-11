<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Lấy danh sách tất cả cinema_id từ bảng cinemas
        $cinemas = DB::table('cinemas')->pluck('id');

        for ($i = 0; $i < 10; $i++) {
            DB::table('movies')->insert([
                'title' => $faker->sentence(3), // Tên phim (3 từ)
                'director' => $faker->name, // Tên đạo diễn
                'release_date' => $faker->date('Y-m-d', 'now'), // Ngày phát hành
                'duration' => $faker->numberBetween(90, 180), // Thời lượng từ 90 đến 180 phút
                'cinema_id' => $faker->randomElement($cinemas), // ID rạp chiếu ngẫu nhiên
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
