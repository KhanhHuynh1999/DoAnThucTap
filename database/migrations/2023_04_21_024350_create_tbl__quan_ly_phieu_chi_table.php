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
        Schema::create('tbl_QuanLyPhieuChi', function (Blueprint $table) {
            $table->id('idPhieuChi');
            $table->string('KyHieu');
            $table->integer('So');
            $table->Date('NgayThangNam');
            $table->string('HinhThucThanhToan');
            $table->integer('MST');
            $table->string('HinhAnhChi');
            $table->string('DonViTinh');
            $table->integer('SoLuong');
            $table->decimal('DonGia', 18, 2);
            $table->decimal('TongThanhTien', 18, 2);
            $table->boolean('XacNhanThanhToan');
            $table->integer('idNhaCungCap');
            $table->integer('idThongTinCongTy');
            $table->integer('idNhanVienKeToan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_QuanLyPhieuChi');
    }
};
