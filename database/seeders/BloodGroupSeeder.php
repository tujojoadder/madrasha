<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-'];
        DB::table('blood_groups')->insert([
            [
                'id' => 1,
                'name' => 'A+',
            ],
            [
                'id' => 2,
                'name' => 'A-',
            ],
            [
                'id' => 3,
                'name' => 'B+',
            ],
            [
                'id' => 4,
                'name' => 'B-',
            ],
            [
                'id' => 5,
                'name' => 'O+',
            ],
            [
                'id' => 6,
                'name' => 'O-',
            ],
            [
                'id' => 7,
                'name' => 'AB+',
            ],
            [
                'id' => 8,
                'name' => 'AB-',
            ]
        ]);
    }
}
