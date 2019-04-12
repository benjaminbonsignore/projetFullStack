<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'user_id', 'quantity',
    ];
    
    public function products()
    {
        return $this->hasOne('Cart','foreign_key','product_id');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
