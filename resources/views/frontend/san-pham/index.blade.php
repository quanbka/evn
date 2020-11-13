<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('frontend.head')

<body>

  <div id="front-wrapper">
    @include('frontend.header')
    <div id="front-content">
      <div id="cover-intro">
        <div class="ui container">
          <div class="text-60 text-uppercase text-white text-bold text-shadow">Sản phẩm</div>
          <div class="text-40 text-bold text-white mb-20 text-shadow">EasySolar CBCNV điện</div>
          <a class="button-primary anchor product-register-btn" href="index.html#dang-ky">
            Đăng ký vay
          </a>
        </div>
      </div>
      <div id="front-tabs">
        <div class="container ui">
          <div class="tabs-container">
            <a class="item anchor text-20 text-bold" href="#product-section-1">Đối tượng</a>
            <a class="item anchor text-20 text-bold" href="#product-section-2">Chính sách</a>
            <a class="item anchor text-20 text-bold" href="#product-section-3">Hồ sơ</a>
          </div>
        </div>
      </div>

      <div id="product-section-1">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase  mt-30 text-grey">
            Đối tượng áp dụng gói vay
            <img class="section-img-solar" src='images/lg2.png' />
          </div>

          <div class="ui three column stackable grid list-item no-border">
            <div class="column item-card">
              <div>
                <img src=" images/icon-7.png" />
                <div class="text-14 text-justify desc">Đã ký HĐLĐ không xác định thời hạn với ngành điện, hiện đang
                  công
                  tác tại EVN hoặc các đơn vị thành viên (đơn vị QLLĐ sẽ xác nhận nhân thân)
                </div>
              </div>
            </div>

            <div class="column item-card">
              <div>
                <img src=" images/icon-8.png" />
                <div class="text-14 text-justify desc">
                  Là chủ sở hữu hợp pháp hoặc đồng sở hữu với vợ/chồng (thuộc tài sản chung) nhà ở nơi lắp đặt hệ
                  thống
                  ĐMTMN
                </div>
              </div>
            </div>
            <div class="column item-card">
              <div>
                <img src=" images/icon-9.png" />
                <div class="text-14 text-justify desc">
                  Mái nhà để lắp đặt đủ điều kiện để lắp (kết cấu, tuổi thọ công trình, an ninh và an toàn cháy nổ sẽ
                  do
                  nhà thầu EPC khảo sát, đánh giá)
                </div>
              </div>
            </div>
            <div class="column item-card">
              <div>
                <img src=" images/icon-10.png" />
                <div class="text-14 text-justify desc">
                  Lưới điện khu vực lắp ĐMTMN đủ điều kiện kỹ thuật cho phép nối lưới (Điện lực QLHT xác nhận khả năng
                  nối lưới)
                </div>
              </div>
            </div>
            <div class="column item-card">
              <div>
                <img src=" images/icon-11.png" />
                <div class="text-14 text-justify desc">
                  Trực tiếp thực hiện ký hợp đồng bán điện khi đấu nối
                </div>
              </div>
            </div>
            <div class="column item-card">
              <div>
                <img src=" images/icon-12.png" />
                <div class="text-14 text-justify desc">
                  Sử dụng dịch vụ của nhà thầu EPC do EVNFinance giới thiệu, đảm bảo cạnh tranh về giá và chất lượng
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div id="product-section-2">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase  mt-30 text-grey">
            Chính sách sản phẩm
            <img class="section-img-solar" src='images/lg2.png' />
          </div>
          <div class="interest-rate">
            <h4>Cố định lãi suất năm đầu tiên</h4>
            <h2>7,8%/năm</h2>
            <div>Từ năm thứ hai, lãi suất thả nổi được xác định bằng <span>lãi suất tham chiếu cộng với biên độ
                2%</span>.
              Lãi suất tham <br /> chiếu được xác định bằng bình quân lãi suất tiết kiệm kỳ hạn 12 tháng trả sau của bốn
              (04) ngân
              hàng thương <br /> mại quốc doanh (BIDV, VCB, Vietinbank, Agribank), lãi suất tham chiếu hiện tại là
              5,85%.</div>
          </div>
          <div class="ui stackable grid list-item no-border">
            <div class="three column row">
              <div class="column item-card">
                <div>
                  <img src=" images/icon-13.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">thời hạn cho vay</div>
                  <div class="text-14 text-justify align-center-important desc">Tối đa 60 tháng
                  </div>
                </div>
              </div>
              <div class="column item-card">
                <div>
                  <img src=" images/icon-14.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">HẠN MỨC CHO VAY</div>
                  <div class="text-14 text-justify desc">
                    Không quá 85% tổng mức đầu tư của hệ thống ĐMTMN tuỳ theo đánh giá khả năng trả nợ của CBCNV từ
                    lương
                    và thu nhập khác.
                  </div>
                </div>
              </div>
              <div class="column item-card">
                <div>
                  <img src=" images/icon-15.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">SỐ LƯỢNG GÓI VAY</div>
                  <div class="text-14 text-justify desc">
                    Mỗi CBCNV được vay lắp đặt 01 hệ thống ĐMTMN.
                  </div>
                </div>
              </div>
            </div>
            <div class="three column row">
              <div class="column item-card">
                <div>
                  <img src=" images/money-flow.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">NGUỒN TRẢ NỢ</div>
                  <div class="text-14 text-center desc">
                    Từ lương, từ tiền bán điện hoặc <br/> nguồn khác
                  </div>
                </div>
              </div>
              <div class="column item-card">
                <div>
                  <img src=" images/icon-16.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">CHU KỲ TRẢ NỢ</div>
                  <div class="text-14 text-justify desc">
                    Giải ngân một lần sau khi hệ thống ĐMTMN được lắp đặt, nghiệm thu với nhà thầu EPC
                  </div>
                </div>
              </div>
              <div class="column item-card">
                <div>
                  <img src=" images/icon-17.png" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">TÀI SẢN ĐẢM BẢO</div>
                  <div class="text-14 text-justify desc">
                    TSĐB hình thành từ vốn vay là hệ thống ĐMTMN. Trường hợp có TSĐB bổ sung sẽ xem xét cho vay 100% giá
                    trị đầu tư và tăng thời hạn vay.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="product-section-3">
        <div class="text-30 text-bold align-center text-uppercase  mt-30 mb-40 text-grey">
          Hồ sơ
        </div>

        <div class="ui container">
          <table id="front-table" class="ui single line table padding-first-child">
            <thead>
              <tr>
                <th class="text-20">Loại hồ sơ</th>
                <th class="text-20">Hình thức</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CMND/CCCD/Hộ chiếu người vay và vợ (chồng) của người đi vay (nếu đã kết hôn)</td>
                <td>Ảnh chụp từ bản gốc</td>
              </tr>
              <tr class="active">
                <td>Kết quả khảo sát nhu cầu lắp đặt trên EVNSolar</td>
                <td>File pdf</td>
              </tr>
              <tr>
                <td>Ảnh chụp mái nhà ở 3- 5 góc chụp khác nhau</td>
                <td>Ảnh chụp hiện trường</td>
              </tr>
              <tr>
                <td>Hóa đơn tiền điện hoặc báo cáo tiêu thụ điện từ cổng CSKH của điện lực trong 6 tháng gần nhất</td>
                <td>Ảnh chụp từ bản gốc hoặc ảnh chụp màn hình</td>
              </tr>
            </tbody>
          </table>
          <div class="text-14 text-italic pl-50 mb-40">
            Ghi chú: đối với các trường hợp cụ thể, EVNFinance sẽ yêu cầu cung cấp thông tin bổ sung trong xét cấp tín
            dụng./.
          </div>
        </div>
      </div>


      <div id="product-section-4">
        <div class="ui container">
          <div class="download-form">
            <div class="button-box">
              <button class="button-primary">
                Tải hồ sơ biểu mẫu
                <i class="ui icon arrow alternate circle down"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div id="product-section-5" class="mb-100">
        <div class="text-30 text-bold align-center text-uppercase  mt-30 mb-40 text-grey">
          Thủ tục
        </div>
        <div class="ui container">
          <div class="s3-steps ui stackable equal width grid">
            <div class="s3-step column">
              <div class="title">
                <div class="text-white text-60 p1">01</div>
                <div class="text-white text-20 text-bold p2">Trải nghiệm</div>
              </div>
              <div class="overlay">
                <div class="text-60 text-white mt-40 step-order">01</div>
                <div class="step-content">
                  <div class="text-20 text-bold text-white mt-40">Trải nghiệm</div>
                  <div class="text-12 text-white mt-40 align-left">Khách hàng trải nghiệm – hình thành nhu cầu và gửi
                    đăng ký</div>
                </div>
              </div>
            </div>
            <div class="s3-step column">
              <div class="title">
                <div class="text-white text-60 p1">02</div>
                <div class="text-white text-20 text-bold p2">Khảo sát</div>
              </div>
              <div class="overlay">
                <div class="text-60 text-white mt-40 step-order">02</div>
                <div class="step-content">
                  <div class="text-20 text-bold text-white mt-40">Khảo sát</div>
                  <div class="text-12 text-white mt-40 align-left">Nhà thầu khảo sát điều kiện lắp đặt và khả năng đấu</div>
                </div>
              </div>
            </div>
            <div class="s3-step column">
              <div class="title">
                <div class="text-white text-60 p1">03</div>
                <div class="text-white text-20 text-bold p2">Ký kết</div>
              </div>
              <div class="overlay">
                <div class="text-60 text-white mt-40 step-order">03</div>
                <div class="step-content">
                  <div class="text-20 text-bold text-white mt-40">Ký kết</div>
                  <div class="text-12 text-white mt-40 align-left">Ký hợp đồng vay và hợp đồng EPC</div>
                </div>
              </div>
            </div>
            <div class="s3-step column">
              <div class="title">
                <div class="text-white text-60 p1">04</div>
                <div class="text-white text-20 text-bold p2">Lắp đặt</div>
              </div>
              <div class="overlay">
                <div class="text-60 text-white mt-40 step-order">04</div>
                <div class="step-content">
                  <div class="text-20 text-bold text-white mt-40">Lắp đặt</div>
                  <div class="text-12 text-white mt-40 align-left">Thi công lắp đặt và nghiệm thu</div>
                </div>
              </div>
            </div>
            <div class="s3-step column">
              <div class="title">
                <div class="text-white text-60 p1">05</div>
                <div class="text-white text-20 text-bold p2">Giải ngân</div>
              </div>
              <div class="overlay">
                <div class="text-60 text-white mt-40 step-order">05</div>
                <div class="step-content">
                  <div class="text-20 text-bold text-white mt-40">Giải ngân</div>
                  <div class="text-12 text-white mt-40 align-left">Giải ngân thanh toán tiền mua sắm thiết bị</div>
                </div>
              </div>
            </div>
            <div class="s3-step column">
              <div class="title">
                <div class="text-white text-60 p1">06</div>
                <div class="text-white text-20 text-bold p2">Vận hành</div>
              </div>
              <div class="overlay">
                <div class="text-60 text-white mt-40 step-order">06</div>
                <div class="step-content">
                  <div class="text-20 text-bold text-white mt-40">Vận hành</div>
                  <div class="text-12 text-white mt-40 align-left">Nhà cung cấp hỗ trợ vận hành và bảo trì thiết bị</div>
                </div>
              </div>
            </div>
            <div class="s3-step column">
              <div class="title">
                <div class="text-white text-60 p1">07</div>
                <div class="text-white text-20 text-bold p2">Tất toán</div>
              </div>
              <div class="overlay">
                <div class="text-60 text-white mt-40 step-order">07</div>
                <div class="step-content">
                  <div class="text-20 text-bold text-white mt-40">Tất toán</div>
                  <div class="text-12 text-white mt-40 align-left">Khách hàng đủ năng lực tài chính tất toán khoản vay</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="front-bottom">
        <div class="ui container">
          <div class="ui stackable grid">
            <div class="eight wide column">
              <a class="text-30 anchor" href="index.html#form">
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
    </script>

</body>

</html>
