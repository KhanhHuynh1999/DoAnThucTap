@extends('Pages.Home')
@section('container')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản Lý Khách Hàng
    </div>
    <?php

      $message = Session()->get('message');
      if($message){
        echo '<span class="text-alert">' .$message.'</span>';
        Session()->put('message',null);
      }
    ?>

    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
      <a class="btn btn-success" href="{{URL::to('/Home/User/quan-ly-thong-tin-khach-hang/add-thong-tin-khach-hang')}}" role="button">Thêm</a>              
      </div>
      
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="myTable">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
              </label>
            </th>
            <th>STT</th>
            <th>Đơn Vị Khách Hàng</th>
            <th>Mã Số Thuế</th>
            <th>Số Tài Khoản Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ Khách Hàng</th>
            <th>Người Liên Hệ</th>
            <th>Email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($DanhSachKhachHang as $key => $item )
            
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td>{{$item->idKhachHang}}</td>
            <td>{{$item->DonViKH}}</td>
            <td>{{$item->MaSoThueKH}}</td>
            <td>{{$item->SoTaiKhoanKH}}</td>
            <td>{{$item->SDT}}</td>
            <td>{{$item->DiaChiKH}}</td>
            <td>{{$item->NguoiLienHeKH}}</td>
            <td>{{$item->Email}}</td>
            <td>
                <a href="{{URL::to('Home/User/quan-ly-thong-tin-khach-hang/edit-thong-tin-khach-hang/'.$item->idKhachHang)}}">
                  <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn Có Chắc muốn xóa Thông Tin Tài Khoản Phiếu Này??')" href="{{URL::to('Home/User/quan-ly-thong-tin-tai-khach-hang/delete-thong-tin-khach-hang/'.$item->idKhachHang)}}">
                  <i class="fa fa-times text-danger text"></i>
                </a>
            </td>
            @endforeach
          </tr>
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