<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class khaiBaoNhapCanh extends Model
{
    protected $table = 'khaibaonhapcanh';
    protected $fillable = [
        'maHoChieu',
        'maCanBo',
        'ngayDen',
        'ngayDiDuKien',
        'ngayDiThucTe',
        'trangThaiDuyet',
        'ngayDuyet',
        'maVisa',
        'ngayCap',
        'ngayHetHan',
        'noiCap'
    ];
}
