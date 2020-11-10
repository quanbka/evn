@extends('frontend.layouts.master')
@section('content')
    <div class="body">
        @include('frontend.layouts.slide')
        <div class="feature">
            <div class="container">
                <div class="row">
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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

@endsection

@section('script')
    @include('frontend.layouts.slide-script')
@endsection
