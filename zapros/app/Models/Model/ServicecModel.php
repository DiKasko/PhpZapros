<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicecModel extends Model
{
    protected $table = "services";

    protected $fillable = [
        'id',
        'user_id',
        'tarif_id',
        'payday'
    ];

    public function user()
    {
        return $this->hasMany(UsersModel::class,'users_id');
    }
    public function tarif()
    {
        return $this->hasMany(TarifsModel::class,'id');
    }
}

