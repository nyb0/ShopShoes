<?php

namespace SHOP\Http\Controllers;

use Illuminate\Http\Request;
use SHOP\Basket;

class BasketController extends Controller
{
    public function index(Request $request) {
        $result = Basket::getBasket();
        return view('basket', $result);
    }

    public function addToBasket(Request $request) {
        Basket::addToBasket($request);
        return Basket::getBasketCount();     
        
    }

    public function deleteFromBasket(Request $request) {
        Basket::deleteFromBasket($request);
        return redirect('basket');
    }
}
