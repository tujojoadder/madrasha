<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('jamats')->insert([[
            'id' => 1,
            'jamat_name' => 'হেফখানা',
        ],[
            'id' => 2,
            'jamat_name' => 'নাজেরা',
        ],[
            'id' => 3,
            'jamat_name' => 'মক্তব',
        ]]);
    }
}
