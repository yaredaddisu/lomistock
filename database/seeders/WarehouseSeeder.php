<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->insert([
            'name'=>'Bole',
            'location'=>'Bole',
            'capacity'=>1000,
            'description'=>'bole',

         ]);


    }
}
