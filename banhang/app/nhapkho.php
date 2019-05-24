<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhapkho extends Model
{
    protected $table = "nhapkho";
    public $timestamps = false;
    public $primaryKey = 'mank';
    public $incrementing = false;
}
