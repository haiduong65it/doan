<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thuonghieu extends Model
{
    protected $table = "thuonghieu";
    public $timestamps = false;
    public $primaryKey = 'MaTH';
    public $incrementing = false;

    public function sanpham(){
    	return $this->hasMany('App\sanpham','MaTH','MaTH');
    }

}
