<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class canBoQuanLy extends Model
{
    protected $table = 'canboquanly';
    protected $fillable = [
        'maPhuongXa',
        'diaChi',
        'hoTen',
        'ngaySinh',
        'gioiTinh',
        'soDienThoai',
        'email',
        'CCCD',
        'tenTaiKhoan',
        'matKhau',
        'trangThaiTaiKhoan'
    ];
}
