<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\City;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory(5)->create();
        $tags = Tag::factory(5)->create();
        $products = Product::factory(20)->create();

        foreach ($products as $product){
            $tagsIds = $tags->random(3)->pluck('id');
            $product->tags()->attach($tagsIds);
        }

        City::factory(5)->create();
        Shop::factory(10)->create();

    }
}
