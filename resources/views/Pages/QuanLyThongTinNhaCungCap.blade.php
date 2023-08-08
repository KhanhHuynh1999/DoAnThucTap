@extends('Pages.Home')
@section('container')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản Lý Thông Tin Nhà Cung Cấp
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
      <a class="btn btn-success" href="{{URL::to('/Home/User/quan-ly-thong-tin-nha-cung-cap/add-thong-tin-nha-cung-cap')}}" role="button">Thêm</a>              
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
            <th>Đơn Vị Nhà Cung Cấp</th>
            <th>Mã Số Thuế</th>
            <th>Người Liên Hệ</th>
            <th>Số Tài Khoản</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ</th>
            <th>Email</th>
            <th>Loại Dịch Vụ</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($DanhSachNhaCungCap as $key => $item)
            
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td>{{$item->idNhaCungCap}}</td>
            <td>{{$item->DonViNCC}}</td>
            <td>{{$item->MaSoThueNCC}}</td>
            <td>{{$item->NguoiLienHeNCC}}</td>
            <td>{{$item->SoTaiKhoanNCC}}</td>
            <td>{{$item->SDT}}</td>
            <td>{{$item->DiaChiNCC}}</td>
            <td>{{$item->Email}}</td>
            <td>{{$item->Loai}}</td>
            <td>
                <a href="{{URL::to('Home/User/quan-ly-thong-tin-nha-cung-cap/edit-thong-tin-nha-cung-cap/'.$item->idNhaCungCap)}}">
                  <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn Có Chắc muốn xóa Thông Tin Tài Khoản Phiếu Này??')" href="{{URL::to('Home/User/quan-ly-thong-tin-nha-cung-cap/delete-thong-tin-nha-cung-cap/'.$item->idNhaCungCap)}}">
                  <i class="fa fa-times text-danger text"></i>
                </a>
            </td>
          </tr>
        </tbody>
        @endforeach
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