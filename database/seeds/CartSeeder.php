<?php

use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cart::Create([
            'product_title' => 'Vanila ice Cream',
            'product_price' => '2.5',
            'product_description' => 'delicious',
        ]);
        App\Cart::Create([
            'product_title' => 'Chocolate ice Cream',
            'product_price' => '3.7',
            'product_description' => 'dark chocolate',
        ]);
    }
}
