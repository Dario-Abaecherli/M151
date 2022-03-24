<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Ovomaltine Schockolade',
            'stock_quantity' => 23,
            'description' => 'Milchschokolade von Ovomaltine',
            'price' => 2.50
        ]);
    }
}
