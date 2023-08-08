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
        <h2>HÓA ĐƠN Phiếu Chi</h2>
        <hr width="100%" size="20px" align="center" color="black" />
    </div>
    <p><b>Ngày lập phiếu:</b>
        <?php 
            $current_time = new DateTime();
            $current_time->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'));
            echo $current_time->format('d-m-Y'); ?>
    </p>
    @foreach ($DanhSachNhaCungCap as $key => $NhaCungCap)
        
        <p><b>Đơn Vị Bán: {{$NhaCungCap->DonViNCC}}</b></p>
        <p><b>Mã Số Thuế: {{$NhaCungCap->MaSoThueNCC}}</b></p>
        <p><b>Địa Chỉ: {{$NhaCungCap->DiaChiNCC}}</b></p>
        <p><b>SDT: {{$NhaCungCap->SDT}}</b></p>
        <p><b>Số Tài Khoản: {{$NhaCungCap->SoTaiKhoanNCC}}</b></p>
    @endforeach
    <b>-----------------------------------------------------------------------------------------------------------------</b>
    @foreach ($DanhSachCongTy as $key => $CongTy)
        <p><b>Đơn Vị Mua Hàng: {{$CongTy->DonViCongTy}}</b></p>
        <p><b>Tên Khách Hàng Mua Hàng: {{$CongTy->DiaChiCongTy}}</b></p>
        <p><b>Số Tài Khoản: {{$CongTy->SoTaiKhoan}}</b></p>
    @endforeach
    @foreach ($ThongTinPhieuChi as $key => $ThongTinPhieuChi)
        <p><b>Hình Thức Thanh Toán: {{$ThongTinPhieuChi->HinhThucThanhToan}}</b></p>
        <p><b>MST: {{$ThongTinPhieuChi->MST}}</b></p>
    @endforeach
    <div class="mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:20px;">
                        STT
                    </th>
                    <th style="width=30px; ">Tên Hàng Hóa Dịch Vụ</th>
                    <th style="width=30px; ">Đơn Vị Tính</th>
                    <th style="width=30px; ">Số Lượng</th>
                    <th style="width=30px; ">Đơn Giá</th>
                    <th style="width=30px; ">Tổng Cộng</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $tongtien = 0;
                @endphp
                @foreach ($DanhSachPhieuChi as $key => $item)
                  
                <tr>
                    <td>{{$item->idPhieuChi}}</td>
                    <td>{{$item->Loai}}</td>
                    <td>{{$item->DonViTinh}}</td>
                    <td>{{$item->SoLuong}}</td>
                    <td>{{$item->DonGia}}</td>
                    <td>{{$item->TongThanhTien}} Đồng</td>
                </tr>
                @php
                  $tongtien += $item->TongThanhTien;
                @endphp
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
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