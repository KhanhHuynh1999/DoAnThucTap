<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Hash;
//use app\Http\Request;
session_start();

class QuanLyTaiKhoanController extends Controller
{
    public function QuanLyTaiKhoan()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachTaiKhoan = DB::table('tbl_quanlytaikhoan')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlytaikhoan.idNhanVienKeToan')
        ->orderby('tbl_quanlytaikhoan.idTaiKhoan','asc')->get();
        return view('Pages.QuanLyTaiKhoan', compact('DanhSachTaiKhoan','hinhdaidien'));
    }

    public function AddTaiKhoan()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $MucNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        return view('Pages.page-handling.QuanLyTaiKhoan.AddTaiKhoan', compact('MucNhanVienKeToan','hinhdaidien'));
    }

    public function EditTaiKhoan($idTaiKhoan)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
        $EditQuanLyTaiKhoan = DB::table('tbl_quanlytaikhoan')->where('idTaiKhoan', $idTaiKhoan)->get();
        return view('Pages.page-handling.QuanLyTaiKhoan.EditTaiKhoan', compact('EditQuanLyTaiKhoan','DanhSachNhanVienKeToan','hinhdaidien'));
    }
    
    public function PrintTaiKhoan()
    {
        return view('Pages.page-handling.QuanLyTaiKhoan.printTaiKhoan');
    }

    public function Add(Request $request)
    {
        $data = array();
        $data['TenDangNhap'] = $request->TenDangNhap;
        $data['MatKhau'] = Hash::make($request->MatKhau);
        $data['Email'] = $request->Email;
        $data['Quyen'] = $request->Quyen;
        $data['idNhanVienKeToan'] = $request->HoVaTenNV;
        $get_HinhAnh = $request->file('HinhAnh');

        DB::table('tbl_quanlytaikhoan')->insert($data);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
        $DanhSachTaiKhoan = DB::table('tbl_quanlytaikhoan')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlytaikhoan.idNhanVienKeToan')
        ->orderby('tbl_quanlytaikhoan.idNhanVienKeToan','asc')->get();
        Session::put('message','Thêm Tài Khoản Thành Công!');
        return view('Pages.QuanLyTaiKhoan', compact('DanhSachTaiKhoan','hinhdaidien'));
        
        
    }

    public function Edit(Request $request, $idTaiKhoan)
    {
        $data = array();
        $data['TenDangNhap'] = $request->TenDangNhap;
        $data['MatKhau'] = Hash::make($request->MatKhau);
        $data['Email'] = $request->Email;
        $data['Quyen'] = $request->Quyen;
        $data['idNhanVienKeToan'] = $request->HoVaTenNV;
        
        DB::table('tbl_quanlytaikhoan')->where('idTaiKhoan',$idTaiKhoan)->update($data);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
        $DanhSachTaiKhoan = DB::table('tbl_quanlytaikhoan')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlytaikhoan.idNhanVienKeToan')
        ->orderby('tbl_quanlytaikhoan.idNhanVienKeToan','asc')->get();
        Session::put('message','Lưu Tài Khoản Thành Công!');
        return view('Pages.QuanLyTaiKhoan', compact('DanhSachTaiKhoan','hinhdaidien'));
        
    }

    public function Delete(Request $request,$idTaiKhoan)
    {
        DB::table('tbl_quanlytaikhoan')->where('idTaiKhoan',$idTaiKhoan)->delete();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
        $DanhSachTaiKhoan = DB::table('tbl_quanlytaikhoan')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlytaikhoan.idNhanVienKeToan')
        ->orderby('tbl_quanlytaikhoan.idNhanVienKeToan','asc')->get();
        Session::put('message','Xóa Tài Khoản này Thành Công!');
        return view('Pages.QuanLyTaiKhoan', compact('DanhSachTaiKhoan','hinhdaidien'));
        
    }
}
