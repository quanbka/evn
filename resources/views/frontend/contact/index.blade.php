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
        <div id="cover-contact">
            <div class="ui container">
            <div class="text-60 text-uppercase text-white text-bold text-shadow">Liên hệ </div>
        </div>
    </div>
    <div class="contact-content">
        <div id="map"></div>
        <div class="ui container">
            <div id="support-section-2" class="mt-60 mb-40">
                <div class="content">
                    <div class="text-20 text-bold text-uppercase text-white">Tư vấn trực tiếp</div>
                    <div class="text-40 text-bold text-uppercase text-white">024.2222.9999</div>
                    <div class="text-14 text-bold text-white">Máy lẻ 761 hoặc 762 hoặc 763</div>
                    <div class="text-14 text-bold text-white">Hoặc gửi mail tới địa chỉ solar@evnfc.vn</div>
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

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuA-yX_z3esO2vmem94LRPFe4NGE9LLUw&callback=initMap&libraries=&v=weekly"
        defer
    ></script>
    <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
            const uluru = { lat: 21.044524, lng: 105.843538 };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 20 ,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>
</body>

</html>
