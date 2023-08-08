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
        Schema::create('tbl_QuanLyTaikhoan', function (Blueprint $table) {
            $table->id('idTaiKhoan');
            $table->string('TenDangNhap');
            $table->string('MatKhau');
            $table->string('Email');
            $table->boolean('Quyen');
            $table->Integer('idNhanVienKeToan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_QuanLyTaikhoan');
    }
};
