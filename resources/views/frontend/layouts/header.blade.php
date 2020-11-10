<div class="header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="topbar-left col-md-6 hidden-sm hidden-xs">
                    <?php
                        $topbarItems = [
                            [
                                "url" => '/danh-muc/tin-tuc-su-kien_3.html',
                                "name" => "Tin tức",
                            ],
                            [
                                "url" => '/bai-viet/gioi-thieu_1.html',
                                "name" => "Giới thiệu",
                            ],
                            [
                                "url" => '/bai-viet/lien-he_2.html',
                                "name" => "Liên hệ",
                            ],
                        ];
                    ?>
                    <ul class="topbar-left-list">
                        @foreach ($topbarItems as $key => $topbarItem)
                            <li>
                                <a href="{{ $topbarItem['url'] }}">{{ $topbarItem['name'] }}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <div class="topbar-left col-xs-5 hidden-md hidden-lg">
                    <ul class="topbar-left-list">
                        <li>
                            <a href="tel:{{ config('info.hotline')}}"><i class="fa fa-phone"></i> {{ config('info.hotline') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="topbar-right col-md-6 col-xs-7">
                    <ul class="topbar-right-list">
                        <li>
                            <a href="{{ route('login') }}">Đăng nhập</a>
                        </li>
                        <li>
                            <a href="tel:{{ config('info.hotline')}}">{{ config('info.hotline')}}</a>
                        </li>
                        <li>
                            <a href="#">{{ config('info.address')}}</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="header-left col-md-3">
                        <a href="/">
                            <img src="/frontend/images/logo.png" alt="" class="logo">
                        </a>
                    </div>
                </div>
                <div class="header-center col-md-6">
                    <form class="" action="{{ route('search') }}" method="get">
                        <div class="input-group">
                            <input name="q" type="text" class="form-control" placeholder="Tìm kiếm ..."
                            @if(isset($keyword))
                                value="{{$keyword}}"
                            @endif
                            >
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="header-right col-md-3 hidden-xs hidden-sm">
                    <a href="tel:{{ config('info.hotline')}}">
                        <span>Tư vấn (9:30 - 21:30)</span>
                        <strong>{{ config('info.hotline') }}</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <?php
            $baseCategory = \App\Models\Category::whereNull('category_id')->orderBy('sorder', 'desc')->get();
         ?>
        <nav class="navbar navbar-inverse navbar-static">
             <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse js-navbar-collapse">
                    <div class="row">
                        <ul class="nav navbar-nav">
                            @foreach ($baseCategory as $category)
                                <?php
                                    $categoryChildren = \App\Models\Category::where('category_id', $category->id)->get();
                                ?>
                                @if (count($categoryChildren))
                                <li class="dropdown dropdown-large">
                                    <a href="{{ $category->url() }}" class="dropdown-toggle" data-toggle="dropdown">{{ $category->name }}<b class="caret"></b></a>
                                    <ul class="dropdown-menu dropdown-menu-large row">
                                        <div class="container">
                                            <div class="row">

                                                @foreach ($categoryChildren as $item)
                                                    <ul class="col-md-3 col-sm-6">
                                                        <h3><a href="{{ $item->url() }}">{{ $item->name }}</a></h3>
                                                        <?php
                                                        $categoryChildren = \App\Models\Category::where('category_id', $category->id)->get();
                                                        ?>

                                                    </ul>
                                                @endforeach
                                            </div>
                                        </div>

                                    </ul>
                                </li>
                                @else
                                    <li class="dropdown dropdown-large">
                                        <a href="{{ $category->url() }}">{{ $category->name }}</a>
                                    </li>
                                @endif
                            @endforeach

                        </ul>

                    </div>
                </div><!-- /.nav-collapse -->
            </div>
        </nav>
    </div>
</div>
