<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;

class sanphamController extends Controller
{

    function getDanhsach(){
        $sanpham = sanpham::all();
        return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }

    function getThem(){
      return view('admin.sanpham.them');
    }

    function postThem(Request $request){
      $this->validate($request,
        [
          'MaSP' => 'unique:sanpham,MaSP|required|max:50',
          'tensp' => 'required',
        ],
        [
          'InputID.unique' => "Mã Thương Hiệu này đã tồn tại",
          'InputID.required' => "Chưa nhập Mã Thương Hiệu",
          'InputID.max' => "ID nhân viên chứa tối đa 5 kí tự",
          'InputName.required' => "Chưa nhập tên nhân viên",
        ]);

      $thuonghieu = new thuonghieu;
      $thuonghieu->MaTH = $request->InputID;
      $thuonghieu->TenTH = $request->InputName;

      $thuonghieu->save();

      return redirect('admin/thuonghieu/them')->with('thongbao','Thêm thương hiệu thành công');

    }

    public function getSua($MaTH){
      $thuonghieu = thuonghieu::find($MaTH);
      return view('admin/thuonghieu/sua',['thuonghieu'=>$thuonghieu]);
    }

    public function postSua(Request $request, $MaTH){
      $thuonghieu = thuonghieu::find($MaTH);
      $this->validate($request,
        [
          'InputName' => 'required',
        ],
        [
          'InputName.required' => "Chưa nhập tên thương hiệu",
        ]);

      $thuonghieu->TenTH = $request->InputName;

      $nhanvien->save();

      return redirect('admin/thuonghieu/sua/'.$MaTH)->with('thongbao',"Sửa thành công");
      
    }

    function getXoa($MaTH){
      $thuonghieu = thuonghieu::find($MaTH);
      $thuonghieu->delete();

      return redirect('admin/thuonghieu/danhsach')->with('thongbao',"Đã xóa thành công");
    }
}
