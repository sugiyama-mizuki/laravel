<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = array('id');
protected $table = 'cart';

    public function getData(){
        return $this->quantity;
    }

    public function goods() {
        return $this->belongsTo('App\Goods');
    }
}
