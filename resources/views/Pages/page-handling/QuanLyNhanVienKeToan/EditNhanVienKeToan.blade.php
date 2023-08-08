@extends('Pages.Home')
@section('container')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Sửa Thông Tin Nhân Viên Kế Toán
    </div>
    <?php

      $message = Session()->get('message');
      if($message){
        echo '<span class="text-alert">' .$message.'</span>';
        Session()->put('message',null);
      }
    ?>
    @foreach ($EditNhanVienKeToan as $key => $item)
        
    <div class="table-responsive">
    <form role="form" action="{{URL::to('Home/Admin/quan-ly-nhan-vien-ke-toan/edit-nhan-vien-ke-toan/'.$item->idNhanVienKeToan)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
    
    <table class="table table-striped b-t b-light">
      <div class="row">
			<div class="panel-body">
        <div class="col-md-4">
        <div class="container">        
        <div class="col-md-12 form-group">

          <img id="previewImg" src="{{asset('public/uploads/account/no-img.jpg')}}" height="350" width="340" alt="">
          
          <input type="file" value="{{$item->HinhAnh}}" name="HinhAnh" style="padding-top: 10px" onchange="previewFile(this);" class="image-preview" id="exampleInputFile">
          <p class="help-block">Example block-level help text here.</p>
          
          
        </div> 
            
        </div>
        </div>
        <div class="col-md-8">
        
          <div class="col-md-6 form-group">
              <label for="exampleInputNgayThangNam">Họ Và Tên Nhân Viên</label>
              <input type="text" value="{{$item->HoVaTenNV}}" name="HoVaTenNV" placeholder=".col-md-2" class="form-control">
            </div>
          <div class="col-md-6 form-group">
              <label for="exampleInputHoVaTen">Địa Chỉ</label>
              <input type="text" value="{{$item->DiaChi}}" name="DiaChi" placeholder=".col-md-3" class="form-control">
          </div>

          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">SDT</label>
              <input type="text" value="{{$item->SDT}}" name="SDT"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Năm Sinh</label>
              <input type="Date" value="{{$item->NamSinh}}" name="NamSinh"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Bằng Cấp</label>
              <input type="text" value="{{$item->BangCap}}" name="BangCap"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">CMND</label>
              <input type="text" value="{{$item->CMND}}" name="CMND"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Số Lao Động</label>
              <input type="text" value="{{$item->SoLaoDong}}" name="SoLaoDong"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Quốc Tịch</label>
              <input type="text" value="{{$item->QuocTich}}" name="QuocTich"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Thời Gian Kí Hợp Đồng</label>
              <input type="Date" value="{{$item->ThoiGianKiHopDong}}" name="ThoiGianKiHopDong"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Thời Gian Kết Thúc Hợp Đồng</label>
              <input type="Date" value="{{$item->ThoiGianKetThucHopDong}}" name="ThoiGianKetThucHopDong"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Loại Hợp Đồng</label>
              <input type="text" value="{{$item->LoaiHopDong}}" name="LoaiHopDong"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Thời Gian Thử Việc</label>
              <input type="Date" value="{{$item->ThoiGianThuViec}}" name="ThoiGianThuViec"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Thời Gian Kết Thúc Thử Việc</label>
              <input type="Date" value="{{$item->ThoiGianKetThucThuViec}}" name="ThoiGianKetThucThuViec"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-4 form-group">
              <label for="exampleInputDiaChi">Công Việc Phải Làm</label>
              <input type="text" value="{{$item->CongViecPhaiLam}}" name="CongViecPhaiLam"  placeholder=".col-md-5" class="form-control">
          </div>
          <div class="col-md-12 form-group">
              <label for="exampleInputDiaChi">Ghi Chú</label>
              <textarea style="resize: none" type="text" rows="4" placeholder=".col-md-3" name="GhiChu" class="form-control">{{$item->GhiChu}}</textarea>
          </div>
          <div class="col-sm-5 m-b-xs">
              <button class="btn btn-success" name="EditNhanVienKeToan" type="submit" role="button">Lưu</button>
              <a class="btn btn-warning" href="{{URL::to('Home/Admin/quan-ly-nhan-vien-ke-toan')}}" role="button">Trở Về</a>
          </div>
        </div>
      </div>
			</div>
				</div>
			</div>
		  </div>
      </table>
      </form>
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
    @endforeach
  </div>
</div>
@endsection