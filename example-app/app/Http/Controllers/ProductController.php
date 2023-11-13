<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();

        return view('product.index', compact('product'));
//        dump($product);
//        dump($product->id);
//        dump($product->title);
//        dump($product->description);
//        dump($product->price);
//        dump($product->image);
//        dump($product->is_published);
    }
}
