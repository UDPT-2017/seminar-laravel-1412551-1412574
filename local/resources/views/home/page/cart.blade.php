@extends('home.master')

@section('content')


<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
        <div class="container">
            <div class="page-header">
                <h1>Giỏ hàng</h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="home">Home</a></li>
                <li class="active">Giỏ hàng</li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">

            <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Chi tiết giỏ hàng</h3>
            <div class="row orders">
                <div class="col-md-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Tên sản phẩm</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form method="POST" action="">
                            <input name="_token" type="hidden" value="{{csrf_token()}}"/>
                            @foreach($giohang as $sp)
                            <tr>
                                <td class="image"><a style="width:70px; height: 100px;" class="media-link" href="#"><i class="fa fa-plus"></i><img style="width:100%; height: 100%; object-fit: contain;" src="upload/product/{{$sp->options->img}}" alt=""/></a></td>
                                <td class="quantity"><input class="qty" type="text" style="width:30px;" value="{{$sp->qty}}" /></td>
                                <td class="description">
                                    <h4><a href="#">{{ $sp->name }}</a></h4>
                                </td>
                                <td class="total">{{number_format($sp->subtotal)}}
                                    <a href="deletecart/{{$sp->rowId}}"><i class="fa fa-close"></i></a> 
                                    <a class="updategio" id="{{$sp->rowId}}" href="#"><i class="fa fa-refresh"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </form>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <h3 class="block-title"><span>Hóa đơn</span></h3>
                    <div class="shopping-cart">
                        <table>
                            <tr>
                                <td>Tổng hóa đơn:</td>
                                <td>{{$total}}</td>
                            </tr>
                            <tr>
                                <td>Vận chuyển:</td>
                                <td>Free</td>
                            </tr>
                            <tfoot>
                                <tr>
                                    <td>Tổng phải trả:</td>
                                    <td>{{$total}}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Ghi chú thông tin đặt hàng: SĐT, địa chỉ"></textarea>
                        </div>
                        <button class="btn btn-theme btn-theme-dark btn-block">Gửi đơn đặt hàng</button>
                    </div>
                </div>
            </div>

            
            <div class="overflowed">
                <a class="btn btn-theme btn-theme-dark" href="home">Home Page</a>
            </div>



        </div>
    </section>
    <!-- /PAGE -->


</div>
<!-- /CONTENT AREA -->

@endsection