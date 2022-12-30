<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('edulevels')->insert([
        {
            'name' => 'SD Sederajat',
            'desc' => 'SD / MI',
        }
        {
            'name' => 'SMO Sederajat',
            'desc' => 'SMP / MTs',
        }
       ]);
    }
}