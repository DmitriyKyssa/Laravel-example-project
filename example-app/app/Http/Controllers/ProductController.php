<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::find(1);
        dump($product);
        dump($product->id);
        dump($product->image);
        dump($product->title);
        dump($product->description);
        dump($product->price);
        dump($product->is_published);
    }
}
