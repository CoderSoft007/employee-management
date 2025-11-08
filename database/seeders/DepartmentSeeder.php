<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = ['Full Stack Developer', 'Laravel Developer', 'UX/UI Developer', 'QA Tester', 'JS Developer', 'Python Developer', 'Sales', 'Marketing', 'HR', 'Finance', 'Operations'];

        foreach ($departments as $name) {
            Department::firstOrCreate(['name' => $name]);
        }
    }
}
