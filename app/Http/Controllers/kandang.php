<?php

namespace App\Http\Controllers;

use App\Models\M_Kandang;
use Illuminate\Http\Request;

class kandang extends Controller
{
    public function getKandang()
    {
        $kandang = M_Kandang::getKandang();
        var_dump($kandang);
    }
}
