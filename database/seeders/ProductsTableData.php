<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'SAC',
                'price_before_tax' => 2000,
                'description' => 'SAC DE TURQUIE',
                'category' => 'SAC moyen',
                'image' => '/a.jpg'
            ],
            [
                'name' => 'SAC',
                'price_before_tax' => 3000,
                'description' => 'SAC DE TURQUIE',
                'category' => 'SAC moyen',
                'image' => '/b.jpg'
            ],
            [
                'name' => 'PAGNE',
                'price_before_tax' => 3000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/c.jpg'
            ],
            [
                'name' => 'PAGNE',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/d.jpg'
            ],
            [
                'name' => 'PAGNE',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/e.jpg'
            ],
            [
                'name' => 'PAGNE',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/f.jpg'
            ],
            [
                'name' => 'PAGNE',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/g.jpg'
            ],
            [
                'name' => 'PAGNE',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/h.jpg'
            ],
            [
                'name' => 'PARFUM',
                'price_before_tax' => 2000,
                'description' => 'PARFUM de bonne qualité de suise',
                'category' => 'PARFUM  moyen',
                'image' => '/i.jpg'
            ],
            [
                'name' => 'PARFUM',
                'price_before_tax' => 2000,
                'description' => 'PARFUM de bonne qualité de suise',
                'category' => 'PARFUM  moyen',
                'image' => '/j.jpg'
            ],
        ]);
      
    }
}
