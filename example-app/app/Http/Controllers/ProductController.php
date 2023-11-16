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
        return view('product.create', compact('brands'));
    }

    public function store(){
        $data = request()->validate([
            "title" => "string",
            "description" => "string",
            "price" => "integer",
            "image" => "string",
            "brand_id" => "",
        ]);
        Product::create($data);
        return redirect()->route('products.index');
    }

    public function show(Product $product){
        $brands = Brand::all();
//        dd($brands);
        return view('product.show', compact('product', 'brands'));
    }

    public function edit(Product $product){
        $brands = Brand::all();
        return view('product.edit', compact('product', 'brands'));
    }

    public function update(Product $product){
        $data = request()->validate([
            "title" => "string",
            "description" => "string",
            "price" => "integer",
            "image" => "string",
            "brand_id" => "",
        ]);
        $product->update($data);
        return redirect()->route('products.show', $product->id);
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');
    }
}
