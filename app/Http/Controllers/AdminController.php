<?php

namespace SHOP\Http\Controllers;

use SHOP\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    public function index()
    {
        $products = DB::table('products')->paginate(25);
        return view('admin.index', ['products' => $products]);
    }

    public function createProduct(){
        return view('admin.product.create');
    }

    public function saveProduct(Request $request){
        
        $product = new Product();

        $product->fill($request->post());

        if ( $request->hasFile('image') === true ){
            
            $file = $request->file('image');
            Storage::disk('public')->put('images/products/' . $file->getClientOriginalName(), fopen($file->getRealPath(), 'r+'));
            $product->image = $file->getClientOriginalName();
        }

        $product->save();

        return view('admin.product.create');
    }
    
    public function editProduct($productId){
        $product = Product::find($productId);
        return view('admin.product.edit', ['product' => $product]);
    }

    public function deleteProduct($productId){
        $product = Product::find($productId);
        return view('admin.product.delete', ['product' => $product]);
    }
}
