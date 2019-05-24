<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thanhvien extends Model
{
    protected $table = "thanhvien";
    public $timestamps = false;
    public $primaryKey = 'idtv';
    public $incrementing = false;

    public function donhang(){
    	return $this->hasMany('App\donhang','idtv','idtv');
    }
}
