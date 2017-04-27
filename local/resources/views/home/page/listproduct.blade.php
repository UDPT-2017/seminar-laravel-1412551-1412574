@extends('home.master')

@section('content')

<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
        <div class="container">
            <div class="page-header">
                <h1>Danh sách sản phẩm</h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="home">Trang chủ</a></li>
                <li><a href="#">{{$hangsp->loaisanpham->tenloaisp}}</a></li>
                <li class="active">{{$hangsp->tenhangsp}}</li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                <aside class="col-md-3 sidebar" id="sidebar">
                    <!-- widget shop categories -->
                    <div class="widget shop-categories">
                        <h4 class="widget-title">Danh mục</h4>
                        <div class="widget-content">
                            <ul>
                                @foreach($loaisp as $loai)
                                    @if(count($loai->tenloaisp) > 0)
                                <li>
                                    <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                    <a href="#">{{$loai->tenloaisp}}</a>
                                    <ul class="children">
                                    @foreach($loai->hangsp as $hang)
                                        <li>
                                            <a href="listproduct/{{$hang->id}}/{{$hang->tenkhongdau}}.html">{{$hang->tenhangsp}}
                                                <span class="count">{{$hang->sanpham->count()}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </li>
                                    @endif
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                   
                </aside>
                <!-- /SIDEBAR -->
                <!-- CONTENT -->
                <div class="col-md-9 content" id="content">
                    
                    
                    
                    <!-- Products List -->
                    <div class="products list">
                        @foreach($sp as $sanpham)

                        <div class="thumbnail no-border no-padding">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="media" style="width:262px; height: 350px;">
                                        <a href="product/{{$sanpham->id}}/{{$sanpham->tenkhongdau}}.html">
                                            <img style="width:100%; height: 100%; object-fit: contain;" src="upload/product/{{$sanpham->urlhinh}}" alt=""/>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="caption">
                                        <h4 class="caption-title">{{$sanpham->tensp}}</h4>
                                        <a class="reviews" href="#">{{$sanpham->luotxem}} lượt xem</a>
                                        <div class="overflowed">
                                            <div class="availability">Tình trạng:
                                            <strong>
                                            @if($sanpham->tinhtrang == 1)
                                                Còn hàng
                                            @elseif($sanpham->tinhtrang == 0)
                                                Hết hàng
                                            @else
                                                Liên hệ
                                            @endif
                                            </strong></div>
                                            <div class="price">
                                                @if($sanpham->giamgia > 0)
                                                <ins>{{number_format($sanpham->gia - $sanpham->gia*$sanpham->giamgia/100)}} vnđ</ins> <del>{{number_format($sanpham->gia)}}</del>
                                                @elseif($sanpham->giamgia == 0)
                                                <ins>{{number_format($sanpham->gia)}} vnđ</ins>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="caption-text">
                                            {!!$sanpham->khuyenmai!!}
                                        </div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="addcart/{{$sanpham->id}}"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                    <!-- /Products list -->
                    
                    <!-- Pagination -->
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <li class="{{($sp->currentPage() == 1) ? 'disabled' : '' }}"><a href="{{$sp->url($sp->currentPage() - 1)}}"><i class="fa fa-angle-double-left"></i> Previous</a></li>
                            @for($i = 1; $i <= $sp->lastPage(); $i++)
                            <li class="{{($sp->currentPage() == $i) ? 'active' : '' }}"><a href="{{$sp->url($i)}}">{{$i}} <span class="sr-only">(current)</span></a></li>
                            @endfor
                            <li class="{{($sp->currentPage() == $sp->lastPage()) ? 'disabled' : '' }}"><a href="{{$sp->url($sp->currentPage() + 1)}}">Next <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /Pagination -->

                </div>
                <!-- /CONTENT -->

            </div>
        </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->


</div>
<!-- /CONTENT AREA -->

@endsection