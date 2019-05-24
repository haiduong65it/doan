<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\thanhvien;
use App\tinh;
use App\huyen;
use App\xa;

class thanhvienController extends Controller
{
    function getDanhsach(){
        $thanhvien = thanhvien::all();
        return view('admin.thanhvien.danhsach',['thanhvien'=>$thanhvien]);
    }
    
    function getThem(){
      $tinh = tinh::all();
      $huyen = huyen::all();
      $xa = xa::all();
      return view('admin.thanhvien.them',['tinh'=>$tinh,'huyen'=>$huyen,'xa'=>$xa]);
    }
    function onChange($id_tinh){

    }

    function postThem(Request $request){
      $this->validate($request,
        [
          'InputID' => 'unique:thanhvien,idtv|required|min:5|max:20',
          'InputPassword' => 'required|min:5',
          'InputName' => 'required|min:5',
          'InputTel' => 'required|digits_between:10,10',
          'InputBirth' => 'required|before:today',
          'Inputchucvu' => 'required|max:10',
        ],
        [
          'InputID.unique' => "ID thành viên này đã tồn tại",
          'InputID.required' => "Chưa nhập ID thành viên",
          'InputID.min' => "ID thành viên phải có ít nhất 5 kí tự",
          'InputID.max' => "ID thành viên chứa tối đa 20 kí tự",
          'InputPassword.required' => "Chưa nhập mật khẩu",
          'InputPassword.min' => "Mật khẩu phải có ít nhất 5 kí tự",
          'InputName.required' => "Chưa nhập tên thành viên",
          'InputName.min' => "Tên thành viên phải có ít nhất 5 kí tự",
          'InputTel.required' => "Chưa nhập số điện thoại",
          'InputTel.digits_between' => "Số điện thoại phải có đủ 10 số",
          'InputBirth.required' => "Chưa chọn ngày sinh",
          'InputBirth.before' => "Ngày sinh phải trước ngày hôm nay",
          'Inputchucvu.required' => "Chưa chọn chức vụ",
          'Inputchucvu.max' => "Chức vụ chứa tối đa 10 kí tự",
        ]);

      $nhanvien = new nhanvien;
      $nhanvien->IDNV = $request->InputID;
      $nhanvien->Matkhau = bcrypt($request->InputPassword);
      $nhanvien->hoten = $request->InputName;
      $nhanvien->tel = $request->InputTel;
      $nhanvien->ngaysinh = $request->InputBirth;
      $nhanvien->chucvu = $request->Inputchucvu;

      $nhanvien->save();

      return redirect('admin/nhanvien/them')->with('thongbao','Thêm thành viên thành công');

    }

    public function getSua($IDNV){
      $nhanvien = nhanvien::find($IDNV);
      return view('admin/nhanvien/sua',['nhanvien'=>$nhanvien]);
    }

    public function postSua(Request $request, $IDNV){
      $nhanvien = nhanvien::find($IDNV);
      $this->validate($request,
        [
          'InputPassword' => 'required|min:5',
          'InputName' => 'required|min:5',
          'InputTel' => 'required|digits_between:10,10',
          'InputBirth' => 'required|before:today',
          'Inputchucvu' => 'required',
        ],
        [
          'InputPassword.required' => "Chưa nhập mật khẩu",
          'InputPassword.min' => "Mật khẩu phải có ít nhất 5 kí tự",
          'InputName.required' => "Chưa nhập tên thành viên",
          'InputName.min' => "Tên thành viên phải có ít nhất 5 kí tự",
          'InputTel.required' => "Chưa nhập số điện thoại",
          'InputTel.digits_between' => "Số điện thoại phải có đủ 10 số",
          'InputBirth.required' => "Chưa chọn ngày sinh",
          'InputBirth.before' => "Ngày sinh phải trước ngày hôm nay",
          'Inputchucvu.required' => "Chưa chọn chức vụ",
        ]);

      $nhanvien->Matkhau = bcrypt($request->InputPassword);
      $nhanvien->hoten = $request->InputName;
      $nhanvien->tel = $request->InputTel;
      $nhanvien->ngaysinh = $request->InputBirth;
      $nhanvien->chucvu = $request->Inputchucvu;

      $nhanvien->save();

      return redirect('admin/nhanvien/sua/'.$IDNV)->with('thongbao',"Sửa thành công");
      
    }

    function getXoa($IDNV){
      $nhanvien = nhanvien::find($IDNV);
      $nhanvien->delete();

      return redirect('admin/nhanvien/danhsach')->with('thongbao',"Đã xóa thành công");
    }
}
