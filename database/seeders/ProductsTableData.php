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
                'name' => 'BAG',
                'price_before_tax' => 2000,
                'description' => 'SAC DE TURQUIE',
                'category' => 'SAC moyen',
                'image' => '/a.jpg'
            ],
            [
                'name' => 'BAG',
                'price_before_tax' => 3000,
                'description' => 'SAC DE TURQUIE',
                'category' => 'SAC moyen',
                'image' => '/b.jpg'
            ],
            [
                'name' => 'PAGNE 1',
                'price_before_tax' => 3000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/C.jpg'
            ],
            [
                'name' => 'PAGNE 2',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/d.jpg'
            ],
            [
                'name' => 'PAGNE 3',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/e.jpg'
            ],
            [
                'name' => 'PAGNE 4',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/f.jpg'
            ],
            [
                'name' => 'PAGNE 5',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/f.jpg'
            ],
            [
                'name' => 'PAGNE 6',
                'price_before_tax' => 2000,
                'description' => 'Pagne de bonne qualité en cotton',
                'category' => 'Pagne moyen',
                'image' => '/g.jpg'
            ],
            [
                'name' => 'PARFUM 1',
                'price_before_tax' => 2000,
                'description' => 'PARFUM de bonne qualité de suise',
                'category' => 'PARFUM  moyen',
                'image' => '/h.jpg'
            ],
            [
                'name' => 'PARFUM 2',
                'price_before_tax' => 2000,
                'description' => 'PARFUM de bonne qualité de suise',
                'category' => 'PARFUM  moyen',
                'image' => '/i.jpg'
            ],
        ]);
      
    }
}
