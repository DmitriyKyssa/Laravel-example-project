<?php

namespace App\Services\Product;

use App\Models\Product;

class Service
{
    public function store($data){
        $tags = $data['tags'];
        unset($data['tags']);

        $product = Product::create($data);

        $product->tags()->attach($tags);

        return $product;
    }

    public function update($product, $data){
        $tags = $data['tags'];
        unset($data['tags']);

        $product->update($data);

        $product->tags()->sync($tags);
    }
}
