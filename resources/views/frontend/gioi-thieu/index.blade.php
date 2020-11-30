
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('frontend.head')

<body>

  <div id="front-wrapper">
    @include('frontend.header')
    <div id="front-content">
      <div id="cover-intro">
        <div class="ui container">
          <div class="text-60 text-uppercase text-white text-bold text-shadow">{{ getConfig('title') }}</div>
        </div>
      </div>
      <div id="front-tabs">
        <div class="container ui">
          <div class="tabs-container">
            <a class="item anchor text-20 text-bold text-red" href="#section-1">Về EVNFinance</a>
            <a class="item anchor text-20 text-bold text-red" href="#section-2">Về EasySolar</a>
          </div>
        </div>
      </div>

      <div id="section-1">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase mb-40 mt-30 text-grey">
            {{ getConfig('title') }} về
            <img class="section-img-finance" src='images/logo.png' />
          </div>
          <div class="ui stackable grid">
            <div class="seven wide computer seven wide tablet sixteen wide mobile column slide-content">
              <img src="images/bg-8.png" />
            </div>
            <div class="nine wide computer nine wide tablet sixteen wide mobile column slide-content">

                {!! getConfig('about.text1') !!}

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
            {!! getConfig('about.text2') !!}
          </div>

          <div class="text-30 text-bold mb-50 align-center">
            Giải pháp
          </div>
          <div class="ui equal width stackable grid list-item">
            <?php
              $giaiPhap = getConfig('solutions');
              $giaiPhap = json_decode($giaiPhap);
            ?>
            <?php foreach ($giaiPhap as $key => $value): ?>
              <div class="column item-card">
                <div>
                  <img src="{{ $value->image_url }}" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">{{ $value->title }}</div>
                  <div class="text-14 text-justify desc">
                    {{ $value->text }}
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="text-30 text-bold mt-80 mb-50 align-center">
            Lợi ích
          </div>
          <div class="ui equal width stackable grid list-item">
            <?php
              $giaiPhap = getConfig('loiich');
              $giaiPhap = json_decode($giaiPhap);
            ?>
            <?php foreach ($giaiPhap as $key => $value): ?>
              <div class="column item-card">
                <div>
                  <img src="{{ $value->image_url }}" />
                  <div class="text-20 text-red align-center text-uppercase text-bold title">{{ $value->title }}</div>
                  <div class="text-14 text-justify desc">
                    {{ $value->text }}
                  </div>
                </div>
              </div>
            <?php endforeach; ?>



          </div>
        </div>
      </div>

      <div class="section" id="section3" style="padding-bottom: 100px;">
        <div class="ui container">
          <div class="text-16">Các bước</div>
          <div class=" text-40 text-red mb-40">
            Vay gói
            <img class='lg2' src="images/lg2.png" />
          </div>
          <div class="s3-steps ui stackable equal width grid">
            <?php
              $slides = getConfig('steps', '[]');
              $slides = json_decode($slides);
            ?>
            @foreach ($slides as $key => $item)
              <div class="s3-step column">
                <div class="title">
                  <div class="text-white text-60 p1">{{ $key + 1 }}</div>
                  <div class="text-white text-20 text-bold p2">{{ $item->title }}</div>
                </div>
                <div class="overlay">
                  <div class="text-60 text-white mt-40 step-order">{{ $key + 1 }}</div>
                  <div class="step-content">
                    <div class="text-20 text-bold text-white mt-40">{{ $item->title }}</div>
                    <div class="text-12 text-white mt-40 align-left">{{ $item->text }}</div>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
        </div>
      </div>

      </div>
      <div id="front-bottom">
        <div class="ui container">
          <div class="ui stackable grid">
            <div class="eight wide column">
              <a class="text-30 anchor" href="/#dang-ky">
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
    </script>

</body>

</html>
