<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LapDat extends Model
{
    use HasFactory;
    protected $table = "lap_dats";
    protected $fillable = [
        'ten',
        'std',
        'theloai',
        'ghichu',
    ];
}
