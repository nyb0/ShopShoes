<?php

namespace SHOP\Http\Controllers;

use SHOP\Product;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        $products = Product::paginate(6);
        return view('gallery', ['products' => $products]);
    }
    public function category($categoryId) {
        $products = Product::where('category_id', $categoryId)->paginate(6);
        return view('gallery', ['products' => $products]);
    }
    public function product($categoryId, $productId) {
        $product = Product::find($productId);
        return view('product', ['product' => $product]);
    }
    public function search(Request $request){
        $word = $request->input('word');
        return Product::search($word);;
    }
}
