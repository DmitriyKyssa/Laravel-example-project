<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
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

    public function store(StoreRequest $request){
        $data = $request->validated();

        $this->service->store($data);

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

    public function update(UpdateRequest $request, Product $product){
        $data = $request->validated();

        $this->service->update($product, $data);

        return redirect()->route('products.show', $product->id);



    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');
    }
}
