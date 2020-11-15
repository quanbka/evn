<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('frontend.head')

<body>

  <div id="front-wrapper">
    @include('frontend.header')
    <div id="front-content">
      <div id="cover-contact">
        <div class="ui container">
          <div class="text-60 text-uppercase text-white text-bold text-shadow">Hỗ trợ</div>
        </div>
      </div>
      <div id="front-tabs">
        <div class="container ui">
          <div class="tabs-container">
            <a class="item anchor text-20 text-bold" href="#support-section-1">Q&A Sản phẩm</a>
            <!-- <a class="item anchor text-20 text-bold" href="#support-section-1">Hướng dẫn đăng ký cấp</a>
            <a class="item anchor text-20 text-bold" href="#support-section-1">Hướng dẫn ký kết</a> -->
            <a class="item anchor text-20 text-bold" href="#support-section-1">Mẫu biểu</a>
          </div>
        </div>
      </div>

      <div id="support-section-1" class="mt-40 mb-60">
        <div class="ui container">
          <div class="ui styled fluid accordion">
              <?php
                $slides = getConfig('faq', '[]');
                $slides = json_decode($slides);
              ?>
              @foreach ($slides as $item)
                  <div class="title  odd text-20 text-bold">
                    {{ $item->title }}<i class="dropdown icon"></i>
                  </div>
                  <div class="content ">
                    <p class="transition visible text-14" style="display: block !important;">{{ $item->text }}</p>
                  </div>

              @endforeach


          </div>
        </div>
      </div>


      <div class="ui container">
        <hr />
        <div id="support-section-2" class="mt-60 mb-40">
          <div class="content">
            <div class="text-20 text-bold text-uppercase text-white">Tư vấn trực tiếp</div>
            <div class="text-40 text-bold text-uppercase text-white">{{ getConfig('hotline') }}</div>
            <div class="text-14 text-bold text-white">{{ getConfig('hotline.text') }}</div>
            <div class="text-14 text-bold text-white">Hoặc gửi mail tới địa chỉ {{ getConfig('email') }}</div>
          </div>
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

    <script type="text/javascript" src="lib/jquery-3.3.1.min.js"></script>
    <script
      src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
    <script type="text/javascript" src="lib/fullpage/script.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script type="text/javascript">
      var mySwiperw = new Swiper('.partners-swiper-container', {
        direction: 'horizontal',
        navigation: {
          nextEl: '.partners-button-next',
          prevEl: '.partners-button-prev',
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        }
      })
    </script>

</body>

</html>
