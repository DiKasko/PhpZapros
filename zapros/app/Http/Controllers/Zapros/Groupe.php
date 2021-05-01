<?php


namespace App\Http\Controllers\Zapros;

use App\Http\Controllers\Controller;
use App\Models\Model\GroupModel;
use App\Models\Model\TarifsModel;
use http\Env\Request;


class Groupe extends Controller
{
    public function groupe()
    {
        return GroupModel::all();

    }


}

