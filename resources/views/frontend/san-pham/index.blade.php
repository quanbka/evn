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
          <div class="text-40 text-bold text-white mb-20 text-shadow">{{ getConfig('subtitle') }}</div>
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
            <a class="item anchor text-20 text-bold" href="#product-section-4">Q&A</a>
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
              <?php
                    $doiTuong = json_decode(getConfig('doi-tuong', '[]'));
              ?>
              @foreach ($doiTuong as $key => $value)
                  <div class="column item-card">
                    <div>
                      <img src="{{ $value->image_url }}" />
                      <div class="text-14 text-justify desc">
                          {{ $value->text }}
                      </div>
                    </div>
                  </div>

              @endforeach


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
              {!! getConfig('chinh-sach-text') !!}

          </div>
          <div class="ui stackable grid list-item no-border">
            <div class="three column row">
                <?php
                      $doiTuong = json_decode(getConfig('chinh-sach', '[]'));
                ?>
                @foreach ($doiTuong as $key => $value)
                    <div class="column item-card">
                      <div>
                        <img src="{{ $value->image_url }}" />
                        <div class="text-20 text-red align-center text-uppercase text-bold title">
                            {{ $value->title }}
                        </div>
                        <div class="text-14 text-justify desc">
                            {{ $value->text }}
                        </div>
                      </div>
                    </div>

                @endforeach
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
                <?php
                      $doiTuong = json_decode(getConfig('ho-so', '[]'));
                ?>
                @foreach ($doiTuong as $key => $value)
                    <tr>
                      <td><p>{{ $value->title }}</p></td>
                      <td><p>{{ $value->text }}</p></td>
                    </tr>

                @endforeach

            </tbody>
          </table>
          <div class="text-14 text-italic pl-50 mb-40">
            {{ getConfig('ho-so-text') }}
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

      <div id="product-section-4" class="mt-40 mb-60">
        <div class="text-30 text-bold align-center text-uppercase  mt-30 mb-40 text-grey">
          Q&A Sản phẩm
        </div>
        <div class="ui container">
          <div class="ui styled fluid accordion">
              <?php
                $slides = getConfig('faq', '[]');
                $slides = json_decode($slides);
              ?>
              @foreach ($slides as $key => $item)
                  <div class="title text-20 text-bold {{ $key % 2 ? 'odd' : ''}}">
                        {{ $item->title }}<i class="dropdown icon"></i>
                  </div>
                  <div class="content ">
                    <p class="transition visible text-14" style="display: block !important;">{{ $item->text }}</p>
                  </div>

              @endforeach


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
