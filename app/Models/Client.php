<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
      'name',
      'email',
      'phone_number',
      'country',
      'company_name',
      'shipment_address',
    ];

    public function proformas()
    {
        return $this->hasMany('App\Models\proforma');
    }

    public function contract()
    {
        return $this->hasMany('Contract::class');
    }



}
