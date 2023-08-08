<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_QuanLyHoaDonDienTu', function (Blueprint $table) {
            $table->id('idHoaDonDienTu');
            $table->string('KyHieu');
            $table->integer('So');
            $table->Date('NgayLap');
            $table->string('TenDonVi');
            $table->string('DiaChi');
            $table->string('MaSoThueDienTu');
            $table->integer('SoHopDong');
            $table->Date('KyCuoc');
            $table->string('HinhThucThanhToan');
            $table->string('DienGiai');
            $table->integer('SoLuong');
            $table->integer('TienDichVu');
            $table->integer('ThueSuat');
            $table->decimal('TienThue', 18, 2);
            $table->decimal('Cong', 18, 2);
            $table->boolean('XacNhanThanhToan');
            $table->string('HinhAnhDienTu');
            $table->integer('idThongTinCongTy');
            $table->integer('idKhachHang');
            $table->integer('idNhanVienKeToan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_QuanLyHoaDonDienTu');
    }
};
