<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = "nhanvien";
        public $timestamps = false;
   public $primaryKey = 'IDNV';
    public $incrementing = false;
}
