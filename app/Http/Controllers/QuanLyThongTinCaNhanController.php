<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
//use app\Http\Request;
session_start();

class QuanLyThongTinCaNhanController extends Controller
{
    public function QuanLyThongTinCaNhan()
    {
        $thongtincanhan = Session::get('idNhanVienKeToan');
        $canhan = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $canhan1 = DB::table('tbl_quanlytaikhoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        $hinhdaidien = DB::table('tbl_quanlynhanvienketoan')->where('idNhanVienKeToan', $thongtincanhan)->first();
        return view('Pages.QuanLyThongTinCaNhan', compact('canhan','canhan1','hinhdaidien'));
    }
}