<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicecModel extends Model
{
    protected $table = "services";

    protected $fillable = [
        'ID',
        'user_id',
        'tarif_id',
        'payday',

    ];
}
