<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ComputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { $faker = Faker::create();

        $brands = ['Dell', 'HP', 'Lenovo', 'Apple', 'Asus', 'Acer', 'MSI', 'Razer'];
        $laptopModels = ['XPS', 'Spectre', 'ThinkPad', 'MacBook', 'ZenBook', 'Predator', 'GS', 'Blade'];
        $desktopModels = ['OptiPlex', 'Pavilion', 'ThinkCentre', 'iMac', 'ROG', 'Helios', 'GE', 'Blade'];
        $operatingSystems = ['Windows 10', 'Windows 11', 'macOS', 'Linux', 'Ubuntu', 'Fedora'];
        $memories = [4, 8, 16, 32];

        for ($i = 0; $i < 30; $i++) {
            DB::table('computer')->insert([
                'computer_name' => $faker->randomElement($brands),
                'model' => $faker->randomElement($laptopModels),
                'operating_system' => $faker->randomElement($desktopModels),
                'processor' => $faker->randomElement($operatingSystems),
                'memory' => $faker->randomElement($memories),
                'available' => $faker->boolean(),
            ]);
    }
}
}
