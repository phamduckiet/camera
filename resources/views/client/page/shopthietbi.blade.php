@extends('client.share.master')
@section('content')
<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-banner shop-page-banner">
                    <a href="#">
                        <img alt="Cái này ít bữa làm hình banner bỏ vào" src="images/bg-banner/2.jpg">
                    </a>
                </div>
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                        </div>
                        <div class="toolbar-amount">
                            <span>Showing 1 to 9 of 15</span>
                        </div>
                    </div>
                </div>
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="grid-view" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                    @foreach ($sanpham as $value )
                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="{{$value->image}}" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">Mới</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html">Đánh giá</a>
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
                                                    <h4><a class="product_name" href="single-product.html">{{$value->name}}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price" style="color: red">Giá {{ number_format($value->price,0,',','.')."VNĐ"}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Showing 1-12 of 13 item(s)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                                        <li><a class="Previous" href="#"><i class="fa fa-chevron-left"></i> Previous</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                          <a class="Next" href="#"> Next <i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
