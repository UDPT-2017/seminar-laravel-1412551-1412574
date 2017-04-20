@extends('home.master')

@section('content')

<div class="content-area">

    <!-- PAGE -->
    <section class="page-section no-padding slider">
        <div class="container full-width">

            <div class="main-slider">
                <div class="owl-carousel" id="main-slider">

                    <!-- Slide 1 -->
                    <div class="item slide1">
                        <img class="slide-img" src="upload/slide/iphone-5-banner.jpg" alt=""/>
                        <div class="caption">
                            <div class="container">
                                <div class="div-table">
                                    <div class="div-cell">
                                        <div class="caption-content">
                                            <h2 class="caption-title">The Biggest</h2>
                                            <h3 class="caption-subtitle">Sale</h3>
                                            <p class="caption-text">
                                                <a class="btn btn-theme" href="#">Shop Now</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Slide 1 -->

                    <!-- Slide 2 -->
                    <div class="item slide2 alt">
                        <img class="slide-img" src="upload/slide/category_banner_galaxy_S7_01.jpg" alt=""/>
                    </div>
                    <!-- /Slide 2 -->

                    <!-- Slide 3 -->
                    <div class="item slide3 dark">
                        <img class="slide-img" src="upload/slide/bottomSlider1472567081.jpg" alt=""/>
                    </div>
                    <!-- /Slide 3 -->

                </div>
            </div>

        </div>
    </section>
    <!-- /PAGE -->

   

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">

            <div class="tabs">
                <ul id="tabs" class="nav nav-justified-off"><!--
                    --><li class=""><a href="#tab-1" data-toggle="tab">Hotest</a></li><!--
                    --><li class="active"><a href="#tab-2" data-toggle="tab">Newest</a></li><!--
                    --><li class=""><a href="#tab-3" data-toggle="tab">Top Sellers</a></li>
                </ul>
            </div>

            <div class="tab-content">

                <!-- tab 1 -->
                <div class="tab-pane fade" id="tab-1">
                    <div class="row">
                        @foreach($sphot as $sp)
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail no-border no-padding">
                                <div class="media" style="width:263px; height: 263px;">
                                    <a href="product/{{$sp->id}}/{{$sp->tenkhongdau}}.html">
                                        <img style="width:100%; height: 100%; object-fit: contain;" src="upload/product/{{$sp->urlhinh}}" alt=""/>
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <h4 class="caption-title"><a href="product/{{$sp->id}}/{{$sp->tenkhongdau}}.html">{{$sp->tensp}}</a></h4>
                                    <div class="price">
                                        @if($sp->giamgia > 0)
                                        <ins>{{number_format($sp->gia - $sp->gia*$sp->giamgia/100)}} vnđ</ins> <del>{{number_format($sp->gia)}}</del>
                                        @elseif($sp->giamgia == 0)
                                        <ins>{{number_format($sp->gia)}} vnđ</ins>
                                        @endif
                                    </div>
                                    <div class="buttons">
                                        <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                        --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a><!--
                                        --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- tab 2 -->
                <div class="tab-pane fade active in" id="tab-2">
                    <div class="row">
                        @foreach($spmoi as $sp)
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail no-border no-padding">
                                <div class="media" style="width:263px; height: 263px;">
                                    <a href="product/{{$sp->id}}/{{$sp->tenkhongdau}}.html">
                                        <img style="width:100%; height: 100%; object-fit: contain;" src="upload/product/{{$sp->urlhinh}}" alt=""/>
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <h4 class="caption-title"><a href="product/{{$sp->id}}/{{$sp->tenkhongdau}}.html">{{$sp->tensp}}</a></h4>
                                    <div class="price">
                                        @if($sp->giamgia > 0)
                                        <ins>{{number_format($sp->gia - $sp->gia*$sp->giamgia/100)}} vnđ</ins> <del>{{number_format($sp->gia)}}</del>
                                        @elseif($sp->giamgia == 0)
                                        <ins>{{number_format($sp->gia)}} vnđ</ins>
                                        @endif
                                    </div>
                                    <div class="buttons">
                                        <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                        --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a><!--
                                        --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- tab 3 -->
                <div class="tab-pane fade" id="tab-3">
                    <div class="row">
                        @foreach($spkhuyenmai as $sp)
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail no-border no-padding">
                                <div class="media" style="width:263px; height: 263px;">
                                    <a href="product/{{$sp->id}}/{{$sp->tenkhongdau}}.html">
                                        <img style="width:100%; height: 100%; object-fit: contain;" src="upload/product/{{$sp->urlhinh}}" alt=""/>
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <h4 class="caption-title"><a href="product/{{$sp->id}}/{{$sp->tenkhongdau}}.html">{{$sp->tensp}}</a></h4>
                                    <div class="price">
                                        @if($sp->giamgia > 0)
                                        <ins>{{number_format($sp->gia - $sp->gia*$sp->giamgia/100)}} vnđ</ins> <del>{{number_format($sp->gia)}}</del>
                                        @elseif($sp->giamgia == 0)
                                        <ins>{{number_format($sp->gia)}} vnđ</ins>
                                        @endif
                                    </div>
                                    <div class="buttons">
                                        <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                        --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a><!--
                                        --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <div class="message-box">
                <div class="message-box-inner">
                    <h2>Giao hàng miễn phí cho đơn hàng trên {{number_format(3000000)}} vnđ</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <h2 class="section-title"><span>Top Rated Products</span></h2>
            <div class="top-products-carousel">
                <div class="owl-carousel" id="top-products-carousel">
                    @foreach($sphot8 as $sp)
                    <div class="thumbnail no-border no-padding">
                        <div class="media" style="width:165px; height: 262px;">
                            <a href="product/{{$sp->id}}/{{$sp->tenkhongdau}}.html">
                                <img style="width:100%; height: 100%; object-fit: contain;" src="upload/product/{{$sp->urlhinh}}" alt=""/>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="product/{{$sp->id}}/{{$sp->tenkhongdau}}.html">{{$sp->tensp}}</a></h4>
                            <div class="price">
                                @if($sp->giamgia > 0)
                                <ins>{{number_format($sp->gia - $sp->gia*$sp->giamgia/100)}} vnđ</ins> <del>{{number_format($sp->gia)}}</del>
                                @elseif($sp->giamgia == 0)
                                <ins>{{number_format($sp->gia)}} vnđ</ins>
                                @endif
                            </div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent" href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->
</div>

@endsection