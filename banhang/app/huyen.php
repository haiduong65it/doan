<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class huyen extends Model
{
    protected $table = "huyen";
    public $timestamps = false;
    public $primaryKey = 'id_huyen';
    public $incrementing = false;

}