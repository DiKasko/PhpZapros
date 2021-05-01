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
        'payday',

    ];

    public function user()
    {
        return $this->hasMany(UsersModel::class,'id','user_id');
    }
    public function tarif()
    {
        return $this->hasMany(TarifsModel::class,'id','tarif_id');
    }
    public function group()
    {
        return $this->hasMany(TarifsModel::class,'tarif_group_id','tarif_group_id');
    }

}

