<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();


class QuanLyThongTinCongTyController extends Controller
{
    public function QuanLyThongTinCongTy()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->get();
        return view('Pages.QuanLyThongTinCongTy', compact('DanhSachCongTy','hinhdaidien'));
    }

    public function AddThongTinCongTy()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        return view('Pages.page-handling.QuanLyThongTinCongTY.AddThongTinCongTy', compact('hinhdaidien'));
    }

    public function EditThongTinCongTy($idThongTinCongTy)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $EditThongTinCongTy = DB::table('tbl_quanlythongtincongty')->where('idThongTinCongTy', $idThongTinCongTy)->get();
        return view('Pages.page-handling.QuanLyThongTinCongTy.EditThongTinCongTy', compact('EditThongTinCongTy','hinhdaidien'));
    }

    public function Add(Request $request)
    {
        $data = array();
        $data['NguoiLienHeCongTy'] = $request->NguoiLienHeCongTy;
        $data['DonViCongTy'] = $request->DonViCongTy;
        $data['SDT'] = $request->SDT;
        $data['DiaChiCongTy'] = $request->DiaChiCongTy;
        $data['Email'] = $request->Email;
        $data['SoTaiKhoan'] = $request->SoTaiKhoan;

        DB::table('tbl_quanlythongtincongty')->insert($data);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->get();
        Session::put('message','Thêm Công Ty Thành Công!');
        return view('Pages.QuanLyThongTinCongTy', compact('DanhSachCongTy','hinhdaidien'));
    }

    public function Edit(Request $request, $idThongTinCongTy)
    {
        $data = array();
        $data['NguoiLienHeCongTy'] = $request->NguoiLienHeCongTy;
        $data['DonViCongTy'] = $request->DonViCongTy;
        $data['SDT'] = $request->SDT;
        $data['DiaChiCongTy'] = $request->DiaChiCongTy;
        $data['Email'] = $request->Email;
        $data['SoTaiKhoan'] = $request->SoTaiKhoan;

        DB::table('tbl_quanlythongtincongty')->where('idThongTinCongTy',$idThongTinCongTy)->update($data);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->get();
        Session::put('message','Lưu Công Ty Thành Công!');
        return view('Pages.QuanLyThongTinCongTy', compact('DanhSachCongTy','hinhdaidien'));
    }

    public function Delete($idThongTinCongTy)
    {
        DB::table('tbl_quanlythongtincongty')->where('idThongTinCongTy',$idThongTinCongTy)->delete();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->get();
        Session::put('message','Xóa Tài Khoản Thành Công!');
        return view('Pages.QuanLyThongTinCongTy', compact('DanhSachCongTy','hinhdaidien'));
    }
}
