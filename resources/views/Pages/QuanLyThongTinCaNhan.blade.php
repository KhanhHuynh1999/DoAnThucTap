@extends('Pages.Home')
@section('container')
<link rel="stylesheet" href="{{asset('public/css/QuanLyThongTinCaNhan.css')}}">

    

<div class="container emp-profile">
    
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('public/uploads/account/')}}/{{$canhan->HinhAnh}}" height="100" width="100" alt=""/>
                            <!--<div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>-->
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{$canhan->HoVaTenNV}}
                                    </h5>
                            
                                    @if($canhan1->Quyen==1)
                                    <p class="proile-rating">Quyền Hạn: <span>
                                        User

                                    </span></p>
                                    @elseif($canhan1->Quyen==0)
                                    <p class="proile-rating">Quyền Hạn: <span>
                                        Admin

                                    </span></p>
                                    @endif
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông Tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Thông Tin Hợp Đồng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                        </div>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID Người Dùng</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->idNhanVienKeToan}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>CMND</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->CMND}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tên Người Dung</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->HoVaTenNV}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Địa Chỉ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->DiaChi}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Số Điện Thoại</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->SDT}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Năm Sinh</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->NamSinh}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bằng Cấp</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->BangCap}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Quốc Tịch</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->QuocTich}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ghi Chú</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->GhiChu}}</p>
                                            </div>
                                        </div>
                            </div>
                            
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Số Hợp Đồng Lao Động</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->SoLaoDong}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Thời Gian Kí Hợp Đồng Làm Việc</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->ThoiGianKiHopDong}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Thời Gian Kết Thúc Hợp Đồng Làm Việc</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->ThoiGianKetThucHopDong}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Loại Hợp Đồng Lao Động</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->LoaiHopDong}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Thời Gian Thử Việc</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->ThoiGianThuViec}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Thoi Gian Kết Thúc Thử Việc</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$canhan->ThoiGianKetThucThuViec}}</p>
                                            </div>
                                        </div>
                                        </div>
                                <!--<div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        
                    </div>
                </div>
                
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection