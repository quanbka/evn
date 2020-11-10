<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nội thất {{ config('info.name') }} - Trang chủ</title>

    <!-- Bootstrap -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="/frontend/css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/css/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/frontend/css/custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="header">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="topbar-left col-md-9 hidden-sm hidden-xs">
                        <ul class="topbar-left-list">
                            <li>
                                <a href="javascript:void(0)">{{ config('info.name') }} Décor</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">{{ config('info.name') }} Galerry</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Nhà máy sản xuất Nội thất</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-left col-xs-5 hidden-md hidden-lg">
                        <ul class="topbar-left-list">
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-phone"></i> {{ config('info.hotline') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-right col-md-3 col-xs-7">
                        <ul class="topbar-right-list">
                            <li>
                                <a href="{{ route('login') }}">Đăng nhập</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Đăng ký</a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>


        </div>
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="header-left col-md-3">
                            <img src="/frontend/images/logo.png" alt="" class="logo">
                        </div>
                    </div>

                    <div class="header-center col-md-6">
                        <form class="" action="" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="header-right col-md-3 hidden-xs hidden-sm">
                        <a href="javascript:void(0)">
                            <span>Tư vấn (9:30 - 21:30)</span>
                            <strong>{{ config('info.hotline') }}</strong>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="menu">
            <nav class="navbar navbar-inverse navbar-static">
                 <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <div class="collapse navbar-collapse js-navbar-collapse">
                        <div class="row">
                            <ul class="nav navbar-nav">
                                <li class="dropdown dropdown-large">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <b class="caret"></b></a>

                                    <ul class="dropdown-menu dropdown-menu-large row">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="col-md-3 col-sm-6">
                                                    <h3><a href="javascript:void(0)">Heading 3</a></h3>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                </ul>
                                                <ul class="col-md-3 col-sm-6">
                                                    <h3><a href="javascript:void(0)">Heading 3</a></h3>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                </ul>
                                                <ul class="col-md-3 col-sm-6">
                                                    <h3><a href="javascript:void(0)">Heading 3</a></h3>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                </ul>
                                                <ul class="col-md-3 col-sm-6">
                                                    <h3><a href="javascript:void(0)">Heading 3</a></h3>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                    <li><a href="javascript:void(0)">Example</a></li>
                                                </ul>
                                            </div>
                                        </div>




                                    </ul>

                                </li>
                                <li class="active">
                                    <a href="javascript:void(0)">Đang giảm giá</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)">Hàng mới về</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)">Bộ sưu tập</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)">Thiết kế nội thất</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)">Dự án khách hàng</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)">Cẩm nang nhà đẹp</a>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)">Tin tức - sự kiện</a>
                                </li>

                            </ul>
                        </div>


                    </div><!-- /.nav-collapse -->
                </div>
            </nav>
        </div>

    </div>
    <div class="body">
        <div class="slider">
            <div class="container">
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <img src="/frontend/images/slide1.jpg" alt="">
                            </div>
                            <div class="owl-item">
                                <img src="/frontend/images/slide2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="owl-controls">
                        <div class="owl-nav"></div>
                        <div class="owl-dots"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature">
            <div class="container">
                <div class="row">
                    <a href="javascript:void(0)">
                        <div class="col-md-6">
                            <img src="/frontend/images/feature1.jpg" class="img-responsive">
                            <div class="content-container">
                                <div class="content">
                                    <h3>Nội thất phòng khách</h3>
                                    <p>Sofa. Bàn trà. Kệ tivi</p>
                                </div>
                            </div>

                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="col-md-6">
                            <img src="/frontend/images/feature2.jpg" class="img-responsive">
                            <div class="content-container">
                                <div class="content">
                                    <h3>Nội thất phòng ăn</h3>
                                    <p>Bàn ăn. Ghế ăn</p>
                                </div>
                            </div>

                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="col-md-6">
                            <img src="/frontend/images/feature3.jpg" class="img-responsive">
                            <div class="content-container">
                                <div class="content">
                                    <h3>Nội thất phòng ngủ</h3>
                                    <p>Giường. Tủ áo. Bàn trang điểm</p>
                                </div>
                            </div>

                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="col-md-6">
                            <img src="/frontend/images/feature4.jpg" class="img-responsive">
                            <div class="content-container">
                                <div class="content">
                                    <h3>Đồ trang trí</h3>
                                    <p>Đèn. Thảm sản. Trang. Bình hoa</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div class="service">
            <div class="container">
                <div class="service-header">
                    <h2>THIẾT KẾ - SẮP ĐẶT KHÔNG GIAN NỘI THẤT</h2>
                    <p>Công ty thiết kế nội thất cao cấp hiện đại, đơn vị uy tín chuyên thiết kế nội thất - Với việc đề cao không gian sống sang trọng, đẳng cấp, tinh tế, phù hợp với phong cách, cá tính của mỗi thành viên trong từng gia đình; {{ config('info.name') }} Décor tự hào khi trở thành đối tác thiết kế và thi công nội thất cho các dự án biệt thự, căn hộ cao cấp: Vinhome Riverside, Royal City, Times City, Park Hill, Mipec Riverside.</p>
                </div>
                <div class="service-content">
                    <a href="javascript:void(0)">
                        <div class="col-md-6">
                            <img src="/frontend/images/luxury.jpg" class="img-responsive">
                            <div class="service-content-container">
                                <div class="content">
                                    <h3>Luxury</h3>
                                    <p>Tư vấn - Thiết kế - Thi công nội thất cao cấp</p>
                                </div>
                            </div>

                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="col-md-6">
                            <img src="/frontend/images/design.jpg" class="img-responsive">
                            <div class="service-content-container">
                                <div class="content">
                                    <h3>Thiết kế sắp đặt không gian nội thất</h3>
                                    <p>Tư vấn - Thiết kế - Thi công nội thất căn hộ chung cư, Biệt thự, Nhà Phố</p>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="project">
            <div class="container">
                <div class="project-header">
                    <h2>DỰ ÁN ĐÃ THỰC HIỆN</h2>
                    <p>Với phương châm “Sự hài lòng của quý khách hàng là thành công của chúng tôi”, {{ config('info.name') }} Decor đề cao giá trị và sự khác biệt trong từng sản phẩm, chinh phục khách hàng bằng những những sản phẩm nội thất chất lượng cao, dịch vụ chuyên nghiệp. </p>
                </div>
                <div class="project-content">
                    <a href="javascript:void(0)">
                        <div class="col-md-4">
                            <img src="/frontend/images/thi-cong-biet-thi-chi-phu-tu-son-bac-ninh.jpg" class="img-responsive">
                            <div class="service-content-container">
                                <div class="content">
                                    <h3>Thi công biệt thự chị Phúc</h3>
                                    <p>Từ Sơn - Bắc Ninh</p>
                                </div>
                            </div>

                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="col-md-4">
                            <img src="/frontend/images/thi-cong-chung-cu-anh-huong.jpg" class="img-responsive">
                            <div class="service-content-container">
                                <div class="content">
                                    <h3>Thi công chung cư anh Hưởng</h3>
                                    <p>Gia Lâm - Hà Nội</p>
                                </div>
                            </div>

                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="col-md-4">
                            <img src="/frontend/images/thi-cong-biet-thu-vinhome-riverside.jpg" class="img-responsive">
                            <div class="service-content-container">
                                <div class="content">
                                    <h3>Thi công biệt thự Vinhome Riverside</h3>
                                    <p>Vinhome - Hà Nội</p>
                                </div>
                            </div>

                        </div>
                    </a>

                </div>
            </div>

        </div>
        <div class="register">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 hidden-sm hidden-xs">
                        <img src="/frontend/images/register.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-xs-12 hidden-lg hidden-md">
                        <img src="/frontend/images/register-small.jpg" alt="" class="img-responsive" style="margin: auto;">
                    </div>
                </div>

            </div>

        </div>
        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2><a href="#">Tin tức - Sự kiện</a></h2>
                        <div class="row">


                            <div class="col-md-7">

                                <div class="feature-post">
                                    <a href="#">
                                    <div class="img-holder">
                                        <img src="https://www.noithathoanmy.com.vn/blog/wp-content/uploads/2018/08/8.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="title-holder">
                                        <h4>Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!</h4>
                                        <p>
                                            Ngày 05/8/2018 vừa qua, lễ công bố và trao giải cuộc thi ảnh “Không gian sắc màu” đã diễn ra tại dự án Season Avenue,                                    ...
                                        </p>
                                    </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="item_news">
                                    <a href="https://www.noithathoanmy.com.vn/blog/noi-that-hoan-my-lam-het-suc-choi-het-minh" title="Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!">
                                        <img width="120" src="https://www.noithathoanmy.com.vn/blog/wp-content/uploads/2018/05/team-noi-that-hoan-my.jpg" alt="Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!">

                                        <h4>Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!</h4>
                                     </a>
                                </div>
                                <div class="item_news">
                                    <a href="https://www.noithathoanmy.com.vn/blog/noi-that-hoan-my-lam-het-suc-choi-het-minh" title="Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!">
                                        <img width="120" src="https://www.noithathoanmy.com.vn/blog/wp-content/uploads/2018/05/team-noi-that-hoan-my.jpg" alt="Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!">

                                        <h4>Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!</h4>
                                     </a>
                                </div>
                                <div class="item_news">
                                    <a href="https://www.noithathoanmy.com.vn/blog/noi-that-hoan-my-lam-het-suc-choi-het-minh" title="Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!">
                                        <img width="120" src="https://www.noithathoanmy.com.vn/blog/wp-content/uploads/2018/05/team-noi-that-hoan-my.jpg" alt="Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!">

                                        <h4>Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!</h4>
                                     </a>
                                </div>
                                <div class="item_news">
                                    <a href="https://www.noithathoanmy.com.vn/blog/noi-that-hoan-my-lam-het-suc-choi-het-minh" title="Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!">
                                        <img width="120" src="https://www.noithathoanmy.com.vn/blog/wp-content/uploads/2018/05/team-noi-that-hoan-my.jpg" alt="Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!">

                                        <h4>Nội thất {{ config('info.name') }} - Làm hết sức, chơi hết mình!</h4>
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h2><a href="#">Video</a></h2>
                        <iframe width="100%" height="285" src="https://www.youtube.com/embed/FERRGoSJ6Uo?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="footer">
        <div class="footer-content" style="background-color: rgb(247, 247, 247);">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Doanh nghiệp</h3>
                        <ul>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Hình thức thanh toán</a></li>
                            <li><a href="#">Hướng dẫn mua hàng</a></li>
                            <li><a href="#">Bảo hành - Đổi trả</a></li>
                            <li><a href="#">Quy định - vận chuyển</a></li>
                            <li><a href="#">Hệ thống showroom</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Liên kết</h3>
                        <ul>
                            <li><a href="#">Thương hiệu {{ config('info.name') }} Decor</a></li>
                            <li><a href="#">Thương hiệu {{ config('info.name') }} Galerry</a></li>
                            <li><a href="#">Nhà máy sản xuất nội thất</a></li>
                            <li><a href="#">Quy trình sản xuất nội thất</a></li>
                            <li><a href="#">Tuyển dụng Nhân sự</a></li>
                            <li><a href="#">Liên hệ qua Email</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Hỗ trợ</h3>
                        <ul>
                            <li>Mua hàng : <strong>{{ config('info.hotline') }}</strong></li>
                            <li>CSKH : <strong>{{ config('info.hotline') }}</strong></li>
                            <li>Bảo hành : <strong>{{ config('info.hotline') }}</strong></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Kết nối với chúng tôi</h3>
                        <ul id="footer-content-4" class="footer-link showhide">
                            <li><a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=35086" target="_blank" rel="nofollow"><img src="https://www.noithathoanmy.com.vn/pub/media/wysiwyg/FooterLicense_1.png" alt="" width="128"></a> <a class="dmca-badge" title="DMCA.com Protection Status" href="https://www.dmca.com/Protection/Status.aspx?ID=0a937bc6-1ee2-4814-9a89-84168288e9aa&amp;refurl=https://www.noithathoanmy.com.vn/"></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright" style="background-color">
            <div class="container">
                <div class="row">
                    <p><a href="#">BẢO MẬT THÔNG TIN</a><span> </span> <a href="#"> ĐIỀU KHOẢN SỬ DỤNG</a></p>
                    <p>© 2017 - Công ty TNHH TM - DV HTL Việt Nam. Trụ sở: Tầng 2, nhà 1A, ngõ 199 đường Trường Chinh, Phường Khương Mai, Quận Thanh Xuân, Hà Nội.<br>
                    Giấy chứng nhận Đăng ký kinh doanh số 0104357607 do KHĐT TP Hà Nội cấp ngày 05/01/2010</p>
                </div>
            </div>

        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
              items: 1,
              nav: true,
              navText: [
                  '<i class="fas fa-chevron-left"></i>',
                  '<i class="fas fa-chevron-right"></i>'
              ]
          });
        });
    </script>
</body>
</html>
