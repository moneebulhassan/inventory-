<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_Item extends Model
{
    protected $fillable=[
      'invoice_id',
      'product_id',
      'quantity',
      'price',
    ];
}
