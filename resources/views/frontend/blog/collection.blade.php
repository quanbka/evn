@extends('frontend.layouts.master')
@section('content')
    <div class="body">
        @include('frontend.layouts.slide')
        <div class="container">

            <div class="collection-heading text-center">
                <h3>BỘ SƯU TẬP NỘI THẤT CAO CẤP</h3>
                <p>Mẫu nội thất phòng khách, phòng ngủ, phòng bếp có thiết kế đẹp và cao cấp được thực hiện bởi Nội Thất {{ config('info.name') }}.</p>
            </div>
            <hr>
            <?php
                $collections = [
                    [
                        'name' => "PHÒNG KHÁCH"
                    ],
                    [
                        'name' => "PHÒNG NGỦ"
                    ],
                    [
                        'name' => "PHÒNG BẾP"
                    ],
                ];
            ?>
            @foreach($collections as $collection)

            <div class="project">
                <div class="project-header">
                    <h3>MẪU {{ $collection['name'] }}</h3>
                    <p>Với phương châm “Sự hài lòng của quý khách hàng là thành công của chúng tôi”, {{ config('info.name') }} Decor đề cao giá trị và sự khác biệt trong từng bài viết, chinh phục khách hàng bằng những những bài viết nội thất chất lượng cao, dịch vụ chuyên nghiệp. </p>
                </div>
                <div class="project-content">
                    <a href="javascript:void(0)">
                        <div class="col-md-4">
                            <img src="/frontend/images/thi-cong-biet-thi-chi-phu-tu-son-bac-ninh.jpg" class="img-responsive">
                            <div class="service-content-container">
                                <div class="content">
                                    <h3>Mẫu {{ $collection['name'] }} 1</h3>
                                </div>
                            </div>

                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="col-md-4">
                            <img src="/frontend/images/thi-cong-chung-cu-anh-huong.jpg" class="img-responsive">
                            <div class="service-content-container">
                                <div class="content">
                                    <h3>Mẫu {{ $collection['name'] }} 2</h3>
                                </div>
                            </div>

                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="col-md-4">
                            <img src="/frontend/images/thi-cong-biet-thu-vinhome-riverside.jpg" class="img-responsive">
                            <div class="service-content-container">
                                <div class="content">
                                    <h3>Mẫu {{ $collection['name'] }} 3</h3>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>

            </div>
            <div class="clearfix">

            </div>
            <hr>
            @endforeach

        </div>
    </div>

@endsection

@section('script')
    @include('frontend.layouts.slide-script')
@endsection
