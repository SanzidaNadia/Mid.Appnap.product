<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [ 'name' => '',
            'short_description' => '' ,
            'long_description'  => '',

            ]
        ];



        // Insert the data into the 'zones' table
        DB::table('products')->insert($product);
    }
}
