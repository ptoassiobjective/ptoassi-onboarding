<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProducts extends Model
{
    use HasFactory;

    protected $table = 'cart_products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'cart_id',
        'product_id',
    ];

    /**
     * Get the cart
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }

    /**
     * Get the cart
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
