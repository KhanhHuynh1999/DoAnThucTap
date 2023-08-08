@extends('Pages.Home')
@section('container')

<div class="row">
            <div class="col-md-12">

                <div data-collapsed="0" class="panel">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Sửa Thông Tin Nhà Cung Cấp
                        </div>
                    </div>

                    <div class="panel-body">
                        @foreach ($EditThongTinNhaCungCap as $key => $items )
                        <div class="row">
                            <form role="form" action="{{URL::to('/Home/User/quan-ly-thong-tin-nha-cung-cap/edit-thong-tin-nha-cung-cap/'.$items->idNhaCungCap)}}" method="post">
                            {{ csrf_field() }}
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputSTT">Đơn Vị Nhà Cung Cấp</label>
                                    <input type="text" value="{{$items->DonViNCC}}" name="DonViNCC" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputDonVi">Mã Thuế</label>
                                    <input type="text" value="{{$items->MaSoThueNCC}}" name="MaSoThueNCC" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputHoVaTen">Người Liên Hệ</label>
                                    <input type="text" value="{{$items->NguoiLienHeNCC}}" name="NguoiLienHeNCC" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputHoVaTen">Số Tài Khoản Nhà Cung Cấp</label>
                                    <input type="text" value="{{$items->SoTaiKhoanNCC}}" name="SoTaiKhoanNCC" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputHoVaTen">Số Điện Thoại</label>
                                    <input type="text" value="{{$items->SDT}}" name="SDT" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputHoVaTen">Địa Chỉ Nhà Cung Cấp</label>
                                    <input type="text" value="{{$items->DiaChiNCC}}" name="DiaChiNCC" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputHoVaTen">Email</label>
                                    <input type="text" value="{{$items->Email}}" name="Email" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="exampleInputHoVaTen">Loại Dịch Vụ</label>
                                    <input type="text" value="{{$items->Loai}}" name="Loai" placeholder=".col-md-1" class="form-control">
                                </div>
                                <div class="col-md-2 form-group">
                                    <button class="btn btn-success" name="AddThongTinNhaCungCap" type="submit" role="button">Lưu</button>
                                    <a class="btn btn-warning" href="{{URL::to('Home/User/quan-ly-thong-tin-nha-cung-cap')}}" role="button">Trở Về</a>
                                </div>
                                @endforeach
                            </form>
                           </div>
                    </div>

                </div>

            </div>
        </div>

@endsection