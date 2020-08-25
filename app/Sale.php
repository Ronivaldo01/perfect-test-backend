<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'id',
        'client_id',
        'product_id',
        'product',
        'quantity',
        'discount',
        'status'	


        ];

        public function client(){
            return $this->belongsTo(Client::class);
        }
}
