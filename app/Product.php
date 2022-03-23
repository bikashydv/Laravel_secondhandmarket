<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Description;

class Product extends Model
{
    protected $guarded = ['id'];

    public function description()
    {
        return $this->hasOne(Description::class, 'product_id', 'id');

    }

}
