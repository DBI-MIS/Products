<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->randomElement([
            'Dunham-Bush',
            'Truwater',
            'Elta Fan',
            'Moontech',
            'ProMED',
            'AtmosAir',
            'EP Solutions',
        ]);

        return [
           'name' => $name,
           'brand_logo' => fake()->imageUrl(),
           'description' => fake()->paragraph(),
        ];
    }
}
