<?php

namespace SHOP\Http\Controllers;

use SHOP\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    public function allProducts()
    {
        $products = Product::paginate(25);
        return view('admin.all-products', ['products' => $products]);
    }

    public function createProduct(){
        return view('admin.product.create');
    }

    public function saveProduct(Request $request){
        
        Product::saveProduct($request);

        $products = Product::latest('updated_at')->first();
        return redirect ('/' . $products->category_id . '/' . $products->id);
    }
    
    public function editProduct($productId){
        
        $products = Product::find($productId);
        return view('admin.product.edit', ['product' => $products]);
    }

    public function deleteProduct($productId){

        Product::deleteProduct($productId);
        
        return redirect('/admin');
    }
}
