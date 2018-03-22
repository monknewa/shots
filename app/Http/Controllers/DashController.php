<?php

namespace App\Http\Controllers;

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

    public function accountEdit(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phoneNumber' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email',
            'password' => "required|max:255|confirmed"
        ]);

        $user = auth()->user();

        $user->update(request(['name', 'address', 'phoneNumber', 'email', 'password']));

        \session()->push("successAdmin","updated");

        return redirect()->back();
    }
}
