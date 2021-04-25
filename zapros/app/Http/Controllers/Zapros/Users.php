<?php

namespace App\Http\Controllers\Zapros;

use App\Http\Controllers\Controller;
use App\Models\Model\UsersModel;
use Illuminate\Http\Request;

class Users extends Controller
{

    public function user()
    {
        return response()->json(UsersModel::get(),
            200);
    }

}
