<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $fillable = ['ma_don', 'user_id', 'tong_tien', 'trang_thai'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
