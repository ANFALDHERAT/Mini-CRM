<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run()
    {
        \App\Models\Company::factory(20)->create(); 
    }
}
