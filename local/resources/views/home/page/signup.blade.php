@extends('home.master')

@section('content')

<!-- CONTENT AREA -->
<div class="content-area">
    <section class="page-section">
        <div class="wrap container">
            <div class="row">
                <!--start main contain of page-->
                <div class="col-lg-9 col-md-9 col-sm-8">
                    <div class="information-title">Tạo tài khoản mới</div>
                    <div class="details-wrap">
                        <div class="block-title alt"> <i class="fa fa-angle-down"></i>Thông tin cá nhân</div>
                        <div class="details-box">
                        @if(count($errors)>0 )
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}} <br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('Thanhcong'))
                            <div class="alert alert-danger">
                                {{session('Thanhcong')}}
                            </div>
                        @endif
                            <form class="form-delivery" action="signup" method="post">
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group"><input required type="text" placeholder="Username" class="form-control" name="name"></div>
                                    </div>
                                                                                                                                   
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group"><input required type="email" placeholder="Email" class="form-control" name="email"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group"><input type="password" placeholder="Mật khẩu" class="form-control" name="password"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group"><input type="password" placeholder="Nhập lại mật khẩu" class="form-control" name="passwordconfirm"></div>
                                    </div>  
                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-theme btn-theme-dark" type="submit"> Tạo </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                                
                </div>
                <!--end main contain of page-->

                <!--start sidebar-->
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="widget account-details">
                        <h2 class="widget-title">Tài khoản</h2>
                        <ul> 
                            <div class="alert alert-danger">
                                <b>Bạn chưa đăng nhập</b>
                            </div>
                        </ul>
                    </div>
                </div>
                <!--end sidebar-->
            </div>

        </div>
    </section>
</div>
<!-- /CONTENT AREA -->

@endsection