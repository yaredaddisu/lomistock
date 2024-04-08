<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'is_admin'=>'1',
            'is_super_admin'=>'1',
            'house_id'=>'1',
            'status'=>'1',
            'name'=>'super admin',
            'image'=>null,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'email'=>'sadmin@gmail.com',
            'password'=>bcrypt('sadmin1234'),
            'secret'=>bcrypt('1234'),
         ]);
        DB::table('users')->insert([
            'is_admin'=>'1',
            'is_super_admin'=>'0',
            'house_id'=>'1',
            'status'=>'1',
            'name'=>'admin',
            'image'=>null,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin1234'),
            'secret'=>bcrypt('1234'),



        ]);
        DB::table('users')->insert([
            'is_admin'=>'0',
            'is_super_admin'=>'0',
            'house_id'=>'1',
            'status'=>'1',
            'name'=>'user',
            'image'=>null,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            'email'=>'user@gmail.com',
            'password'=>bcrypt('user1234'),
           'secret'=>bcrypt('1234'),


        ]);

    }
}

