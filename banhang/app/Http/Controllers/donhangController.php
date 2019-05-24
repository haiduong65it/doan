<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\donhang;
use App\nhanvien;

class donhangController extends Controller
{
    
    function getDanhsach(){
        $donhang = donhang::all();
        return view('admin.donhang.danhsach',['donhang'=>$donhang]);
    }

    public function getSua($MaDH){
      $donhang = donhang::find($MaDH);
      $nhanvien = nhanvien::where('chucvu','Giao hang');
      return view('admin/donhang/sua',['donhang'=>$donhang,'nhanvien'=>$nhanvien]);
    }

    public function postSua(Request $request, $MaDH){
      $donhang = donhang::find($MaDH);
      $this->validate($request,
        [
          'InputIDNV' => 'required',
        ],
        [
          'InputIDNV.required' => "Chưa chọn nhân viên",
        ]);

      $donhang->IDNV = $request->InputIDNV;

      $donhang->save();

      return redirect('admin/donhang/sua/'.$MaDH)->with('thongbao',"Đã duyệt thành công");
      
    }

    function getXoa($IDNV){
      $donhang = donhang::find($IDNV);
      $donhang->delete();

      return redirect('admin/donhang/danhsach')->with('thongbao',"Đã xóa thành công");
    }

}

