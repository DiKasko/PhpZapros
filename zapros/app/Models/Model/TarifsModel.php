<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifsModel extends Model
{
    protected $table = "tarifs";

    protected $fillable = [
        'id',
        'title',
        'price',
        'link',
        'speed',
        'pay_period',
        'tarif_group_id'

    ];


    public function group()
    {
        return $this->hasMany(TarifsModel::class,'tarif_group_id','tarif_group_id');
    }
}
