
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>EVNFC Solar</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="lib/semantic-ui/responsive-semantic-ui.css">
  <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css"
    rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <link rel="stylesheet" type="text/css" href="lib/fullpage/style.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" type="text/css" href="css/typography.css" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    select:not(:focus):invalid {
      color: #fff;
    }
  </style>
</head>

<body>

  <div id="front-wrapper">
    <div id="front-index-content"></div>
    <div id="fullpage">
      <div class="section" id="section0">
        @include('frontend.header')
        <div class="ui container">
          <div class="content">
            <p class="text-22 text-white mb-0">
              Chào mừng bạn đến với
              <img class='lg1' src="images/lg1.png" />
            </p>
            <hr />
            <h1 class="text-60 text-bold text-white mt-0 mb-20 text-shadow">Giải pháp tài chính toàn diện cho Điện mặt
              trời mái nhà
            </h1>
            <a class="button-primary" href="#dang-ky">
              Đăng kí vay
            </a>


          </div>
          <div class="navigation-container">
            <div class="navigation">
              <!-- <div class="nav-item text-20 text-bold computer tablet only">Sample 1</div> -->
              <!-- <div class="nav-item text-20 text-bold active computer tablet only">Sample 2</div> -->
              <a href="#giai-phap" class="nav-item text-20 text-bold">Giải pháp</a>
              <a href="#loi-ich" class="nav-item text-20 text-bold">Lợi ích</a>
              <a href="#thu-tuc" class="nav-item text-20 text-bold">Thủ tục</a>
            </div>
          </div>

          <div class="mobile only icon-box ">
            <div class="ui container">
              <div class="ui equal width grid">
                <div class="column">
                  <div class="img-box">
                    <img src="images/icon-23.png">
                  </div>
                  <div class="text-10 text-white align-center">CBCNV Nghành điện</div>
                </div>

                <div class="column">
                  <div class="img-box">
                    <img src="images/icon-24.png">
                  </div>
                  <div class="text-10 text-white align-center">Khách hàng ngoài nghành điện</div>
                </div>

                <div class="column">
                  <div class="img-box">
                    <img src="images/icon-25.png">
                  </div>
                  <div class="text-10 text-white align-center">CBCNV Nghành điện</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section" id="section1">
        <div class="ui container">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="ui grid">
                  <div class="five wide computer six wide tablet sixteen wide mobile column slide-content">
                    <div class="text-20 p1 text-white"><img class="logo-solution" src="./images/lg4.png" /></div>
                    <div class="text-36 p2 text-white mt-30">Giải pháp tài chính toàn diện</div>
                    <div class="text-20 p3">Giới thiệu</div>
                  </div>
                  <div class="eleven wide computer ten wide tablet sixteen wide mobile column">
                    <img class="slide-img" src="./images/Giải_pháp_tài_chính_toàn_diện.png">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="ui grid">
                  <div class="five wide computer six wide tablet sixteen wide mobile column slide-content">
                    <div class="text-20 p1 text-white">Easy Solar</div>
                    <div class="text-36 p2 text-white mt-30">Giải pháp Kết nối hiệu quả</div>
                    <div class="text-20 p3">Giới thiệu</div>
                  </div>
                  <div class="eleven wide computer ten wide tablet sixteen wide mobile column">
                    <img class="slide-img" src="./images/Giải_Pháp_kết_nối_hiệu_quả.png">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="ui grid">
                  <div class="five wide computer six wide tablet sixteen wide mobile column slide-content">
                    <div class="text-20 p1 text-white">Easy Solar</div>
                    <div class="text-36 p2 text-white mt-30">Giải pháp Tư vấn thông minh</div>
                    <div class="text-20 p3">Giới thiệu</div>
                  </div>
                  <div class="eleven wide computer ten wide tablet sixteen wide mobile column">
                    <img class="slide-img" src="./images/Giải_pháp_tư_vấn_thông_minh.png">
                  </div>
                </div>
              </div>
            </div>
            <div class="slide-control">
              <div class="ui grid">
                <div class="five wide computer six wide tablet sixteen wide mobile column buttons">
                  <div class="swiper-button-prev left-margin"> <img src="images/arrow-left-w.png"></div>
                  <div class="swiper-pagination"> </div>
                  <div class="swiper-button-next right-margin"><img src="images/arrow-right-w.png"></div>
                </div>
                <div class="eleven wide computer ten wide tablet sixteen wide mobile column">
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
      <div class="section" id="section2">
        <div class="ui container">
          <div class="text-16 text-white">Lý do</div>
          <div class=" text-40 text-white mb-40">
            Lựa chọn
            <img class='lg2' src="images/lg2.png" />
          </div>
          <div class="ui grid content-box">
            <div class="five wide computer six wide tablet sixteen wide mobile column content">
              <div class="text-20 text-bold text-white mb-20">
                Easy Solar
              </div>
              <div class="text-14 text-white mb-20 text-justify">Easy Solar là gói sản phẩm được thiết kế chuyên biệt
                dành riêng cho
                các khách hàng có nhu cầu đầu tư trong lĩnh vực điện mặt trời áp mái mang lại nhiều lợi ích cho khách
                hàng.</div>
              <div class="text-14 text-white mb-20 text-justify">Cơ chế Một cửa – Một chính sách – Một chất lượng nhằm
                mang tới cho
                khách hàng giải pháp vay với thủ tục đơn giản, chính sách giá tối ưu và chất lượng sản phẩm được đảm bảo
                bởi sự đồng hành trong dài hạn của EVNFinance và các nhà cung cấp uy tín</div>
            </div>
            <div class="eleven wide computer ten wide tablet sixteen wide mobile column">
              <div class="blocks ui grid">
                <div class="block seven wide mobile seven wide table computer column">
                  <div class="text-15 text-white">
                    <div class="circle"></div>
                    Hạn mức lên đến
                  </div>
                  <div class="text-60 text-white">500 triệu</div>
                </div>
                <div class="block seven wide mobile seven wide table computer column mt-30">
                  <div class="text-15 text-white">
                    <div class="circle"></div>
                    Thủ tục
                  </div>
                  <div class="text-60 text-white ">Đơn giản</div>
                </div>
                <div class="block seven wide mobile seven wide table computer column ml-40">
                  <div class="text-15 text-white">
                    <div class="circle"></div>
                    <span class="computer tablet only">Giá trị vay dự án tối đa</span>
                    <span class="mobile only">Giá trị vay dự án</span>
                  </div>
                  <div class=" text-60 text-white computer tablet only">85%</div>
                  <div class=" text-60 text-white mobile only">Tối đa 85%</div>


                </div>
                <div class="block six wide mobile seven wide table computer column mt-30">
                  <div class="text-15 text-white">
                    <div class="circle"></div>
                    Chất lượng
                  </div>
                  <div class="text-60 text-white">Đảm bảo</div>
                </div>
              </div>

              <div class="partners">
                <div class="font-18 font-bold text-white mb-20">
                  Các đối tác uy tín
                </div>
                <div class="partners-swiper-container swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="images/p3.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p1.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p4.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p3.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p1.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p4.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p3.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p1.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p4.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p3.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p1.png" />
                    </div>
                    <div class="swiper-slide">
                      <img src="images/p4.png" />
                    </div>

                  </div>
                </div>
                <div class="swiper-button-prev partners-button-prev">
                  <img src="images/arrow-left-w.png">
                </div>
                <div class="swiper-button-next partners-button-next">
                  <img src="images/arrow-right-w.png">
                </div>
              </div>

              <a class="go-to-action text-white text-30 computer only" href=" #thu-tuc">
                Tìm hiểu các bước vay
                <div class="img-box">
                  <img src="images/arrow-down-2.png">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="section" id="section3">
        <div class="ui container">
          <div class="text-16">Các bước</div>
          <div class=" text-40 text-red mb-40">
            Vay gói
            <img class='lg2' src="images/lg2.png" />
          </div>
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
                  <div class="text-12 text-white mt-40 align-left">Nhà thầu khảo sát điều kiện lắp đặt và khả năng đấu
                    nối.</div>
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
                  <div class="text-12 text-white mt-40 align-left">Nhà cung cấp hỗ trợ vận hành và bảo trì thiết bị
                  </div>
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
                  <div class="text-12 text-white mt-40 align-left">Khách hàng đủ năng lực tài chính tất toán khoản vay
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a class="go-to-action text-30 computer only" href="#dang-ky">
            Đăng ký gói vay
            <div class="img-box">
              <img src="images/arrow-down.png">
            </div>
          </a>
        </div>
      </div>

      <div class="section" id="section4">
        <div class="ui container">
          <div class="text-16">Để lại thông tin</div>
          <div class=" text-40 text-red mb-0 section4-title">
            Đăng ký <strong>Gói vay</strong>
            <img class='lg2' src="images/lg2.png" />
          </div>
          <div class="ui grid">
            <div class="six wide computer six wide tablet sixteen wide mobile column content">
            </div>
            <div class="ten wide computer ten wide tablet sixteen wide mobile column">
              <form id="register-form" name="registerForm" class="ui form" onsubmit="return validateForm()"
                method="post">
                <div id="result"></div>
                <div class="field">
                  <div class="two fields">
                    <div class="field required">
                      <label class="computer only">Họ và tên</label>
                      <input type="text" placeholder="Họ và tên" name="name" onkeyup="handleChangeName(this.value)">
                      <div class="field-error"></div>
                    </div>
                    <div class="field">
                      <label class="computer only">Năm sinh</label>
                      <input type="number" placeholder="Năm sinh" name="yob" onkeyup="handleChangeYOB(this.value)">
                      <div class="field-error"></div>
                    </div>
                  </div>
                </div>

                <div class="field">
                  <div class="three fields">
                    <div class="field required">
                      <label class="computer only">Số CMND/CCCD</label>
                      <input name="card_number" placeholder="Số CMND/CCCD" type="text"
                        onkeyup="handleChangeCard(this.value)">
                      <div class="field-error"></div>
                    </div>
                    <div class="field required">
                      <label class="computer only">Điện thoại</label>
                      <input type="text" placeholder="Điện thoại" name="phone_number"
                        onkeyup="handleChangePhone(this.value)">
                      <div class="field-error"></div>
                    </div>
                    <div class="field">
                      <label class="computer only">Email</label>
                      <input type="text" placeholder="Email" name="email" onkeyup="handleChangeEmail(this.value)">
                      <div class="field-error"></div>
                    </div>
                  </div>
                </div>

                <div class="field">
                  <div class="two fields">
                    <div class="field">
                      <label class="computer only">Bạn đang công tác tại</label>
                      <select id="working-place" class="ui fluid dropdown"
                        onchange="handleChangeWorkingPlace(this.value)">
                        <option value="" hidden>Bạn đang công tác tại</option>
                        <option value="1">Ngành điện</option>
                        <option value="2">Ngoài ngành điện</option>
                        <option value="3">Khác</option>
                      </select>
                      <div class="field-error"></div>
                    </div>
                    <div class="field non-required">
                      <label class="computer only">Đơn vị công tác</label>
                      <input type="text" placeholder="Đơn vị công tác" name="department"
                        onkeyup="handleChangeDepartment(this.value)">
                      <div class="field-error"></div>
                    </div>

                  </div>
                </div>

                <div class="field non-required">
                  <div class="two fields">
                    <div class="field">
                      <label class="computer only">Phòng ban</label>
                      <input type="text" placeholder="Phòng ban" name="office" onkeyup="handleChangeOffice(this.value)">
                      <div class="field-error"></div>
                    </div>
                    <div class="field">
                      <label class="computer only">Vị trí/ Chức danh</label>
                      <input type="text" placeholder="Vị trí/ Chức danh" name="position"
                        onkeyup="handleChangePosition(this.value)">
                      <div class="field-error"></div>
                    </div>
                  </div>
                </div>

                <div class="field">
                  <div class="two fields">
                    <div class="field non-required">
                      <label class="computer only">Hợp đồng lao động</label>
                      <select id="contract_duration_type" class="ui fluid dropdown">
                        <option value="" hidden>Hợp đồng lao động</option>
                        <option value="1">1 năm</option>
                        <option value="2">2 năm</option>
                        <option value="3">3 năm</option>
                        <option value="4">Không giới hạn</option>
                        <option value="5">Khác</option>
                      </select>
                    </div>
                    <div class="field">
                      <label class="computer only">Thu nhập trung bình/tháng</label>
                      <input placeholder="Thu nhập trung bình/tháng" id="in-come" type="text" name="income" onkeyup="handleChangeIncome(this.value)">
                      <div class="field-error"></div>
                    </div>

                  </div>
                </div>

                <div class="field">
                  <label class="computer only">Địa chỉ thường trú</label>
                  <input type="text" placeholder="Địa chỉ thường trú" name="address"
                    onkeyup="handleChangeAddress(this.value)">
                  <div class="field-error"></div>
                </div>
                <div class="field">
                  <label class="computer only">Địa chỉ lắp đặt</label>
                  <input type="text" placeholder="Địa chỉ lắp đặt" name="installation_address"
                    onkeyup="handleChangeInstallAdd(this.value)">
                  <div class="field-error"></div>
                </div>

                <div class="inline field">
                  <div class="ui checkbox" style="display: flex">
                    <input onchange="handleChangeCheckbox()" type="checkbox" tabindex="0" class="hidden ischeck">
                    <label>Tôi đã đọc và đồng ý với các</label> <span id="myBtn"
                      style="color: blue; padding-left: 5px; cursor: pointer">điều kiện và điều khoản</span>
                  </div>
                </div>
                <!-- <div class="field">
                  <div class="two fields">
                    <div class="field">
                      <div class="g-recaptcha" data-sitekey="6Le7kNoZAAAAAMkS_r_MA34xVvTlbBWLVdkK7Ezz"></div>
                      <br />
                    </div> -->
                <div class="field" style="display: flex; justify-content: center;">
                  <button class="loan-request-btn">
                    Gửi yêu cầu vay <img src="./images/arrow-right-w.png" />
                  </button>
                </div>
                <!-- </div>
                </div> -->

              </form>

            </div>
          </div>
        </div>

        <div id="myModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <h3>Điều kiện và điều khoản</h3>
              <span class="close">&times;</span>
            </div>
            <p>Bằng việc sử dụng hoặc duyệt trang web này ("Trang web") hay bất kỳ trang web nào khác ("Trang web của
              EVNFinance") của EVNFinance, bạn xác nhận rằng mình đã đọc, hiểu và đồng ý chịu sự ràng buộc của các Điều
              khoản và điều kiện này cũng như tất cả các điều luật và quy định hiện hành. Nếu không đồng ý bị ràng buộc
              bởi các Điều khoản và điều kiện này thì bạn không được sử dụng Trang web này. Chúng tôi có thể thay đổi
              các Điều khoản và điều kiện này bất kỳ lúc nào mà không cần thông báo cho bạn. Vì vậy, bạn nên truy cập
              định kỳ vào trang này để xem lại các Điều khoản và điều kiện này. Bằng việc sử dụng Trang web này sau khi
              chúng tôi đăng bất kỳ thay đổi nào, bạn đồng ý chấp nhận những thay đổi đó, cho dù thực tế bạn đã xem xét
              những thay đổi đó hay chưa.</p>
          </div>
        </div>
      </div>

      <div class="section mt-40" id="section5">
        <div class="footer-container">
          <div class="back-to-top computer only">
            <a href="#gioi-thieu">
              <div>Lên đầu trang </div><img src="images/top-arrow.png" />
            </a>
          </div>
          <div class="ui container ">
            <a href="#">
              <img class="footer-logo mb-40 mt-40" src="images/logo.png">
            </a>
            <div class="ui equal width grid stackable computer only">
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
      var myFullpage = new fullpage('#fullpage', {
        anchors: ['gioi-thieu', 'giai-phap', 'loi-ich', 'thu-tuc', 'dang-ky', 'footer'],
        navigation: true,
        navigationPosition: 'right',
        responsiveWidth: 768,
        // navigationTooltips: ['First page', 'Second page', 'Third and last page', 'page 4', 'page 6']
      });

      var mySwiper = new Swiper('#section1 .swiper-container', {
        direction: 'horizontal',
        loop: true,
        pagination: {
          el: '.swiper-pagination',
        },

        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      })

      var mySwiperw = new Swiper('.partners-swiper-container', {
        direction: 'horizontal',
        navigation: {
          nextEl: '.partners-button-next',
          prevEl: '.partners-button-prev',
        },
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
    </script>
    <script>
      $('#register-form').find('.non-required').find('input').prop("disabled", true);
      $('#register-form').find('.non-required').find('select').prop("disabled", true);
      function handleChangeName(value) {
        $('#register-form').find('[name="name"]').parent().find('.field-error').hide();
        if (value && value.trim() === '') {
          $('#register-form').find('[name="name"]').parent().find('.field-error').html("Vui lòng nhập Tên khách hàng!");
          $('.field-error').show();
        };
        var regExp = /\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\[|\{|\]|\}|\||\\|\'|\<|\,|\.|\>|\?|\/|\""|\;|\:|\_|\d/;
        if (regExp.test(value)) {
          $('#register-form').find('[name="name"]').parent().find('.field-error').html("Tên khách hàng sai định dạng!");
          $('.field-error').show();
        };
        if (value.length > 255) {
          $('#register-form').find('[name="name"]').parent().find('.field-error').html("Tên khách hàng không được lớn hơn 255 ký tự!");
          $('.field-error').show();
        };
      }

      function handleChangeYOB(value) {
        $('#register-form').find('[name="yob"]').parent().find('.field-error').hide();
        if (!value) {
          return $('#register-form').find('[name="yob"]').parent().find('.field-error').hide();
        }
        if (value.startsWith('1') || value.startsWith('2')) {
          $('.field-error').hide();
        } else {
          $('#register-form').find('[name="yob"]').parent().find('.field-error').html("Năm sinh sai định dạng!");
          $('#register-form').find('[name="yob"]').parent().find('.field-error').show();
        }
        if (value.length > 4) {
          $('#register-form').find('[name="yob"]').parent().find('.field-error').html("Năm sinh sai định dạng!");
          $('#register-form').find('[name="yob"]').parent().find('.field-error').show();
        }
      }

      function handleChangeCard(value) {
        $('#register-form').find('[name="card_number"]').parent().find('.field-error').hide();
        if (value && value.trim() === '') {
          $('#register-form').find('[name="card_number"]').parent().find('.field-error').html("Vui lòng nhập Số CMND/CCCD/Hộ chiếu!");
          $('#register-form').find('[name="card_number"]').parent().find('.field-error').show();
        }
        var regExp = /^[A-Za-z0-9]*$/;
        var char = /^[A-Za-z]*$/;
        var int = /^[0-9]*$/;
        if (!char.test(value.charAt(0))) {
          if (!int.test(value)) {
            $('#register-form').find('[name="card_number"]').parent().find('.field-error').html("Số CMND/CCCD/Hộ chiếu sai định dạng");
            $('#register-form').find('[name="card_number"]').parent().find('.field-error').show();
          }
        } else {
          if (!int.test(value.substring(1))) {
            if (!int.test(value)) {
              $('#register-form').find('[name="card_number"]').parent().find('.field-error').html("Số CMND/CCCD/Hộ chiếu sai định dạng");
              $('#register-form').find('[name="card_number"]').parent().find('.field-error').show();
            }
          }
        }
        if (value.length > 12) {
          $('#register-form').find('[name="card_number"]').parent().find('.field-error').html("Số CMND/CCCD/Hộ chiếu không được lớn hơn 12 ký tự");
          $('#register-form').find('[name="card_number"]').parent().find('.field-error').show();
        }
      }

      function handleChangePhone(value) {
        $('#register-form').find('[name="phone_number"]').parent().find('.field-error').hide();
        if (value && value.trim() === '') {
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').html("Vui lòng nhập Số điện thoại!");
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').show();
        }
        var regExp = /^[0-9]*$/;
        if (value.startsWith('0') && value.length !== 10) {
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').html("Số điện thoại không đúng định dạng");
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').show();
        }
        if (value.startsWith('84') && value.length !== 11) {
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').html("Số điện thoại không đúng định dạng");
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').show();
        }
        if (!(value.startsWith('0') || value.startsWith('84'))) {
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').html("Số điện thoại không đúng định dạng");
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').show();
        }
        var phoneHeader = ['86', '96', '97', '98', '32', '33', '34', '35', '36', '37', '38', '39', '88', '91', '94', '93', '84', '85', '81', '82',
          '89', '90', '93', '70', '79', '77', '76', '78', '92', '56', '58', '99', '59']
        if (value.startsWith('0') && !phoneHeader.includes(value.substring(1, 3))
          || value.startsWith('84') && !phoneHeader.includes(value.substring(2, 4))) {
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').html("Số điện thoại không tồn tại");
          $('#register-form').find('[name="phone_number"]').parent().find('.field-error').show();
        }
      }

      function handleChangeEmail(value) {
        $('#register-form').find('[name="email"]').parent().find('.field-error').hide();
        const validation = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
        if (value) {
          const listCheck = value.split("@");
          if (
            value.includes("..") ||
            listCheck[0].startsWith(".") ||
            listCheck[0].endsWith(".") ||
            (listCheck.length > 1 &&
              listCheck[1].startsWith(".")) ||
            (listCheck.length > 1 &&
              listCheck[1].endsWith("."))
          ) {
            $('#register-form').find('[name="email"]').parent().find('.field-error').html("Email không đúng định dạng!");
            $('#register-form').find('[name="email"]').parent().find('.field-error').show();
          }
          if (value.length > 255) {
            $('#register-form').find('[name="email"]').parent().find('.field-error').html("Email vượt quá 255 ký tự!");
            $('#register-form').find('[name="email"]').parent().find('.field-error').show();
          }
          if (validation.test(value)) {
            return $('#register-form').find('[name="email"]').parent().find('.field-error').hide();
          }
          $('#register-form').find('[name="email"]').parent().find('.field-error').html("Email không đúng định dạng!");
          $('#register-form').find('[name="email"]').parent().find('.field-error').show();
        }
      }

      function handleChangeIncome(value) {
        var newValue = value.split(',').join('')
        $('#register-form').find('[name="income"]').parent().find('.field-error').hide();
        var regExp = /^\,|\d$/;
        if (regExp.test(newValue)) {

        } else {
          $('#register-form').find('[name="income"]').parent().find('.field-error').html("Thu nhập trung bình/tháng sai định dạng!");
          $('#register-form').find('[name="income"]').parent().find('.field-error').show();
        }
        if (newValue) {
          document.getElementById("in-come").value = newValue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");;
        }
        if (!newValue) {
          return $('#register-form').find('[name="income"]').parent().find('.field-error').hide();
        }
        if (newValue.length > 255) {
          $('#register-form').find('[name="income"]').parent().find('.field-error').html("Thu nhập trung bình/tháng vượt quá 255 ký tự!");
          $('#register-form').find('[name="income"]').parent().find('.field-error').show();
        }
      }

      function handleChangeDepartment(value) {
        $('#register-form').find('[name="department"]').parent().find('.field-error').hide();
        if (!value) {
          return $('#register-form').find('[name="department"]').parent().find('.field-error').hide();
        }
        if (value.length > 255) {
          $('#register-form').find('[name="department"]').parent().find('.field-error').html("Đơn vị công tác vượt quá 255 ký tự!");
          $('#register-form').find('[name="department"]').parent().find('.field-error').show();
        }
      }

      function handleChangePosition(value) {
        $('#register-form').find('[name="position"]').parent().find('.field-error').hide();
        if (!value) {
          return $('#register-form').find('[name="position"]').parent().find('.field-error').hide();
        }
        if (value.length > 255) {
          $('#register-form').find('[name="position"]').parent().find('.field-error').html("Vị trí/chức danh vượt quá 255 ký tự!");
          $('#register-form').find('[name="position"]').parent().find('.field-error').show();
        }
      }
      function handleChangeOffice(value) {
        $('#register-form').find('[name="office"]').parent().find('.field-error').hide();
        if (!value) {
          return $('#register-form').find('[name="office"]').parent().find('.field-error').hide();
        }
        if (value.length > 255) {
          $('#register-form').find('[name="office"]').parent().find('.field-error').html("Phòng ban vượt quá 255 ký tự!");
          $('#register-form').find('[name="office"]').parent().find('.field-error').show();
        }
      }
      function handleChangeAddress(value) {
        $('#register-form').find('[name="address"]').parent().find('.field-error').hide();
        if (!value) {
          return $('#register-form').find('[name="address"]').parent().find('.field-error').hide();
        }
        if (value.length > 255) {
          $('#register-form').find('[name="address"]').parent().find('.field-error').html("Phòng ban vượt quá 255 ký tự!");
          $('#register-form').find('[name="address"]').parent().find('.field-error').show();
        }
      }
      function handleChangeInstallAdd(value) {
        $('#register-form').find('[name="installation_address"]').parent().find('.field-error').hide();
        if (!value) {
          return $('#register-form').find('[name="installation_address"]').parent().find('.field-error').hide();
        }
        if (value.length > 255) {
          $('#register-form').find('[name="installation_address"]').parent().find('.field-error').html("Phòng ban vượt quá 255 ký tự!");
          $('#register-form').find('[name="installation_address"]').parent().find('.field-error').show();
        }
      }

      function handleChangeCheckbox() {
        if ($('.ischeck').is(':checked')) {
          return $("#result").hide();
        }
      }

      function handleChangeWorkingPlace(value) {
        if (value === "1") {
          $('#register-form').find('.non-required').find('input').prop("disabled", false)
          $('#register-form').find('.non-required').find('select').prop("disabled", false)
          $('#register-form').find('[name="department"]').parent().find("label").css('opacity', "1");
          $('#register-form').find('[name="office"]').parent().find("label").css('opacity', "1");
          $('#register-form').find('[name="position"]').parent().find("label").css('opacity', "1");
          $('#register-form').find('[name="department"]').parent().find("label").css('opacity', "1");
          $('#contract_duration_type').parent().find("label").css('opacity', "1");
        } else {
          $('#register-form').find('.non-required').find('input').prop("disabled", true)
          $('#register-form').find('.non-required').find('select').prop("disabled", true);
          $('#register-form').find('[name="department"]').parent().find("label").css('opacity', "0.5")
          $('#register-form').find('[name="position"]').parent().find("label").css('opacity', "0.5")
          $('#register-form').find('[name="office"]').parent().find("label").css('opacity', "0.5");
          $('#register-form').find('[name="department"]').parent().find("label").css('opacity', "0.5");
          $('#contract_duration_type').parent().find("label").css('opacity', "0.5");
        }
      }

      function validateForm(formElement, formName) {
        $(formElement).find('.field-error').hide();
        var isValid = true;
        if (formName === 'registerForm') {
          //name
          var nameHtmlElement = $(formElement).find('[name="name"]');
          var name = nameHtmlElement.val();
          if (!name) {
            isValid = false;
            nameHtmlElement.parent().find('.field-error').html('Vui lòng nhập Họ và tên!');
          }

          //year
          // var yearHtmlElement = $(formElement).find('[name="yob"]');
          // var year = yearHtmlElement.val();
          // if (!year) {
          //   isValid = false;
          //   yearHtmlElement.parent().find('.field-error').html('Vui lòng nhập Năm sinh!');
          // }

          //cmnd
          var cardHtmlElement = $(formElement).find('[name="card_number"]');
          var card = cardHtmlElement.val();
          if (!card) {
            isValid = false;
            cardHtmlElement.parent().find('.field-error').html('Vui lòng nhập Số CMND/CCCD!');
          }

          //phone
          var phoneHtmlElement = $(formElement).find('[name="phone_number"]');
          var phone = phoneHtmlElement.val();
          if (!phone) {
            isValid = false;
            phoneHtmlElement.parent().find('.field-error').html('Vui lòng nhập Số điện thoại!');
          }

          //email
          // var emailHtmlElement = $(formElement).find('[name="email"]');
          // var email = emailHtmlElement.val();
          // if (!email) {
          //   isValid = false;
          //   emailHtmlElement.parent().find('.field-error').html('Vui lòng nhập Email!');
          // }

          if (!$('.ischeck').is(':checked')) {
            isValid = false;
            x = `<div class="alert-danger-2" style="padding:10px 15px; color: #fff; font-weight: 400; margin-bottom:30px; background-color: #930000 !important">Vui lòng đồng ý các điều kiện và điều khoản</div>`;
            $("#result").show().html(x).slideDown();
          }
        }
        if (!isValid) {
          $('.field-error').show();
        }
        return isValid;
      }
      function resetFormValue(formElement) {
        formElement.find('input').val('');
        formElement.find('select').val('');
      }
      $('#register-form').on('submit', function (e) {
        e.preventDefault();
        var checkValidate = validateForm(this, 'registerForm');
        if (checkValidate) {
          var str = $("#register-form").serializeArray();
          console.log('str => ', str)
          var body = {
            "address": str[9] && str[9].value,
            "installation_address": str[10] && str[10].value,
            "personal_information": {
              "birthday": str[1].value ? `${str[1].value}-01-01` : '',
              "card_number": str[2].value,
              "email": str[4].value,
              "name": str[0].value,
              "phone_number": str[3].value
            },
            "working_information": {
              "contract_duration_type": $('#contract_duration_type')[0].value,
              "career_type": $('#working-place')[0].value,
              "department": str[5] && str[5].value,
              "income": str[8] && str[8].value.split(',').join(''),
              "office": str[6] && str[6].value,
              "position": str[7] && str[7].value
            }
          }
          var accessURL = "https://evnfc-be.twendeesoft.com/api/auth/signupV2";
          // var accessURL = "https://online.evnfc.vn/api/auth/signupV2";
          $.ajax({
            type: "POST",
            url: accessURL,
            data: JSON.stringify(body),
            dataType: "application/json",
            contentType: "application/json; charset=utf-8",
            success: function (response) {
              console.log('response => ', response)
              if (response.type == "error") {
                output =
                  '<div class="alert-danger" style="padding:10px 15px; margin-bottom:30px;">' +
                  response.text +
                  "</div>";
              } else {
                output =
                  '<div class="alert-success" style="padding:10px 15px; margin-bottom:30px;">' +
                  response.text +
                  "</div>";
                //reset values in all input fields
                $(".contact-form input").val("");
                $(".contact-form textarea").val("");
                var x = '<div class="alert-danger-2" style="padding:10px 15px; color: #fff;  margin-bottom:30px; font-weight: 400; background-color: #4CAF50 !important">Gửi yêu cầu vay thành công!</div>';
                // x.className = "show";
                $("#result").hide().html(x).slideDown();
                $(".contact_btn i").addClass("d-none");
                $(".alert-danger").addClass("display-none");
                $(".texxt-danger").addClass("display-none");
                setTimeout(function () {
                  $(".alert-danger-2").addClass("display-none");
                }, 5000);
              }

              if ($("#result").length) {
                // alert("yes");
                $("#result").hide().html(output).slideDown();
                $(".contact_btn i").addClass("d-none");
              } else {
                if (response.type == "error") {
                  Swal.fire({
                    type: "error",
                    icon: "error",
                    title: "Oops...",
                    html: '<div class="text-danger">' + response.text + "</div>",
                  });
                  $(".contact_btn i").addClass("d-none");
                } else {
                  Swal.fire({
                    type: "success",
                    icon: "success",
                    title: "Success!",
                    html: '<div class="text-success">' + response.text + "</div>",
                  });
                  $(".contact_btn i").addClass("d-none");
                }
              }
            },
            error: function (response) {
              $(".contact-form input").val("");
              $(".contact-form textarea").val("");
              $(".contact_btn i").addClass("d-none");
              var x;
              if (JSON.parse(response.responseText).message) {
                x = `<div class="alert-danger-2" style="padding:10px 15px; color: #fff; font-weight: 400; margin-bottom:30px; background-color: #930000 !important">${JSON.parse(response.responseText).message}</div>`;
              } else {
                x = '<div class="alert-danger-2" style="padding:10px 15px; color: #fff;  margin-bottom:30px; font-weight: 400; background-color: #4CAF50 !important">Gửi yêu cầu vay thành công!</div>'
              }
              // x.className = "show";
              $("#result").hide().html(x).slideDown();
              $(".contact_btn i").addClass("d-none");
              $(".alert-danger").addClass("display-none");
              $(".texxt-danger").addClass("display-none");
              setTimeout(function () {
                $(".alert-danger-2").addClass("display-none");
              }, 5000);
            },
          })
        }
      });
    </script>
    <!-- modal -->
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal
      btn.onclick = function () {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>

    <!-- on focus -->
    <script>
      $('#register-form').find('[name="email"]').focusin(function () {
        $('#register-form').find('[name="email"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="email"]').focusout(function () {
        $('#register-form').find('[name="email"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="name"]').focusin(function () {
        $('#register-form').find('[name="name"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="name"]').focusout(function () {
        $('#register-form').find('[name="name"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="yob"]').focusin(function () {
        $('#register-form').find('[name="yob"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="yob"]').focusout(function () {
        $('#register-form').find('[name="yob"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="card_number"]').focusin(function () {
        $('#register-form').find('[name="card_number"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="card_number"]').focusout(function () {
        $('#register-form').find('[name="card_number"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="phone_number"]').focusin(function () {
        $('#register-form').find('[name="phone_number"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="phone_number"]').focusout(function () {
        $('#register-form').find('[name="phone_number"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="department"]').focusin(function () {
        $('#register-form').find('[name="department"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="department"]').focusout(function () {
        $('#register-form').find('[name="department"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="office"]').focusin(function () {
        $('#register-form').find('[name="office"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="office"]').focusout(function () {
        $('#register-form').find('[name="office"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="position"]').focusin(function () {
        $('#register-form').find('[name="position"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="position"]').focusout(function () {
        $('#register-form').find('[name="position"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="address"]').focusin(function () {
        $('#register-form').find('[name="address"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="address"]').focusout(function () {
        $('#register-form').find('[name="address"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="installation_address"]').focusin(function () {
        $('#register-form').find('[name="installation_address"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="installation_address"]').focusout(function () {
        $('#register-form').find('[name="installation_address"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#register-form').find('[name="installation_address"]').focusin(function () {
        $('#register-form').find('[name="installation_address"]').parent().find("label").css("color", "#B42E2E")
      })
      $('#register-form').find('[name="income"]').focusout(function () {
        $('#register-form').find('[name="income"]').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })

      $('#working-place').focusin(function () {
        $('#working-place').parent().find("label").css("color", "#B42E2E")
      })
      $('#working-place').focusout(function () {
        $('#working-place').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })
      $('#contract_duration_type').focusin(function () {
        $('#contract_duration_type').parent().find("label").css("color", "#B42E2E")
      })
      $('#contract_duration_type').focusout(function () {
        $('#contract_duration_type').parent().find("label").css("color", "rgba(0,0,0,.87)")
      })
    </script>

    <!-- Check disable input  -->
    <script>
      if ($('#register-form').find('[name="department"]').prop('disabled')) {
        $('#register-form').find('[name="department"]').parent().find("label").css('opacity', "0.5");
        $('#register-form').find('[name="position"]').parent().find("label").css('opacity', "0.5");
        $('#register-form').find('[name="office"]').parent().find("label").css('opacity', "0.5");
        $('#register-form').find('[name="department"]').parent().find("label").css('opacity', "0.5");
        $('#contract_duration_type').parent().find("label").css('opacity', "0.5");
      }

    </script>
</body>

</html>
