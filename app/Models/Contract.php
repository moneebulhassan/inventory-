<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable=
        [
            'date',
            'invoice_id',
            'governing_law',
            'client_id',
            ];



    public function invoice(){
        return $this->belongsTo('App\Model\Invoice');
    }
    public function client(){
        return $this->belongsTo('App\model\Client');
    }
}
