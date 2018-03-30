<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $fillable = ['user_id'];

    public function products()
    {
        return Product::where('orders.id', $this->id)
            ->join("orders_products", "orders_products.product_id", '=', 'products.id')
            ->join("orders", "orders_products.order_id", '=', 'orders.id')
            ->get();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    *@param $products
     *is an array of Product: class
     *
     * @param $request
     * request from the controller
     * contains the quantity of the product
     */
    public static function addOrder($request, $products)
    {
        // takes request which sends the quantity of the product
        $order = Order::create([
            'user_id' => auth()->id()
        ]);

        foreach ($products as $product) {
            // to store order for every product
            $total = $product->price * $request->quantity;

            DB::table("orders_products")->insert([
                'product_id' => $product->id,
                'order_id' => $order->id,
                'quantity' => $request->quantity,
                'total' => $total
            ]);
        }
    }
}
