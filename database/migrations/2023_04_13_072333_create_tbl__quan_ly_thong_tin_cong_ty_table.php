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
        Schema::create('tbl_QuanLyThongTinCongTy', function (Blueprint $table) {
            $table->id('idThongTinCongTy');
            $table->string('NguoiLienHeCongTy');
            $table->string('DonViCongTy');
            $table->integer('SDT');
            $table->string('DiaChiCongTy');
            $table->string('Email');
            $table->integer('SoTaiKhoan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_QuanLyThongTinCongTy');
    }
};
