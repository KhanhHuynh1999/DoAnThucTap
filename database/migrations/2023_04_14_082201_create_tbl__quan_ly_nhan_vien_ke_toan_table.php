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
        Schema::create('tbl_QuanLyNhanVienKeToan', function (Blueprint $table) {
            $table->id('idNhanVienKeToan');
            $table->string('HoVaTenNV');
            $table->string('DiaChi');
            $table->integer('SDT');
            $table->date('NamSinh');
            $table->string('BangCap');
            $table->integer('CMND');
            $table->integer('SoLaoDong');
            $table->string('QuocTich');
            $table->date('ThoiGianKiHopDong');
            $table->date('ThoiGianKetThucHopDong');
            $table->string('LoaiHopDong');
            $table->date('ThoiGianThuViec');
            $table->date('ThoiGianKetThucThuViec');
            $table->string('HinhAnh');
            $table->string('CongViecPhaiLam');
            $table->string('GhiChu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_QuanLyNhanVienKeToan');
    }
};
