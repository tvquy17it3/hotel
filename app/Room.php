<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    protected $guarded = [];
    protected function detail(){
        return $this->belongsTo('App\OrderDetail','roomID');
    }
}