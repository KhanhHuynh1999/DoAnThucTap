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
        Schema::create('tbl_QuanLyPhieuThu', function (Blueprint $table) {
            $table->id('idPhieuThu');
            $table->string('KyHieu');
            $table->integer('So');
            $table->Date('NgayThangNam');
            $table->string('HinhThucThanhToan');
            $table->integer('MST');
            $table->string('HinhAnhThu');
            $table->string('TenHangHoaDichVu');
            $table->string('DonViTinh');
            $table->integer('SoLuong');
            $table->integer('DonGia');
            $table->integer('ThueSuat');
            $table->decimal('ThanhTien', 18, 2);
            $table->decimal('ThueGTGT', 18, 2);
            $table->decimal('TongCongThanhTien', 18, 2);
            $table->boolean('XacNhanThanhToan');
            $table->integer('idNhanVienKeToan');
            $table->integer('idKhachHang');
            $table->integer('idThongTinCongTy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_QuanLyPhieuThu');
    }
};
