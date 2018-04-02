<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        $products = Product::latest()->limit(10)->get();
        $specialCollections = Product::where("price", ">", 4000)->limit(10)->latest()->get();
        $beer = Product::where("category_id", Category::where("type", "beer")->first()->id)->first();

        return view("welcome", compact('products', 'specialCollections','beer'));
    }

    public function products()
    {
        $products = Product::all();
        $totalProducts = count($products);
        $products = Product::latest()->paginate(6);

        $breadCrumbs = explode("/", request()->path());
        return view("products.index", compact('breadCrumbs', 'products', 'totalProducts'));
    }

    public function productsWithCategory($category)
    {
        $category = Category::where("type", $category)->firstOrFail();
        $products = Product::where('category_id', $category->id);
        $totalProducts = count($products->get());
        $products = $products->latest()->paginate(6);

        $breadCrumbs = explode("/", request()->path());
        return view("products.index", compact('breadCrumbs', 'products', 'totalProducts'));
    }

    public function product($product)
    {
        $product = Product::where("name", $product)->firstOrFail();
        return view("products.product", compact('product'));
    }

    public function checkOut()
    {
        return view("products.checkout");
    }

    public function checkOutAddress()
    {
        return view("products.checkoutAddress");
    }

    public function purchase(Request $request)
    {
        $arr['location'] = $request['location'];
        $arr['products'] = $request['products'];

        Order::addOrder($arr);
    }
}
