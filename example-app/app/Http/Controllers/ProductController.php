<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('product.index', compact('product'));

    }

    public function create(){
        $brands = Brand::all();
        $tags = Tag::all();
        return view('product.create', compact('brands', 'tags'));
    }

    public function store(){
        $data = request()->validate([
            "title" => "required|string",
            "description" => "string",
            "price" => "integer",
            "image" => "string",
            "brand_id" => "",
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $product = Product::create($data);

        $product->tags()->attach($tags);
        return redirect()->route('products.index');
    }

    public function show(Product $product){
        return view('product.show', compact('product',  ));
    }

    public function edit(Product $product){
        $brands = Brand::all();
        $tags = Tag::all();
        return view('product.edit', compact('product', 'brands', 'tags'));
    }

    public function update(Product $product){
        $data = request()->validate([
            "title" => "string",
            "description" => "string",
            "price" => "integer",
            "image" => "string",
            "brand_id" => "",
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $product->update($data);

        $product->tags()->sync($tags);
        return redirect()->route('products.show', $product->id);



    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');
    }
}
