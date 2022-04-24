<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public  function order(){

        return $this->hasOne(Order::class,'id','category_id');
    }
}
