<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baohanh extends Model
{
    protected $table = "baohanh";
    public $timestamps = false;
    public $primaryKey = 'MaBH';
    public $incrementing = false;

    public function sanpham(){
    	return $this->hasMany('App\sanpham','MaBH','MaBH');
    }
}

