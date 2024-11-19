<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'total_price', 'status'];

    // Define the relationship: An order belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship: An order has many order items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
