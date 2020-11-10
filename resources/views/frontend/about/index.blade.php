<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>EVNFC Solar</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <div class="text-60 text-uppercase text-white text-shadow">Giới thiệu</div>
        </div>
      </div>
      <div id="front-tabs">
        <div class="container ui">
          <div class="tabs-container">
            <a class="item anchor text-20 text-bold text-red" href="#section-1">Về EVNFinance</a>
            <a class="item anchor text-20" href="#section-2">Về EasySolar</a>
          </div>
        </div>
      </div>

      <div id="section-1">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase mb-40 mt-30 text-grey">
            Giới thiệu về
            <img class="section-img-finance" src='images/logo.png' />
          </div>
          <div class="ui stackable grid">
            <div class="seven wide computer seven wide tablet sixteen wide mobile column slide-content">
              <img src="images/bg-8.png" />
            </div>
            <div class="nine wide computer nine wide tablet sixteen wide mobile column slide-content">
              <div class="text-14 text-justify mb-40">Công ty Tài chính Cổ phần Điện lực được chính thức thành lập và
                hoạt
                động từ ngày 01
                tháng 9 năm 2008 với sứ mệnh là đầu mối thu xếp vốn, quản trị vốn cho các dự án điện thuộc Tập đoàn Điện
                lực Việt nam và các đơn vị thành viên, đồng thời cung cấp các sản phẩm dịch vụ tài chính chuyên nghiệp
                cho các đơn vị trong ngành điện và các đơn vị thuộc các thành phần kinh tế khác. Trải qua hơn 10 năm
                hoạt động, Công ty đã không ngừng lớn mạnh cả về số lượng và chất lượng với uy tín và vị thế ngày càng
                được khẳng định trên thị trường tài chính trong và ngoài nước.
              </div>

              <div class="text-14 text-justify">Với tầm nhìn “Trở thành một định chế tài chính tổng hợp cung cấp các
                dịch vụ với chất
                lượng tốt nhất trên nền tảng công nghệ hiện đại”, EVNFinance đã và đang đưa ra những giải pháp tài chính
                tốt nhất, phù hợp với nhu cầu ngày càng đa dạng của thị trường, mang lại những giá trị về kinh tế và
                cộng đồng cho đất nước.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="section-2">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase  mt-30 text-grey">
            Giới thiệu về
            <img class="section-img-solar" src='images/lg2.png' />
          </div>

          <div class="text-14 text-bold mb-20 align-center subtitle">
            Easy Solar là sản phẩm tài chính được thiết kế nhằm hỗ trợ tối đa về tài chính, kết nối và tư
            vấn cho khách hàng trong lĩnh vực Điện mặt trời mái nhà
          </div>

          <div class="text-30 text-bold mb-50 align-center">
            Giải pháp
          </div>
          <div class="ui equal width stackable grid list-item">
            <div class="column item-card">
              <div>
                <img src=" images/icon-1.png" />
                <div class="text-20 text-red align-center text-uppercase text-bold title">Tài chính toàn diện</div>
                <div class="text-14 text-justify desc">Bên cạnh cam kết đồng hành cùng khách hàng trong xây dựng và đáp
                  ứng
                  nhu cầu vốn triển khai dự án, Easy Solar còn đem đến các dịch vụ hữu ích như bảo hiểm, đánh giá kỹ
                  thuật, thiết bị chất lượng, giá cả cạnh tranh… tạo nên một giải pháp tài chính đồng bộ, toàn diện.
                </div>
              </div>
            </div>
            <div class="column item-card">
              <div>
                <img src=" images/icon-2.png" />
                <div class="text-20 text-red align-center text-uppercase text-bold title">Kết nối hiệu quả</div>
                <div class="text-14 text-justify desc">Với ưu thế là một định chế tài chính có nhiều kinh nghiệm trong
                  lĩnh
                  vực
                  điện năng, khi đến với sản phẩn EasySolar khách hàng sẽ được phục vụ bởi quy trình nhanh gọn, thủ tục
                  đơn giản, thông tin tổng hợp.
                </div>
              </div>
            </div>
            <div class="column item-card">
              <div>
                <img src=" images/icon-3.png" />
                <div class="text-20 text-red align-center text-uppercase text-bold title">Tư vấn thông minh</div>
                <div class="text-14 text-justify desc">Easy Solar được thiết kế để thấu hiểu khách hàng, do đó với hỗ
                  trợ của
                  công nghệ số đã biến kinh nghiệm của chúng tôi thành sự trải nghiệm thông minh của khách hàng qua các
                  thông tin tư vấn đơn giản nhưng đem đến sự hài lòng cao nhất
                </div>
              </div>
            </div>
          </div>
          <div class="text-30 text-bold mt-80 mb-50 align-center">
            Lợi ích
          </div>
          <div class="ui equal width stackable grid list-item">
            <div class="column item-card">
              <div>
                <img src=" images/icon-4.png" />
                <div class="text-20 text-red align-center text-uppercase text-bold title">1 cửa</div>
                <div class="text-14 text-justify desc">Tương tác khách hàng đều được thực hiện thông qua công nghệ, giúp
                  tối giản và đơn giản hóa quy trình , thủ tục cho khách hàng
                </div>
              </div>
            </div>
            <div class="column item-card">
              <div>
                <img src=" images/icon-5.png" />
                <div class="text-20 text-red align-center text-uppercase text-bold title">1 chính sách</div>
                <div class="text-14 text-justify desc">Chính sách bán hàng nhất quán và thống nhất trên cơ sở sự hợp tác
                  giữa tổ chức tín dụng với nhà cung cấp có năng lực trong suốt quá trình vay sẽ đem tới cho khách hàng
                  điều kiện tín dụng cạnh tranh, giá cả thiết bị rẻ, có chất lượng qua đó đem tới cho khách hàng lợi ích
                  cao nhất.
                </div>
              </div>
            </div>
            <div class="column item-card">
              <div>
                <img src=" images/icon-3.png" />
                <div class="text-20 text-red align-center text-uppercase text-bold title">1 chất lượng</div>
                <div class="text-14 text-justify desc">Khách hàng được lựa chọn những sản phẩm chất lương phù hợp với
                  nhu cầu và còn được trải nghiệm chất lượng phục vụ với thái độ nhiệt tình,chu đáo,chuyên nghiệp của
                  đội ngũ nhân viên từ bên cho vay tới nhà cung cấp.
                </div>
              </div>
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
    </script>

</body>

</html>
