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
        Schema::create('tbl_QuanLyKhachHang', function (Blueprint $table) {
            $table->id('idKhachHang');
            $table->string('DonViKH');
            $table->integer('MaSoThueKH');
            $table->integer('SoTaiKhoanKH');
            $table->integer('SDT');
            $table->string('DiaChiKH');
            $table->string('NguoiLienHeKH');
            $table->string('Email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_QuanLyKhachHang');
    }
};
