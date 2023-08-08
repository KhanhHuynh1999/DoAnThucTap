<!DOCTYPE html>
<head>
<title>Quản Lí Chứng Từ Kế Toán</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('public/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('public/css/monthly.css')}}">
<!-- //calendar -->
<link rel="stylesheet" href="{{asset('bootstrap/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('bootstrap/datatables.css')}}">
<!-- //font-awesome icons -->
<script src="{{asset('/public/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('/public/js/raphael-min.js')}}"></script>
<script src="{{asset('/public/js/morris.js')}}"></script>

<style>
#demo {
  text-align: center;
  font-size: 20px;
  margin-top: 0px;
  margin-left: -16px;
  color: #f25a5a;
}
</style>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    
    <a href="index.html" class="logo">
        <p id="demo"></p>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="public/images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="public/images/1.png"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="public/images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="public/images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle">
                <img alt="" src="{{asset('public/uploads/account/')}}/{{$hinhdaidien->HinhAnh}}" width="33px" height="33px" >
                <span class="username">
                <?php

                $TenDangNhap = Session()->get('TenDangNhap');
                if($TenDangNhap){
                    echo $TenDangNhap;
                }
                ?>
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{{URL::to('Home/quan-ly-thong-tin-ca-nhan')}}"><i class=" fa fa-suitcase"></i>Thông Tin</a></li>
                <li><a href="#"><i class="fa fa-cog"></i>Cài Đặt</a></li>
                <li><a href="{{URL::to('/Logout')}}"><i class="fa fa-key"></i>Đăng Xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('Home')}}">
                        <i class="fa fa-home"></i>
                        <span>Trang Chính</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-calendar-plus-o"></i>
                        <span>Thông Tin Về Khách Hàng</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/Home/User/quan-ly-thong-tin-nha-cung-cap')}}">Thông Tin Nhà Cung Cấp</a></li>
						<li><a href="{{URL::to('/Home/User/quan-ly-thong-tin-khach-hang')}}">Thông Tin Khách Hàng</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-file-text"></i>
                        <span>Quản Lý Chứng Từ</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/Home/User/quan-ly-phieu-chi')}}">Phiếu Chi</a></li>
						<li><a href="{{URL::to('/Home/User/quan-ly-phieu-thu')}}">Phiếu Thu</a></li>
                        <li><a href="{{URL::to('/Home/User/quan-ly-hoa-don-dien-tu')}}">Hóa Đơn Điện Tử</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{URL::to('Home/quan-ly-nhat-ky-chung')}}">
                        <i class="fa fa-book"></i>
                        <span>Nhật Ký Chung</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/Home/User/quan-ly-thong-tin-cong-ty')}}">
                    <i class="fa fa-building"></i>    
                    <span>Thông Tin Công Ty</span>
                    </a>
                </li>
                @if(Session::get('quyen')==0)
                <li>
                    <a href="{{URL::to('Home/Admin/quan-ly-tai-khoan')}}">
                        <i class="fa fa-user"></i>
                        <span>Tài Khoản</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('Home/Admin/quan-ly-nhan-vien-ke-toan')}}">
                        <i class="fa fa-users"></i>
                        <span>Quản Lý Nhân Viên Kế Toán</span>
                    </a>
                </li>
               @endif 
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
            @yield('container')
    </section>
</section>
<!--main content end-->
</section>
<script src="{{asset('bootstrap/datatables.min.js')}}"></script>
<script src="{{asset('bootstrap/datatables.js')}}"></script>
<script src="{{asset('public/js/bootstrap.js')}}"></script>
<script src="{{asset('public/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/js/scripts.js')}}"></script>
<script src="{{asset('public/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/js/jquery.scrollTo.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<!-- morris JavaScript -->	
<script type="text/javascript">
    $(document).ready(function(){
        $('#myTable').DataTable({
    language: {
        processing: "Message khi đang tải dữ liệu",
        search: "Tìm",
        lengthMenu: "Hiện Thị _MENU_ Dòng Trên Trang",
        info: "Bảng có từ _START_ đến _END_, Tổng Cộng Có _TOTAL_ Bảng",
        infoEmpty: "Không có dữ liệu bạn đang tìm ",
        infoFiltered: "(Bảng Hiện Có _MAX_)",
        infoPostFix: "", // Cái này khi thêm vào nó sẽ đứng sau info
        loadingRecords: "",
        zeroRecords: "Không Có Dữ Liệu",
        emptyTable: "Không có dữ liệu",
        paginate: {
            first: "Trang đầu",
            previous: "Trang trước",
            next: "Trang sau",
            last: "Trang cuối"
        },
        aria: {
            sortAscending: ": Message khi đang sắp xếp theo column",
            sortDescending: ": Message khi đang sắp xếp theo column",
        }
    },
});
    });
</script>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Apr 3, 2023 14:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
        
    // Find the distance between now and the count down date
    var distance = countDownDate + now;
        
    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML =hours + " Giờ "
    + minutes + " Phút " + seconds + " Giây ";
        
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
    }, 1000);
</script>
    <!-- //Thời Gian -->
<!-- calendar -->
	<script type="text/javascript" src="{{asset('public/js/monthly.js')}}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
