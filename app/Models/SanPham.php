<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'san_phams';
    protected $fillable = [
        'name',
        'slug',
        'price',
        'describe',
        'quantity',
        'is_view',
        'image',
        'thietbi_id',

    ];

}
