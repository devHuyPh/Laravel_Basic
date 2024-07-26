<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable=['order_date','total','customer_id'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class, 'order_details')
                    ->withPivot('quantity','price');
    }


    // use HasFactory;
}
