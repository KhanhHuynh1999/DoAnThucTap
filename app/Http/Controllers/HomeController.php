<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
session_start();

class HomeController extends Controller
{

    public function Login(){
        
        return view('Login');
    }

    public function Logout(){
        
        Session::put('TenDangNhap');
        Session::put('MatKhau');
        return view('Login');
    }

    public function index($idNhanVienKeToan){
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        return view('Pages.Home',compact('hinhdaidien'));
    }

    public function TaiKhoan_list()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        Session::put('idTaiKhoan', 'TenDangNhap','MatKhau','Email','Quyen','HinhAnh','idNguoiDung');
        return view('Pages.Home', compact('hinhdaidien'));
    }

    public function Showindex(Request $request){
        $TenDangNhap = $request -> TenDangNhap;
        $MatKhau = $request -> MatKhau;
        
        
        $result = DB::table('tbl_quanlytaikhoan')->where('TenDangNhap', $TenDangNhap)->first();
        if($result)
        {
            
            Session::put('TenDangNhap', $result->TenDangNhap);
            Session::put('idNhanVienKeToan', $result->idNhanVienKeToan);
            $thongtincanhan = Session::get('idNhanVienKeToan');
            $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
            Hash::check($MatKhau, $result->MatKhau);
            $q = DB::table('tbl_quanlytaikhoan')->select('*')->where('TenDangNhap', $TenDangNhap)->first();
            Session::put('quyen', $q->Quyen);
            return view('Pages.Home', compact('hinhdaidien'));
        }
        else
        {
            Session::put('message','Tài Khoản Hoặc Mật Khẩu của bạn bị sai! Vui Lòng Nhập Lại!');
            return view('Login');
        }
    }

    //return redirect(route('Home.add')); //xử lý nhập giữ lại trang đang đứng

}
