<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetails';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    protected $guarded = [];

    protected function order(){
        return $this->belongsTo('App\Order','id');
    }
    protected function room(){
        return $this->hasOne('App\Room','id');
    }
}