<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductsTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10 ; $i++) { 
            DB::table('products')->insert([
                'name'=>'loincloth',
                'price_before_tax'=>8.2,
                'description'=>'good_quality_loincloth',
                'category'=>'medium_loincloth',
                'image'=>'pp.jpeg'
        
              ]);
        }
      
    }
}
