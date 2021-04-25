<?php

namespace App\Http\Controllers\Zapros;

use App\Http\Controllers\Controller;
use App\Models\Model\TarifsModel;
use Illuminate\Http\Request;

class Tarifs extends Controller
{
    public function tarif()
    {
        return response()->json(TarifsModel::get(),
            200);
    }
}
