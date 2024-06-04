<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Database\Factories\BrandFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()
            ->create([
            'name' => 'admin',
            'email' => 'admin@dbiphils.com',
            'password' => Hash::make('password'),
            'role' => 'ADMIN',
        ]);

        Category::factory()->count(8)->create();
        Brand::factory()->count(7)->create();

        Product::factory()->count(40)
        ->has(Category::factory()->count(3), 'product_categories')
        // ->has(Brand::factory()->count(1), 'product_brand')
        ->create();
        // ->each(fn($product) => $product->product_brand->update(
        //     'product_id', $product->id
        // ));

        

        // Brand::factory()->count(10)
        // ->create();

        // Category::factory()->count(10)
        // ->create(
        //     // [
        //     //     'title' => 'Admin',
        //     //     'slug' => 'admin',
        //     //     'text_color' => 'white',
        //     //     'bg_color' => 'blue',
        //     // ]
        // );
        // foreach(Product::all() as $product){
        //     foreach(Category::all() as $category){
        //     $product->product_categorie()->attach($category->id);
        //     }
        //     }

    }
}
