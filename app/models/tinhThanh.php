<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tinhThanh extends Model
{
    protected $table = 'tinhthanh';
    protected $fillable = [
        'tenTinhThanh',
        'loaiTinhThanh',
        'slug'
    ];
}
