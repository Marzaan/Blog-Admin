<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Raiyan',
            'website' => 'www.raiyan.com',
            'email' => 'raiyan@gmail.com',
            'password' => '12345',
        ]);
        DB::table('users')->insert([
            'name' => 'Masud',
            'website' => 'www.masud.com',
            'email' => 'masud@gmail.com',
            'password' => '12345',
        ]);
        DB::table('users')->insert([
            'name' => 'Marzan',
            'website' => 'www.marzan.com',
            'email' => 'marzan@gmail.com',
            'password' => '12345',
        ]);
    }
}
