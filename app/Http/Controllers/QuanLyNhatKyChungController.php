<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class QuanLyNhatKyChungController extends Controller
{
    public function QuanLyNhatKyChung()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $TongHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')->count();
        $TongPhieuThu = DB::table('tbl_quanlyphieuthu')->count();
        $TongPhieuChi = DB::table('tbl_quanlyphieuchi')->count();
        $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->select('tbl_quanlyphieuchi.*','tbl_quanlynhacungcap.Loai','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->orderby('idPhieuChi','asc')->get();
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuThu')
        ->select('tbl_quanlyphieuthu.*','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->orderby('idPhieuThu','asc')->get();
        $DanhSachHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')
        ->select('tbl_quanlyhoadondientu.*','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->orderby('idHoaDonDienTu','asc')->get();
        
        return view('Pages.QuanLyNhatKyChung', compact('DanhSachPhieuChi','DanhSachPhieuThu','DanhSachHoaDonDienTu','TongPhieuChi','TongPhieuThu','TongHoaDonDienTu','hinhdaidien'));
    }

    public function Search_Times(Request $request)
    {
        $data = DB::table('tbl_quanlyphieuchi')
        ->select('tbl_quanlyphieuchi.*','tbl_quanlynhacungcap.Loai','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->whereBetween('tbl_quanlyphieuchi.NgayThangNam',[$request->TuNgay,$request->DenNgay])
        ->get();
        $data1 = DB::table('tbl_quanlyphieuthu')
        ->select('tbl_quanlyphieuthu.*','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->whereBetween('tbl_quanlyphieuthu.NgayThangNam',[$request->TuNgay,$request->DenNgay])
        ->get();
        $data2 = DB::table('tbl_quanlyhoadondientu')
        ->select('tbl_quanlyhoadondientu.*','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->whereBetween('tbl_quanlyhoadondientu.NgayLap',[$request->TuNgay,$request->DenNgay])
        ->get();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $TongHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')->count();
        $TongPhieuThu = DB::table('tbl_quanlyphieuthu')->count();
        $TongPhieuChi = DB::table('tbl_quanlyphieuchi')->count();
        $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->select('tbl_quanlyphieuchi.*','tbl_quanlynhacungcap.Loai','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->orderby('idPhieuChi','asc')->get();
        $DanhSachPhieuThu = DB::table('tbl_quanlyphieuThu')
        ->select('tbl_quanlyphieuthu.*','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuthu.idNhanVienKeToan')
        ->orderby('idPhieuThu','asc')->get();
        $DanhSachHoaDonDienTu = DB::table('tbl_quanlyhoadondientu')
        ->select('tbl_quanlyhoadondientu.*','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyhoadondientu.idNhanVienKeToan')
        ->orderby('idHoaDonDienTu','asc')->get();
        return view('Pages.page-handling.QuanLyNhatKyChung.SearchTimes', compact('data','data1','data2','DanhSachPhieuChi','DanhSachPhieuThu','DanhSachHoaDonDienTu','TongPhieuChi','TongPhieuThu','TongHoaDonDienTu','hinhdaidien'));
    }
}
