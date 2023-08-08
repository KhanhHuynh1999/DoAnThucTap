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
    <form role="form" action="{{URL::to('Home/Admin/quan-ly-nhan-vien-ke-toan/add-nhan-vien-ke-toan')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
    
    <table class="table table-striped b-t b-light">
      <div class="row">
			
        <div class="col-md-4">
        <div class="container">        
        <div class="col-md-12 form-group">

          <img id="previewImg" src="{{asset('public/uploads/account/no-img.jpg')}}" height="350" width="340" alt="">
          
          <input type="file" name="HinhAnh" style="padding-top: 10px" onchange="previewFile(this);" class="image-preview" id="exampleInputFile">
          <p class="help-block">Example block-level help text here.</p>
          
          
        </div> 
            
        </div>
        </div>
        <div class="col-md-8">
        
          <div class="col-md-6 form-group">
              <label for="exampleInputNgayThangNam">Họ Và Tên Nhân Viên</label>
              <input type="text" name="HoVaTenNV" placeholder=".col-md-2" class="form-control">
            </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputHoVaTen">Địa Chỉ</label>
              <input type="text" name="DiaChi" placeholder=".col-md-3" class="form-control">
          </div>

          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">SDT</label>
              <input type="text" name="SDT"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Năm Sinh</label>
              <input type="Date" name="NamSinh"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Bằng Cấp</label>
              <input type="text" name="BangCap"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">CMND</label>
              <input type="text" name="CMND"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Số Lao Động</label>
              <input type="text" name="SoLaoDong"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Quốc Tịch</label>
              <input type="text" name="QuocTich"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Thời Gian Kí Hợp Đồng</label>
              <input type="Date" name="ThoiGianKiHopDong"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Thời Gian Kết Thúc Hợp Đồng</label>
              <input type="Date" name="ThoiGianKetThucHopDong"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Loại Hợp Đồng</label>
              <input type="text" name="LoaiHopDong"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Thời Gian Thử Việc</label>
              <input type="Date" name="ThoiGianThuViec"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Thời Gian Kết Thúc Thử Việc</label>
              <input type="Date" name="ThoiGianKetThucThuViec"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Công Việc Phải Làm</label>
              <input type="text" name="CongViecPhaiLam"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-12 form-group">
              <label for="exampleInputDiaChi">Ghi Chú</label>
              <textarea style="resize: none" type="text" rows="4" placeholder=".col-md-3" name="GhiChu" class="form-control"></textarea>
          </div>
          <div class="col-sm-5 m-b-xs">
              <button class="btn btn-success" name="AddNhanVienKeToan" type="submit" role="button">Thêm</button>
          </div>
        </div>
      </div>
			</div>
				</div>
			</div>
		  </div>
      </table>
      </form>
    </div>
    </section>
  </div>
</div>

<br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh Sách Thông Tin Nhân Viên Kế Toán
    </div>
    <div class="row w3-res-tb">
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="myTable">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>STT</th>
            <th>Họ Và Tên Người Dùng</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Năm Sinh</th>
            <th>Bằng Cấp</th>
            <th>CMND</th>
            <th>Số Lao Động</th>
            <th>Quốc Tịch</th>
            <th>Thời Gian Kí Hợp Đồng</th>
            <th>Thời Gian Kết Thúc Hợp Đồng</th>
            <th>Loại Hợp Đồng</th>
            <th>Thời Gian Thử Việc</th>
            <th>Thời Gian Kết Thúc Thử Việc</th>
            <th>Hình Ảnh</th>
            <th>Công Việc Phải Làm</th>
            <th>Ghi Chú</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($DanhSachNhanVienKeToan as $key => $item )
            
          <tr>
            <td><label class="i-checks m-b-none" name="post[]"></label></td>
            <td>{{$item->idNhanVienKeToan}}</td>
            <td>{{$item->HoVaTenNV}}</td>
            <td>{{$item->DiaChi}}</td>
            <td>{{$item->SDT}}</td>
            <td>{{$item->NamSinh}}</td>
            <td>{{$item->BangCap}}</td>
            <td>{{$item->CMND}}</td>
            <td>{{$item->SoLaoDong}}</td>
            <td>{{$item->QuocTich}}</td>
            <td>{{$item->ThoiGianKiHopDong}}</td>
            <td>{{$item->ThoiGianKetThucHopDong}}</td>
            <td>{{$item->LoaiHopDong}}</td>
            <td>{{$item->ThoiGianThuViec}}</td>
            <td>{{$item->ThoiGianKetThucThuViec}}</td>
            <td><img src="{{asset('public/uploads/account/')}}/{{$item->HinhAnh}}" height="100"width="100" alt=""></td>
            <td>{{$item->CongViecPhaiLam}}</td>
            <td>{{$item->GhiChu}}</td>
            <td>
                <a href="{{URL::to('Home/Admin/quan-ly-nhan-vien-ke-toan/edit-nhan-vien-ke-toan/'.$item->idNhanVienKeToan)}}">
                  <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn Có Chắc muốn xóa Phiếu Chi Này??')" href="{{URL::to('Home/Admin/quan-ly-nhan-vien-ke-toan/delete-nhan-vien-ke-toan/'.$item->idNhanVienKeToan)}}">
                  <i class="fa fa-times text-danger text"></i>
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">
          
        </div>
      </div>
    </footer>
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
  </div>
</div>

@endsection