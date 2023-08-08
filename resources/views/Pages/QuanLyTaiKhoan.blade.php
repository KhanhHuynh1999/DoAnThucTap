@extends('Pages.Home')
@section('container')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản Lý Thông Tin Tài Khoản
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
      <a class="btn btn-success" href="{{URL::to('Home/Admin/quan-ly-tai-khoan/add-tai-khoan')}}" role="button">Thêm</a>              
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="myTable">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>STT</th>
            <th>Tên Đăng Nhập</th>
            <th>Mật Khẩu</th>
            <th>Email</th>
            <th>Quyền Hạn</th>
            <th>Họ Và Tên Nhân Viên</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($DanhSachTaiKhoan as $key => $item )
            
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td>{{$item->idTaiKhoan}}</td>
            <td>{{$item->TenDangNhap}}</td>
            <td>{{$item->MatKhau}}</td>
            <td>{{$item->Email}}</td>
            <td><span class="text-ellipsis">
              <?php
                if($item->Quyen==0)
                {
                  echo'Admin';
                }
                else
                {
                  echo'User';
                }
              ?>
            </span>
            </td>
            <td>{{$item->HoVaTenNV}}</td>
            <td>
                <a href="{{URL::to('Home/Admin/quan-ly-tai-khoan/edit-tai-khoan/'.$item->idTaiKhoan)}}">
                  <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn Có Chắc muốn xóa Tài Khoản Này??')" href="{{URL::to('Home/Admin/quan-ly-tai-khoan/delete-tai-khoan/'.$item->idTaiKhoan)}}">
                  <i class="fa fa-times text-danger text"></i>
                </a>
                <a href="{{URL::to('Home/Admin/quan-ly-tai-khoan/print-tai-khoan')}}">
                <i class="fa fa-print" aria-hidden="true"></i>
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
