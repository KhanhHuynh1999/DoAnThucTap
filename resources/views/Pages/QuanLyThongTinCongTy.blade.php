@extends('Pages.Home')
@section('container')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản Lý Thông Tin Công Ty
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
      <a class="btn btn-success" href="{{URL::to('/Home/User/quan-ly-thong-tin-cong-ty/Add-thong-tin-cong-ty')}}" role="button">Thêm</a>              
      </div>
      
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
              </label>
            </th>
            <th>STT</th>
            <th>Người Liên Hệ Công Ty</th>
            <th>Đơn Vị Công Ty</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ</th>
            <th>Email</th>
            <th>Số Tài Khoản Công Ty</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach ($DanhSachCongTy as $key => $item)
             
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td>{{$item->idThongTinCongTy}}</td>
            <td>{{$item->NguoiLienHeCongTy}}</td>
            <td>{{$item->DonViCongTy}}</td>
            <td>{{$item->SDT}}</td>
            <td>{{$item->DiaChiCongTy}}</td>
            <td>{{$item->Email}}</td>
            <td>{{$item->SoTaiKhoan}}</td>
            <td>
                <a href="{{URL::to('/Home/User/quan-ly-thong-tin-cong-ty/Edit-thong-tin-cong-ty/'.$item->idThongTinCongTy)}}">
                  <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn Có Chắc muốn xóa Thông Tin Tài Khoản Phiếu Này??')" href="{{URL::to('Home/User/quan-ly-thong-tin-cong-ty/Delete-thong-tin-cong-ty/'.$item->idThongTinCongTy)}}">
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