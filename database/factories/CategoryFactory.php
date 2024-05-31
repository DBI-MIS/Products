<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $title = $this->faker->randomElement([
        //     'Water Cooled',
        //     'Air Cooled',
        //     'Scroll Chiller',
        //     'Screw Chiller',
        //     'Condensing Unit',
        //     'Packaged Unit',
        //     'Air Handling Unit',
        //     'Fan Coil Units',

        // ]);

        $title = $this->faker->unique()->company();
        
        return [
        
            'title' => $title,
            'slug' => Str($title, '-'),
            'text_color' => 'white',
            'bg_color' => 'blue',
        ];
    }
}
