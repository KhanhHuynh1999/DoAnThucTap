<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class QuanLyPhieuThuController extends Controller
{
    public function QuanLyPhieuThu()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuthu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyphieuthu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuthu.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuthu.idPhieuThu','desc')->get();
        return view('Pages.QuanLyPhieuThu', compact('DanhSachPhieuThu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function EditPhieuThu($idPhieuThu)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $EditPhieuThu = DB::table('tbl_quanlyphieuthu')->where('idPhieuThu', $idPhieuThu)->get();
        return view('Pages.page-handling.QuanLyPhieuThu.EditPhieuThu', compact('EditPhieuThu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function PrintPhieuThu($idPhieuThu)
    {
        $hoadon = DB::table('tbl_quanlyphieuthu')->where('idPhieuThu', $idPhieuThu)->first();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->where('idKhachHang', $hoadon->idKhachHang)->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->where('idThongTinCongTy', $hoadon->idThongTinCongTy)->orderby('idThongTinCongTy','asc')->get();
        $ThongTinPhieuThu = DB::table('tbl_quanlyphieuthu')->where('idPhieuThu', $hoadon->idPhieuThu)->orderby('idPhieuThu','asc')->get();
        $kyhieu = $hoadon->KyHieu;
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuthu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyphieuthu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuthu.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuthu.idPhieuThu','desc')->where('tbl_quanlyphieuthu.KyHieu',$kyhieu)->get();
        return view('Pages.page-handling.QuanLyPhieuThu.PrintPhieuThu', compact('ThongTinPhieuThu','DanhSachPhieuThu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function Already($idPhieuThu)
    {
        DB::table('tbl_quanlyphieuthu')->where('idPhieuThu', $idPhieuThu)->update(['XacNhanThanhToan'=>1]);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuthu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyphieuthu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuthu.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuthu.idPhieuThu','asc')->get();
        return view('Pages.QuanLyPhieuThu', compact('DanhSachPhieuThu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function Unalready($idPhieuThu)
    {
        DB::table('tbl_quanlyphieuthu')->where('idPhieuThu', $idPhieuThu)->update(['XacNhanThanhToan'=>0]);
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuthu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyphieuthu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuthu.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuthu.idPhieuThu','asc')->get();
        return view('Pages.QuanLyPhieuThu', compact('DanhSachPhieuThu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function Add(Request $request)
    {
        $TenHangHoaDichVu = $request->TenHangHoaDichVu;
        $DonViTinh = $request->DonViTinh;
        $SoLuong = $request->SoLuong;
        $DonGia = $request->DonGia;
        $ThanhTien = $request->ThanhTien;
        $ThueSuat = $request->ThueSuat;
        $ThueGTGT = $request->ThueGTGT;
        $TongCongThanhTien = $request->TongCongThanhTien;
        $get_HinhAnh = $request->file('HinhAnhThu');
        if($get_HinhAnh)
        {
            $get_name_HinhAnh = $get_HinhAnh->getClientOriginalName();
            $name_HinhAnh = current(explode('.',$get_name_HinhAnh));
            $new_HinhAnh = $name_HinhAnh.rand(0,99).'.'.$get_HinhAnh->getClientOriginalExtension();
            $get_HinhAnh->move('public/uploads/',$new_HinhAnh);
        }
        foreach($TenHangHoaDichVu as $key => $value)
        {
            $data = array();
            $data['KyHieu'] = $request->KyHieu;
            $data['So'] = $request->So;
            $data['NgayThangNam'] = $request->NgayThangNam;
            $data['HinhThucThanhToan'] = $request->HinhThucThanhToan;
            $data['MST'] = $request->MST;
            $data['HinhAnhThu'] = $request->HinhAnhThu;
            $data['TenHangHoaDichVu'] = $value;
            $data['DonViTinh'] = $DonViTinh[$key];
            $data['SoLuong'] = $SoLuong[$key];
            $data['DonGia'] = $DonGia[$key];
            $data['ThanhTien'] = $ThanhTien[$key];
            $data['ThueSuat'] = $ThueSuat[$key];
            $data['ThueGTGT'] = $ThueGTGT[$key];
            $data['TongCongThanhTien'] = $TongCongThanhTien[$key];
            $data['XacNhanThanhToan'] = $request->XacNhanThanhToan;
            $data['idNhanVienKeToan'] = $request->HoVaTenNV;
            $data['idKhachHang'] = $request->DonViKH;
            $data['idKhachHang'] = $request->NguoiLienHeKH;
            $data['idKhachHang'] = $request->SoTaiKhoanKH;
            $data['idKhachHang'] = $request->MaSoThueKH;
            $data['idKhachHang'] = $request->DiaChiKH;
            $data['idThongTinCongTy'] = $request->DonViCongTy;
            $data['idThongTinCongTy'] = $request->DiaChiCongTy;
            $data['idThongTinCongTy'] = $request->NguoiLenHeCongTy;
            $data['idThongTinCongTy'] = $request->SoTaiKhoanCongTy;

         
            if(isset($new_HinhAnh))
                $data['HinhAnhThu'] = $new_HinhAnh;
            else
                $data['HinhAnhThu'] = '';
            DB::table('tbl_quanlyphieuthu')->insert($data);
            
        }
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuthu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyphieuthu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuthu.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuthu.idPhieuThu','asc')->get();
        Session::put('message','Thêm Phiếu Thu Thành Công!');
        return view('Pages.QuanLyPhieuThu', compact('DanhSachPhieuThu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function Edit(Request $request, $idPhieuThu)
    {
        $TenHangHoaDichVu = $request->TenHangHoaDichVu;
        $DonViTinh = $request->DonViTinh;
        $SoLuong = $request->SoLuong;
        $DonGia = $request->DonGia;
        $ThanhTien = $request->ThanhTien;
        $ThueSuat = $request->ThueSuat;
        $ThueGTGT = $request->ThueGTGT;
        $TongCongThanhTien = $request->TongCongThanhTien;
        $get_HinhAnh = $request->file('HinhAnhThu');
        if($get_HinhAnh)
        {
            $get_name_HinhAnh = $get_HinhAnh->getClientOriginalName();
            $name_HinhAnh = current(explode('.',$get_name_HinhAnh));
            $new_HinhAnh = $name_HinhAnh.rand(0,99).'.'.$get_HinhAnh->getClientOriginalExtension();
            $get_HinhAnh->move('public/uploads/',$new_HinhAnh);
        }
        foreach($TenHangHoaDichVu as $key => $value)
        {
            $data = array();
            $data['KyHieu'] = $request->KyHieu;
            $data['So'] = $request->So;
            $data['NgayThangNam'] = $request->NgayThangNam;
            $data['HinhThucThanhToan'] = $request->HinhThucThanhToan;
            $data['MST'] = $request->MST;
            $data['HinhAnhThu'] = $request->HinhAnhThu;
            $data['TenHangHoaDichVu'] = $value;
            $data['DonViTinh'] = $DonViTinh[$key];
            $data['SoLuong'] = $SoLuong[$key];
            $data['DonGia'] = $DonGia[$key];
            $data['ThanhTien'] = $ThanhTien[$key];
            $data['ThueSuat'] = $ThueSuat[$key];
            $data['ThueGTGT'] = $ThueGTGT[$key];
            $data['TongCongThanhTien'] = $TongCongThanhTien[$key];
            $data['XacNhanThanhToan'] = $request->XacNhanThanhToan;
            $data['idNhanVienKeToan'] = $request->HoVaTenNV;
            $data['idKhachHang'] = $request->DonViKH;
            $data['idKhachHang'] = $request->NguoiLienHeKH;
            $data['idKhachHang'] = $request->SoTaiKhoanKH;
            $data['idKhachHang'] = $request->MaSoThueKH;
            $data['idKhachHang'] = $request->DiaChiKH;
            $data['idThongTinCongTy'] = $request->DonViCongTy;
            $data['idThongTinCongTy'] = $request->DiaChiCongTy;
            $data['idThongTinCongTy'] = $request->NguoiLenHeCongTy;
            $data['idThongTinCongTy'] = $request->SoTaiKhoanCongTy;

            if(isset($new_HinhAnh))
                $data['HinhAnhThu'] = $new_HinhAnh;
            else
                $data['HinhAnhThu'] = '';
            DB::table('tbl_quanlyphieuthu')->where('idPhieuThu',$idPhieuThu)->update($data);
            
        }
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuthu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyphieuthu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuthu.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuthu.idPhieuThu','asc')->get();
        Session::put('message','Lưu Phiếu Thu Thành Công!');
        return view('Pages.QuanLyPhieuThu', compact('DanhSachPhieuThu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }
    
    public function Delete(Request $request,$idPhieuThu)
    {
        DB::table('tbl_quanlyphieuthu')->where('idPhieuThu',$idPhieuThu)->delete();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuthu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyphieuthu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuthu.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuthu.idPhieuThu','asc')->get();
        Session::put('message','Xóa Phiếu Thu Thành Công!');
        return view('Pages.QuanLyPhieuThu', compact('DanhSachPhieuThu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }

    public function Search_Times(Request $request)
    {
        $data = DB::table('tbl_quanlyphieuthu')
        ->select('tbl_quanlyphieuthu.*','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->whereBetween('tbl_quanlyphieuthu.NgayThangNam',[$request->TuNgay,$request->DenNgay])
        ->get();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachKhachHang = DB::table('tbl_quanlykhachhang')->orderby('idKhachHang','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuthu')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->join('tbl_quanlykhachhang','tbl_quanlykhachhang.idKhachHang','=','tbl_quanlyphieuthu.idKhachHang')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuthu.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuthu.idPhieuThu','asc')->get();
        return view('Pages.page-handling.QuanLyPhieuThu.Search_Times_PhieuThu', compact('data','DanhSachPhieuThu','DanhSachNhanVienKeToan','DanhSachKhachHang','DanhSachCongTy','hinhdaidien'));
    }
}
