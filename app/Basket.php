<?php

namespace SHOP;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SHOP\Order;
use SHOP\Product;

class Basket
{
    static public function getBasket() {

        $basket = Session::get('basket');

        if ($basket === null) {
            $basket = [];
            Session::put('basket', $basket);
        }

        $ids = array_keys($basket);
        $products = Product::find($ids);
        $orders = [];
        $totalPrice = 0;

        foreach ($products as $product){
            
            $orders[$product->id] = [
                'id'       => $product->id,
                'article'  => $product->article,
                'quantity' => $basket[$product->id],
                'price'    => $basket[$product->id] * $product->price
            ];

            $totalPrice += $basket[$product->id] * $product->price;
        }

        return  ['products' => $orders, 'totalPrice' => $totalPrice];

    }

    static public function addToBasket(Request $request) {
        
        $basket = Session::get('basket');

        $id = $request->input('product_id');
        $quantity = (int) $request->input('quantity');

        if (isset($basket[$id]) === true) {
            $basket[$id] += $quantity;
        } else {
            $basket[$id] = $quantity;
        }

        Session::put('basket', $basket);
    }

    static public function getBasketCount() {

        $basket = Session::get('basket');

        if ($basket === null) {
            $basket = [];
            Session::put('basket', $basket);
        }

        $count = 0;

        foreach ($basket as $quantity) {
            $count += $quantity;
        }

        return $count;
    }

    static public function deleteFromBasket(Request $request){

        $id = $request->input('id');
        $basket = Session::get('basket');
        unset($basket[$id]);
        Session::put('basket', $basket);
    }

    static public function makeOrder(){
        
        if (Auth::guest() === true) {
            echo 'Please login'; exit;
        }
        
        $basket = Basket::getBasket();

        if ($basket['totalPrice'] !== 0) {

            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->total_price = $basket['totalPrice'];
            
            $productIds = [];
            foreach ($basket['products'] as $id => $product) {
                $productIds[$id]['quantity'] = $product['quantity'];
            }

            $order->save();
            $order->products()->attach($productIds);

            $basket = null;
            Session::put('basket', $basket);

        }
    }
}
