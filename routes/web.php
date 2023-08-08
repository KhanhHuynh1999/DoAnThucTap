<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuanLyThongTinKhachHangController;
use App\Http\Controllers\QuanLyNhaCungCapController;
use App\Http\Controllers\QuanLyTaiKhoanController;
use App\Http\Controllers\QuanLyNhanVienKeToanController;
use App\Http\Controllers\QuanLyPhieuChiController;
use App\Http\Controllers\QuanLyPhieuThuController;
use App\Http\Controllers\QuanLyHoaDonDienTuController;
use App\Http\Controllers\QuanLyNhatKyChungController;
use App\Http\Controllers\QuanLyThongTinCongTyController;
use App\Http\Controllers\QuanLyThongTinCaNhanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Đăng Nhập
Route::get('/', [HomeController::class, 'Login'])->name('Home.Login');
Route::get('/Logout', [HomeController::class, 'Logout'])->name('Login');

Route::prefix('Home')->group(function() {

        //Vào trang chủ Home
        Route::GET('/', [HomeController::class, 'index'])->name('Home.index');
        Route::GET('/', [HomeController::class, 'TaiKhoan_list']);
        Route::POST('/', [HomeController::class, 'showindex'])->name('Home.index');
        //Nhật Ký Chung
        Route::GET('/quan-ly-nhat-ky-chung',  [QuanLyNhatKyChungController::class, 'QuanLyNhatKyChung']);
        Route::GET('/quan-ly-nhat-ky-chung/search-times-nhat-ky-chung',  [QuanLyNhatKyChungController::class, 'Search_Times']);

        //Xem Thông Tin Cá Nhân
        Route::GET('/quan-ly-thong-tin-ca-nhan',  [QuanLyThongTinCaNhanController::class, 'QuanLyThongTinCaNhan']);


        //Tranh Danh Cho Admin
        Route::prefix('Admin')->group(function(){
    
            //Quản Lý Tài Khoản
            Route::GET('/quan-ly-tai-khoan',  [QuanLyTaiKhoanController::class, 'QuanLyTaiKhoan']);
            Route::GET('/quan-ly-tai-khoan/add-tai-khoan',  [QuanLyTaiKhoanController::class, 'AddTaiKhoan']);
            Route::POST('/quan-ly-tai-khoan',  [QuanLyTaiKhoanController::class, 'Add']);
            Route::GET('/quan-ly-tai-khoan/edit-tai-khoan/{idTaiKhoan}',  [QuanLyTaiKhoanController::class, 'EditTaiKhoan']);
            Route::POST('/quan-ly-tai-khoan/edit-tai-khoan/{idTaiKhoan}',  [QuanLyTaiKhoanController::class, 'Edit']);
            Route::GET('/quan-ly-tai-khoan/delete-tai-khoan/{idTaiKhoan}',  [QuanLyTaiKhoanController::class, 'Delete']);
            

            //Quản Lý Nhân Viên Kế Toán
            Route::GET('/quan-ly-nhan-vien-ke-toan',  [QuanLyNhanVienKeToanController::class, 'QuanLyNhanVienKeToan']);
            Route::POST('/quan-ly-nhan-vien-ke-toan/add-nhan-vien-ke-toan',  [QuanLyNhanVienKeToanController::class, 'Add']);
            Route::GET('/quan-ly-nhan-vien-ke-toan/edit-nhan-vien-ke-toan/{idNhanVienKeToan}',  [QuanLyNhanVienKeToanController::class, 'EditNhanVienKeToan']);
            Route::POST('/quan-ly-nhan-vien-ke-toan/edit-nhan-vien-ke-toan/{idNhanVIenKeToan}',  [QuanLyNhanVienKeToanController::class, 'Edit']);
            Route::GET('/quan-ly-nhan-vien-ke-toan/delete-nhan-vien-ke-toan/{idNhanVienKeToan}',  [QuanLyNhanVienKeToanController::class, 'Delete']);
            
        });
    
        //Trang Danh Cho Người Dùng
        Route::prefix('User')->group(function () {
        
            //Trang Quản Lý Phiếu Chi
            Route::GET('/quan-ly-phieu-chi',  [QuanLyPhieuChiController::class, 'QuanLyPhieuChi']);
            Route::POST('/quan-ly-phieu-chi',  [QuanLyPhieuChiController::class, 'Add']);
            Route::GET('/quan-ly-phieu-chi/edit-phieu-chi/{idPhieuChi}',  [QuanLyPhieuChiController::class, 'EditPhieuChi']);
            Route::POST('/quan-ly-phieu-chi/edit-phieu-chi/{idPhieuChi}',  [QuanLyPhieuChiController::class, 'Edit']);
            Route::GET('/quan-ly-phieu-chi/delete-phieu-chi/{idPhieuChi}',  [QuanLyPhieuChiController::class, 'Delete']);
            Route::GET('/Already-quan-ly-phieu-chi/{idPhieuChi}',  [QuanLyPhieuChiController::class, 'Already']);
            Route::GET('/Unalready-quan-ly-phieu-chi/{idPhieuChi}',  [QuanLyPhieuChiController::class, 'Unalready']);
            Route::GET('/quan-ly-phieu-chi/Search-times-phieu-chi',  [QuanLyPhieuChiController::class, 'Search_Times']);
            Route::GET('/quan-ly-phieu-chi/print-phieu-chi/{idPhieuChi}',  [QuanLyPhieuChiController::class, 'PrintPhieuChi']);
    
            //Trang Quản Lý Phiếu Thu
            Route::GET('/quan-ly-phieu-thu',  [QuanLyPhieuThuController::class, 'QuanLyPhieuThu']);
            Route::POST('/quan-ly-phieu-thu',  [QuanLyPhieuThuController::class, 'Add']);
            Route::GET('/quan-ly-phieu-thu/edit-phieu-thu/{idPhieuThu}',  [QuanLyPhieuThuController::class, 'EditPhieuThu']);
            Route::POST('/quan-ly-phieu-thu/edit-phieu-thu/{idPhieuThu}',  [QuanLyPhieuThuController::class, 'Edit']);
            Route::GET('/quan-ly-phieu-thu/delete-phieu-thu/{idPhieuThu}',  [QuanLyPhieuThuController::class, 'Delete']);
            Route::GET('/Already-quan-ly-phieu-thu/{idPhieuThu}',  [QuanLyPhieuThuController::class, 'Already']);
            Route::GET('/Unalready-quan-ly-phieu-thu/{idPhieuThu}',  [QuanLyPhieuThuController::class, 'Unalready']);
            Route::GET('/quan-ly-phieu-thu/search_times-phieu-thu',  [QuanLyPhieuThuController::class, 'Search_Times']);
            Route::GET('/quan-ly-phieu-thu/print-phieu-thu/{idPhieuThu}',  [QuanLyPhieuThuController::class, 'PrintPhieuThu']);

            //Trang Quản Lý Hoa Đơn Điện Tử
            Route::GET('/quan-ly-hoa-don-dien-tu',  [QuanLyHoaDonDienTuController::class, 'HoaDonDienTu']);
            Route::POST('/quan-ly-hoa-don-dien-tu',  [QuanLyHoaDonDienTuController::class, 'Add']);
            Route::GET('/quan-ly-hoa-don-dien-tu/edit-hoa-don-dien-tu/{idTHoaDonDienTu}',  [QuanLyHoaDonDienTuController::class, 'EditHoaDonDienTu']);
            Route::POST('/quan-ly-hoa-don-dien-tu/edit-hoa-don-dien-tu/{idHoaDonDienTu}',  [QuanLyHoaDonDienTuController::class, 'Edit']);
            Route::GET('/quan-ly-hoa-don-dien-tu/delete-hoa-don-dien-tu/{idHoaDonDienTu}',  [QuanLyHoaDonDienTuController::class, 'Delete']);
            Route::GET('/Already-quan-ly-hoa-don-dien-tu/{idHoaDonDienTu}',  [QuanLyHoaDonDienTuController::class, 'Already']);
            Route::GET('/Unalready-quan-ly-hoa-don-dien-tu/{idHoaDonDienTu}',  [QuanLyHoaDonDienTuController::class, 'Unalready']);
            Route::GET('/quan-ly-hoa-don-dien-tu/Search-times-hoa-don-dien-tu',  [QuanLyHoaDonDienTuController::class, 'Search_Times']);
            Route::GET('/quan-ly-hoa-don-dien-tu/print-hoa-don-dien-tu/{idHoaDonDienTu}',  [QuanLyHoaDonDienTuController::class, 'PrintHoaDonDienTu']);
            
            //Thông tin tài khoản phiếu
            Route::GET('/quan-ly-thong-tin-khach-hang',  [QuanLyThongTinKhachHangController::class, 'QuanLyThongTinKhachHang']);
            Route::GET('/quan-ly-thong-tin-khach-hang/add-thong-tin-khach-hang',  [QuanLyThongTinKhachHangController::class, 'AddThongTinKhachHang']);
            Route::POST('/quan-ly-thong-tin-khach-hang',  [QuanLyThongTinKhachHangController::class, 'Add']);
            Route::GET('/quan-ly-thong-tin-khach-hang/edit-thong-tin-khach-hang/{idKhachHang}',  [QuanLyThongTinKhachHangController::class, 'EditThongTinKhachHang']);
            Route::POST('/quan-ly-thong-tin-khach-hang/edit-thong-tin-khach-hang/{idKhachHang}',  [QuanLyThongTinKhachHangController::class, 'Edit']);
            Route::GET('/quan-ly-thong-tin-khach-hang/delete-thong-tin-khach-hang/{idKhachHang}',  [QuanLyThongTinKhachHangController::class, 'Delete']);
            
            //Thông tin Nhà Cung Cấp
            Route::GET('/quan-ly-thong-tin-nha-cung-cap', [QuanLyNhaCungCapController::class, 'QuanLyNhaCungCap']);
            Route::GET('/quan-ly-thong-tin-nha-cung-cap/add-thong-tin-nha-cung-cap', [QuanLyNhaCungCapController::class, 'AddQuanLyNhaCungCap']);
            Route::POST('/quan-ly-thong-tin-nha-cung-cap', [QuanLyNhaCungCapController::class, 'Add']);
            Route::GET('/quan-ly-thong-tin-nha-cung-cap/edit-thong-tin-nha-cung-cap/{idNhaCungCap}', [QuanLyNhaCungCapController::class, 'EditThongTinNhaCungCap']);
            Route::POST('/quan-ly-thong-tin-nha-cung-cap/edit-thong-tin-nha-cung-cap/{idNhaCungCap}', [QuanLyNhaCungCapController::class, 'Edit']);
            Route::GET('/quan-ly-thong-tin-nha-cung-cap/delete-thong-tin-nha-cung-cap/{idNhaCungCap}', [QuanLyNhaCungCapController::class, 'Delete']);
    
            //Thông Tin Công Ty
            Route::GET('/quan-ly-thong-tin-cong-ty',  [QuanLyThongTinCongTyController::class, 'QuanLyThongTinCongTy']);
            Route::GET('/quan-ly-thong-tin-cong-ty/Add-thong-tin-cong-ty',  [QuanLyThongTinCongTyController::class, 'AddThongTinCongTy']);
            Route::POST('/quan-ly-thong-tin-cong-ty',  [QuanLyThongTinCongTyController::class, 'Add']);
            Route::GET('/quan-ly-thong-tin-cong-ty/Edit-thong-tin-cong-ty/{idThongTinCongTy}',  [QuanLyThongTinCongTyController::class, 'EditThongTinCongTy']);
            Route::POST('/quan-ly-thong-tin-cong-ty/Edit-thong-tin-cong-ty/{idThongTinCongTy}',  [QuanLyThongTinCongTyController::class, 'Edit']);
            Route::GET('/quan-ly-thong-tin-cong-ty/Delete-thong-tin-cong-ty/{idThongTinCongTy}',  [QuanLyThongTinCongTyController::class, 'Delete']);
    
    });
    
});





