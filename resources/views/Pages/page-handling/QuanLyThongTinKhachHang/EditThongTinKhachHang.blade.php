@extends('Pages.Home')
@section('container')

<div class="row">
            <div class="col-md-12">

                <div data-collapsed="0" class="panel">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Sửa Thông Tin Khách Hàng
                        </div>
                    </div>

                    <div class="panel-body">
                        @foreach ($EditThongTinKhachHang as $key => $items )
                        <div class="row">
                            <form role="form" action="{{URL::to('/Home/User/quan-ly-thong-tin-khach-hang/edit-thong-tin-khach-hang/'.$items->idKhachHang)}}" method="post">
                            {{ csrf_field() }}
                            <div class="col-md-12 form-group">
                                    <label for="exampleInputNgayThangNam">Đơn Vị Khách Hàng</label>
                                    <input type="text" value="{{$items->DonViKH}}" name="DonViKH" placeholder=".col-md-2" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputHoVaTen">Mã Số Thuế</label>
                                    <input type="text" value="{{$items->MaSoThueKH}}" name="MaSoThueKH" placeholder=".col-md-3" class="form-control">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Số Tài Khoản Khách Hàng</label>
                                    <input name="SoTaiKhoanKH" value="{{$items->SoTaiKhoanKH}}" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Số Điện Thoại</label>
                                    <input style="resize: none" value="{{$items->SDT}}" name="SDT" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Địa Chỉ Khách Hàng</label>
                                    <input style="resize: none" value="{{$items->DiaChiKH}}" name="DiaChiKH" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Người Liên Hệ</label>
                                    <input style="resize: none" value="{{$items->NguoiLienHeKH}}" name="NguoiLienHeKH" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDiaChi">Email</label>
                                    <input style="resize: none" value="{{$items->Email}}" name="Email" type="text" placeholder=".col-md-5" class="form-control">
                                </div>
                                <div class="col-md-2 form-group">
                                    <button class="btn btn-success" name="EditThongTinKhachHang" type="submit" role="button">Lưu</button>
                                    <a class="btn btn-warning" href="{{URL::to('Home/User/quan-ly-thong-tin-khach-hang')}}" role="button">Trở Về</a>
                                </div>
                                @endforeach
                            </form>
                           </div>
                    </div>

                </div>

            </div>
        </div>

@endsection