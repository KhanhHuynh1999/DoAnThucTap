@extends('Pages.Home')
@section('container')

<div class="row">
            <div class="col-md-12">

                <div data-collapsed="0" class="panel">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Thêm Thông Tin Khách Hàng
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="row">
                            <form role="form" action="{{URL::to('Home/User/quan-ly-thong-tin-khach-hang')}}" method="post">
                            {{ csrf_field() }}
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputNgayThangNam">Đơn Vị Khách Hàng</label>
                                    <input type="text" name="DonViKH" placeholder=".col-md-2" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputHoVaTen">Mã Số Thuế</label>
                                    <input type="text" name="MaSoThueKH" placeholder=".col-md-3" class="form-control">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Số Tài Khoản Khách Hàng</label>
                                    <input name="SoTaiKhoanKH" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Số Điện Thoại</label>
                                    <input style="resize: none" name="SDT" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Địa Chỉ Khách Hàng</label>
                                    <input style="resize: none" name="DiaChiKH" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Người Liên Hệ</label>
                                    <input style="resize: none" name="NguoiLienHeKH" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Email</label>
                                    <input style="resize: none" name="Email" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-3 form-group">
                                    <button class="btn btn-success" name="AddQuanLyKhachHang" type="submit" role="button">Thêm</button>
                                    <a class="btn btn-warning" href="{{URL::to('Home/User/quan-ly-thong-tin-khach-hang')}}" role="button">Trở Về</a>
                                </div>
                                
                            </form>
                           </div>
                    </div>

                </div>

            </div>
        </div>

@endsection