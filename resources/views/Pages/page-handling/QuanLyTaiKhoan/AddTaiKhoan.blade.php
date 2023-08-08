@extends('Pages.Home')
@section('container')
<div class="row">
            <div class="col-md-12">

                <div data-collapsed="0" class="panel">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Thêm Tài Khoản
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="row">
                            <form role="form" action="{{URL::to('Home/Admin/quan-ly-tai-khoan')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputNgayThangNam">Tên Đăng Nhập</label>
                                    <input type="text" name="TenDangNhap" placeholder=".col-md-2" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputHoVaTen">Mật Khẩu</label>
                                    <input type="text" name="MatKhau" placeholder=".col-md-3" class="form-control">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Email</label>
                                    <input type="email" name="Email"  placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputLyDoChi">Quyền Hạn</label>
                                    <select name="Quyen" class="form-control input-md m-bot15">
                                        <option value="0">Admin</option>
                                        <option value="1">User</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputLyDoChi">Họ Tên Nhân Viên Kế Toán</label>
                                    <select name="HoVaTenNV" class="form-control input-md m-bot15">
                                        @foreach ($MucNhanVienKeToan as $key => $item)
                                          
                                        <option value="{{$item->idNhanVienKeToan}}">{{$item->HoVaTenNV}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2 form-group">
                                    <button class="btn btn-success" name="AddTaiKhoan" type="submit" role="button">Thêm</button>
                                    <a class="btn btn-warning" href="{{URL::to('Home/Admin/quan-ly-tai-khoan')}}" role="button">Trở Về</a>
                                </div>
                                
                            </form>
                           </div>
                    </div>

                </div>

            </div>
        </div>

@endsection