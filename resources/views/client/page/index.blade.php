@extends('client.share.master')
@section('content')
<section class="product-area li-laptop-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            @foreach ($thietbi as $value)
            <div class="col-lg-12">
                <div class="li-section-title" style="font-family: Arial" >
                    <h2>
                        <span>{{$value->tenthietbi}}</span>
                    </h2>

                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach ($sanpham as $value_sp )
                        @if($value_sp->thietbi_id == $value->id)
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="/detail/{{$value->slug}}-{{$value->id}}">
                                        <img src="{{$value_sp->image}}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Rating</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" style="font-family: Arial "  href="/detail/{{$value->slug}}-{{$value->id}}">{{$value_sp->name}}</a></h4>
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
            </div>

            @endforeach
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
@endsection
