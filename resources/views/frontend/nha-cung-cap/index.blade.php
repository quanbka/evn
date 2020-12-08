<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('frontend.head')

<body>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>

  <div id="front-wrapper">
    @include('frontend.header')
    <div id="front-content">
      <div id="cover-provider">
        <div class="ui container">
          <div class="text-60 text-uppercase text-white text-bold text-shadow">{{ getConfig("title") }}</div>
        </div>
      </div>
      <div id="front-tabs" >
        <div class="container ui">
          <div class="tabs-container">
            <a class="item anchor text-20 text-bold" href="#provider-section-1">Chính sách</a>
            <a class="item anchor text-20 text-bold" href="#provider-section-2">Chức năng - nhiệm vụ</a>
            <a class="item anchor text-20 text-bold" href="#provider-section-3">Đối tác</a>
          </div>
        </div>
      </div>

      <div id="provider-section-1" >
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase  mt-30 text-grey">
            Chính sách sản phẩm

          </div>
          <form class="ui form right aligned">
            <div class="field">
              <div class="three fields">
                <div class="field">
                  <select class="ui fluid dropdown" v-model="customer">
                    <option value="" class="text-red" disabled>Đối tượng khách hàng</option>
                    <option v-for="item in customers" :value="item.value">
                      @{{ item.display }}
                  </option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui fluid dropdown" v-model="dienAp">
                    <option value="" class="text-red" disabled>Điện áp</option>
                    <option v-for="item in dienAps" :value="item">
                      @{{ item }}
                  </select>
                </div>
                <div class="field">
                  <select class="ui fluid dropdown" v-model="mai">
                    <option value="" class="text-red" disabled>Mái</option>
                    <option v-for="item in mais" :value="item.value">
                      @{{ item.display }}
                  </option>
                  </select>
                </div>
                <div class="field">
                  <select class="ui fluid dropdown" v-model="he">
                    <option value="" class="text-red" disabled>Hệ</option>
                    <option v-for="item in hes" :value="item.value">
                      @{{ item.display }}
                  </option>
                  </select>
                </div>
              </div>
            </div>
          </form>

          <div class="front-table-box prd-table">
            <table id="front-table" class="table">
              <thead>
                <tr>
                  <th class="text-20">STT</th>
                  <th class="text-20">Tên thiết bị</th>
                  <th class="text-20">ĐVT</th>
                  <th class="text-20">Công suất</th>
                  <th class="text-20">Đơn giá (VNĐ)</th>
                </tr>
              </thead>
              <tbody v-if="he == 1 || !he">
                <tr class="bold-text" >
                  <td></td>
                  <td><p>Hệ 1 pha bao gồm các thiết bị</p></td>
                  <td></td>
                  <td></td>
                  <td>@{{ getPrice(1) }}</td>
                </tr>
                <tr>
                  <td>01</td>
                  <td><p>Tấm quang điện Mono Halfcell Longi 445wp, đáp ứng tiêu chuẩn quốc tế IEC, UL và CE</p></td>
                  <td>Tấm</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Inverter Growatt - 1 pha</td>
                  <td>Bộ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr class="active">
                  <td>03</td>
                  <td><p>Hệ thống giám sát và phân tích dữ liệu hệ thống năng lượng sạch tích hợp. Giám sát mọi lúc, mọi nơi qua internet, tự động phân tích dữ liệu, thống kê, dự doán các vấn đề/ sự cố của hệ thống</p></td>
                  <td>Hệ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>04</td>
                  <td><p>Tủ điện tiêu chuẩn hòa lưới EVN</p></td>
                  <td>Tủ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td><p>Vận chuyển từ kho các chi nhánh đến công trình trong vòng bán kính 30km</p></td>
                  <td>Lần</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>06</td>
                  <td><p>Giàn khung nhôm/ inox thiết kế theo tiêu chuẩn quốc tế, dễ lắp đặt trên mọi loại mái</p></td>
                  <td>Bộ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>07</td>
                  <td><p>Phụ kiện và dây dẫn đạt chuẩn, theo quy định kỹ thuật hòa lưới EVN</p></td>
                  <td>Bộ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>08</td>
                  <td><p>Khảo sát</p></td>
                  <td>Lần</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>09</td>
                  <td><p>Thiết kế, thi công lắp đặt, bản vẽ hoàn công, nghiệm thu, bàn giao hệ thống đưa vào sử dụng</p></td>
                  <td>Tấm</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
            </tbody>
            <tbody v-if="he == 3  || !he">

                <tr class="bold-text">
                  <td></td>
                  <td><p >Hệ 3 pha bao gồm các thiết bị</p></td>
                  <td></td>
                  <td></td>
                  <td>@{{ getPrice(3) }}</td>
                </tr>
                <tr>
                  <td>01</td>
                  <td><p>Tấm quang điện Mono Halfcell Longi 445wp, đáp ứng tiêu chuẩn quốc tế IEC, UL và CE</p></td>
                  <td>Tấm</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td><p>Inverter Growatt - 3 pha</p></td>
                  <td>Bộ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>03</td>
                  <td><p>Hệ thống giám sát và phân tích dữ liệu hệ thống năng lượng sạch tích hợp. Giám sát mọi lúc, mọi nơi qua internet, tự động phân tích dữ liệu, thống kê, dự doán các vấn đề/ sự cố của hệ thống</p></td>
                  <td>Hệ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>04</td>
                  <td><p>Tủ điện tiêu chuẩn hòa lưới EVN</p></td>
                  <td>Tủ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td><p>Vận chuyển từ kho các chi nhánh đến công trình trong vòng bán kính 30km</p></td>
                  <td>Lần</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>06</td>
                  <td><p>Giàn khung nhôm/ inox thiết kế theo tiêu chuẩn quốc tế, dễ lắp đặt trên mọi loại mái</p></td>
                  <td>Bộ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>07</td>
                  <td><p>Phụ kiện và dây dẫn đạt chuẩn, theo quy định kỹ thuật hòa lưới EVN</p></td>
                  <td>Bộ</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>08</td>
                  <td><p>Khảo sát</p></td>
                  <td>Lần</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>09</td>
                  <td><p>Thiết kế, thi công lắp đặt, bản vẽ hoàn công, nghiệm thu, bàn giao hệ thống đưa vào sử dụng</p></td>
                  <td>Tấm</td>
                  <td>@{{ dienAp }}</td>
                  <td>-</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        var app = new Vue({
          el: '#provider-section-1',
          methods : {
              getPrice : function (he) {
                  let price =  this.price[this.dienAp][he][this.mai];
                  return price.toLocaleString('vi-VN');
              }
          },
          data: {
              customer : '',
              customers: [
                  {
                      'value': 'nganh-dien',
                      'display': 'Ngành điện',
                  },
                  {
                      'value': 'ngoai-nganh-dien',
                      'display': 'Ngoài ngành điện',
                  },
                  {
                      'value': 'khac',
                      'display': 'Khác',
                  }
              ],
              dienAp : '2-<3',
              dienAps : [
                  "2-<3",
                  "3-<4",
                  "4-<5",
                  "5-<6",
                  "6-<7",
                  "7-<8",
                  "8-<9",
                  "9-<10",
                  ">= 10",
              ],
              mai : 'mai_bang',
              mais : [
                  {
                      'value': 'mai_bang',
                      'display': 'Mái bằng',
                  },
                  {
                      'value': 'mai_ton',
                      'display': 'Mái tôn',
                  },
                  {
                      'value': 'mai_ngoi',
                      'display': 'Mái ngói',
                  }
              ],
              he : '',
              hes : [
                  {
                      'value': '1',
                      'display': '1 pha',
                  },
                  {
                      'value': '3',
                      'display': '3 pha',
                  }
              ],
              price : {!! json_encode($priceObject) !!}


          }
        })

      </script>


      <div id="provider-section-2" class="mb-60">
        <div class="ui container">
          <div class="text-30 text-bold align-center text-uppercase  mt-40 mb-30 text-grey">
            {{ getConfig("text1") }}
          </div>

          <div class="ui stackable grid list-item provider-func">
            <div class="three column row mb-20">
                <?php
                    $slides = json_decode(getConfig('missions', '[]'));
                ?>
                @foreach ($slides as $key => $value)
                    <div class="column item-card">
                      <div>
                        <img src="{{ $value->image_url }}" />
                        <div class="text-20 text-red align-center text-uppercase text-bold title">{{ $value->title }}</div>
                      </div>
                    </div>
                @endforeach
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
          <div class="text-30 text-bold align-center text-uppercase  mt-40  text-grey">
            Đối tác
          </div>
          <div class="partners">
            <div class="font-18 font-bold text-white mb-20">
              Các đối tác uy tín
            </div>
            <div class="partners-swiper-container swiper-container">
              <div class="swiper-wrapper">
                  <?php
                    $slides = \App\Models\Blog::all();
                    $contents = [];
                    foreach ($slides as $key => $value) {
                        $contents[$value->id] = $value;
                    }
                  ?>
                  <script type="text/javascript">
                      var partners = {!! json_encode($contents) !!};
                  </script>
                  @foreach ($slides as $item)
                      <div class="swiper-slide" data-id="{{ $item->id }}">
                        <img src="{{ $item->image }}" />
                      </div>
                  @endforeach

              </div>
            </div>
            <div class="swiper-button-prev partners-button-prev">
              <img class="btn-swiper" src='/images/arrow-left.png' />
            </div>
            <div class="swiper-button-next partners-button-next">
              <img class="btn-swiper" src='/images/arrow-right.png' />
            </div>
          </div>
        </div>
      </div>


      <div id="provider-section-2" class="mb-60">
        <div class="ui container">
          <div class="ui stackable grid">
            <div class="eight wide column inter">
            </div>
            <div class="eight wide column content-box" id="js-content">

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

    <script type="text/javascript" src="/lib/jquery-3.3.1.min.js"></script>
    <script
      src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
    <script type="text/javascript" src="/lib/fullpage/script.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script type="text/javascript">
      var mySwiperw = new Swiper('.partners-swiper-container', {
        direction: 'horizontal',
        navigation: {
          nextEl: '.partners-button-next',
          prevEl: '.partners-button-prev',
        },
        centeredSlides: true,
        loop: true,
        breakpoints: {
          640: {
            slidesPerView: 3,
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

      function changeContent () {
          // console.log(mySwiperw.realIndex);
          // console.log($('.swiper-slide-active'))
          var all = $(".swiper-slide-active").map(function() {
            console.log($(this).attr("data-id"));
            let id = $(this).attr("data-id");
            console.log(partners[id]);
            $('#js-content').html(partners[id].content);
        }).get();
      }
      changeContent();
    mySwiperw.on('slideChangeTransitionEnd', function () {
        changeContent();
    });

    </script>
    <style media="screen">
        .swiper-slide:not(.swiper-slide-active) img {
            filter: grayscale(1.0);
        }
    </style>

</body>

</html>
