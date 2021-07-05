<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'Raiyan',
            'title' => 'First Post',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        DB::table('posts')->insert([
            'name' => 'Raiyan',
            'title' => 'Second Post',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        DB::table('posts')->insert([
            'name' => 'Raiyan',
            'title' => 'Third Post',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        DB::table('posts')->insert([
            'name' => 'Masud',
            'title' => 'First Post',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        DB::table('posts')->insert([
            'name' => 'Masud',
            'title' => 'Second Post',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        DB::table('posts')->insert([
            'name' => 'Masud',
            'title' => 'Third Post',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        DB::table('posts')->insert([
            'name' => 'Marzan',
            'title' => 'First Post',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        DB::table('posts')->insert([
            'name' => 'Marzan',
            'title' => 'Second Post',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
        DB::table('posts')->insert([
            'name' => 'Marzan',
            'title' => 'Third Post',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
    }
}
