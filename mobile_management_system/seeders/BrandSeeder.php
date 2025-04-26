<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run()
    {
        Brand::insert([
            ['name' => 'Samsung'],
            ['name' => 'Apple'],
            ['name' => 'Xiaomi']
        ]);
    }
}
