<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' =>  'Pakaian'
        ]);
        DB::table('categories')->insert([
            'name' =>  'Sembako'
        ]);
        DB::table('categories')->insert([
            'name' =>  'Elektronik'
        ]);
        DB::table('categories')->insert([
            'name' =>  'Fashion'
        ]);
        DB::table('categories')->insert([
            'name' =>  'Barang Antik'
        ]);
    }
}
