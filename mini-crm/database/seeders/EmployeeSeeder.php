<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Employee::factory(50)->create(); 
    }
}
