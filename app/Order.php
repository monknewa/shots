<?php

namespace App;

use App\Mail\OrderConfirmed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    protected $fillable = ['user_id', 'delivery_address'];

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
     * @param $products
     *is an array of Product: class
     *
     * @param $request
     * request from the controller
     * contains the quantity of the product
     */
    public static function addOrder($request)
    {
        // takes request which sends the quantity of the product
        $order = Order::create([
            'user_id' => auth()->id(),
            'delivery_address' => $request['location']
        ]);
        $finalTotal = 0;
        foreach ($request['products'] as $product) {
            // to store order for every product
            $item = Product::find($product['id']);
            $total = $item->price * $product['times'];

            $item->update([
                'quantity' => $item->quantity - $product['times']
            ]);

            DB::table("orders_products")->insert([
                'product_id' => $item->id,
                'order_id' => $order->id,
                'quantity' => $product['times'],
                'total' => $total
            ]);
            $finalTotal += $total;
        }
        $order->total = $finalTotal;
        $order->update();

        Mail::to(auth()->user()->email)->send(new OrderConfirmed());
    }
}
