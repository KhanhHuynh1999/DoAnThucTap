<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class QuanLyNhanVienKeToanController extends Controller
{
    public function QuanLyNhanVienKeToan()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
        return view('Pages.QuanLyNhanVienKeToan', compact('DanhSachNhanVienKeToan','hinhdaidien'));
    }

    public function EditNhanVienKeToan($idNhanVienKeToan)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $EditNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $idNhanVienKeToan)->get();
        return view('Pages.page-handling.QuanLyNhanVienKeToan.EditNhanVienKeToan', compact('EditNhanVienKeToan','hinhdaidien'));
    }

    public function Add(Request $request)
    {
        $data = array();
        $data['HoVaTenNV'] = $request->HoVaTenNV;
        $data['DiaChi'] = $request->DiaChi;
        $data['SDT'] = $request->SDT;
        $data['NamSinh'] = $request->NamSinh;
        $data['BangCap'] = $request->BangCap;
        $data['CMND'] = $request->CMND;
        $data['SoLaoDong'] = $request->SoLaoDong;
        $data['QuocTich'] = $request->QuocTich;
        $data['ThoiGianKiHopDong'] = $request->ThoiGianKiHopDong;
        $data['ThoiGianKetThucHopDong'] = $request->ThoiGianKetThucHopDong;
        $data['LoaiHopDong'] = $request->LoaiHopDong;
        $data['ThoiGianThuViec'] = $request->ThoiGianThuViec;
        $data['ThoiGianKetThucThuViec'] = $request->ThoiGianKetThucThuViec;
        $data['HinhAnh'] = $request->HinhAnh;
        $data['CongViecPhaiLam'] = $request->CongViecPhaiLam;
        $data['GhiChu'] = $request->GhiChu;
        $get_HinhAnh = $request->file('HinhAnh');

        if($get_HinhAnh)
        {
            $get_name_HinhAnh = $get_HinhAnh->getClientOriginalName();
            $name_HinhAnh = current(explode('.',$get_name_HinhAnh));
            $new_HinhAnh = $name_HinhAnh.rand(0,99).'.'.$get_HinhAnh->getClientOriginalExtension();
            $get_HinhAnh->move('public/uploads/account/',$new_HinhAnh);
            $data['HinhAnh'] = $new_HinhAnh;
            DB::table('tbl_quanlynhanvienketoan')->insert($data);
            Session::put('message','Thêm Nhân Viên Kế Toán Thành Công!');
            $thongtincanhan = Session::get('idNhanVienKeToan');
            $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
            $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
            return view('Pages.QuanLyNhanVienKeToan', compact('DanhSachNhanVienKeToan','hinhdaidien'));
        }
        $data['HinhAnh'] = '';
        DB::table('tbl_quanlynhanvienketoan')->insert($data);
        Session::put('message','Thêm Nhân Viên Kế Toán Thành Công!');
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
        return view('Pages.QuanLyNhanVienKeToan', compact('DanhSachNhanVienKeToan','hinhdaidien'));
    
    }

    public function Edit(Request $request, $idNhanVienKeToan)
    {
        $data = array();
        $data['HoVaTenNV'] = $request->HoVaTenNV;
        $data['DiaChi'] = $request->DiaChi;
        $data['SDT'] = $request->SDT;
        $data['NamSinh'] = $request->NamSinh;
        $data['BangCap'] = $request->BangCap;
        $data['CMND'] = $request->CMND;
        $data['SoLaoDong'] = $request->SoLaoDong;
        $data['QuocTich'] = $request->QuocTich;
        $data['ThoiGianKiHopDong'] = $request->ThoiGianKiHopDong;
        $data['ThoiGianKetThucHopDong'] = $request->ThoiGianKetThucHopDong;
        $data['LoaiHopDong'] = $request->LoaiHopDong;
        $data['ThoiGianThuViec'] = $request->ThoiGianThuViec;
        $data['ThoiGianKetThucThuViec'] = $request->ThoiGianKetThucThuViec;
        $data['HinhAnh'] = $request->HinhAnh;
        $data['CongViecPhaiLam'] = $request->CongViecPhaiLam;
        $data['GhiChu'] = $request->GhiChu;
        $get_HinhAnh = $request->file('HinhAnh');
        
        if($get_HinhAnh)
        {
            $get_name_HinhAnh = $get_HinhAnh->getClientOriginalName();
            $name_HinhAnh = current(explode('.',$get_name_HinhAnh));
            $new_HinhAnh = $name_HinhAnh.rand(0,99).'.'.$get_HinhAnh->getClientOriginalExtension();
            $get_HinhAnh->move('public/uploads/account/',$new_HinhAnh);
            $data['HinhAnh'] = $new_HinhAnh;
            $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
            $thongtincanhan = Session::get('idNhanVienKeToan');
            $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
            DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan',$idNhanVienKeToan)->update($data);
            Session::put('message','Lưu Nhân Viên Kế Toán Thành Công!');
            return view('Pages.QuanLyNhanVienKeToan', compact('DanhSachNhanVienKeToan','hinhdaidien'));
            
        }
        $data['HinhAnh'] = '';
        DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan',$idNhanVienKeToan)->update($data);
        Session::put('message','Lưu Nhân Viên Kế Toán Thành Công!');
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
        return view('Pages.QuanLyNhanVienKeToan', compact('DanhSachNhanVienKeToan','hinhdaidien'));
    }

    public function Delete(Request $request,$idNhanVienKeToan)
    {
        DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan',$idNhanVienKeToan)->delete();
        Session::put('message','Xóa Nhân Viên Kế Toán Thành Công!');
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->get();
        return view('Pages.QuanLyNhanVienKeToan', compact('DanhSachNhanVienKeToan','hinhdaidien'));
    }
}
