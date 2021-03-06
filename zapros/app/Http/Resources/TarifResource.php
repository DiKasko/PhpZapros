<?php

namespace App\Http\Resources;

use App\Models\Model\ServicecModel;
use App\Models\Model\TarifsModel;
use Illuminate\Http\Resources\Json\JsonResource;

class TarifResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [

            'id' => $this -> id,
            'title' => $this->title,
            'link' => $this->link,
            'speed'=> $this->speed,
            'tarif_group_id' => $this->group,


        ];

    }
}
