<?php

namespace SHOP;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id', 'article', 'brand', 'series', 'model', 'partnumber', 'description', 'gender', 'style', 'season', 'price', 'quantity'
    ];
}
