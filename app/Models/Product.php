<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name', 'description','price','quantity','supplier_id'];
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class, 'order_detail')
                    ->withPivot('quantity','price');
    }
    // use HasFactory;
}
