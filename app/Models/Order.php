<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'adress',
        'payment_method',
        'buy_date',
        'status',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}