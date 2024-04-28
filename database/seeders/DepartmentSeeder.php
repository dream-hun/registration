<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Masonry',
                'status'=>'active',
                'created_at' => now(),
            ],
            [
                'name' => 'Hairdressing',
                'status'=>'active',
                'created_at' => now(),
            ],
            [
                'name' => 'Tailoring',
                'status'=>'active',
                'created_at' => now(),
            ],
            [
                'name' => 'Welding',
                'status'=>'active',
                'created_at' => now(),
            ],
            [
                'name' => 'Autoengine Repair',
                'status'=>'active',
                'created_at' => now(),
            ],
            [
                'name' => 'Multimedia',
                'status'=>'active',
                'created_at' => now(),
            ],

        ];
        Department::insert($projects);
    }
}
