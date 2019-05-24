<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tinh extends Model
{
    protected $table = "tinh";
    public $timestamps = false;
    public $primaryKey = 'id_tinh';
    public $incrementing = false;
    
}