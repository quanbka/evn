<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/sys/images/no-image.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Control Panel</li>
            <li class="active">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Tài khoản</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Người dùng</a></li>
                    <li class=""><a href="#"><i class="fa fa-circle-o"></i> Phân quyền</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>Cửa hàng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/system/shop/product"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
                    <li class=""><a href="/system/shop/category"><i class="fa fa-circle-o"></i> Danh mục sản phẩm</a></li>
                    <li class=""><a href="{{ route('system-shop-import') }}"><i class="fa fa-circle-o"></i> Import từ Woocommerce</a></li>
                </ul>
            </li>
            <li class="">
                <a href="/system/order">
                    <i class="fa fa-money"></i> <span>Đơn hàng</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>Bài viết</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/system/blog/blog"><i class="fa fa-circle-o"></i> Danh sách bài viết</a></li>
                    <li class=""><a href="/system/blog/category"><i class="fa fa-circle-o"></i> Danh mục bài viết</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>