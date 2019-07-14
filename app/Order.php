<?php

namespace SHOP;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function products() {
        return $this->belongsToMany('\SHOP\Product', 'orders_products')->withPivot(['quantity']);
    }
    
    public function user() {
        return $this->hasOne('\SHOP\User', 'id', 'user_id');
    }
}