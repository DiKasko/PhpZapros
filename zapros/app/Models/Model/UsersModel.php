<?php

namespace App\Models\Model;


use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{

    protected $table = "users";

    protected $fillable = [
        'users_id',
        'login',
        'name_last',
        'name_first'
    ];


}
