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
        Schema::create('tbl_QuanLyNhaCungCap', function (Blueprint $table) {
            $table->id('idNhaCungCap');
            $table->string('DonViNCC');
            $table->integer('MaSoThueNCC');
            $table->integer('SoTaiKhoanNCC');
            $table->integer('SDT');
            $table->string('DiaChiNCC');
            $table->string('NguoiLienHeNCC');
            $table->string('Email');
            $table->string('Loai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_QuanLyNhaCungCap');
    }
};
