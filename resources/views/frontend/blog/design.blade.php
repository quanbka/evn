@extends('frontend.layouts.master')
@section('content')
    <div class="body">
        <div class="design-feature-video" style="background-color: black;">
            <div class="container">
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/TCzJDk4ff6g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

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
        <div class="design-procedure">
            <div class="container">
                <div class="design-procedure-header">
                    <h2>THIẾT KẾ - SẮP ĐẶT KHÔNG GIAN NỘI THẤT</h2>
                    <p>Công ty thiết kế nội thất cao cấp hiện đại, đơn vị uy tín chuyên thiết kế nội thất - Với việc đề cao không gian sống sang trọng, đẳng cấp, tinh tế, phù hợp với phong cách, cá tính của mỗi thành viên trong từng gia đình; {{ config('info.name') }} Décor tự hào khi trở thành đối tác thiết kế và thi công nội thất cho các dự án biệt thự, căn hộ cao cấp: Vinhome Riverside, Royal City, Times City, Park Hill, Mipec Riverside.</p>
                </div>
                <div class="design-procedure-content">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://www.noithathoanmy.com.vn/blog/wp-content/uploads/2017/08/dich-vu-1-1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Bước 1</a></li>
    <li><a data-toggle="tab" href="#menu1">Bước 2</a></li>
    <li><a data-toggle="tab" href="#menu2">Bước 3</a></li>
    <li><a data-toggle="tab" href="#menu3">Bước 4</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Bước 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Bước 2</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Bước 3</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Bước 4</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    @include('frontend.layouts.slide-script')
@endsection
