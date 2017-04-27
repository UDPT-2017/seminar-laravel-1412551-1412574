@extends('home.master')

@section('content')


<style>
    table, td, th {
        border: 1px solid black;
    }
</style>

<!-- CONTENT AREA -->
<div class="content-area">

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">

            <div class="row product-single">
                <div class="col-md-6">
                    <div class="badges">
                        <div class="hot">hot</div>
                        <div class="new">new</div>
                    </div>
                    <div>
                        <div class="item" style="width:555px; height: 555px;">
                            <a href="#"><img style="width:100%; height: 100%; object-fit: contain;" class="img-responsive" src="upload/product/{{$sanpham->urlhinh}}" alt=""/></a></div>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="back-to-category">
                      
                        <ul class="breadcrumb">
                            <li><a href="home">Trang chủ</a></li>
                            <li><a href="#">{{$sanpham->hangsp->loaisanpham->tenloaisp}}</a></li>
                            <li><a href="#">{{$sanpham->hangsp->tenhangsp}}</a></li>
                            <li class="active">{{$sanpham->tensp}}</li>
                        </ul>
                    </div>
                    <h2 class="product-title">{{$sanpham->tensp}}</h2>
                    <div class="product-rating clearfix">
                        <a class="reviews" href="#">{{$sanpham->luotxem}} lượt xem</a> | 
                    </div>
                    <div class="product-availability">Tình trạng: <strong>
                        @if($sanpham->tinhtrang == 1)
                            Còn hàng
                        @elseif($sanpham->tinhtrang == 0)
                            Hết hàng
                        @else
                            Liên hệ
                        @endif
                    </strong></div>
                    <hr class="page-divider small"/>

                    <div class="product-price">
                        @if($sanpham->giamgia > 0)
                        <ins>{{number_format($sanpham->gia - $sanpham->gia*$sanpham->giamgia/100)}} vnđ</ins> <del>{{number_format($sanpham->gia)}}</del>
                        @elseif($sanpham->giamgia == 0)
                        <ins>{{number_format($sanpham->gia)}} vnđ</ins>
                        @endif
                    </div>
                    <hr class="page-divider"/>

                    <div class="product-text">
                        {!!$sanpham->khuyenmai!!}
                    </div>
                    <hr class="page-divider"/>
                    <hr class="page-divider small"/>


                    <div class="buttons">
                        <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="addcart/{{$sanpham->id}}"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                    </div>

                    <hr class="page-divider small"/>

                    

                </div>
            </div>
            <div class="row product-single">
                <div class="col-md-6">
                    <h3>Thông số kĩ thuật</h3>
                    {!!$sanpham->tomtat!!}
                </div>
            </div>


        </div>
    </section>
    <!-- /PAGE -->


    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <div class="tabs-wrapper content-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#item-description" data-toggle="tab">Item Description</a></li>
                    <li><a href="#reviews" data-toggle="tab">Reviews (2)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="item-description">
                        {!!$sanpham->chitiet!!}
                    </div>
                    <div class="tab-pane fade" id="reviews">

                        <div class="comments">
                            <div class="media comment">
                                <a href="#" class="pull-left comment-avatar">
                                    <img alt="" src="assets/img/preview/avatars/avatar-1.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                    <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                </div>
                            </div>
                            <div class="media comment">
                                <a href="#" class="pull-left comment-avatar">
                                    <img alt="" src="assets/img/preview/avatars/avatar-3.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                    <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form">
                            <h4 class="block-title">Add a Review</h4>
                            <form method="post" action="#" name="comments-form" id="comments-form">
                                <div class="form-group"><input type="text" placeholder="Your name and surname" class="form-control" title="comments-form-name" name="comments-form-name"></div>
                                <div class="form-group"><input type="text" placeholder="Your email adress" class="form-control" title="comments-form-email" name="comments-formemail"></div>
                                <div class="form-group"><textarea placeholder="Your message" class="form-control" title="comments-form-comments" name="comments-form-comments" rows="6"></textarea></div>
                                <div class="form-group"><button type="submit" class="btn btn-theme btn-theme-transparent btn-icon-left" id="submit"><i class="fa fa-comment"></i> Review</button></div>
                            </form>
                        </div>
                        <!-- // -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <h2 class="section-title section-title-lg"><span>Sản phẩm liên quan</span></h2>
            <div class="featured-products-carousel">
                <div class="owl-carousel" id="featured-products-carousel">
                    @foreach($splienquan as $sp)
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
            <hr class="page-divider half"/>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    
    

    <!-- /PAGE -->

</div>
<!-- /CONTENT AREA -->

@endsection