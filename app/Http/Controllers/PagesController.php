<?php

namespace App\Http\Controllers;

use App\Product;

class PagesController extends Controller
{

    public function index()
    {
        $products = Product::latest()->limit(10)->get();
        $specialCollections = Product::where("price", ">", 4000)->limit(10)->latest()->get();
        return view("welcome", compact('products', 'specialCollections'));
    }

    public function products()
    {
        $breadCrumbs = explode("/", request()->path());
        return view("products.index", compact('breadCrumbs'));
    }

    public function checkOut()
    {
        return view("products.checkout");
    }


}
