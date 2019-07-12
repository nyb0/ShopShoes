<?php

namespace SHOP;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id', 'article', 'brand', 'series', 'model', 'partnumber',
        'description', 'gender', 'style', 'season', 'price', 'quantity'
    ];

    public static function saveProduct(Request $request){
        
        if ($request->input('id') !== null){
            $products = Product::find($request->input('id'));
        }
        else{
        $products = new Product();
        }
        $products->fill($request->post());

        if ( $request->hasFile('image') === true ){
            
            $file = $request->file('image');
            Storage::disk('public')->put('images/products/' . $file->getClientOriginalName(), fopen($file->getRealPath(), 'r+'));
            $products->image = $file->getClientOriginalName();
        }

        $products->save();
    }

    public static function deleteProduct($productId){
        
        $products = Product::find($productId);
        $imageLink = Storage::disk('public')->path('images/products/' . $products->image);

        if(is_file($imageLink)){
            //Storage::delete($imageLink);
            unlink($imageLink);
        }
        
        Product::find($productId)->delete();
    }
}
