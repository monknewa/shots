<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("dash.products.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'description' => 'required'
        ]);

        $file = $request->file("image");
        $fileExtension = $file->getClientOriginalExtension();
        $file->move(public_path("/img/products/"), $request->name . ".$fileExtension");

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'quantity' => $request->quantity,
            'image' => "/img/products/" . $request->name . ".$fileExtension",
            'description' => $request->name,
        ]);
        return redirect("/dash/products");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $image = "";
        if ($glob = glob(public_path("img/products/$product->name.{jpeg,jpg,png}"), GLOB_BRACE))
            $image = basename($glob[0]);


        return view("dash.products.create", compact('product', 'categories', 'image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,jpg,png',
            'description' => 'required',
            'quantity' => 'required|min:0'
        ]);

        if ($request->has('image')) {
            // if request has image delete the image and then reupload
            $file = glob(public_path('img/products/') . "$request->name.*", GLOB_BRACE);
            File::delete($file);
            $file = $request->file('image');
            $file->move(public_path("img/products/"), $request->name . "." . $file->getClientOriginalExtension());

            $fields = [
                'name' => $request->name,
                'price' => $request->price,
                'category_id' => $request->category_id,
                'quantity' => $request->quantity,
                'image' => "/img/products/" . $request->name . "." . $file->getClientOriginalExtension(),
                'description' => $request->description,
            ];
        } else {
            // request doesnot have an image
            if ($file = glob(public_path("img/products/$product->name.*"), GLOB_BRACE)) {
                $extension = File::extension($file[0]);
                File::move($file[0], public_path("img/products/$request->name.$extension")); // for renaming the old file
            }
            $fields = [
                'name' => $request->name,
                'price' => $request->price,
                'category_id' => $request->category_id,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'image' => "/img/products/" . $request->name . "." . $extension,
            ];
        }
        $product->update($fields);
        //updates the record
        return redirect('/dash/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $file = $product->name;

        $glob = glob(public_path("img/products/$file.*"));
        File::delete($glob);
        try {
            $product->delete();
        } catch (\Exception $e) {
        }
        return redirect("/dash/products");
    }

}
