<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OperatingSystem;

class OperatingSystemSeeder extends Seeder
{
    public function run()
    {
        OperatingSystem::insert([
            ['name' => 'Android', 'version' => '13'],
            ['name' => 'iOS', 'version' => '16']
        ]);
    }
}
