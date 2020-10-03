<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function category(){
        return $this->$this->belongsTo(Category::class); //$product->category /
        //select * from category where product_id = 1
    }
}
