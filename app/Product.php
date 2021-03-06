<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label', 'price', 'description',
    ];
    
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
