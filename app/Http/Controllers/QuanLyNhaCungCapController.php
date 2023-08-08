<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();


class QuanLyNhaCungCapController extends Controller
{
    public function QuanLyNhaCungCap()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->get();
        return view('Pages.QuanLyThongTinNhaCungCap', compact('DanhSachNhaCungCap','hinhdaidien'));
    }
    
    public function AddQuanLyNhaCungCap()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        return view('Pages.page-handling.QuanLyThongTinNhaCungCap.AddThongtinNhaCungCap',compact('hinhdaidien'));
    }

    public function EditThongTinNhaCungCap($idNhaCungCap)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $EditThongTinNhaCungCap = DB::table('tbl_quanlynhacungcap')->where('idNhaCungCap', $idNhaCungCap)->get();
        return view('Pages.page-handling.QuanLyThongTinNhaCungCap.EditThongTinNhaCungCap', compact('EditThongTinNhaCungCap','hinhdaidien'));
    }

    public function Add(Request $request)
    {
        $data = array();
        $data['DonViNCC'] = $request->DonViNCC;
        $data['MaSoThueNCC'] = $request->MaSoThueNCC;
        $data['SoTaiKhoanNCC'] = $request->SoTaiKhoanNCC;
        $data['SDT'] = $request->SDT;
        $data['DiaChiNCC'] = $request->DiaChiNCC;
        $data['NguoiLienHeNCC'] = $request->NguoiLienHeNCC;
        $data['Email'] = $request->Email;
        $data['Loai'] = $request->Loai;

        DB::table('tbl_quanlynhacungcap')->insert($data);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->get();
        Session::put('message','Thêm Thông Tin Nhà Cung Cấp Thành Công!');
        return view('Pages.QuanLyThongTinNhaCungCap', compact('DanhSachNhaCungCap','hinhdaidien'));
    }

    public function Edit(Request $request, $idNhaCungCap)
    {
        $data = array();
        $data['DonViNCC'] = $request->DonViNCC;
        $data['MaSoThueNCC'] = $request->MaSoThueNCC;
        $data['SoTaiKhoanNCC'] = $request->SoTaiKhoanNCC;
        $data['SDT'] = $request->SDT;
        $data['DiaChiNCC'] = $request->DiaChiNCC;
        $data['NguoiLienHeNCC'] = $request->NguoiLienHeNCC;
        $data['Email'] = $request->Email;
        $data['Loai'] = $request->Loai;

        DB::table('tbl_quanlynhacungcap')->where('idNhaCungCap', $idNhaCungCap)->update($data);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->get();
        Session::put('message','Thêm Thông Tin Nhà Cung Cấp Thành Công!');
        return view('Pages.QuanLyThongTinNhaCungCap', compact('DanhSachNhaCungCap','hinhdaidien'));
    }

    public function Delete(Request $request, $idNhaCungCap)
    {
        DB::table('tbl_quanlynhacungcap')->where('idNhaCungCap',$idNhaCungCap)->delete();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->get();
        Session::put('message','Xóa Thông Tin Nhà Cung Cấp Này Thành Công!');
        return view('Pages.QuanLyThongTinNhaCungCap', compact('DanhSachNhaCungCap','hinhdaidien'));
    }
}
