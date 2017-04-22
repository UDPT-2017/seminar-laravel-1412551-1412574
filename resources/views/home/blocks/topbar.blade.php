<!-- Header top bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <ul class="list-inline">
            @if(!isset($nguoidung))
                <li class="icon-user"><a href="login"><img src="assets/img/icon-1.png" alt=""/> <span>Login</span></a></li>
                <li class="icon-form"><a href="signup"><img src="assets/img/icon-2.png" alt=""/> <span>Not a Member? <span class="colored">Sign Up</span></span></a></li>
            @else
                <li class="icon-user"><a href="logout"><img src="assets/img/icon-1.png" alt=""/> <span>Logout</span></a></li>
                <li><a href="account"><i class="fa fa-envelope"></i> <span>{{$nguoidung->email}}</span></a></li>
            @endif
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="list-inline">
                @if(!isset($nguoidung))
                <li class="hidden-xs"><a href="about">About</a></li>                         
                <li class="hidden-xs"><a href="contact">Liên hệ</a></li>
                <li class="hidden-xs"><a href="faq">FAQ</a></li>
                <li class="hidden-xs"><a href="cart">Giỏ hàng</a></li>
                @else
                    <li class="hidden-xs"><a href="about">About</a></li>                         
                    <li class="hidden-xs"><a href="account">Tài khoản</a></li>
                    <li class="hidden-xs"><a href="contact">Liên hệ</a></li>
                    <li class="hidden-xs"><a href="faq">FAQ</a></li>
                    <li class="hidden-xs"><a href="cart">Giỏ hàng</a></li>
                @endif
                
            </ul>
        </div>
    </div>
</div>
<!-- /Header top bar -->