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
            @include('frontend.menu')

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
        <div class="ui sidebar other-sidebar vertical menu">
          <div class="sidebar-search">
            <div class="tem ui icon input">
              <input class="prompt" type="text" placeholder="">
              <i class="search icon"></i>
            </div>
          </div>
          <a href="#" class="item font-14 text-bold text-uppercase">Liên hệ</a>
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
      <div id="cover-intro">
        <div class="ui container">
          <div class="text-60 text-uppercase text-white text-bold text-shadow">Nhà cung cấp</div>
        </div>
      </div>
      <div id="front-tabs">
        <div class="container ui">
          <div class="tabs-container">
            <a class="item anchor text-20 text-bold" href="#provider-section-1">Chính sách sản phẩm</a>
            <a class="item anchor text-20 text-bold" href="#provider-section-2">Chức năng - nhiệm vụ của nhà cung
              cấp</a>
            <a class="item anchor text-20 text-bold" href="#provider-section-3">Đối tác chiến lược</a>
          </div>
        </div>
      </div>

      <div id="provider-section-1">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase  mt-30 text-grey">
            Chính sách sản phẩm
          </div>
          <form class="ui form right aligned">
            <div class="field">
              <div class="three fields">
                <div class="field">
                  <select class="ui fluid dropdown">
                    <option value="" class="text-red">Đối tượng khách hàng</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui fluid dropdown">
                    <option value="" class="text-red">Điện áp</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui fluid dropdown">
                    <option value="" class="text-red">Loại mái</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                  </select>
                </div>
              </div>
            </div>
          </form>

          <div class="front-table-box">
            <table id="front-table" class="ui single line stackable table">
              <thead>
                <tr>
                  <th class="text-20">STT</th>
                  <th class="text-20">Tên thiết bị</th>
                  <th class="text-20">ĐVT</th>
                  <th class="text-20">Công suất</th>
                  <th class="text-20">Giá</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Inverter Growatt - 1 pha</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr class="active">
                  <td>03</td>
                  <td>Hệ thống giám sát và phân tích dữ liệu hệ thống năng lượng sạch tích hợp.</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>Tủ điện tiêu chuẩn hòa lưới EVN</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Tấm quang điện Mono Hafcell Longi 445 wp</td>
                  <td>Tấm</td>
                  <td>2-3</td>
                  <td>10000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div id="provider-section-2" class="mb-60">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase  mt-40 mb-30 text-grey">
            Chức năng – Nhiệm vụ của Nhà cung cấp
          </div>

          <div class="ui stackable grid list-item">
            <div class="three column row mb-20">
              <div class="column item-card">
                <div>
                  <img src=" images/icon-18.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">KHẢO SÁT THỰC TẾ
                    ĐỊA ĐIỂM LẮP ĐẶT</div>
                </div>
              </div>
              <div class="column item-card">
                <div>
                  <img src=" images/icon-19.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">TƯ VẤN PHƯƠNG ÁN
                    LẮP ĐẶT</div>
                </div>
              </div>
              <div class="column item-card">
                <div>
                  <img src=" images/icon-20.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">TIẾN HÀNH KÝ HỢP ĐỒNG VÀ
                    LẮP ĐẶT, NGHIỆM THU</div>
                </div>
              </div>
            </div>
            <div class="three column centered row">
              <div class="column item-card">
                <div>
                  <img src=" images/icon-21.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">HỖ TRỢ ĐẦU NỐI
                    CHO KHÁCH HÀNG</div>
                </div>
              </div>
              <div class="column item-card">
                <div>
                  <img src=" images/icon-22.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">
                    ĐẢM BẢO TRÁCH NHIỆM VÀ QUYỀN
                    HẠN THEO HỢP ĐỒNG HỢP TÁC KÝ VỚI EVN FINANCE
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="provider-section-3">
        <div class="ui container">
          <div class="download-form">
            <div class="button-box">
              <button class="button-primary">
                Biểu mẫu và Văn bản liên quan
              </button>
            </div>
          </div>
        </div>
      </div>

      <div id="provider-section-2" class="mb-60">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase  mt-80  text-grey">
            Đối tác chiến lược
          </div>
          <div class="partners">
            <div class="font-18 font-bold text-white mb-20">
              Các đối tác uy tín
            </div>
            <div class="partners-swiper-container swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/lg3.png" />
                </div>
                <div class="swiper-slide">
                  <img src="images/p2.png" />
                </div>
                <div class="swiper-slide">
                  <img src="images/lg3.png" />
                </div>

              </div>
            </div>
            <div class="swiper-button-prev partners-button-prev">
              <img class="btn-swiper" src='images/arrow-left.png' />
            </div>
            <div class="swiper-button-next partners-button-next">
              <img class="btn-swiper" src='images/arrow-right.png' />
            </div>
          </div>
        </div>
      </div>


      <div id="provider-section-2" class="mb-60">
        <div class="ui container">
          <div class="ui stackable grid">
            <div class="eight wide column inter">
            </div>
            <div class="eight wide column content-box">
              <div class="text-30 mb-20 text-red">
                Công ty cổ phần <strong>INTERSOLAR</strong>
              </div>
              <div class="text-20 text-bold text-uppercase mb-30">TẦM NHÌN</div>
              <div class="text-14 mb-30">Doanh nghiệp đầu tư hàng đầu trong lĩnh vực điện mặt trời mái nhà tại Việt Nam.
                Mang lại giải pháp tối ưu cho bài toán thiếu hụt năng lượng.</div>
              <div class="text-20 text-bold text-uppercase mb-30">SỨ MỆNH</div>
              <div class="text-14 mb-30">“Năng Lượng Sạch Cho Cuộc Sống “ Tạo ra nguồn năng lượng sạch với giải pháp
                công nghệ chất lượng cao và tiết kiệm chi phí..</div>
              <div class="text-20 text-bold text-uppercase mb-30">GIÁ TRỊ CỐT LÕI</div>
              <div class="text-14 mb-30">Phát triển các giá trị cốt lõi trên tinh thần hợp tác, sáng tạo để có được
                nhưng giá trị bền vững cho sự phát triển..</div>
              <hr />
              <div class="text-14 mb-30">Ngày 10/10, EVNFinance và nhà thầu InterSolar đã có buổi ký kết thỏa thuận hợp
                tác toàn diện. Theo đó, InterSolar sẽ trở thành một trong các nhà thầu cung cấp vật tư, thiết bị cho các
                dự án đầu tư, lắp đặt ĐMTMN được giải ngân từ gói tín dụng Easy Solar.</div>
            </div>

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
        loop: true,
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
