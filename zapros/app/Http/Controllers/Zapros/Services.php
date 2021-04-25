<?php

namespace App\Http\Controllers\Zapros;

use App\Http\Controllers\Controller;
use App\Models\Model\ServicecModel;
use Illuminate\Http\Request;

class Services extends Controller
{
    public function services()
    {
        return response()->json(ServicecModel::get(),
            200);
    }
}
