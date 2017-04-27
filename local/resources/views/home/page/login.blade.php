@extends('home.master')

@section('content')

<!-- CONTENT AREA -->
<div class="content-area">

    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="block-title"><span>Đăng nhập</span></h3>
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
                    <form action="login" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col-md-12 hello-text-wrap">
                                <span class="hello-text text-thin">Hello, welcome to your account</span>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"><input class="form-control" type="email" placeholder="email" name="email"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"><input class="form-control" type="password" placeholder="password" name="password"></div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="checkbox">
                                    <label><input type="checkbox">Ghi nhớ</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-block btn-theme btn-theme bt-darkn-create">Đăng nhập</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h3 class="block-title"><span>Tạo tài khoản mới</span></h3>
                    <form action="#" class="create-account">
                        <div class="row">
                            <div class="col-md-12 hello-text-wrap">
                                <span class="hello-text text-thin">Create Your Account  On Mobile Shop</span>
                            </div>
                            <div class="col-md-12">
                                <h3 class="block-title">Đăng ký ngay để có thể</h3>
                                <ul class="list-check">
                                    <li>Online Order Status</li>
                                    <li>See Ready Hot Deals</li>
                                    <li>Love List</li>
                                    <li>Sign up to receive exclusive news and private sales</li>
                                    <li>Quick Buy Stuffs</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-block btn-theme btn-theme bt-darkn-create" href="signup">Tạo tài khoản</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    

</div>
<!-- /CONTENT AREA -->

@endsection