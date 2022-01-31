<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerformaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' =>$this-> id,
            'date' =>$this-> date,
            'ref_number' =>$this-> ref_number,
            'due_date' =>$this-> due_date,
            'country_of_origin' =>$this-> country_of_origin,
            'port_of_loading' =>$this-> port_of_loading,
            'shipment_period' =>$this-> shipment_period,
            'payment_terms' =>$this-> payment_terms,
            'insurance' =>$this-> insurance,
            'port_of_discharge' =>$this-> port_of_discharge,
            'final_destination' =>$this-> final_destination,
            'inspection' =>$this-> inspection,
            'currency' =>$this-> currency,
            'client_id' =>$this-> client_id,
        ];
    }
}
