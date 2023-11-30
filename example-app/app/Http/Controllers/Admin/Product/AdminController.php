<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Tag;

class AdminController extends Controller
{
    public function index(){
        $product = Product::paginate(10);
        return view('admin.product.index', compact('product'));

    }

    public function create(){
        $brands = Brand::all();
        $tags = Tag::all();
        return view('admin.product.create', compact('brands', 'tags'));
    }

    public function store(StoreRequest $request){
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.product.index');
    }

    public function show(Product $product){
        return view('admin.product.show', compact('product',  ));
    }

    public function edit(Product $product){
        $brands = Brand::all();
        $tags = Tag::all();
        return view('admin.product.edit', compact('product', 'brands', 'tags'));
    }

    public function update(UpdateRequest $request, Product $product){
        $data = $request->validated();

        $this->service->update($product, $data);

        return redirect()->route('admin.product.show', $product->id);

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
