<?php

namespace App\Http\Resources;

use App\Models\Model\ServicecModel;
use App\Models\Model\TarifsModel;
use App\Models\Model\UsersModel;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
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
            'id' => $this->id,
            'user_id' => $this->user,

            'tarif_id' => TarifResource::collection($this->tarif),

            'payday' => $this->payday,
            'new_payday' => date("jS F, Y", strtotime("last Monday"))
        ];
    }
}
