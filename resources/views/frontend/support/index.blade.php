<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>EVNFC Solar</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="lib/semantic-ui/responsive-semantic-ui.css">
  <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css"
    rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" type="text/css" href="css/typography.css" />
</head>

<body>

  <div id="front-wrapper">
    <div id="front-header">
      <div class="ui grid">
        <div class="computer only row">
          <div class="ui container">
            <div class="ui grid front-menu">
              <div class="five wide column">
                <a href="index.html">
                  <img class="logo" src="images/logo.png">
                </a>
              </div>
              <div class="eleven wide column">
                <div class="top-menu">
                  <div class="dropdown">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                      <a href="intro.html" class="item font-14 text-bold text-uppercase">Giới thiệu </a>
                      <!-- <img src="./images/angle-down-solid.png" /> -->
                    </div>
                    <div class="dropdown-content">
                      <ul>
                        <li><a href="intro.html#section-1" >Về EVNFinance</a></li>
                        <li><a href="intro.html#section-2">Về Easy Solar</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="dropdown">
                    <div style="display: flex; justify-content: space-between; align-items: center;" class="prd-active">
                      <a href="support.html" class="item font-14 text-bold text-uppercase">Hỗ trợ </a>
                      <!-- <img src="./images/angle-down-solid.png" /> -->
                    </div>
                    <div class="dropdown-content">
                      <ul>
                        <li><a href="support.html">Q&A</a></li>
                        <li><a href="support.html">Hướng dẫn</a></li>
                      </ul>
                    </div>
                  </div>
                  <a href="contact.html" class="menu-item font-14 text-bold text-uppercase">Liên hệ</a>
                  <a href="#" class="menu-item font-14 text-bold text-uppercase">Đăng nhập</a>
                  <div class=" menu-item ui icon input">
                    <input class="prompt" type="text" placeholder="">
                    <i class="search icon"></i>
                  </div>
                  <div class="results"></div>
                </div>
                <div class="bottom-menu">
                  <div class="dropdown">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                      <a href="product.html" class="item font-14 text-bold text-uppercase">Sản phẩm </a>
                      <!-- <img src="./images/angle-down-solid.png" /> -->
                    </div>
                    <div class="dropdown-content">
                      <ul>
                        <li><a href="product.html">EasySolar CBCNV điện</a></li>
                        <li><a href="product.html">EasySolar hộ dân</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="dropdown">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                      <a href="provider.html" class="item font-14 text-bold text-uppercase">Nhà cung cấp</a>
                      <!-- <img src="./images/angle-down-solid.png" /> -->
                    </div>
                    <div class="dropdown-content">
                      <ul>
                        <li><a href="provider.html#provider-section-1" >Chính sách</a></li>
                        <li><a href="provider.html#provider-section-2" >Chức năng</a></li>
                        <li><a href="provider.html#provider-section-3" >Đối tác</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="dropdown">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                      <a href="advisory.html"
                        class="menu-item font-14 text-bold text-uppercase">Tư vấn - trải nghiệm
                      </a>
                      <!-- <img src="./images/angle-down-solid.png" /> -->
                    </div>
                    <div class="dropdown-content">
                      <ul>
                        <li><a href="https://solar.evn.com.vn/#/calculator" target="_blank">Công cụ khảo sát EVNSOLAR</a></li>
                        <li>Thủ tục điện</li>
                        <li>Pháp luật</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="tablet mobile only row">
          <div class="column">
            <div class="ui menu">
              <a href="#" class="item">
                <img class="logo" src="images/logo.png">
              </a>
              <div class="right menu">
                <a id="mobile_item" class="item"><i class="bars icon"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pushable">
        <div id="sidebar" class="ui sidebar other-sidebar vertical menu">
          <button class="side-bar-close-icon"><i class="close icon"></i></button>
          <div class="sidebar-search">
            <div class="tem ui icon input">
              <input class="prompt" type="text" placeholder="">
              <i class="search icon"></i>
            </div>
          </div>
          <a href="contact.html" class="item font-14 text-bold text-uppercase">Liên hệ</a>
          <a href="product.html" class="item font-14 text-bold text-uppercase">Sản phẩm</a>
          <a href="provider.html" class="item font-14 text-bold text-uppercase">Nhà cung cấp</a>
          <a href="https://solar.evn.com.vn/#/calculator" target="_blank"
            class="item font-14 text-bold text-uppercase">Tư vấn
            - trải nghiệm
          </a>
          <div class="siderbar-bottom">
            <a href="intro.html" class="item font-14 text-bold text-uppercase">Giới thiệu</a>
            <a href="support.html" class="item font-14 text-bold text-uppercase">Hỗ trợ</a>
            <a href="#" class="item font-14 text-bold text-uppercase">Đăng nhập</a>
          </div>
        </div>
      </div>
    </div>
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
      <div class="ui container">
        <a href="#">
          <img class="footer-logo mb-40 mt-40" src="images/logo.png">
        </a>
        <div class="ui equal width grid stackable">
          <div class="column">
            <div class="text-20 text-bold text-blue mb-20">Công ty Tài chính Cổ phần Điện lực</div>
            <div class="text-14 text-bold text-blue">Tầng 14,15 & 16 Tháp B, tòa nhà EVN</div>
            <div class="text-14  text-blue">11 Cửa Bắc, P. Trúc Bạch, Q. Ba Đình, TP. Hà Nội</div>
            <div class="text-14  text-blue">Điện thoại: (84-24) 2222.9999</div>
            <div class="text-14  text-blue">Fax: (84-24) 2222.1999</div>
            <div class="text-14  text-blue mt-40">Giấy phép số 90/GP-TTĐT cấp ngày 29/08/2008</div>

          </div>
          <div class="column">
            <div class="text-20 text-bold text-blue mb-20">Chi nhánh Thành phố Đà Nẵng</div>
            <div class="text-14  text-blue">Lô A2.12, Đường 30 tháng 4, P. Hoà Cường Bắc, Q. Hải Châu, TP. Đà Nẵng
            </div>
            <div class="text-14  text-blue">Điện thoại: (84-236) 222.3456</div>
            <div class="text-14  text-blue">Fax: (84-236) 222.22409</div>

          </div>
          <div class="column">
            <div class="text-20 text-bold text-blue mb-20">Chi nhánh Thành phố Hồ Chí Minh</div>
            <div class="text-14  text-blue">Lô H (ii) và I (i), Tầng 9, Tòa nhà Sunwah Tower, 115 Đại lộ Nguyễn Huệ,
              P. Bến Nghé, Q. 1, TP. HCM
            </div>
            <div class="text-14  text-blue">Điện thoại: (84-28) 2222.9999</div>
            <div class="text-14  text-blue">Fax: (84-28) 2222.8999</div>

          </div>
        </div>
      </div>
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
