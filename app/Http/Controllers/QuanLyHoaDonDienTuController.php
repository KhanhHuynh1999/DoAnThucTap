<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class QuanLyHoaDonDienTuController extends Controller
{
    public function HoaDonDienTu()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyhoadondientu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyhoadondientu.idThongTinCongTy')
        ->orderby('tbl_quanlyhoadondientu.idHoaDonDienTu','asc')->get();
        return view('Pages.QuanLyHoaDonDienTu', compact('DanhSachHoaDonDienTu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function EditHoaDonDienTu($idHoaDonDienTu)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $EditHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')->where('idHoaDonDienTu', $idHoaDonDienTu)->get();
        return view('Pages.page-handling.QuanLyHoaDonDienTu.EditHoaDonDienTu', compact('EditHoaDonDienTu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function Already($idHoaDonDienTu)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        DB::table('tbl_quanlyhoadondientu')->where('idHoaDonDienTu', $idHoaDonDienTu)->update(['XacNhanThanhToan'=>1]);
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyhoadondientu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyhoadondientu.idThongTinCongTy')
        ->orderby('tbl_quanlyhoadondientu.idHoaDonDienTu','asc')->get();
        return view('Pages.QuanLyHoaDonDienTu', compact('DanhSachHoaDonDienTu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));

    }

    public function Unalready($idHoaDonDienTu)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        DB::table('tbl_quanlyhoadondientu')->where('idHoaDonDienTu', $idHoaDonDienTu)->update(['XacNhanThanhToan'=>0]);
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyhoadondientu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyhoadondientu.idThongTinCongTy')
        ->orderby('tbl_quanlyhoadondientu.idHoaDonDienTu','asc')->get();
        return view('Pages.QuanLyHoaDonDienTu', compact('DanhSachHoaDonDienTu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function PrintHoaDonDienTu($idHoaDonDienTu)
    {
        $hoadon = DB::table('tbl_quanlyhoadondientu')->where('idHoaDonDienTu', $idHoaDonDienTu)->first();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->where('idKhachHang', $hoadon->idKhachHang)->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->where('idThongTinCongTy', $hoadon->idThongTinCongTy)->orderby('idThongTinCongTy','asc')->get();
        $DanhSachDienTu = DB::table('tbl_quanlyhoadondientu')->where('idHoaDonDienTu', $hoadon->idHoaDonDienTu)->orderby('idHoaDonDienTu','asc')->get();
        $kyhieu = $hoadon->KyHieu;
        $DanhSachHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyhoadondientu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyhoadondientu.idThongTinCongTy')
        ->orderby('tbl_quanlyhoadondientu.idHoaDonDienTu','asc')->where('tbl_quanlyhoadondientu.KyHieu',$kyhieu)->get();
        return view('Pages.page-handling.QuanLyHoaDonDienTu.PrintHoaDonDienTu', compact('DanhSachDienTu','DanhSachHoaDonDienTu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function Add(Request $request)
    {
        $DienGiai = $request->DienGiai;
        $SoLuong = $request->SoLuong;
        $TienDichVu = $request->TienDichVu;
        $ThueSuat = $request->ThueSuat;
        $TienThue = $request->TienThue;
        $Cong = $request->Cong;
        $get_HinhAnh = $request->file('HinhAnhDienTu');
        if($get_HinhAnh)
        {
            $get_name_HinhAnh = $get_HinhAnh->getClientOriginalName();
            $name_HinhAnh = current(explode('.',$get_name_HinhAnh));
            $new_HinhAnh = $name_HinhAnh.rand(0,99).'.'.$get_HinhAnh->getClientOriginalExtension();
            $get_HinhAnh->move('public/uploads/',$new_HinhAnh);
        }
        foreach($DienGiai as $key => $value)
        {
            $data = array();
            $data['KyHieu'] = $request->KyHieu;
            $data['So'] = $request->So;
            $data['NgayLap'] = $request->NgayLap;
            $data['TenDonVi'] = $request->TenDonVi;
            $data['DiaChi'] = $request->DiaChi;
            $data['MaSoThueDienTu'] = $request->MaSoThueDienTu;
            $data['SoHopDong'] = $request->SoHopDong;
            $data['KyCuoc'] = $request->KyCuoc;
            $data['HinhThucThanhToan'] = $request->HinhThucThanhToan;
            $data['DienGiai'] = $value;
            $data['SoLuong'] = $SoLuong[$key];
            $data['TienDichVu'] = $TienDichVu[$key];
            $data['ThueSuat'] = $ThueSuat[$key];
            $data['TienThue'] = $TienThue[$key];
            $data['Cong'] = $Cong[$key];
            $data['XacNhanThanhToan'] = $request->XacNhanThanhToan;
            $data['HinhAnhDienTu'] = $request->HinhAnhDienTu;
            $data['idNhanVienKeToan'] = $request->HoVaTenNV;
            $data['idKhachHang'] = $request->DonViCongTy;
            $data['idKhachHang'] = $request->DiaChiCongTy;
            $data['idKhachHang'] = $request->NguoiLenHeCongTy;
            $data['idKhachHang'] = $request->SoTaiKhoanCongTy;
            $data['idThongTinCongTy'] = $request->DonViKH;
            $data['idThongTinCongTy'] = $request->DiaChiKH;
            $data['idThongTinCongTy'] = $request->NguoiLienHeKH;
            $data['idThongTinCongTy'] = $request->SoTaiKhoanKH;
            $data['idThongTinCongTy'] = $request->MaSoThueKH;
            if(isset($new_HinhAnh))
                $data['HinhAnhDienTu'] = $new_HinhAnh;
            else
                $data['HinhAnhDienTu'] = '';
            DB::table('tbl_quanlyhoadondientu')->insert($data);
        }
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyhoadondientu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyhoadondientu.idThongTinCongTy')
        ->orderby('tbl_quanlyhoadondientu.idHoaDonDienTu','asc')->get();
        Session::put('message','Thêm Hóa Đơn Điện Tử Thành Công!');
        return view('Pages.QuanLyHoaDonDienTu', compact('DanhSachHoaDonDienTu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function Edit(Request $request, $idHoaDonDienTu)
    {
        $DienGiai = $request->DienGiai;
        $SoLuong = $request->SoLuong;
        $TienDichVu = $request->TienDichVu;
        $ThueSuat = $request->ThueSuat;
        $TienThue = $request->TienThue;
        $Cong = $request->Cong;
        $get_HinhAnh = $request->file('HinhAnhDienTu');
        if($get_HinhAnh)
        {
            $get_name_HinhAnh = $get_HinhAnh->getClientOriginalName();
            $name_HinhAnh = current(explode('.',$get_name_HinhAnh));
            $new_HinhAnh = $name_HinhAnh.rand(0,99).'.'.$get_HinhAnh->getClientOriginalExtension();
            $get_HinhAnh->move('public/uploads/',$new_HinhAnh);
        }
        foreach($DienGiai as $key => $value)
        {
            $data = array();
            $data['KyHieu'] = $request->KyHieu;
            $data['So'] = $request->So;
            $data['NgayLap'] = $request->NgayLap;
            $data['TenDonVi'] = $request->TenDonVi;
            $data['DiaChi'] = $request->DiaChi;
            $data['MaSoThueDienTu'] = $request->MaSoThueDienTu;
            $data['SoHopDong'] = $request->SoHopDong;
            $data['KyCuoc'] = $request->KyCuoc;
            $data['HinhThucThanhToan'] = $request->HinhThucThanhToan;
            $data['DienGiai'] = $value;
            $data['SoLuong'] = $SoLuong[$key];
            $data['TienDichVu'] = $TienDichVu[$key];
            $data['ThueSuat'] = $ThueSuat[$key];
            $data['TienThue'] = $TienThue[$key];
            $data['Cong'] = $Cong[$key];
            $data['XacNhanThanhToan'] = $request->XacNhanThanhToan;
            $data['HinhAnhDienTu'] = $request->HinhAnhDienTu;
            $data['idNhanVienKeToan'] = $request->HoVaTenNV;
            $data['idKhachHang'] = $request->DonViCongTy;
            $data['idKhachHang'] = $request->DiaChiCongTy;
            $data['idKhachHang'] = $request->NguoiLenHeCongTy;
            $data['idKhachHang'] = $request->SoTaiKhoanCongTy;
            $data['idThongTinCongTy'] = $request->DonViKH;
            $data['idThongTinCongTy'] = $request->DiaChiKH;
            $data['idThongTinCongTy'] = $request->NguoiLienHeKH;
            $data['idThongTinCongTy'] = $request->SoTaiKhoanKH;
            $data['idThongTinCongTy'] = $request->MaSoThueKH;
            if(isset($new_HinhAnh))
                $data['HinhAnhDienTu'] = $new_HinhAnh;
            else
                $data['HinhAnhDienTu'] = '';
            DB::table('tbl_quanlyhoadondientu')->where('idHoaDonDienTu',$idHoaDonDienTu)->update($data);
        }
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyhoadondientu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyhoadondientu.idThongTinCongTy')
        ->orderby('tbl_quanlyhoadondientu.idHoaDonDienTu','asc')->get();
        Session::put('message','Lưu Hóa Đơn Điện Tử Thành Công!');
        return view('Pages.QuanLyHoaDonDienTu', compact('DanhSachHoaDonDienTu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }
    
    public function Delete(Request $request,$idHoaDonDienTu)
    {
        DB::table('tbl_quanlyhoadondientu')->where('idHoaDonDienTu', $idHoaDonDienTu)->delete();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachHoaDonDienTu= DB::table('tbl_quanlyhoadondientu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyhoadondientu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyhoadondientu.idThongTinCongTy')
        ->orderby('tbl_quanlyhoadondientu.idHoaDonDienTu','asc')->get();
        Session::put('message','Xóa Hóa Đơn Diện Tử Này Thành Công!');
        return view('Pages.QuanLyHoaDonDienTu', compact('DanhSachHoaDonDienTu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function Search_Times(Request $request)
    {
        $data = DB::table('tbl_quanlyhoadondientu')
        ->select('tbl_quanlyhoadondientu.*','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->whereBetween('tbl_quanlyhoadondientu.NgayLap',[$request->TuNgay,$request->DenNgay])
        ->get();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachHoaDonDienTu= DB::table('tbl_quanlyhoadondientu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyhoadondientu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyhoadondientu.idThongTinCongTy')
        ->orderby('tbl_quanlyhoadondientu.idHoaDonDienTu','asc')->get();
        return view('Pages.page-handling.QuanLyHoaDonDienTu.Search_Times_HoaDonDienTu', compact('data','DanhSachHoaDonDienTu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }
}
