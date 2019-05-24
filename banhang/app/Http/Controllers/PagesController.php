<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thuonghieu;

class PagesController extends Controller
{
    //
    function trangchu(){
    	$thuonghieu = thuonghieu::all();
    	return view('pages.trangchu',['thuonghieu'=>$thuonghieu]);
    }
}
