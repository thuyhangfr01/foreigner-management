<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class thongTinCuTru extends Model
{
    protected $table = 'thongtincutru';
    protected $fillable = [
        'maCNCT',
        'maXacNhan',
        'ngayDenCSLT',
        'ngayDiDuKienCSLT',
        'ngayDiThucTeCSLT',
        'ngayKhaiBao'
    ];
}
