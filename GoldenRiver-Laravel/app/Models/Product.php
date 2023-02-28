<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'Product_ID';

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'Product_ID');
    }
}
