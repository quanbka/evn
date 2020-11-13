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
    @include('frontend.header')
    <div id="front-content">
      <div id="cover-provider">
        <div class="ui container">
          <div class="text-60 text-uppercase text-white text-bold text-shadow">Nhà cung cấp</div>
        </div>
      </div>
      <div id="front-tabs">
        <div class="container ui">
          <div class="tabs-container">
            <a class="item anchor text-20 text-bold" href="#provider-section-1">Chính sách</a>
            <a class="item anchor text-20 text-bold" href="#provider-section-2">Chức năng - nhiệm vụ</a>
            <a class="item anchor text-20 text-bold" href="#provider-section-3">Đối tác</a>
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
                    <option value="1">Ngành điện</option>
                    <option value="2">Ngoài ngành điện</option>
                    <option value="3">Khác</option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui fluid dropdown">
                    <option value="" class="text-red">Điện áp</option>
                    <option selected value="1">2-<3</option>
                    <option value="2">3-<4</option>
                    <option value="3">4-<5</option>
                    <option value="4">5-<6</option>
                    <option value="5">6-<7</option>
                    <option value="6">7-<8</option>
                    <option value="7">8-<9</option>
                    <option value="8">9-<10</option>
                    <option value="9">>=10</option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui fluid dropdown">
                    <option value="" class="text-red">Loại mái</option>
                    <option selected value="1">Mái bằng</option>
                    <option value="2">Mái tôn</option>
                    <option value="3">Mái ngói</option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui fluid dropdown">
                    <option value="" class="text-red">Hệ</option>
                    <option value="1">1 pha</option>
                    <option value="2">3 pha</option>
                  </select>
                </div>
              </div>
            </div>
          </form>

          <div class="front-table-box prd-table">
            <table id="front-table" class="ui single line stackable table">
              <thead>
                <tr>
                  <th class="text-20">STT</th>
                  <th class="text-20">Tên thiết bị</th>
                  <th class="text-20">ĐVT</th>
                  <th class="text-20">Công suất</th>
                  <th class="text-20">Đơn giá (VNĐ)</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bold-text">
                  <td></td>
                  <td><p>Hệ 1 pha bao gồm các thiết bị</p></td>
                  <td></td>
                  <td></td>
                  <td>16,625,000</td>
                </tr>
                <tr>
                  <td>01</td>
                  <td><p>Tấm quang điện Mono Halfcell Longi 445wp, đáp ứng tiêu chuẩn quốc tế IEC, UL và CE</p></td>
                  <td>Tấm</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Inverter Growatt - 1 pha</td>
                  <td>Bộ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr class="active">
                  <td>03</td>
                  <td><p>Hệ thống giám sát và phân tích dữ liệu hệ thống năng lượng sạch tích hợp. Giám sát mọi lúc, mọi nơi qua internet, tự động phân tích dữ liệu, thống kê, dự doán các vấn đề/ sự cố của hệ thống</p></td>
                  <td>Hệ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>04</td>
                  <td><p>Tủ điện tiêu chuẩn hòa lưới EVN</p></td>
                  <td>Tủ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td><p>Vận chuyển từ kho các chi nhánh đến công trình trong vòng bán kính 30km</p></td>
                  <td>Lần</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>06</td>
                  <td><p>Giàn khung nhôm/ inox thiết kế theo tiêu chuẩn quốc tế, dễ lắp đặt trên mọi loại mái</p></td>
                  <td>Bộ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>07</td>
                  <td><p>Phụ kiện và dây dẫn đạt chuẩn, theo quy định kỹ thuật hòa lưới EVN</p></td>
                  <td>Bộ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>08</td>
                  <td><p>Khảo sát</p></td>
                  <td>Lần</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>09</td>
                  <td><p>Thiết kế, thi công lắp đặt, bản vẽ hoàn công, nghiệm thu, bàn giao hệ thống đưa vào sử dụng</p></td>
                  <td>Tấm</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr class="bold-text">
                  <td></td>
                  <td><p >Hệ 3 pha bao gồm các thiết bị</p></td>
                  <td></td>
                  <td></td>
                  <td>19,950,000</td>
                </tr>
                <tr>
                  <td>01</td>
                  <td><p>Tấm quang điện Mono Halfcell Longi 445wp, đáp ứng tiêu chuẩn quốc tế IEC, UL và CE</p></td>
                  <td>Tấm</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td><p>Inverter Growatt - 3 pha</p></td>
                  <td>Bộ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>03</td>
                  <td><p>Hệ thống giám sát và phân tích dữ liệu hệ thống năng lượng sạch tích hợp. Giám sát mọi lúc, mọi nơi qua internet, tự động phân tích dữ liệu, thống kê, dự doán các vấn đề/ sự cố của hệ thống</p></td>
                  <td>Hệ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>04</td>
                  <td><p>Tủ điện tiêu chuẩn hòa lưới EVN</p></td>
                  <td>Tủ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td><p>Vận chuyển từ kho các chi nhánh đến công trình trong vòng bán kính 30km</p></td>
                  <td>Lần</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>06</td>
                  <td><p>Giàn khung nhôm/ inox thiết kế theo tiêu chuẩn quốc tế, dễ lắp đặt trên mọi loại mái</p></td>
                  <td>Bộ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>07</td>
                  <td><p>Phụ kiện và dây dẫn đạt chuẩn, theo quy định kỹ thuật hòa lưới EVN</p></td>
                  <td>Bộ</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>08</td>
                  <td><p>Khảo sát</p></td>
                  <td>Lần</td>
                  <td>2-<3</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>09</td>
                  <td><p>Thiết kế, thi công lắp đặt, bản vẽ hoàn công, nghiệm thu, bàn giao hệ thống đưa vào sử dụng</p></td>
                  <td>Tấm</td>
                  <td>2-<3</td>
                  <td>-</td>
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
              <button class="button-primary form-btn">
                Biểu mẫu và Văn bản liên quan
              </button>
            </div>
          </div>
        </div>
      </div>

      <div id="provider-section-2" class="mb-60">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase  mt-80  text-grey">
            Đối tác
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

      @include('frontend.footer')

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
