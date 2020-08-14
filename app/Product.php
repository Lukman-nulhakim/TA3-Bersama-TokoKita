<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded  = [];

    public function cart(){
        return $this->hasMany('App\Cart', 'product_id', 'id');
    }

    public function detail(){
        return $this->hasMany(TransactionDetail::class, 'product_id', 'id');
    }
}
