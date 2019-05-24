<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\tinh;
use App\huyen;
use App\xa;

class AjaxController extends Controller
{
    
  function getqh($id_tinh){
    $huyen = huyen::where('id_tinh',$id_tinh)->get();
    foreach($huyen as $h){
      echo "<option value='".$h->id_huyen."'>".$h->kieu.' '.$h->ten."</option>";  
    }
  }

  function getpx($id_huyen){
    $xa = xa::where('id_huyen',$id_huyen)->get();
    foreach($xa as $x){
      echo "<option value='".$x->id_xa."'>".$x->kieu.' '.$x->ten."</option>";  
    }
  }

}

