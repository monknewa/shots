<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        return view("user.create");
    }

    public function dashIndex()
    {

        $users = User::where("isAdmin", "0")->latest()->get();
        return view("dash.users.index", compact("users"));
    }

    public function dashDestroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }


    public function profile()
    {
        $user = auth()->user();
        return view("user.profile", compact('user'));
    }

    public function profileedit(Request $request, $user)
    {

        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phoneNumber' => 'required|max:255',
        ]);
        $user = User::find(decrypt($user));

        $user->update([
            'name' => $request->name,
            "address" => $request->address,
            'phoneNumber' => $request->phoneNumber
        ]);
        \session()->push("successProfileUpdate", "updated");
        return redirect("/user");

    }
}
