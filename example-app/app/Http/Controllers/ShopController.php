<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shop = Shop::all();
        return view('admin.shop.index', compact('shop'));
    }

    public function create()
    {
        $cities = City::all();
        return view('admin.shop.create', compact('cities'));
    }


    public function store(Request $request){

        $data = $request->validate([
            'shop_name' => 'string',
            'city_id' => 'integer',
            'address' => 'string',
        ]);
        $shop = Shop::create($data);
        return redirect()->route('admin.shop.index');
    }

    public function show(Shop $shop){
        return view('admin.shop.show', compact('shop',));
    }

    public function edit(Shop $shop){
        $cities = City::all();
        return view('admin.shop.edit', compact('shop', 'cities'));
    }

    public function update(Request $request, Shop $shop){
        $data = $request->validate([
            'shop_name' => 'string',
            'city_id' => 'integer',
            'address' => 'string',
        ]);
        $shop->update($data);

        return redirect()->route('admin.shop.show', $shop->id);
    }

    public function destroy(Shop $shop){
        $shop->delete();
        return redirect()->route('admin.shop.index');
    }

}
