<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class quanHuyen extends Model
{
    protected $table = 'quanhuyen';
    protected $fillable = [
        'tenQuanHuyen',
        'maTinhThanh'
    ];
}
