@extends('Pages.Home')
@section('container')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Sửa Thông Tin Hóa Đơn Điện Tử
    </div>
    <?php

      $message = Session()->get('message');
      if($message){
        echo '<span class="text-alert">' .$message.'</span>';
        Session()->put('message',null);
      }
    ?>

      @foreach ($EditHoaDonDienTu as $key => $get)
        
    <div class="table-responsive">
    <form role="form" action="{{URL::to('Home/User/quan-ly-hoa-don-dien-tu/edit-hoa-don-dien-tu/'.$get->idHoaDonDienTu)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
    
    <table class="table table-striped b-t b-light">
      <div class="row">
			<div class="panel-body">
        <div class="col-md-4">
        <div class="container">        
        <div class="col-md-12 form-group">

          <img id="previewImg" src="{{asset('public/uploads/account/no-img.jpg')}}" height="350" width="340" alt="">
          
          <input type="file" value="{{$get->HinhAnhDienTu}}" name="HinhAnhDienTu" style="padding-top: 10px" onchange="previewFile(this);" class="image-preview" id="exampleInputFile">
          <p class="help-block">Example block-level help text here.</p>
          
          
        </div> 
            
        </div>
        </div>
        <div class="col-md-8">
        
          <div class="col-md-4 form-group">
              <label for="exampleInputNgayThangNam">Ký Hiệu</label>
              <input type="text" value="{{$get->KyHieu}}" name="KyHieu" placeholder=".col-md-2" class="form-control">
            </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputHoVaTen">Số</label>
              <input type="text" value="{{$get->So}}" name="So" placeholder=".col-md-3" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Ngày Lập</label>
              <input type="Date" value="{{$get->NgayLap}}" name="NgayLap"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputHoVaTen">Tên Đơn Vị</label>
              <input type="text" value="{{$get->TenDonVi}}" name="TenDonVi" placeholder=".col-md-3" class="form-control">
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputHoVaTen">Địa Chỉ</label>
              <input type="text" value="{{$get->DiaChi}}" name="DiaChi" placeholder=".col-md-3" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputHoVaTen">Mã Số Thuế Hóa Đơn Điện Tử</label>
              <input type="text" value="{{$get->MaSoThueDienTu}}" name="MaSoThueDienTu" placeholder=".col-md-3" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputHoVaTen">Số Hợp Đồng</label>
              <input type="text" value="{{$get->SoHopDong}}" name="SoHopDong" placeholder=".col-md-3" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Ký Cước</label>
              <input type="Date" value="{{$get->KyCuoc}}" name="KyCuoc"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Đơn Vị Khách Hàng</label>
              <select name="DonViKH" class="form-control input-md m-bot15">
                @foreach ($DanhSachKhachHang as $key => $item)
                <option value="{{$item->idKhachHang}}">{{$item->DonViKH}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Địa Chỉ Khách Hàng</label>
              <select name="DiaChiKH" class="form-control input-md m-bot15">
              @foreach ($DanhSachKhachHang as $key => $item)
                <option value="{{$item->idKhachHang}}">{{$item->DiaChiKH}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Người Liên Hệ Khách Hàng</label>
              <select name="NguoiLienHeKH" class="form-control input-md m-bot15">
              @foreach ($DanhSachKhachHang as $key => $item)
                <option value="{{$item->idKhachHang}}">{{$item->NguoiLienHeKH}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Số Tài Khoản Khách Hàng</label>
              <select name="SoTaiKhoanKH" class="form-control input-md m-bot15">
              @foreach ($DanhSachKhachHang as $key => $item)
                <option value="{{$item->idKhachHang}}">{{$item->SoTaiKhoanKH}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Mã Số Thuế</label>
              <select name="MaSoThueKH" class="form-control input-md m-bot15">
                @foreach ($DanhSachKhachHang as $key => $item)
                <option value="{{$item->idKhachHang}}">{{$item->MaSoThueKH}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Đơn Vi Công Ty</label>
              <select name="DonViCongTy" class="form-control input-md m-bot15">
              @foreach ($DanhSachCongTy as $key => $items)
                <option value="{{$items->idThongTinCongTy}}">{{$items->DonViCongTy}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Địa Chỉ Công Ty</label>
              <select name="DiaChiCongTy" class="form-control input-md m-bot15">
              @foreach ($DanhSachCongTy as $key => $items)
                <option value="{{$items->idThongTinCongTy}}">{{$items->DiaChiCongTy}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Người Liên Hệ Công Ty</label>
              <select name="NguoiLienHeCongTy" class="form-control input-md m-bot15">
              @foreach ($DanhSachCongTy as $key => $items)
                <option value="{{$items->idThongTinCongTy}}">{{$items->NguoiLienHeCongTy}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Số Tài Khoản Công Ty</label>
              <select name="SoTaiKhoanCongTy" class="form-control input-md m-bot15">
              @foreach ($DanhSachCongTy as $key => $items)
                <option value="{{$items->idThongTinCongTy}}">{{$items->SoTaiKhoan}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Hình Thức Thanh Toán</label>
              <input type="text" value="{{$get->HinhThucThanhToan}}" name="HinhThucThanhToan"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-6 form-group">
              <input type="radio" name="XacNhanThanhToan" value="0" checked>Đã Thanh Toán
              <input type="radio" name="XacNhanThanhToan" value="1">Chưa Thanh Toán
          </div>
          <div class="col-md-12 form-group">
              <label for="exampleInputLyDoChi">Nhân Viên Lập Phiếu</label>
              <select name="HoVaTenNV" class="form-control input-md m-bot15">
                @foreach ($DanhSachNhanVienKeToan as $key => $itemss)
                <option value="{{$itemss->idNhanVienKeToan}}">{{$itemss->HoVaTenNV}}</option>
                @endforeach
                
              </select>
          </div>
      <div class="table-responsive">
      <table class="table table-bordered b-t b-light" id="Table">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>Diễn Giải</th>
            <th>Số Lượng</th>
            <th>Tiền Dịch Vụ</th>
            <th>Thuế Suất(%)</th>
            <th>Tiền Thuế</th>
            <th>Cộng</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td><input type="text" name="DienGiai[]" value="{{$get->DienGiai}}" placeholder=".col-md-5" class="form-control "></td>
            <td><input type="number" name="SoLuong[]"  value="{{$get->SoLuong}}" placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhTien(1)" value="{{$get->TienDichVu}}" id="TienDichVu1" name="TienDichVu[]" value="0" placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhTien(1)" value="{{$get->ThueSuat}}" id="ThueSuat1" name="ThueSuat[]" value="10"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="text" name="TienThue[]"  id="KetQuaThue1" value="{{$get->TienThue}}" placeholder=".col-md-5" class="form-control "  readonly></td>
            <td><input type="text" name="Cong[]" id="Cong1" value="{{$get->Cong}}" placeholder=".col-md-5" class="form-control TongCongThanhTien" readonly></td>
            
            <td><button type="button" class="btn btn-primary" name="add" id="add"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
          </tr>
        </tbody>
        <b>Tổng Cộng Tiền Thanh Toán: <span id="KetQuaTongCongTienThanhToan" class="text-danger"></span> VND</b>
      </table>
      
      <div class="col-sm-3 m-b-xs form-group">
          <button class="btn btn-success" name="EditHoaDonDienTu" type="submit" role="button">Lưu</button>
      </div>
      <div class="col-sm-3 m-b-xs form-group">
      </div>
      </div>
			</div>
      
			</div>
			</div>
		  </div>
      
      </table>
    </div>
    
      </form>
      @endforeach
  </div>
</div>

    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">
          
        </div>
      </div>
    </footer>
<script>
  TinhTien(1);
  function TinhTien(dong){
        
        var TienDichVu = $("#TienDichVu"+dong).val();
        var ThueSuat = $("#ThueSuat"+dong).val();
        var KetQuaTienThue = parseInt(TienDichVu) * parseInt(ThueSuat)/100;
        var KetQuaCong = parseInt(TienDichVu) + KetQuaTienThue;
        document.getElementById("KetQuaThue"+dong).value = KetQuaTienThue;
        document.getElementById("Cong"+dong).value = KetQuaCong;
        
        var TongCongTien = document.getElementsByClassName('TongCongThanhTien');
        var TongCongTienThanhToan = 0;
        console.log(TongCongTien.length);
        for (i=0;i<TongCongTien.length;i++){
         TongCongTienThanhToan += parseFloat(TongCongTien[i].value);
        };
        document.getElementById("KetQuaTongCongTienThanhToan").innerHTML = TongCongTienThanhToan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
    };

</script>

<script>
  function previewFile(input)
  {
    var file = $(".image-preview").get(0).files[0];
    console.log(file);
    if(file)
    {
      var reader = new FileReader();

      reader.onload = function(){
        $("#previewImg").attr("src", reader.result);
      }
      reader.readAsDataURL(file);
    }
  }
  
</script>
<script>
  var i = 1;
  $('#add').click(function(){
    ++i;
    $('#Table').append(
      `<tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td><input type="text" name="DienGiai[]"  placeholder=".col-md-5" class="form-control "></td>
            <td><input type="number" name="SoLuong[]" value="0"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhTien(`+i+`)" id="TienDichVu`+i+`" name="TienDichVu[]" value="0" placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhTien(`+i+`)" id="ThueSuat`+i+`" name="ThueSuat[]" value="10"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="text" name="TienThue[]"  id="KetQuaThue`+i+`" value="0" placeholder=".col-md-5" class="form-control "  readonly></td>
            <td><input type="text" name="Cong[]" id="Cong`+i+`" value="0" placeholder=".col-md-5" class="form-control TongCongThanhTien" readonly></td>
            
            <td><button type="button" class="btn btn-danger remove-table-row"><i class="fa fa-remove"></i></button></td>
      </tr>`);
  });

  $(document).on('click','.remove-table-row', function(){
    $(this).parents('tr').remove();
  });
  
</script>
  </div>
</div>
</div>
@endsection