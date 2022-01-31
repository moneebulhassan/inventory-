<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable=[

        'date',
        'currency',
        'current_balance',
        'payment_amount',
        'balance_due',
        'method_of_payment',
        'payment_payment',
    ];
}
