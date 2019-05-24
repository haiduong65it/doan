<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    protected $table = "donhang";
    public $timestamps = false;
    public $primaryKey = 'MaDH';
    public $incrementing = false;
}
