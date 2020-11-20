<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('frontend.head')

<body>

    <div id="front-wrapper">
        @include('frontend.header')
    <div id="front-content">
        <div id="cover-advisory">
            <div class="ui container">
            <div class="text-60 text-uppercase text-white text-bold text-shadow">TƯ VẤN - TRẢI  NGHIỆM </div>
            <a class="button-primary anchor advisory-btn" href="https://solar.evn.com.vn/#/calculator" target="_blank">
                Công cụ khảo sát EVNSOLAR
            </a>
        </div>
    </div>
    <div class="advisory-content">
        <div id="front-tabs">
            <div class="container ui">
                <div class="tabs-container">
                    <a class="item anchor text-20 text-bold" href="#">Thủ tục điện</a>
                    <a class="item anchor text-20 text-bold" href="#">Pháp luật</a>
                </div>
            </div>
        </div>
        <div class="template-reference">
            <table id="front-table" class="ui single line table padding-first-child">
                <thead>
                    <tr>
                        <th colspan="2">VĂN BẢN THAM KHẢO</td>
                    </tr>
                </thead>
                <?php
                  $slides = getConfig('van-ban', '[]');
                  $slides = json_decode($slides);
                ?>
                @foreach ($slides as $key => $item)
                    <tr>
                        <td>
                          <p>{{ $item->title }}</p>
                        </td>
                        <td>
                            <a href="{{ $item->image_url }}" target="_blank" ><i class="ui icon arrow alternate circle down"></i></a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    <div id="front-bottom">
        <div class="ui container">
            <div class="ui stackable grid">
                <div class="eight wide column">
                <a class="text-30 anchor" href="index.html#gioi-thieu">
                    Đăng ký <strong> Gói vay</strong>
                </a>
                </div>
                <div class="right aligned eight wide column">
                <a href="#front-wrapper" class="text-20 anchor">
                    Lên đầu trang
                    <i class="ui icon arrow alternate circle up"></i>
                </a>
                </div>

            </div>
        </div>
    </div>
    </div>

    <div class="footer-container">
      @include('frontend.footer')
    </div>
</body>

</html>