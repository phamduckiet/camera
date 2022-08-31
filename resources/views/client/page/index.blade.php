@extends('client.share.master')
@section('content')
<<<<<<< HEAD
<!-- Giao diện banner -->
=======
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
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
<<<<<<< HEAD
                                    <a class="links" style="font-family: Arial" href="/lapdat">Đặt Lịch Ngay</a>
=======
                                    <a class="links" style="font-family: Arial" href="">Đặt Lịch Ngay</a>
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
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
<<<<<<< HEAD
                        <img src="client/images/banner/1_1.jpg" alt="">
=======

                        <img src="{{asset('client/images/banner/1_1.jpg')}}" alt="">
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
                    </a>
                </div>
                <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                    <a href="#">
<<<<<<< HEAD
                        <img src="client/images/banner/1_2.jpg" alt="">
=======
                        <img src="{{asset('client/images/banner/1_2.jpg')}}" alt="">
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
                    </a>
                </div>
            </div>
            <!-- Li Banner Area End Here -->
        </div>
    </div>
</div>
<section class="product-area li-laptop-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            @foreach ($thietbi as $value)
            <div class="col-lg-12">
                <div class="li-section-title" style="font-family: Arial" >
                    <h2>
<<<<<<< HEAD
                        <span>{{$value->tenthietbi}}</span>
                    </h2>

=======
                        <b>
                        <span>{{$value->tenthietbi}}</span>
                    </b>
                    </h2>
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach ($sanpham as $value_sp )
                        @if($value_sp->thietbi_id == $value->id)
                        <div class="col-lg-12">
<<<<<<< HEAD
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="/chitiet/{{$value->slug}}-{{$value->id}}">
                                        <img src="{{$value_sp->image}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Rating</a>
=======
                                <div class="product-image">
                                    <a href="/camera/san-pham/{{$value_sp->slug}}">
                                        <img src="{{$value_sp->image}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">Mới</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">

                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a>Đánh giá</a>
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
<<<<<<< HEAD
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
=======
                                                    <li><i class="fa fa-star-o"></i></li>
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
<<<<<<< HEAD
                                        <h4><a class="product_name" style="font-family: Arial "  href="/chitiet/{{$value->slug}}-{{$value->id}}">{{$value_sp->name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($value_sp->price,0,',','.')." đ"}}</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">Add to cart</a></li>
                                            <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>

                        @endif

                        @endforeach
                    </div>
                </div>
=======
                                        <h4><a class="product_name" href="/camera/san-pham/{{$value_sp->slug}}">{{$value_sp->name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price" style="color: red">Giá {{ number_format($value_sp->price,0,',','.')."VNĐ"}}</span>
                                        </div>
                                    </div>
                                </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <br>
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
            </div>

            @endforeach
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
@endsection
