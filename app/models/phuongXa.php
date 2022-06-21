<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class phuongXa extends Model
{
    protected $table = 'phuongxa';
    protected $fillable = [
        'tenPhuongXa',
        'loaiPhuongXa',
        'maQuanHuyen'
    ];
}
