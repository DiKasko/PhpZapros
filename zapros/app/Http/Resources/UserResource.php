<?php

namespace App\Http\Resources;

use App\Models\Model\ServicecModel;
use App\Models\Model\TarifsModel;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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


            'title' => $this->title,
            'link' => $this->link,
            'speed'=> $this->speed,
            'tarif_group_id' => $this->group,


        ];

    }
}
