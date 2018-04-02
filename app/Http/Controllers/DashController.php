<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->count();
        $orders = Order::latest();
        $products = Product::all();

        $orderDetails = DB::table("orders")
            ->selectRaw("orders.created_at , orders.id , 
            products.name as product_name , users.name as user_name ,  
            orders.delivery_address as address , orders.total, orders.status")

            ->join("orders_products", "orders.id", "=", "orders_products.order_id")
            ->join("products", "products.id", "=", "orders_products.product_id")
            ->join("users", "orders.user_id", "=", "users.id")
            ->orderBy("orders.created_at", "desc")->get();

        return view("dash.dash", [
            'users' => $users,
            'orders' => $orders->count(),
            'products' => $products->count(),
            'stock' => $products->sum("quantity"),
            'sales' => $orders->sum("total"),
            'orderDetails' => $orderDetails
        ]);
    }

    public function account()
    {
        return view("dash.account");
    }

    public function order()
    {
        $orderDetails = DB::table("orders")
            ->join("orders_products", "orders.id", "=", "orders_products.order_id")
            ->join("products", "products.id", "=", "orders_products.product_id")
            ->join("users", "orders.user_id", "=", "users.id")
            ->selectRaw("orders.created_at , orders.id , 
            products.name as product_name , users.name as user_name ,  orders_products.quantity , 
            orders.delivery_address as address , orders_products.total")
            ->orderBy("orders.created_at", "desc")->get();

        return view("dash.order", compact('orderDetails'));
    }

    public function products()
    {
        $products = Product::latest()->get();
        return view('dash.products.index', compact('products'));
    }

    public function accountEdit(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phoneNumber' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email,' . auth()->id(),
            'password' => "required|max:255|confirmed"
        ]);

        $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'address' => $request->address,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        \session()->push("successAdmin", "updated");

        return redirect()->back();
    }
}
