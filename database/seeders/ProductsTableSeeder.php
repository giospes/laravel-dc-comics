<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = config('products');
        foreach($products as $product){
            $newProduct = new Product();
            $newProduct ->title = $product['title'];
            $newProduct ->descrition = $product['description'];
            $newProduct ->quantity = $product['quantity'];
            $newProduct ->price = $product['price'];
            $newProduct->save();
        }
    }
}




