<?php

namespace Database\Seeders;

use App\Models\Industry;
use App\Models\Packages;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        // Admin
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@example.com',
            'role'     => 0,
            'password' => bcrypt('aszx1234'),
        ]);
        // Standard user
        User::create([
            'name'     => 'user',
            'email'    => 'user@example.com',
            'role'     => 1,
            'password' => bcrypt('aszx1234'),
        ]);
        // Client
        User::create([
            'name'     => 'client',
            'email'    => 'client@example.com',
            'role'     => 2,
            'password' => bcrypt('aszx1234'),
        ]);
        // 10 random users (role = 1)
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name'     => "User {$i}",
                'email'    => "user{$i}@example.com",
                'role'     => 1,
                'password' => bcrypt('aszx1234'),
            ]);
        }


        // industry
        Industry::create([
            'name' => 'HVAC',
            'img'  => 'test.png',
        ]);
        // 10 generic industries
        for ($i = 1; $i <= 10; $i++) {
            Industry::create([
                'name' => "Industry {$i}",
                'img'  => 'test.png',
            ]);
        }


        // Specific package
        Packages::create([
            'name'            => 'first',
            'price'           => 100,
            'discount'        => 20,
            'discountedprice' => 100 * (1 - 20/100), // = 80
        ]);
        // 10 generic packages
        for ($i = 1; $i <= 10; $i++) {
            $price    = rand(50, 500);
            $discount = rand(5, 50);
            $discPrice = round($price * (1 - $discount / 100), 2);

            Packages::create([
                'name'            => "Package {$i}",
                'price'           => $price,
                'discount'        => $discount,
                'discountedprice' => $discPrice,
            ]);
        }
    }
}
