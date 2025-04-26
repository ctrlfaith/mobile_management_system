<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MobilePhone;

class MobilePhoneSeeder extends Seeder
{
    public function run()
    {
        MobilePhone::insert([
            ['model' => 'Galaxy S23 Ultra', 'cpu' => 'Snapdragon 8', 'ram' => 8, 'brand_id' => 1, 'os_id' => 1, 'launch_price' => 39999.00],
            ['model' => 'iPhone 14', 'cpu' => 'A16 Bionic', 'ram' => 8, 'brand_id' => 2, 'os_id' => 2, 'launch_price' => 42900.00],
            ['model' => 'Xiaomi 13 Pro', 'cpu' => 'Snapdragon 8', 'ram' => 8, 'brand_id' => 3, 'os_id' => 1, 'launch_price' => 35990.00]
        ]);
    }
}
