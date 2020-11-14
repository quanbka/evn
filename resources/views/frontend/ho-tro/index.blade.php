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
            <div class="title active odd text-20 text-bold">
              <i class="dropdown icon"></i>
              Tôi muốn tìm hiểu đối tượng cho vay của gói Easy Solar?
            </div>
            <div class="content active">
              <p class="transition visible text-14" style="display: block !important;">Đối tượng áp dụng CBCNV Đã ký hợp
                đồng lao động không xác định thời hạn với ngành điện, hiện đang công tác tại EVNHCMC.</p>
            </div>
            <div class="title text-20 text-bold">
              <i class="dropdown icon"></i>
              Tôi có thể được vay tối đa bao nhiêu để lắp đặt Hệ thống Điện mặt trời mái nhà EVNSOLAR?
            </div>
            <div class="content">
              <p class="transition visible text-14" style="display: block !important;">Hạn mức cho vay tối đa của chương
                trình đến 85% tổng mức đầu tư hệ thống.
              </p>
            </div>
            <div class="title text-20 odd text-bold">
              <i class="dropdown icon"></i>
              Tôi cần có hồ sơ/ giấy tờ gì của cơ quan quản lý để xác nhận quá trình làm việc tại EVN hoặc đơn vị thành
              viên?
            </div>
            <div class="content">
              <p class="transition visible text-14" style="display: block !important;">Nếu Quý khách hàng là CBCNV có
                nhu cầu vay, Quý khách hàng có thể thực hiện theo mẫu được cung cấp bởi EVNFinance hoặc yêu cầu
                EVNFinance thực hiện xác nhận với cơ quan quản lý của Quý khách hàng.</p>
            </div>

            <div class="title text-20 text-bold">
              <i class="dropdown icon"></i>
              Tôi muốn biết các điều kiện về mái nhà để lắp đặt hệ thống Điện mặt trời mái nhà EVNSOLAR?
            </div>
            <div class="content">
              <p class="transition visible text-14" style="display: block !important;">Quý khách hàng có thể liên hệ
                ngay với EVNFinance để kết nối với nhà cung cấp. Đơn vị khảo sát của Nhà cung cấp sẽ đến tận nơi địa chỉ
                lắp đặt để  tư vấn cho Quý khách hàng.</p>
            </div>

            <div class="title text-20 odd text-bold">
              <i class="dropdown icon"></i>
              Trong trường hợp tôi muốn bán điện từ hệ thống Điện mặt trời mái nhà EVNSOLAR thì tôi cần thực hiện những
              thủ tục như thế nào?
            </div>
            <div class="content">
              <p class="transition visible text-14" style="display: block !important;">Quý khách hàng sẽ được Nhà cung
                cấp phối hợp với cơ quan Điện lực địa phương thực hiện thủ tục này</p>
            </div>

            <div class="title text-20 text-bold">
              <i class="dropdown icon"></i>
              Tôi cần chuẩn bị những hồ sơ/ thủ tục gì để được xác nhận đủ điều kiện lắp đặt và đấu nối của chương trình
              Điện mặt trời mái nhà EVNSOLAR?
            </div>
            <div class="content">
              <p class="transition visible text-14" style="display: block !important;">Quý khách hàng sẽ được Nhà cung
                cấp phối hợp với cơ quan Điện lực địa phương thực hiện thủ tục này.
              </p>
            </div>
          </div>
        </div>
      </div>


      <div class="ui container">
        <hr />
        <div id="support-section-2" class="mt-60 mb-40">
          <div class="content">
            <div class="text-20 text-bold text-uppercase text-white">Tư vấn trực tiếp</div>
            <div class="text-40 text-bold text-uppercase text-white">024.2222.9999</div>
            <div class="text-14 text-bold text-white">Máy lẻ 761 hoặc 762 hoặc 763</div>
            <div class="text-14 text-bold text-white">Hoặc gửi mail tới địa chỉ solar@evnfc.vn</div>
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
