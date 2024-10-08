<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminInfoAll extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_all_infos')->insert([
            //User Starting
            'name'=>'admin',
            'email'=>Str::random().'@gmail.com',
            'phone'=>'+44 4567567654',
            'address'=>'United Kingdom',
            'dateofbirth'=>  Carbon::create('2000', '01', '01'),
            'password'=>Hash::make('222222'),
        ]);
    }
}
