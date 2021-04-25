<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifsModel extends Model
{
    protected $table = "tarifs";

    protected $fillable = [
        'ID',
        'title',
        'price',
        'link',
        'speed',
        'pay_period',
        'tarif_group_id'

    ];
}
