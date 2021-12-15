<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Chris',
            'name' =>'Chris Heintzelman',
            'email' => 'chrish@diversfiedtechnology.com',
            'password' => Hash::make('password'),
        ]);
        
    }
}
