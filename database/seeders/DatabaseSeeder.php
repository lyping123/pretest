<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        product::create([
            "p_name"=>"tomato",
            "p_mass"=>"100",
            "p_price"=>"2.50"
        ]);

        product::create([
            "p_name"=>"potato",
            "p_mass"=>"100",
            "p_price"=>"3.50"
        ]);

        product::create([
            "p_name"=>"carrot",
            "p_mass"=>"100",
            "p_price"=>"1.20"
        ]);
        product::create([
            "p_name"=>"spanich",
            "p_mass"=>"100",
            "p_price"=>"4.60"
        ]);
        product::create([
            "p_name"=>"onion",
            "p_mass"=>"100",
            "p_price"=>"5.00"
        ]);

    }
}
