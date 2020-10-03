<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $guarded = [];
    protected $primaryKey = 'id';
    
    protected $table = "address";

    public function user(){
        return $this->belongsTo(User::class);
    }
}
