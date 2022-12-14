<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhotoProduct>
 */
class PhotoProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => fake()->numberBetween(1, Product::count()),
            'photo' => 'assets/product/zAFi7kOxalWoDjts3zseNduJg4wya1oHtksqXRvF.jpg',
        ];
    }
}
