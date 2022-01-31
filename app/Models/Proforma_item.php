<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proforma_item extends Model
{
    protected $fillable = [
        'proforma_id',
        'product_id',
        'quantity',
        'price',
    ];
}
