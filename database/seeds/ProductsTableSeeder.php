<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $P1 = [
            'name' => 'Learn to build adroid app',
            'image' => 'uploads/products/book1.png',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
         ];

         $P2 =  [
            'name' => 'JavaScript for beginner and also master',
            'image' => 'uploads/products/.png',
            'price' => 4500,
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. And modere moderes zif'
         ];

         App\Product::create($P1);

         App\Product::create($P2);
    }
}
