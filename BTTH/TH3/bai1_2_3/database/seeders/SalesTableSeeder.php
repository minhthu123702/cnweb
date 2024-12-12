<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $medicineIDs = DB::table('medicines')->pluck('id')->toArray(); 

        for ($i = 0; $i < 10; $i++) {
            DB::table('sales')->insert([
                'drug_id' => $faker->randomElement($medicineIDs), 
                'quantity' => $faker->numberBetween(1, 50), 
                'sale_date' => $faker->dateTimeBetween('-1 year', 'now'), 
                'customer_phone' => $faker->numerify('09########'),
                'created_at' => now(),
                'updated_at' => now(), 
            ]);
        }
    }
}
