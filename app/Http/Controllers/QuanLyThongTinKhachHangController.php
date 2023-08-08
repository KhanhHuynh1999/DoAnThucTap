<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class QuanLyThongTinKhachHangController extends Controller
{
    public function QuanLyThongTinKhachHang()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->get();
        return view('Pages.QuanLyThongTinKhachHang', compact('DanhSachKhachHang','hinhdaidien'));
    }

    public function AddThongTinKhachHang()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        return view('Pages.page-handling.QuanLyThongTinKhachHang.AddThongTinKhachHang', compact('hinhdaidien'));
    }

    public function EditThongTinKhachHang($idKhachHang)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $EditThongTinKhachHang = DB::table('tbl_quanlykhachhang')->where('idKhachHang', $idKhachHang)->get();
        return view('Pages.page-handling.QuanLyThongTinKhachHang.EditThongTinKhachHang', compact('EditThongTinKhachHang','hinhdaidien'));
    }

    public function Add(Request $request)
    {
        $data = array();
        $data['DonViKH'] = $request->DonViKH;
        $data['MaSoThueKH'] = $request->MaSoThueKH;
        $data['SoTaiKhoanKH'] = $request->SoTaiKhoanKH;
        $data['SDT'] = $request->SDT;
        $data['DiaChiKH'] = $request->DiaChiKH;
        $data['NguoiLienHeKH'] = $request->NguoiLienHeKH;
        $data['Email'] = $request->Email;

        DB::table('tbl_quanlykhachhang')->insert($data);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->get();
        Session::put('message','Thêm Thông Tin Tài Khoản Phiếu Thành Công!');
        return view('Pages.QuanLyThongTinKhachHang', compact('DanhSachKhachHang','hinhdaidien'));
    }

    public function Edit(Request $request, $idKhachHang)
    {
        $data = array();
        $data['DonViKH'] = $request->DonViKH;
        $data['MaSoThueKH'] = $request->MaSoThueKH;
        $data['SoTaiKhoanKH'] = $request->SoTaiKhoanKH;
        $data['SDT'] = $request->SDT;
        $data['DiaChiKH'] = $request->DiaChiKH;
        $data['NguoiLienHeKH'] = $request->NguoiLienHeKH;
        $data['Email'] = $request->Email;

        DB::table('tbl_quanlykhachhang')->where('idKhachHang',$idKhachHang)->update($data);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->get();
        Session::put('message','Lưu Thông Tin Khách Hàng Thành Công!');
        return view('Pages.QuanLyThongTinKhachHang', compact('DanhSachKhachHang','hinhdaidien'));
    }

    public function Delete(Request $request, $idKhachHang)
    {
        DB::table('tbl_quanlykhachhang')->where('idKhachHang',$idKhachHang)->delete();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->get();
        Session::put('message','Xóa Thông Tin Khách Hàng Này Thành Công!');
        return view('Pages.QuanLyThongTinKhachHang', compact('DanhSachKhachHang','hinhdaidien'));
    }
}
