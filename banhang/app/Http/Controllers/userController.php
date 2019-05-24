<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    
    function getDanhsach(){
        $user = User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }
    
    function getThem(){
      return view('admin.user.them');
    }

    function postThem(Request $request){
      $this->validate($request,
        [
          'InputName' => 'required|min:5',
          'InputMail' => 'required|email|unique:User,email',
          'InputPassword' => 'required|min:5',
          'PasswordAgain' => 'required|same:InputPassword'
        ],
        [
          'InputPassword.required' => "Chưa nhập mật khẩu",
          'InputPassword.min' => "Mật khẩu phải có ít nhất 5 kí tự",
          'InputName.required' => "Chưa nhập tên User",
          'InputName.min' => "Tên User phải có ít nhất 5 kí tự",
          'InputMail.required' => "Chưa nhập email",
          'InputMail.email' => "Chưa nhập đúng định dạng email",
          'InputMail.unique' => "email đã tồn tại",
          'PasswordAgain.required' => "Chưa nhập lại mật khẩu",
          'PasswordAgain.same' => "Mật khẩu nhập lại chưa khớp",
        ]);

      $user = new User;
      $user->name = $request->InputName;
      $user->email = $request->InputMail;
      $user->password = bcrypt($request->InputPassword);
      $user->quyen = $request->quyen;

      $user->save();

      return redirect('admin/user/them')->with('thongbao','Thêm User thành công');

    }

    public function getSua($id){
      $user = User::find($id);
      return view('admin/user/sua',['user'=>$user]);
    }

    public function postSua(Request $request, $id){
      $user = User::find($id);
      $this->validate($request,
        [
          'InputName' => 'required|min:5',
        ],
        [
          'InputName.required' => "Chưa nhập tên User",
          'InputName.min' => "Tên User phải có ít nhất 5 kí tự",
        ]);

      $user = User::find($id);
      $user->name = $request->InputName;
      $user->quyen = $request->quyen;
      if($request->changePass == "on"){
        $this->validate($request,
        [
          'InputPassword' => 'required|min:5',
          'PasswordAgain' => 'required|same:InputPassword'
        ],
        [
          'InputPassword.required' => "Chưa nhập mật khẩu",
          'InputPassword.min' => "Mật khẩu phải có ít nhất 5 kí tự",
          'PasswordAgain.required' => "Chưa nhập lại mật khẩu",
          'PasswordAgain.same' => "Mật khẩu nhập lại chưa khớp",
        ]);
        $user->password = bcrypt($request->InputPassword);
      }

      $user->save();

      return redirect('admin/user/sua/'.$id)->with('thongbao',"Sửa thành công");
      
    }

    function getXoa($id){
      $user = User::find($id);
      $user->delete();

      return redirect('admin/user/danhsach')->with('thongbao',"Đã xóa thành công");
    }

    public function getLoginAdmin(){
      return view('admin/login');
    }

    public function postLoginAdmin(Request $request) {
      $this->validate($request,[
        'Email' => "Required",
        'password' => 'Required|min:8'
      ],
      [
        'Email.required' => 'Chưa nhập Email',
        'password.required' => 'Chưa nhập password',
        'password.min' => 'password chứa ít nhất 8 kí tự',
      ]);
      if (Auth::attempt(['email' => $request->Email, 'password' => $request->password])) {
        return redirect('index');
      } else {
        return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
      }
    }

    public function getLogoutAdmin(){
      Auth::logout();
      return redirect('admin/dangnhap');
    }

}

