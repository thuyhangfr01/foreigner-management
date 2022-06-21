<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class chuNoiCuTru extends Model
{
    protected $table = 'chunoicutru';
    protected $fillable = [
        'maCSLT',
        'maCanBo',
        'tenCSLT',
        'tenDaiDien',
        'gioiTinh',
        'ngaySinh',
        'CCCD',
        'soDienThoai',
        'email',
        'maPhuongXa',
        'diaChi',
        'tenFileGiayTo',
        'tenTaiKhoan',
        'matKhau',
        'trangThaiTaiKhoan',
        'trangThaiDuyet',
        'ngayDuyet'
    ];
}
