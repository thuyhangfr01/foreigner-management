<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class thongBao extends Model
{
    protected $table = 'thongbao';
    protected $fillable = [
        'maHoChieu',
        'maCanBo',
        'tieuDe',
        'noiDung',
        'ngayGui'
    ];
}
