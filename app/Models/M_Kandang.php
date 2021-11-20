<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Kandang extends Model
{
    use HasFactory;
    public function getKandang()
    {
        return DB::table('kandang')->select('*')->get();
    }
}
