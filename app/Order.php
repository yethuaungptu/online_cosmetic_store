<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    protected $casts = [
        'cart' => 'array'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
