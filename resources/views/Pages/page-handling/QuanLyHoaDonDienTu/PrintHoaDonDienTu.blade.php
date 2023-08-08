@extends('Pages.Home')
@section('container')
<button class="btn btn-warning" id="print" onclick="printContent('printerDiv');">
    <i class="fa fa-print" aria-hidden="true" style="color:white"></i>&nbspPrint</button>

<div class="table-agile-info" id="printerDiv">
    <div>
        <img src="{{asset('public/uploads/account/agitech.png')}}"
            style="border-radius: 50%;width: 100px;vertical-align:text-top; ">
        <br />
        <h4>Công ty TNHH Tư Vấn & Dịch Vụ Kỹ Thuật Công Nghệ Xanh An Giang</h4>
        <h5>Địa chỉ: số 34A Bùi Văn Danh, Phường Mỹ Xuyên, TP.Long Xuyên, An Giang
            <br />Mã số Thuế: 1601223524
            <br />SĐT:02966.555.226 - Email: contact@agitech.com.vn
        </h5>
        <br />
    </div>
    <div class=" text-center text-uppercase">
        <hr width="100%" size="20px" align="center" color="black" />
        <h2>HÓA ĐƠN Dịch Vụ Điện Tử (GTGT)</h2>
        <hr width="100%" size="20px" align="center" color="black" />
    </div>
    <p><b>Ngày lập phiếu:</b>
        <?php 
            $current_time = new DateTime();
            $current_time->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'));
            echo $current_time->format('d-m-Y'); ?>
    </p>
    @foreach ($DanhSachDienTu as $key => $dientu)
    <p><b>{{$dientu->TenDonVi}}</b></p>
    <p><b>{{$dientu->DiaChi}}</b></p>
    <p><b>Mã Số Thuế: {{$dientu->MaSoThueDienTu}}</b></p>
    @endforeach

    <b>--------------------------------------------------------------------------------------------------------------------</b>
    @foreach ($DanhSachKhachHang as $key => $khachhang)
        
    <p><b>Đơn Vị Thu: {{$khachhang->DonViKH}}</b></p>
    <p><b>Tên Khách Hàng: {{$khachhang->DiaChiKH}}</b></p>
    <p><b>Mẫ Số Thuế: {{$khachhang->MaSoThueKH}}</b></p>
    @endforeach
    
    @foreach ($DanhSachCongTy as $key => $CongTy)
        
    <p><b>Đơn Vị: {{$CongTy->DonViCongTy}}</b></p>
    <p><b>Địa Chỉ: {{$CongTy->DiaChiCongTy}}</b></p>
    <p><b>Mã Số Thuế: Đại Diện(2966555226)</b></p>
    @endforeach
    @foreach ($DanhSachDienTu as $key => $dientu)
    <p><b>Số Hộp Đồng: {{$dientu->SoHopDong}}</b></p>
    <p><b>Hình Thức Thanh Toán: {{$dientu->HinhThucThanhToan}}</b></p>
    <p><b>Số Hộp Đồng: {{$dientu->KyCuoc}}</b></p>
    @endforeach
    <div class="mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:20px;">
                        STT
                    </th>
                    <th style="width=30px; ">Diễn Giải</th>
                    <th style="width=30px; ">Số Lượng</th>
                    <th style="width=30px; ">Tiền Dịch Vụ</th>
                    <th style="width=30px; ">Thuế Suất</th>
                    <th style="width=30px; ">Tiền Thuế</th>
                    <th style="width=30px; ">Cộng</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $tongtien = 0;
                @endphp
                @foreach ($DanhSachHoaDonDienTu as $key => $item)
                  
                <tr>
                    <td>{{$item->idHoaDonDienTu}}</td>
                    <td value="">{{$item->DienGiai}}</td>
                    <td>{{$item->SoLuong}}</td>
                    <td>{{$item->TienDichVu}}</td>
                    <td>{{$item->ThueSuat}} %</td>
                    <td>{{$item->TienThue}}</td>
                    <td>{{$item->Cong}} Đồng</td>
                </tr>
                @php
                  $tongtien += $item->Cong;
                @endphp
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="fw-bold">TỔNG CỘNG TIỀN THANH TOÁN: </td>
                    <td>{{$tongtien}} Đồng</td>
                </tr>
            </tbody>
            
        </table>
    </div>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <p><b></p>
        </div>
    </div>
    <div class="row">
        <div>
            <p><b></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
        @foreach ($DanhSachDienTu as $key => $dientu)
            <p><b>Ký Bửi: {{$dientu->TenDonVi}}</b></p>
        @endforeach  
        </div>
        <div class="col-6">
            <p><b>Ký Ngày:</b>
        <?php 
            $current_time = new DateTime();
            $current_time->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'));
            echo $current_time->format('d-m-Y'); ?>
                <br />
                <br />
                <br />
            </p>
        </div>
    </div>
</div>

<script>
function printContent(el) {
    var restorepage = $('body').html();
    var printcontent = $('#' + el).clone();
    $('body').empty().html(printcontent);
    window.print();
    $('body').html(restorepage);
}
</script>
@endsection