<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<=25;$i++) {
            \DB::table('products')->insert([
                'nama' => $faker->word,
                'harga' => $faker->randomNumber($nbDigits = NULL, $strict = false), 
                'stock' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}
