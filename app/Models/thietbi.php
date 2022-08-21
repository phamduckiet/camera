<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thietbi extends Model
{
    use HasFactory;
    protected $table = 'thietbis';
    protected $fillable = [
        'tenthietbi',
        'hinhanh',
    ];
}
