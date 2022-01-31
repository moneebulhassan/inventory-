<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proforma extends Model
{
    protected $fillable=[
        'name' ,
        'date',
        'ref_number',
        'due_date',
        'country_of_origin',
        'port_of_loading',
        'shipment_period' ,
        'payment_terms' ,
        'insurance' ,
        'port_of_discharge' ,
        'final_destination',
        'inspection' ,
        'currency' ,
        'client_id' ,
    ];

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function invoice(){
        return $this->hasMany('App\Models\Invoice');
    }

}
