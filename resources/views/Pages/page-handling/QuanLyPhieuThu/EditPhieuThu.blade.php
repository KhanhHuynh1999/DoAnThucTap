@extends('Pages.Home')
@section('container')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Sửa Thông Tin Phiếu Thu
    </div>
    <?php

      $message = Session()->get('message');
      if($message){
        echo '<span class="text-alert">' .$message.'</span>';
        Session()->put('message',null);
      }
    ?>
    @foreach ($EditPhieuThu as $key => $get)
        
    <div class="table-responsive">
    <form role="form" action="{{URL::to('Home/User/quan-ly-phieu-thu/edit-phieu-thu/'.$get->idPhieuThu)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
    
    <table class="table table-striped b-t b-light">
      <div class="row">
			<div class="panel-body">
        <div class="col-md-4">
        <div class="container">        
        <div class="col-md-12 form-group">

          <img id="previewImg" src="{{asset('public/uploads/account/no-img.jpg')}}" height="350" width="340" alt="">
          
          <input type="file" value="{{$get->HinhAnhThu}}" name="HinhAnhThu" style="padding-top: 10px" onchange="previewFile(this);" class="image-preview" id="exampleInputFile">
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
              <label for="exampleInputDiaChi">Ngày Tháng Năm</label>
              <input type="Date" value="{{$get->NgayThangNam}}" name="NgayThangNam"  placeholder=".col-md-5" class="form-control">
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
          <div class="col-md-8 form-group">
              <label for="exampleInputDiaChi">MST</label>
              <input type="text" value="{{$get->MST}}" name="MST"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-8 form-group">
              <input type="radio" value="1" name="XacNhanThanhToan" checked>Đã Thanh Toán
              <input type="radio" value="0" name="XacNhanThanhToan" >Chưa Thanh Toán
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
            <th>Tên Hàng Hóa Dịch Vụ</th>
            <th>Đơn Vị Tính</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Thành Tiền</th>
            <th>Thuế Suất</th>
            <th>Thuế GTGT</th>
            <th>Tổng Tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td><input type="text" name="TenHangHoaDichVu[]" value="{{$get->TenHangHoaDichVu}}"  placeholder=".col-md-5" class="form-control "></td>
            <td><input type="text" name="DonViTinh[]" value="{{$get->DonViTinh}}"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhThanhTien(1)" id="SoLuong1" value="{{$get->SoLuong}}" name="SoLuong[]" value="0"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhThanhTien(1)" id="DonGia1" value="{{$get->DonGia}}" name="DonGia[]" value="0" placeholder=".col-md-5" class="form-control"></td>
            <td><input type="text" name="ThanhTien[]"  id="KetQuaThanhTien1" value="{{$get->ThanhTien}}" placeholder=".col-md-5" class="form-control "  readonly></td>
            <td><input type="number" onkeyup="TinhThanhTien(1)" name="ThueSuat[]" value="{{$get->ThueGTGT}}" value="10" id="ThueSuat1"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="text" name="ThueGTGT[]"  id="ThueGTGT1" value="0" placeholder=".col-md-5" class="form-control " readonly></td>
            <td><input type="text" name="TongCongThanhTien[]" id="TongTien1" value="{{$get->TongCongThanhTien}}" value="0" placeholder=".col-md-5" class="form-control TongCongThanhTien" readonly></td>
            
            <td><button type="button" class="btn btn-primary" name="add" id="add"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
          </tr>
        </tbody>
        <b>Tổng Tất Các Khoản Tiền: <span id="KetQuaTongCacKhoanTien" class="text-danger"></span> VND</b>
      </table>
      <div class="col-sm-3 m-b-xs form-group">
          <button class="btn btn-success" name="EditPhieuThu" type="submit" role="button">Lưu</button>
          <a class="btn btn-warning" href="{{URL::to('/Home/User/quan-ly-phieu-thu')}}" role="button">Trở Về</a>
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
  TinhThanhTien(1);
  function TinhThanhTien(dong){
        
    var SoLuong = $("#SoLuong"+dong).val();
        var DonGia = $("#DonGia"+dong).val();
        var KetQuaThanhTien = parseInt(SoLuong) * parseInt(DonGia);
        var ThueSuat = $("#ThueSuat"+dong).val();
        var KetQuaThueSuat = KetQuaThanhTien * parseInt(ThueSuat)/100;
        var KetQuaTongTien = KetQuaThanhTien + KetQuaThueSuat;
        document.getElementById("KetQuaThanhTien"+dong).value = KetQuaThanhTien;
        document.getElementById("ThueGTGT"+dong).value = KetQuaThueSuat;
        document.getElementById("TongTien"+dong).value = KetQuaTongTien;

       var TongCongTien = document.getElementsByClassName('TongCongThanhTien');
       var TongTatCaKhoanTien = 0;
        console.log(TongCongTien.length);
        for (i=0;i<TongCongTien.length;i++){
         TongTatCaKhoanTien += parseFloat(TongCongTien[i].value);
        };
        document.getElementById("KetQuaTongCacKhoanTien").innerHTML = TongTatCaKhoanTien.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
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
    i++;
    $('#Table').append(
      `<tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td><input type="text" name="TenHangHoaDichVu[]"  placeholder=".col-md-5" class="form-control "></td>
            <td><input type="text" name="DonViTinh[]"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhThanhTien(`+i+`)" id="SoLuong`+i+`" name="SoLuong[]" value="0"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhThanhTien(`+i+`)" id="DonGia`+i+`" name="DonGia[]" value="0" placeholder=".col-md-5" class="form-control"></td>
            <td><input type="text" name="ThanhTien[]"  id="KetQuaThanhTien`+i+`" value="0" class="form-control "  readonly></td>
            <td><input type="number" onkeyup="TinhThanhTien(`+i+`)" id="ThueSuat`+i+`" name="ThueSuat[]" value="10"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="text" name="ThueGTGT[]"  id="ThueGTGT`+i+`" value="0" placeholder=".col-md-5" class="form-control " readonly></td>
            <td><input type="text" name="TongCongThanhTien[]" id="TongTien`+i+`" value="0" placeholder=".col-md-5" class="form-control TongCongThanhTien" readonly></td>

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