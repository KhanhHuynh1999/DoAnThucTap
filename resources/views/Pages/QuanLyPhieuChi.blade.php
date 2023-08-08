@extends('Pages.Home')
@section('container')
<div class="table-agile-info">
  <div class="panel panel-default">
  <section class="panel">
   <header class="panel-heading">
      Quản Lý Thông Tin Phiếu Chi
        <span class="tools pull-right">
          <a class="fa fa-chevron-down" href="javascript:;"></a>
        </span>
    </header>
    <?php

      $message = Session()->get('message');
      if($message){
        echo '<span class="text-alert">' .$message.'</span>';
        Session()->put('message',null);
      }
    ?>
  <div class="panel-body">
    <div class="table-responsive">
    <form role="form" action="{{URL::to('Home/User/quan-ly-phieu-chi')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
    
    <table class="table table-striped b-t b-light">
      <div class="row">
			<div class="panel-body">
        <div class="col-md-4">
        <div class="container">        
        <div class="col-md-12 form-group">

          <img id="previewImg" src="{{asset('public/uploads/account/no-img.jpg')}}" height="350" width="340" alt="">
          
          <input type="file" name="HinhAnhChi" style="padding-top: 10px" onchange="previewFile(this);" class="image-preview" id="exampleInputFile">
          <p class="help-block">Example block-level help text here.</p>
          
          
        </div> 
            
        </div>
        </div>
        <div class="col-md-8">
        
          <div class="col-md-4 form-group">
              <label for="exampleInputNgayThangNam">Ký Hiệu</label>
              <input type="text" name="KyHieu" placeholder=".col-md-2" class="form-control">
            </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputHoVaTen">Số</label>
              <input type="text" name="So" placeholder=".col-md-3" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Ngày Tháng Năm</label>
              <input type="Date" name="NgayThangNam"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Đơn Vị Nhà Cung Cấp</label>
              <select name="DonViNCC" class="form-control input-md m-bot15">
                @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->DonViNCC}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Địa Chỉ Nhà Cung Cấp</label>
              <select name="DiaChiKH" class="form-control input-md m-bot15">
              @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->DiaChiNCC}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Liên Hệ Nhà Cung Cấp</label>
              <select name="NguoiLienHeKH" class="form-control input-md m-bot15">
              @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->NguoiLienHeNCC}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Số Tài Khoản Nhà Cung Cấp</label>
              <select name="SoTaiKhoanKH" class="form-control input-md m-bot15">
              @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->SoTaiKhoanNCC}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Mã Số Thuế</label>
              <select name="MaSoThueKH" class="form-control input-md m-bot15">
                @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->MaSoThueNCC}}</option>
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
              <input type="text" name="HinhThucThanhToan"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-8 form-group">
              <label for="exampleInputDiaChi">MST</label>
              <input type="text" name="MST"  placeholder=".col-md-5" class="form-control">
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
            <th>Tên Hàng Hóa Dịch Vụ</th>
            <th>Đơn Vị Tính</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Tổng Thành Tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            
            <td>
            <select name="Loai[]" class="form-control input-md m-bot15">
              @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->Loai}}</option>
                @endforeach
              </select>
            </td>
            
            <td><input type="text" name="DonViTinh[]"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhThanhTien(1)" id="SoLuong1" name="SoLuong[]" value="0"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhThanhTien(1)" id="DonGia1" name="DonGia[]" value="0" placeholder=".col-md-5" class="form-control"></td>
            <td><input type="text" name="TongThanhTien[]"  id="KetQuaTongThanhTien1" placeholder=".col-md-5" class="form-control TongCongThanhTien"  readonly></td>
            
            <td><button type="button" class="btn btn-primary" name="add" id="add"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
          
          </tr>
          
        </tbody>
        
        <b>Tổng Tất Các Khoản Tiền: <span id="KetQuaThanhTien" class="text-danger"></span> VND</b>
      
      </table>
      @if(Session::get('quyen') == 1)
      <div class="col-sm-3 m-b-xs form-group">
          <button class="btn btn-success" name="AddPhieuThu" type="submit" role="button">Thêm</button>
      </div>
      @endif
      </div>
			</div>
      
			</div>
			</div>
		  </div>
      
      </table>
      <select id="Loaisp" style="display: none">
        @foreach ($DanhSachNhaCungCap as $key => $item)
          <option value="{{$item->idNhaCungCap}}">{{$item->Loai}}</option>
          @endforeach
        </select>
    </div>
    
      </form>
    </section>  
  </div>
</div>

<br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh Sách Thông Tin Sản Phẩm
    </div>
    <div class="row w3-res-tb">
    <form action="{{URL::to('Home/User/quan-ly-phieu-chi/Search-times-phieu-chi')}}" method="GET">
    <div class="col-sm-1">Từ Ngày:</div>
      <div class="col-sm-2">
        <input type="date" class="input-sm form-control" name="TuNgay" required>
      </div>
      <div class="col-sm-1">Đến Ngày:</div>
      <div class="col-sm-2">
        <input type="date" class="input-sm form-control" name="DenNgay" required>
      </div>
      <div class="row-sm-3">
          <button class="btn btn-sm btn-primary" value="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
    </div>
    
    </form>
    <div class="table-responsive">
      
      <table class="table table-striped b-t b-light" id="myTable">
        
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>STT</th>
            <th>Ngày Tháng Năm</th>
            <th>Tên Hàng Hóa Dịch Vụ</th>
            <th>Đơn Vị Tính</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Tổng Thành Tiền</th>
            <th>Hình Ảnh</th>
            <th>Tên Nhân Viên Kế Toán</th>
            <th>Xác Nhận Thanh Toán</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($DanhSachPhieuChi as $key => $get)
          
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td>{{$get->idPhieuChi}}</td>
            <td>{{$get->NgayThangNam}}</td>
            <td>{{$get->Loai}}</td>
            <td>{{$get->DonViTinh}}</td>
            <td>{{$get->SoLuong}}</td>
            <td>{{$get->DonGia}}</td>
            <td>{{$get->TongThanhTien}}</td>
            <td><img src="{{asset('public/uploads/')}}/{{$get->HinhAnhChi}}"height="100"width="100"></td>
            <td>{{$get->HoVaTenNV}}</td>
            <td><span class="text-ellipsis">
              <?php
                if($get->XacNhanThanhToan==0){
                ?>
                <a href="{{URL::to('Home/User/Already-quan-ly-phieu-chi/'.$get->idPhieuChi)}}">Đã Thanh Toán</a>
                <?php
                }else{
                ?>
                  <a href="{{URL::to('Home/User/Unalready-quan-ly-phieu-chi/'.$get->idPhieuChi)}}">Chưa Thanh Toán</a>
                <?php
                }
              ?>
            </span>
            </td>
            <td>
                <a href="" data-toggle="modal" data-target="#ChiTietPhieuChi{{$get->idPhieuChi}}">
                  <i class="fa fa-eye text-primary text-active"></i>
                </a>
                @if(Session::get('quyen') == 1)
                <a href="{{URL::to('Home/User/quan-ly-phieu-chi/edit-phieu-chi/'.$get->idPhieuChi)}}">
                  <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn Có Chắc muốn xóa Phiếu Thu Này??')" href="{{URL::to('Home/User/quan-ly-phieu-chi/delete-phieu-chi/'.$get->idPhieuChi)}}">
                  <i class="fa fa-times text-danger text"></i>
                </a>
                @endif
                <a href="{{URL::to('Home/User/quan-ly-phieu-chi/print-phieu-chi/'.$get->idPhieuChi)}}">
                  <i class="fa fa-print text-warning  text-active"></i>
                </a>
                
            </td>
          </tr>
          
          @endforeach

        </tbody>
      </table>

    </div>
    <!--Modal Chi Tiết Sản Phẩm-->
    @foreach ($DanhSachPhieuChi as $key => $get)
     
    <div class="modal fade bd-example-modal-lg" id="ChiTietPhieuChi{{$get->idPhieuChi}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
      <table class="table table-striped b-t b-light">
      <div class="row">
			<div class="panel-body">
        <div class="col-md-4">
        <div class="container">        
        <div class="col-md-12 form-group">

          <img src="{{asset('public/uploads/')}}/{{$get->HinhAnhChi}}"height="300"width="270">
          <p class="help-block">Example block-level help text here.</p>
          
          
        </div> 
            
        </div>
        </div>
        <div class="col-md-8">
        
          <div class="col-md-4 form-group">
              <label for="exampleInputNgayThangNam">Ký Hiệu</label>
              <input type="text" value="{{$get->KyHieu}}" name="KyHieu" placeholder=".col-md-2" class="form-control" disabled>
            </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputHoVaTen">Số</label>
              <input type="text" value="{{$get->So}}" name="So" placeholder=".col-md-3" class="form-control" disabled>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Ngày Tháng Năm</label>
              <input type="Date" value="{{$get->NgayThangNam}}" name="NgayThangNam"  placeholder=".col-md-5" class="form-control" disabled>
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Đơn Vị Nhà Cung Cấp</label>
              <select name="DonViNCC" class="form-control input-md m-bot15" disabled>
                @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->DonViNCC}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Địa Chỉ Nhà Cung Cấp</label>
              <select name="DiaChiKH" class="form-control input-md m-bot15" disabled>
              @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->DiaChiNCC}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Người Liên Hệ Nhà Cung Cấp</label>
              <select name="NguoiLienHeKH" class="form-control input-md m-bot15" disabled>
              @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->NguoiLienHeNCC}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Số Tài Khoản Nhà Cung Cấp</label>
              <select name="SoTaiKhoanKH" class="form-control input-md m-bot15" disabled>
              @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->SoTaiKhoanNCC}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Mã Số Thuế</label>
              <select name="MaSoThueKH" class="form-control input-md m-bot15" disabled>
                @foreach ($DanhSachNhaCungCap as $key => $item)
                <option value="{{$item->idNhaCungCap}}">{{$item->MaSoThueNCC}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Đơn Vi Công Ty</label>
              <select name="DonViCongTy" class="form-control input-md m-bot15" disabled>
              @foreach ($DanhSachCongTy as $key => $items)
                <option value="{{$items->idThongTinCongTy}}">{{$items->DonViCongTy}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputDiaChi">Địa Chỉ Công Ty</label>
              <select name="DiaChiCongTy" class="form-control input-md m-bot15" disabled>
              @foreach ($DanhSachCongTy as $key => $items)
                <option value="{{$items->idThongTinCongTy}}">{{$items->DiaChiCongTy}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Người Liên Hệ Công Ty</label>
              <select name="NguoiLienHeCongTy" class="form-control input-md m-bot15" disabled>
              @foreach ($DanhSachCongTy as $key => $items)
                <option value="{{$items->idThongTinCongTy}}">{{$items->NguoiLienHeCongTy}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Số Tài Khoản Công Ty</label>
              <select name="SoTaiKhoanCongTy" class="form-control input-md m-bot15" disabled>
              @foreach ($DanhSachCongTy as $key => $items)
                <option value="{{$items->idThongTinCongTy}}">{{$items->SoTaiKhoan}}</option>
                @endforeach
              </select>
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Hình Thức Thanh Toán</label>
              <input type="text" value="{{$get->HinhThucThanhToan}}" name="HinhThucThanhToan"  placeholder=".col-md-5" class="form-control" disabled>
          </div>
          <div class="col-md-8 form-group">
              <label for="exampleInputDiaChi">MST</label>
              <input type="text" value="{{$get->MST}}" name="MST"  placeholder=".col-md-5" class="form-control" disabled>
          </div>
          <div class="col-md-8 form-group">
              <input type="radio" value="0" name="XacNhanThanhToan"  checked>Đã Thanh Toán
              <input type="radio" value="1" name="XacNhanThanhToan" >Chưa Thanh Toán
          </div>
          <div class="col-md-12 form-group">
              <label for="exampleInputLyDoChi">Nhân Viên Lập Phiếu</label>
              <select name="HoVaTenNV" class="form-control input-md m-bot15" disabled>
                @foreach ($DanhSachNhanVienKeToan as $key => $itemss)
                <option value="{{$itemss->idNhanVienKeToan}}">{{$itemss->HoVaTenNV}}</option>
                @endforeach
                
              </select>
          </div>

			</div>
			</div>
			</div>
      
      </table>
        </div>
      </div>
    </div>
    @endforeach
  <!-- End Modal Chi Tiết Sản Phẩm-->
    
<script>
  TinhThanhTien(1);
  function TinhThanhTien(dong){
        
        var SoLuong = $("#SoLuong"+dong).val();
        var DonGia = $("#DonGia"+dong).val();
        var KetQuaTongThanhTien = parseInt(SoLuong) * parseInt(DonGia);
        document.getElementById("KetQuaTongThanhTien"+dong).value = KetQuaTongThanhTien;

        var TongCongTien = document.getElementsByClassName('TongCongThanhTien');
        var TongTatCaThanhTien = 0;
        console.log(TongCongTien.length);
        for (i=0;i<TongCongTien.length;i++){
         TongTatCaThanhTien += parseFloat(TongCongTien[i].value);
        };
        document.getElementById("KetQuaThanhTien").innerHTML = TongTatCaThanhTien.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
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
    var select = document.getElementById('Loaisp').innerHTML;
    $('#Table').append(
      `<tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td>
            <select name="Loai[]" class="form-control input-md m-bot15">
              `+select+`
              </select>
            </td>
            <td><input type="text" name="DonViTinh[]"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhThanhTien(`+i+`)" id="SoLuong`+i+`" name="SoLuong[]" value="0"  placeholder=".col-md-5" class="form-control"></td>
            <td><input type="number" onkeyup="TinhThanhTien(`+i+`)" id="DonGia`+i+`" name="DonGia[]" value="0" placeholder=".col-md-5" class="form-control"></td>
            <td><input type="text" name="TongThanhTien[]"  id="KetQuaTongThanhTien`+i+`" value="0" placeholder=".col-md-5" class="form-control TongCongThanhTien"  readonly></td>
            
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