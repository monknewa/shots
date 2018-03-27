<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dash.dash");
    }

    public function account()
    {
        return view("dash.account");
    }

    public function products(){
        $products = Product::latest()->get();
        return view('dash.products.index', compact('products'));
    }

    public function accountEdit(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phoneNumber' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email,'.auth()->id(),
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
