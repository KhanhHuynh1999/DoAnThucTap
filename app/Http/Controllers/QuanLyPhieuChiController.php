<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();

class QuanLyPhieuChiController extends Controller
{
    public function QuanLyPhieuChi()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->orderby('idNhaCungCap','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuchi.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuchi.idPhieuChi','desc')->get();
        return view('Pages.QuanLyPhieuChi', compact('DanhSachPhieuChi','DanhSachNhanVienKeToan','DanhSachNhaCungCap','DanhSachCongTy','hinhdaidien'));
    }

    public function EditPhieuChi($idPhieuChi)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->orderby('idNhaCungCap','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $EditPhieuChi = DB::table('tbl_quanlyphieuchi')->where('idPhieuChi', $idPhieuChi)->get();
        return view('Pages.page-handling.QuanLyPhieuChi.EditPhieuChi', compact('EditPhieuChi','DanhSachNhanVienKeToan','DanhSachNhaCungCap','DanhSachCongTy','hinhdaidien'));
    }

    public function Already($idPhieuChi)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        DB::table('tbl_quanlyphieuchi')->where('idPhieuChi', $idPhieuChi)->update(['XacNhanThanhToan'=>1]);
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->orderby('idNhaCungCap','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuchi.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuchi.idPhieuChi','desc')->get();
        return view('Pages.QuanLyPhieuChi', compact('DanhSachPhieuChi','DanhSachNhanVienKeToan','DanhSachNhaCungCap','DanhSachCongTy','hinhdaidien'));
    }

    public function Unalready($idPhieuChi)
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        DB::table('tbl_quanlyphieuchi')->where('idPhieuChi', $idPhieuChi)->update(['XacNhanThanhToan'=>0]);
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->orderby('idNhaCungCap','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuchi.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuchi.idPhieuChi','desc')->get();
        return view('Pages.QuanLyPhieuChi', compact('DanhSachPhieuChi','DanhSachNhanVienKeToan','DanhSachNhaCungCap','DanhSachCongTy','hinhdaidien'));
    }

    public function PrintPhieuChi($idPhieuChi)
    {
        $hoadon = DB::table('tbl_quanlyphieuchi')->where('idPhieuChi', $idPhieuChi)->first();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->where('idNhaCungCap', $hoadon->idNhaCungCap)->orderby('idNhaCungCap','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->where('idThongTinCongTy', $hoadon->idThongTinCongTy)->orderby('idThongTinCongTy','asc')->get();
        $ThongTinPhieuChi = DB::table('tbl_quanlyphieuchi')->where('idPhieuChi', $hoadon->idPhieuChi)->orderby('idPhieuChi','asc')->get();
        $kyhieu = $hoadon->KyHieu;
         $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuchi.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuchi.idPhieuChi','desc')->where('tbl_quanlyphieuchi.KyHieu',$kyhieu)->get();
        return view('Pages.page-handling.QuanLyPhieuChi.PrintPhieuChi', compact('ThongTinPhieuChi','DanhSachPhieuChi','DanhSachNhanVienKeToan','DanhSachNhaCungCap','DanhSachCongTy','hinhdaidien'));
    }

    public function Add(Request $request)
    {
        $Loai = $request->Loai;
        $DonViTinh = $request->DonViTinh;
        $SoLuong = $request->SoLuong;
        $DonGia = $request->DonGia;
        $TongThanhTien = $request->TongThanhTien;
        $get_HinhAnh = $request->file('HinhAnhChi');
        if($get_HinhAnh)
        {
            $get_name_HinhAnh = $get_HinhAnh->getClientOriginalName();
            $name_HinhAnh = current(explode('.',$get_name_HinhAnh));
            $new_HinhAnh = $name_HinhAnh.rand(0,99).'.'.$get_HinhAnh->getClientOriginalExtension();
            $get_HinhAnh->move('public/uploads/',$new_HinhAnh);
        }
        foreach($Loai as $key => $value)
        {
            $data = array();
            $data['KyHieu'] = $request->KyHieu;
            $data['So'] = $request->So;
            $data['NgayThangNam'] = $request->NgayThangNam;
            $data['HinhThucThanhToan'] = $request->HinhThucThanhToan;
            $data['MST'] = $request->MST;
            $data['HinhAnhChi'] = $request->HinhAnhChi;
            $data['DonViTinh'] = $DonViTinh[$key];
            $data['SoLuong'] = $SoLuong[$key];
            $data['DonGia'] = $DonGia[$key];
            $data['TongThanhTien'] = $TongThanhTien[$key];
            $data['XacNhanThanhToan'] = $request->XacNhanThanhToan;
            $data['idNhanVienKeToan'] = $request->HoVaTenNV;
            $data['idNhaCungCap'] = $request->DonViNCC;
            $data['idNhaCungCap'] = $request->NguoiLienHeNCC;
            $data['idNhaCungCap'] = $request->SoTaiKhoanNCC;
            $data['idNhaCungCap'] = $request->MaSoThueNCC;
            $data['idNhaCungCap'] = $request->DiaChiNCC;
            $data['idNhaCungCap'] = $value;
            $data['idThongTinCongTy'] = $request->DonViCongTy;
            $data['idThongTinCongTy'] = $request->DiaChiCongTy;
            $data['idThongTinCongTy'] = $request->NguoiLenHeCongTy;
            $data['idThongTinCongTy'] = $request->SoTaiKhoanCongTy;

            if(isset($new_HinhAnh))
                $data['HinhAnhChi'] = $new_HinhAnh;
            else
                $data['HinhAnhChi'] = '';
            DB::table('tbl_quanlyphieuchi')->insert($data);
        }
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->orderby('idNhaCungCap','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuchi.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuchi.idPhieuChi','desc')->get();
        Session::put('message','Thêm Phiếu Chi Thành Công!');
        return view('Pages.QuanLyPhieuChi', compact('DanhSachPhieuChi','DanhSachNhanVienKeToan','DanhSachNhaCungCap','DanhSachCongTy','hinhdaidien'));
    }

    public function Edit(Request $request, $idPhieuChi)
    {
        $Loai = $request->Loai;
        $DonViTinh = $request->DonViTinh;
        $SoLuong = $request->SoLuong;
        $DonGia = $request->DonGia;
        $TongThanhTien = $request->TongThanhTien;
        $get_HinhAnh = $request->file('HinhAnhChi');
        if($get_HinhAnh)
        {
            $get_name_HinhAnh = $get_HinhAnh->getClientOriginalName();
            $name_HinhAnh = current(explode('.',$get_name_HinhAnh));
            $new_HinhAnh = $name_HinhAnh.rand(0,99).'.'.$get_HinhAnh->getClientOriginalExtension();
            $get_HinhAnh->move('public/uploads/',$new_HinhAnh);
        }
        foreach($Loai as $key => $value)
        {
            $data = array();
            $data['KyHieu'] = $request->KyHieu;
            $data['So'] = $request->So;
            $data['NgayThangNam'] = $request->NgayThangNam;
            $data['HinhThucThanhToan'] = $request->HinhThucThanhToan;
            $data['MST'] = $request->MST;
            $data['HinhAnhChi'] = $request->HinhAnhChi;
            $data['DonViTinh'] = $DonViTinh[$key];
            $data['SoLuong'] = $SoLuong[$key];
            $data['DonGia'] = $DonGia[$key];
            $data['TongThanhTien'] = $TongThanhTien[$key];
            $data['XacNhanThanhToan'] = $request->XacNhanThanhToan;
            $data['idNhanVienKeToan'] = $request->HoVaTenNV;
            $data['idNhaCungCap'] = $request->DonViNCC;
            $data['idNhaCungCap'] = $request->NguoiLienHeNCC;
            $data['idNhaCungCap'] = $request->SoTaiKhoanNCC;
            $data['idNhaCungCap'] = $request->MaSoThueNCC;
            $data['idNhaCungCap'] = $request->DiaChiNCC;
            $data['idNhaCungCap'] = $value;
            $data['idThongTinCongTy'] = $request->DonViCongTy;
            $data['idThongTinCongTy'] = $request->DiaChiCongTy;
            $data['idThongTinCongTy'] = $request->NguoiLenHeCongTy;
            $data['idThongTinCongTy'] = $request->SoTaiKhoanCongTy;

            if(isset($new_HinhAnh))
                $data['HinhAnhChi'] = $new_HinhAnh;
            else
                $data['HinhAnhChi'] = '';
            DB::table('tbl_quanlyphieuchi')->where('idPhieuChi',$idPhieuChi)->update($data);
        }
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->orderby('idNhaCungCap','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuchi.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuchi.idPhieuChi','desc')->get();
        Session::put('message','Lưu Phiếu Chi Thành Công!');
        return view('Pages.QuanLyPhieuChi', compact('DanhSachPhieuChi','DanhSachNhanVienKeToan','DanhSachNhaCungCap','DanhSachCongTy','hinhdaidien'));
    }

    public function Delete(Request $request,$idPhieuChi)
    {
        DB::table('tbl_quanlyphieuchi')->where('idPhieuChi',$idPhieuChi)->delete();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->orderby('idNhaCungCap','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuchi.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuchi.idPhieuChi','desc')->get();
        Session::put('message','Xóa Phiếu Chi Thành Công!');
        return view('Pages.QuanLyPhieuChi', compact('DanhSachPhieuChi','DanhSachNhanVienKeToan','DanhSachNhaCungCap','DanhSachCongTy','hinhdaidien'));
    }

    public function Search_Times(Request $request)
    {
        $data = DB::table('tbl_quanlyphieuchi')
        ->select('tbl_quanlyphieuchi.*','tbl_quanlynhacungcap.Loai','tbl_quanlynhanvienketoan.HoVaTenNV')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->whereBetween('tbl_quanlyphieuchi.NgayThangNam',[$request->TuNgay,$request->DenNgay])
        ->get();
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $DanhSachNhaCungCap = DB::table('tbl_quanlynhacungcap')->orderby('idNhaCungCap','asc')->get();
        $DanhSachNhanVienKeToan = DB::table('tbl_quanlynhanvienketoan')->orderby('idNhanVienKeToan','asc')->get();
        $DanhSachCongTy = DB::table('tbl_quanlythongtincongty')->orderby('idThongTinCongTy','asc')->get();
        $DanhSachPhieuChi = DB::table('tbl_quanlyphieuchi')
        ->join('tbl_quanlynhanvienketoan','tbl_quanlynhanvienketoan.idNhanVienKeToan','=','tbl_quanlyphieuchi.idNhanVienKeToan')
        ->join('tbl_quanlynhacungcap','tbl_quanlynhacungcap.idNhaCungCap','=','tbl_quanlyphieuchi.idNhaCungCap')
        ->join('tbl_quanlythongtincongty','tbl_quanlythongtincongty.idThongTinCongTy','=','tbl_quanlyphieuchi.idThongTinCongTy')
        ->orderby('tbl_quanlyphieuchi.idPhieuChi','desc')->get();
        return view('Pages.page-handling.QuanLyPhieuChi.Search_Times_PhieuChi', compact('data','DanhSachPhieuChi','DanhSachNhanVienKeToan','DanhSachNhaCungCap','DanhSachCongTy','hinhdaidien'));
    }
}
