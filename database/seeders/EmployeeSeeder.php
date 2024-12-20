<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::insert([
            [
                'name' => 'Pugal Gamer',
                'email' => 'pugal@example.com',
                'age' => '23',
                'position' => 'Software Developer',
                'salary' => 15000,
                'joining_date' => '2024-10-14', // Correct date format: Y-m-d
                'profile_image' => 'profile_images/Xa7ynEyvZBGdB2c2Rpdti38PGrocZPVE5sPJWC5e.jpg', // Example image path
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}