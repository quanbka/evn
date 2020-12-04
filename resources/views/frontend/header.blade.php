<?php

    function getClass ($menuItem, $slug) {
        // print_r("/" . $menuItem['url']); die;
        if ( ("/" . $slug) == $menuItem['url']) {
            return 'class="prd-active"';
        }
    }
    $menu = [
        [
            'url' => '/gioi-thieu',
            'text' => 'Giới thiệu',
            'children' => [
                [
                    'url' => '/gioi-thieu#section-1',
                    'text' => 'Về EVNFinance',
                ],
                [
                    'url' => '/gioi-thieu#section-2',
                    'text' => 'Về Easy Solar',
                ],
            ]
        ],
        [
            'url' => '/ho-tro',
            'text' => 'Hỗ trợ',
            'children' => [
                [
                    'url' => '/ho-tro',
                    'text' => 'Q&A',
                ],
                [
                    'url' => '/ho-tro',
                    'text' => 'Hướng dẫn',
                ],
            ]
        ],
        [
            'url' => '/lien-he',
            'text' => 'Liên hệ',
        ],
        [
            'url' => 'http://evnfc-portal.twendeesoft.com/login',
            'text' => 'Đăng nhập',
        ],
        [
            'url' => '/san-pham',
            'text' => 'Cho vay',
            'children' => [
                [
                    'url' => '/san-pham',
                    'text' => 'EasySolar CBCNV điện',
                ],
                [
                    'url' => '/san-pham',
                    'text' => 'EasySolar hộ dân',
                ],
            ]
        ],
        [
            'url' => '/nha-cung-cap',
            'text' => 'Nhà cung cấp',
            'children' => [
                [
                    'url' => '/nha-cung-cap#provider-section-1',
                    'text' => 'Chính sách',
                ],
                [
                    'url' => '/nha-cung-cap#provider-section-1',
                    'text' => 'Chức năng',
                ],
                [
                    'url' => '/nha-cung-cap#provider-section-1',
                    'text' => 'Đối tác',
                ],
            ]
        ],
        [
            'url' => '/tu-van',
            'text' => 'Tư vấn - Trải nghiệm',
            'children' => [
                [
                    'url' => 'https://solar.evn.com.vn/#/calculator',
                    'text' => 'Công cụ khảo sát EVNSOLAR',
                ],
                [
                    'url' => '/thu-tuc-dien',
                    'text' => 'Thủ tục điện',
                ],
                [
                    'url' => '/tu-van',
                    'text' => 'Pháp luật',
                ],
                [
                    'url' => '/tu-van#electric-knowledge',
                    'text' => 'Kiến thức điện',
                ],
            ]
        ],

    ];
    $half = ceil(count($menu) / 2);
    $firstMenu = [];
    $halfMenu = [];
    foreach ($menu as $key => $value) {
        if ($key < $half) {
            $firstMenu[] = $value;
        } else {
            $lastMenu[] = $value;
        }
    }
    // print_r($firstMenu); die;

?>

<div id="front-header">
  <div class="ui grid">
    <div class="computer only row">
      <div class="ui container">
        <div class="ui grid front-menu">
          <div class="five wide column">
            <a href="/">
              <img class="logo" src="/images/logo.png">
            </a>
          </div>
          <div class="eleven wide column">
            <div class="top-menu">
              <a href="/" class="menu-item font-14 text-bold text-uppercase"><img style="width: 26px;" src="/images/home-solid.png" /></a>
              @foreach ($firstMenu as $menuItem)
                  <div class="dropdown">
                    <div style="display: flex; justify-content: space-between; align-items: center;" {!! getClass($menuItem, $slug) !!}>
                      <a href="{{ $menuItem['url'] }}" class="item font-14 text-bold text-uppercase">{{ $menuItem['text'] }}</a>
                      <!-- <img src="./images/angle-down-solid.png" /> -->
                    </div>
                    @if (isset($menuItem['children']))
                        <div class="dropdown-content">
                          <ul>
                              @foreach ($menuItem['children'] as $key => $subMenuItem)
                                  <li><a href="{{ $subMenuItem['url'] }}" >{{ $subMenuItem['text'] }}</a></li>
                              @endforeach
                          </ul>
                        </div>
                    @endif

                  </div>
              @endforeach



              <div class=" menu-item ui icon input">
                <input class="prompt" type="text" placeholder="">
                <i class="search icon"></i>
              </div>
              <div class="results"></div>
            </div>
            <div class="bottom-menu">
                @foreach ($lastMenu as $menuItem)
                    <div class="dropdown">
                      <div style="display: flex; justify-content: space-between; align-items: center;" {!! getClass($menuItem, $slug) !!} >
                        <a href="{{ $menuItem['url'] }}" class="item font-14 text-bold text-uppercase">{{ $menuItem['text'] }}</a>
                        <!-- <img src="./images/angle-down-solid.png" /> -->
                      </div>
                      @if (isset($menuItem['children']))
                          <div class="dropdown-content">
                            <ul>
                                @foreach ($menuItem['children'] as $key => $subMenuItem)
                                    <li><a href="{{ $subMenuItem['url'] }}" >{{ $subMenuItem['text'] }}</a></li>
                                @endforeach
                            </ul>
                          </div>
                      @endif

                    </div>
                @endforeach
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="tablet mobile only row">
      <div class="column">
        <div class="ui menu">
          <a href="/" class="item">
            <img class="logo" src="/images/logo.png">
          </a>
          <div class="right menu">
            <a id="mobile_item" class="item"><i class="bars icon"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pushable">
    <div id="sidebar" class="ui sidebar {{ isset($sidebarClass) ? $sidebarClass : "other-sidebar" }} vertical menu">
      <button class="side-bar-close-icon"><i class="close icon"></i></button>
      <div class="sidebar-search">
        <div class="tem ui icon input">
          <input class="prompt" type="text" placeholder="">
          <i class="search icon"></i>
        </div>
      </div>
      @foreach ($firstMenu as $menuItem)
          <a href="{{ $menuItem['url'] }}" class="item font-14 text-bold text-uppercase">{{ $menuItem['text'] }}</a>
      @endforeach
      @foreach ($lastMenu as $menuItem)
          <a href="{{ $menuItem['url'] }}" class="item font-14 text-bold text-uppercase">{{ $menuItem['text'] }}</a>
      @endforeach

      {{-- <div class="siderbar-bottom">

      </div> --}}
    </div>
  </div>
</div>
