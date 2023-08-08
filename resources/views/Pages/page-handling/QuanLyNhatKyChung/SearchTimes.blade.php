@extends('Pages.Home')
@section('container')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Nhật Ký Chung
    </div>
    <?php

      $message = Session()->get('message');
      if($message){
        echo '<span class="text-alert">' .$message.'</span>';
        Session()->put('message',null);
      }
    ?>
    <table class="table table-bordered b-t b-light ">
        
        <thead style="background:#AA0000">
          <tr>
            <th style="width:20px;"></th>
            <th style="color: #ffffff">Tổng Phiếu Chi</th>
            <th style="color: #ffffff">Tổng Phiếu Thu</th>
            <th style="color: #ffffff">Tổng Hóa Đơn Diện Tử</th>
            <th style="color: #ffffff">Tổng Tiền Chi</th>
            <th style="color: #ffffff">Tổng Tiền Thu</th>
            <th style="color: #ffffff">Tổng Tiền Hóa Đơn Điện Tử</th>
            <th style="color: #ffffff">Tình Hình Hoạt Động Kinh Doanh</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td><b>{{$TongPhieuChi}}</b></td>
            <td><b>{{$TongPhieuThu}}</b></td>
            <td><b>{{$TongHoaDonDienTu}}</b></td>
            <td><b>{{number_format($DanhSachPhieuChi->sum('TongThanhTien'))}}</b></td>
            <td><b>{{number_format($DanhSachPhieuThu->sum('TongCongThanhTien'))}}</b></td>
            <td><b>{{number_format($DanhSachHoaDonDienTu->sum('Cong'))}}</b></td>
            <td><b>{{number_format($DanhSachPhieuThu->sum('TongCongThanhTien') - $DanhSachPhieuChi->sum('TongThanhTien'))}}</b></td>
          </tr>
        </tbody>
      </table>
    <div class="row w3-res-tb">
      <form action="{{URL::to('Home/quan-ly-nhat-ky-chung/search-times-nhat-ky-chung')}}" method="GET">
        <div class="col-sm-1">Từ Ngày:</div>
          <div class="col-sm-2">
            <input type="date" class="input-sm form-control" name="TuNgay" required>
          </div>
        <div class="col-sm-1">Đến Ngày:</div>
          <div class="col-sm-2">
            <input type="date" class="input-sm form-control" name="DenNgay" required>
        </div>
        <div class="row-sm-3">
          <button class="btn btn-sm btn-primary" value="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </div>
    
    </form>
<div class="table-responsive">
<table class="table table-striped">
  <thead class="thead-dark" style=" background:#333399">
    <tr>
      <th scope="col" style="color: #ffffff">#</th>
      <th scope="col" style="color: #ffffff">Ngày Tháng Năm</th>
      <th scope="col" style="color: #ffffff">Tên Hàng Hóa Dịch Vụ</th>
      <th scope="col" style="color: #ffffff">Đơn Vị Tính</th>
      <th scope="col" style="color: #ffffff">Số Lượng</th>
      <th scope="col" style="color: #ffffff">Đơn Giá</th>
      <th scope="col" style="color: #ffffff">Tổng Thành Tiền</th>
      <th scope="col" style="color: #ffffff">Họ Và Tên Nhân Viên</th>
      <th scope="col" style="color: #ffffff">Hình Ảnh</th>
    </tr>
  </thead>
 
  <tbody>
    @foreach ($data as $key => $item)
    <tr>
      <th scope="row">{{$item->idPhieuChi}}</th>
        <td>{{$item->NgayThangNam}}</td>
        <td>{{$item->Loai}}</td>
        <td>{{$item->DonViTinh}}</td>
        <td>{{$item->SoLuong}}</td>
        <td>{{$item->DonGia}}</td>
        <td>{{$item->TongThanhTien}}</td>
        <td>{{$item->HoVaTenNV}}</td>
        <td><img src="{{asset('public/uploads/')}}/{{$item->HinhAnhChi}}"height="100"width="100"></td>
        
    </tr>
    @endforeach
  </tbody>
</table>

<table class="table table-striped">
  <thead class="thead-light" style="background:#333399">
    <tr>
      <th scope="col" style="color: #ffffff">#</th>
      <th scope="col" style="color: #ffffff">Ngày Tháng Năm</th>
      <th scope="col" style="color: #ffffff">Tên Hàng Hóa Dịch Vụ</th>
      <th scope="col" style="color: #ffffff">Đơn Vị Tính</th>
      <th scope="col" style="color: #ffffff">Số Lượng</th>
      <th scope="col" style="color: #ffffff">Đơn Giá</th>
      <th scope="col" style="color: #ffffff">Thuế Suất</th>
      <th scope="col" style="color: #ffffff">Thành Tiền</th>
      <th scope="col" style="color: #ffffff">Thuế GTGT</th>
      <th scope="col" style="color: #ffffff">Tổng Thành Tiền</th>
      <th scope="col" style="color: #ffffff">Họ Và Tên Nhân Viên</th>
      <th scope="col" style="color: #ffffff">Hình Ảnh</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data1 as $key => $item)
        
    <tr>
      <th scope="row">{{$item->idPhieuThu}}</th>
        <td>{{$item->NgayThangNam}}</td>
        <td>{{$item->TenHangHoaDichVu}}</td>
        <td>{{$item->DonViTinh}}</td>
        <td>{{$item->SoLuong}}</td>
        <td>{{$item->DonGia}}</td>
        <td>{{$item->ThueSuat}}</td>
        <td>{{$item->ThanhTien}}</td>
        <td>{{$item->ThueGTGT}}</td>
        <td>{{$item->TongCongThanhTien}}</td>
        <td>{{$item->HoVaTenNV}}</td>
        <td><img src="{{asset('public/uploads/')}}/{{$item->HinhAnhThu}}"height="100"width="100"></td>
        
    </tr>
    @endforeach
  </tbody>
</table>
<table class="table table-striped">
  <thead class="thead-light" style=" background:#333399">
    <tr>
      <th scope="col" style="color: #ffffff">#</th>
      <th scope="col" style="color: #ffffff">Ngày Lập</th>
      <th scope="col" style="color: #ffffff">Diễn Giải</th>
      <th scope="col" style="color: #ffffff">Số Lướng</th>
      <th scope="col" style="color: #ffffff">Tiền Dịch Vụ</th>
      <th scope="col" style="color: #ffffff">Thuế Suất</th>
      <th scope="col" style="color: #ffffff">Tiền Thuế</th>
      <th scope="col" style="color: #ffffff">Tổng Tiền Cộng</th>
      <th scope="col" style="color: #ffffff">Họ Và Tên Nhân Viên</th>
      <th scope="col" style="color: #ffffff">Hình Ảnh</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data2 as $key => $item)

    <tr>
      <th scope="row">{{$item->idHoaDonDienTu}}</th>
        <td>{{$item->NgayLap}}</td>
        <td>{{$item->DienGiai}}</td>
        <td>{{$item->SoLuong}}</td>
        <td>{{$item->TienDichVu}}</td>
        <td>{{$item->ThueSuat}}</td>
        <td>{{$item->TienThue}}</td>
        <td>{{$item->Cong}}</td>
        <td>{{$item->HoVaTenNV}}</td>
        <td><img src="{{asset('public/uploads/')}}/{{$item->HinhAnhDienTu}}" height="100"width="100" alt=""></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">
          
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection