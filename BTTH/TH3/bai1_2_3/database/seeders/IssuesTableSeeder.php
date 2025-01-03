<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $computerID = DB::table('computer')->pluck('id')->toArray();

        for ($i = 0; $i < 30; $i++) {
            DB::table('issues')->insert([
                'computer_id' => $faker->randomElement($computerID),
                'reported_by' => $faker->name(),
                'reported_date' => $faker->dateTime(),
                'description' => $faker->text(),
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved'])
            ]);
        }
    }
}
