<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'pid' => 9,
            'name' => 'Raiyan',
            'comment' => 'First Comment',
        ]);
        DB::table('comments')->insert([
            'pid' => 9,
            'name' => 'Raiyan',
            'comment' => 'Second Comment',
        ]);
        DB::table('comments')->insert([
            'pid' => 9,
            'name' => 'Masud',
            'comment' => 'First Comment',
        ]);
        DB::table('comments')->insert([
            'pid' => 10,
            'name' => 'Marzan',
            'comment' => 'First Comment',
        ]);
        DB::table('comments')->insert([
            'pid' => 10,
            'name' => 'Raiyan',
            'comment' => 'First Comment',
        ]);
        DB::table('comments')->insert([
            'pid' => 11,
            'name' => 'Marzan',
            'comment' => 'First Comment',
        ]);
        DB::table('comments')->insert([
            'pid' => 11,
            'name' => 'Raiyan',
            'comment' => 'First Comment',
        ]);
        DB::table('comments')->insert([
            'pid' => 12,
            'name' => 'Marzan',
            'comment' => 'First Comment',
        ]);
        DB::table('comments')->insert([
            'pid' => 12,
            'name' => 'Raiyan',
            'comment' => 'First Comment',
        ]);
    }
}
