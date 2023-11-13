<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    public function create(){

        return view('product.create');
    }

    public function store(){
        $data = request()->validate([
            "title" => "string",
            "description" => "string",
            "price" => "integer",
            "image" => "string"
        ]);
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function show(Product $product){
        return view('product.show', compact('product'));
    }

    public function edit(Product $product){
        return view('product.edit', compact('product'));
    }

    public function update(Product $product){
        $data = request()->validate([
            "title" => "string",
            "description" => "string",
            "price" => "integer",
            "image" => "string"
        ]);
        $product::update($data);
        return redirect()->route('products.show', $product->id);
    }
}
