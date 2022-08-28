<div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
    <div class="container">
        <div class="row">
            <!-- Begin Header Logo Area -->
            <div class="col-lg-3">
                <div class="logo pb-sm-30 pb-xs-30">
                    <a href="index.html">
                        <img src="client/images/menu/logo/1.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- Header Logo Area End Here -->
            <!-- Begin Header Middle Right Area -->
            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                <!-- Begin Header Middle Searchbox Area -->
                <form action="#" class="hm-searchbox">
                    <input type="text" placeholder="Tìm kiếm ...">
                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <!-- Header Middle Searchbox Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="header-middle-right">
                    <ul class="hm-menu">
                        <!-- Begin Header Middle Wishlist Area -->
                        <li class="hm-wishlist">
                            <a href="wishlist.html">
                                <span class="cart-item-count wishlist-item-count">0</span>
                                <i class="fa fa-heart-o"></i>
                            </a>
                        </li>
                        <!-- Header Middle Wishlist Area End Here -->
                        <!-- Begin Header Mini Cart Area -->
                        <li class="hm-minicart">
                            <div class="hm-minicart-trigger">
                                <span class="item-icon"></span>
                                <span class="item-text">£80.00
                                    <span class="cart-item-count">2</span>
                                </span>
                            </div>
                            <span></span>
                            <div class="minicart">
                                <ul class="minicart-product-list">
                                    <li>
                                        <a href="single-product.html" class="minicart-product-image">
                                            <img src="client/images/product/small-size/5.jpg" alt="cart products">
                                        </a>
                                        <div class="minicart-product-details">
                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                            <span>£40 x 1</span>
                                        </div>
                                        <button class="close" title="Remove">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <a href="single-product.html" class="minicart-product-image">
                                            <img src="client/images/product/small-size/6.jpg" alt="cart products">
                                        </a>
                                        <div class="minicart-product-details">
                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                            <span>£40 x 1</span>
                                        </div>
                                        <button class="close" title="Remove">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </li>
                                </ul>
                                <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                <div class="minicart-button">
                                    <a href="shopping-cart.html" class="li-button li-button-fullwidth li-button-dark">
                                        <span>View Full Cart</span>
                                    </a>
                                    <a href="checkout.html" class="li-button li-button-fullwidth">
                                        <span>Checkout</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- Header Mini Cart Area End Here -->
                    </ul>
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
            <!-- Header Middle Right Area End Here -->
        </div>
    </div>
</div>
<!-- Giao diện thiết bị trên top -->
<div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Header Bottom Menu Area -->
                <div class="hb-menu">
                    <nav>
                        <ul>
                            <li style="margin-right:8px"><a href="/">Home</a></li>
                            @foreach ($thietbi as $value )
                            <li style="margin-right:8px"><a href="/">{{$value->tenthietbi}}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom Menu Area End Here -->
            </div>
        </div>
    </div>
</div>
<!-- Giao diện banner -->
<div class="slider-with-banner">
    <div class="container">
        <div class="row">
            <!-- Begin Slider Area -->
            <div class="col-lg-8 col-md-8">
                <div class="slider-area">
                    <div class="slider-active owl-carousel">
                        <div class="single-slide align-center-left animation-style-01 bg-3">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h1 style="color: rgb(120, 151, 6)"> <i>QUÝ SEVER</i></h1>
                                <h2>Lắp Đặt Camera Trọn Gói</h2>
                                <h3>Sữa Chữa Camera,Cung Cấp Phụ Kiện,...</h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" style="font-family: Arial" href="">Đặt Lịch Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Area End Here -->
            <!-- Begin Li Banner Area -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                <div class="li-banner">
                    <a href="#">
                        <img src="client/images/banner/1_1.jpg" alt="">
                    </a>
                </div>
                <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                    <a href="#">
                        <img src="client/images/banner/1_2.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- Li Banner Area End Here -->
        </div>
    </div>
</div>
