@extends('home.master')

@section('content')

<!-- CONTENT AREA -->
<div class="content-area">
    <section class="page-section">
        <div class="wrap container">
            <div class="row">
                <!--start main contain of page-->
                <div class="col-lg-9 col-md-9 col-sm-8">
                    <div class="information-title">Thông tin tài khoản của bạn</div>
                    <div class="details-wrap">
                        <div class="block-title alt"> <i class="fa fa-angle-down"></i>Thay đổi thông tin</div>
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
                            <form class="form-delivery" action="account" method="post">
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <b>Username</b>
                                    </div>                                                                                                 
                                    <div class="col-md-6 col-sm-6">
                                        <b>Email</b>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group"><input required type="text" placeholder="Username" class="form-control" name="name" aria-describedby="basic-addon1" value="{{$nguoidung->name}}"></div>
                                    </div>                                                                                                 
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group"><input required type="email" placeholder="Email" class="form-control" name="email" aria-describedby="basic-addon1" value="{{$nguoidung->email}}"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button class="btn btn-theme btn-theme-dark" type="submit"> Cập nhật </button>
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
                            <li><a href="changepassword">Đổi mật khẩu</a></li>
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