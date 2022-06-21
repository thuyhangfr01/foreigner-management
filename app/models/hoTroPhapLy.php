<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hoTroPhapLy extends Model
{
    protected $table = 'hotrophaply';
    protected $fillable = [
        'maHoChieu',
        'maCanBo',
        'noiDung',
        'ngayGui'
    ];
}
