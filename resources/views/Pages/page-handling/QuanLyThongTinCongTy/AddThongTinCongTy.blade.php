@extends('Pages.Home')
@section('container')

<div class="row">
            <div class="col-md-12">

                <div data-collapsed="0" class="panel">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Thêm Thông Tin Công Ty
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="row">
                            <form role="form" action="{{URL::to('/Home/User/quan-ly-thong-tin-cong-ty')}}" method="post">
                            {{ csrf_field() }}
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputSTT">Người Liên Hệ Công Ty</label>
                                    <input type="text" name="NguoiLienHeCongTy" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputSTT">Đơn Vị Công Ty</label>
                                    <input type="text" name="DonViCongTy" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputSTT">Số Điện Thoại</label>
                                    <input type="text" name="SDT" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputSTT">Địa Chỉ Công Ty</label>
                                    <input type="text" name="DiaChiCongTy" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputNgayThangNam">Email</label>
                                    <input type="text" name="Email" placeholder=".col-md-2" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDonViTinh">Số Tài Khoản</label>
                                    <input type="text" name="SoTaiKhoan" placeholder=".col-md-3" class="form-control">
                                </div>
                                <div class="col-md-3 form-group">
                                    <button class="btn btn-success" name="AddThongTinCongTy" type="submit" role="button">Thêm</button>
                                    <a class="btn btn-warning" href="{{URL::to('Home/User/quan-ly-thong-tin-cong-ty')}}" role="button">Trở Về</a>
                                </div>
                                
                            </form>
                           </div>
                    </div>

                </div>

            </div>
        </div>

@endsection