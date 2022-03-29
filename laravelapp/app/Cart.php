<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = array('id');
protected $table = 'cart';

    public static $rules = array(
        'quantity' => 'required|min:1|integer',
    );

    public function getData(){
        // 
    }
}
