@extends('client.share.master')
@section('content')
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
<section class="product-area li-laptop-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            @foreach ($thietbi as $value)
            <div class="col-lg-12">
                <div class="li-section-title" style="font-family: Arial" >
                    <h2>
                        <b>
                        <span>{{$value->tenthietbi}}</span>
                    </b>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach ($sanpham as $value_sp )
                        @if($value_sp->thietbi_id == $value->id)
                        <div class="col-lg-12">
                                <div class="product-image">
                                    <a href="san-pham/{{$value_sp->slug}}">
                                        <img src="{{$value_sp->image}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">Mới</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">

                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a>Đánh giá</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" href="san-pham/{{$value_sp->slug}}">{{$value_sp->name}}</a></h4>
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
            </div>

            @endforeach
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
@endsection
