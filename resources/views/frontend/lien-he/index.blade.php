<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('frontend.head')

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

      @include('frontend.footer')

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
