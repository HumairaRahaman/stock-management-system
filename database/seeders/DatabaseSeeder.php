<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < rand(5, 10);  $i++) {
            ProductType::factory()
                ->has(Product::factory()->count(rand(5, 10)))
                ->create();
        }
    }
}
