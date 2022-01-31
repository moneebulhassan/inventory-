<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'proforma_id',
        'bl_num',
        'vessel',
        'no_of_container',
        'port_of_loading',
        'port_of_discharge',
        'final_destination',
        'payment_terms',
        ];

    public function proforma()
    {
        return $this->belongsTo('App\Models\Proforma');
    }

    public function contract(){
        return $this->hasMany('App\Models\Contract');
    }
}
