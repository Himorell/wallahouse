<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // 'imgHouse'=> $this->faker->imageUrl(),
            'price'=> $this->faker->biasedNumberBetween($min = 1, $max = 300, $function = 'sqrt'),
            'title'=> $this->faker->name(),
            'category'=> $this->faker->name(),
            'rooms'=> $this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'baths'=> $this->faker->biasedNumberBetween($min = 1, $max = 5, $function = 'sqrt'),
            'persons'=> $this->faker->biasedNumberBetween($min = 1, $max = 20, $function = 'sqrt'),
            'population'=> $this->faker->city(),
            'province'=> $this->faker->city(),
            'preferences'=> $this->faker->name(),
            'nameProperty'=> $this->faker->name(),
            'phone'=> $this->faker->name(),
            
        ];
    }
}
