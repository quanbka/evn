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
    <div id="sidebar" class="ui sidebar index-sidebar vertical menu">
      <button class="side-bar-close-icon"><i class="close icon"></i></button>
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
