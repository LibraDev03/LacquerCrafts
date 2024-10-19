<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $append = ['totalPrice'];
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'payment_method',
        'order_notes',
        'user_id',
    ];

    public function orderD() {
        return $this->hasMany(Order_detail::class, 'order_id', 'id');
    }

    public function getTotalPriceAttribute() {
        $t = 0;

        foreach($this->orderD as $order) {
            $t += $order->price * $order->quantity + 40000;
        }
        return  $t;
    }
}
