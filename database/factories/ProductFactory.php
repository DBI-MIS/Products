<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->randomElement([
            'DB WXC 230T 6Q',
'DB HXWCI 1000 6S',
'COOLING FAN MOTOR ',
'PUMPS',
'COOLING TOWERS',
'DB ACDS 135 AKGS',
'DB AIRE FWD - 24',
'DB WCFX 20AN',
'DB WXC 405T-6',
'DB WCFX 405T-6',
'DB HXWC 620-6S',
'DB WCFX 60TR CBYCRYCR',
'DB WCFX E60T',
'DB WCFX 27B',
'DB WCFX 51 ',
'DB WCFX 36 SCB7CRRAR',
'DB DCLC 5503737T69TG62',
'DB AIRE KF-51GW',
'HAIER',
'AS20',
'AS26',
'HSU-24LEK13/122',
'DB WCFX 3636 M1K2',
'DB 1215NHF6W4',
'DB WCFX 36B',
'DB ACX 220 CQP',
'DB WCFX 30L2J3C',
'DB ACCS 320',
'DB WCFX 3333ARL3KI',
'DB HXWCI 1300 6S',
'DB ACDX 170B',
'DB AVX A265S ARHR',
'DB AVX A260S ARHR',
'DB WCFX 75TR AR',
'DB WCFX 90TR AR',
'DB ACDS 050ATR6S',
'DB WXC 250T 6',
'DB AVX A330T CBHR',
'DB DCLC 5556F66FM62',
'DB DCLC 4747F35FK62',
'DB WCFC 45T3R2',
'DB WCFX 45T3RC',
'DB WCFX 51V2T2',
'DB WCFX 3030 L1J2',
'DB WCFX 10RARB1RA1R',
'DB HXWC 620-6S ',
'DB ACHFX 90-6',
'DB ACHFX 220-6',
'DB AHSFS 240HM',
'DB AHSFS 120HM',
'DB AHSFS 100HM',
'DB AHSFS 180HM',
'DB AHSFS 64HM',
'DB WXC 225T-6',
'DB WCFX 51B',
'DB WCFX 50TEARKBRT5R',


        ]);

        $equipment_header = fake()->randomElement([
            'Airconditioning' => 'Airconditioning',
            'Refrigeration' => 'Refrigeration',
            'Ventilation' => 'Ventilation',
            'Other Products' => 'Other Products',
        ]);

        return [
            'title' => $title,
            'product_img' => fake()->imageUrl(),
            'user_id' => 1,
            'date_posted' => now(),
            'description' => fake()->paragraph(),
            'features' => fake()->sentence(4),
            'technical_specs' => fake()->sentence(4),
            'slug' =>Str($title, '-'),
            'capacity' => fake()->sentence(2),
            'equipment_application' => fake()->word(1),
            'equipment_header' => $equipment_header,
            // 'brand_id' => Brand::factory()->count(1),
            'status' => 0,
            'featured' => 0,
        ];
    }


}
