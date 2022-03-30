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
            'price' => 2.50,
            'imagePath' => 'images\ovomaltine.jpg'
        ]);

        Product::create([
            'name' => 'Rivella Rot',
            'stock_quantity' => 55,
            'description' => 'Rivella Rot 250ml',
            'price' => 1.80,
            'imagePath' => 'images\rivellaRot.jpg'
        ]);
    }
}
