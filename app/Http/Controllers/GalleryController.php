<?php

namespace SHOP\Http\Controllers;

use SHOP\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index() {
        $products = DB::table('products')->paginate(6);
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
}
