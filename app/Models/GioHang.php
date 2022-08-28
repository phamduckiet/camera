<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;
    protected $table = 'gio_hangs';
    protected $fillable = [
        'auto_user',
        'product_id',
        'qty',
        'address',
    ];

    public function product()
    {
        return $this->belongsTo('\App\Models\SanPham', 'product_id', 'id');
    }
    // public function bill()
    // {
    //     return $this->belongsTo('\App\Models\Bill', 'bill_id','id');
    // }
    // public function UserAddress()
    // {
    //     return $this->belongsTo('\App\Models\Address','address','id');

    // }
}
