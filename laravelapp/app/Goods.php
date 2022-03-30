<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Goods extends Model
{
    protected $guarded = array('id');

    public function getData(){
        // 
    }

    public function cart(){
        return $this->hasOne('App\Cart');
    }

}
