<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@com',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(12),
            'role' => 'Owner',
        ]);

        \App\Models\Customer::create([
            'name' => 'James Onland',
            'sex' => 'Male',
            'Address' => 'Miles Street',
            'phone' => '+23 239 2283 1922',
        ]);

        \App\Models\Outlet::create([
            'name' => 'Planet Laundry HQ',
            'address' => 'Broom Street 4',
            'phone' => '+29 992 1212 1209',
        ]);

        \App\Models\Package::create([
            'package_name' => 'Underwhelming Weight',
            'package_category_id' => '1',
            'description' => 'Underwhelmed by the weight of your laundry?'
        ]);

        \App\Models\PackageCategory::create([
            'category' => 'Weight',
        ]);
        \App\Models\PackageCategory::create([
            'category' => 'Blanket',
        ]);
        \App\Models\PackageCategory::create([
            'category' => 'Bed Cover',
        ]);
        \App\Models\PackageCategory::create([
            'category' => 'T-Shirt',
        ]);
        \App\Models\PackageCategory::create([
            'category' => 'Other',
        ]);
    }
}