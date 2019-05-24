<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    protected $table = "khuyenmai";
    public $timestamps = false;
    public $primaryKey = 'MaKM';
    public $incrementing = false;
}
