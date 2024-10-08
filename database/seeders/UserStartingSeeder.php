<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserStartingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //User Starting
            'fulname'=> Str::random(10),
            'username'=> Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'phone'=>'+44 8768766537',
            'address'=>'United Kingdom',
            'dateofbirth'=> Carbon::create('2000', '01', '01'),
            'password'=>Hash::make('111111'),
        ]);

    }
}
