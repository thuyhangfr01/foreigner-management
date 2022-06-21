<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class nguoiNuocNgoai extends Model
{
    protected $table = 'nguoinuocngoai';
    protected $fillable = [
        'maCanBo',
        'maQuocTich',
        'hoTen',
        'ngaySinh',
        'gioiTinh',
        'soDienThoai',
        'email',
        'diaChi',
        'tenTaiKhoan',
        'matKhau',
        'trangThaiTaiKhoan',
        'trangThaiDuyet',
        'ngayDuyet'
    ];
}
