<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class booksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) { // Sinh 20 sách ngẫu nhiên
            DB::table('books')->insert([
                'title' => $faker->sentence(3), // Tiêu đề ngẫu nhiên (3 từ)
                'author' => $faker->name, // Tác giả ngẫu nhiên
                'publication_year' => $faker->year, // Năm xuất bản ngẫu nhiên
                'genre' => $faker->randomElement(['Programming', 'Science', 'Fiction', 'Biography', 'History']), // Thể loại ngẫu nhiên
                'library_id' => $faker->numberBetween(1, 10), // Mã thư viện ngẫu nhiên (giả sử có 10 thư viện)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}