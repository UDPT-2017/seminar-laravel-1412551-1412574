<!-- HEADER -->
<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo" >
                <a href="home"><img src="assets/img/logo.jpg" alt="Bella Shop"/></a>
            </div>
            <!-- /Logo -->

            <!-- Header search -->
            <div class="header-search">
                <input class="form-control" type="text" placeholder="What are you looking?"/>
                <button><i class="fa fa-search"></i></button>
            </div>
            <!-- /Header search -->

            

        </div>
    </div>
    <div class="navigation-wrapper">
        <div class="container">
            <!-- Navigation -->
            <nav class="navigation closed clearfix">
                <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                <ul class="nav sf-menu">
                    @foreach($loaisp as $loai)
                        @if(count($loai->tenloaisp) > 0)
                    <li><a href="#">{{$loai->tenloaisp}}</a>
                        <ul>
                            @foreach($loai->hangsp as $hang)
                            <li><a href="listproduct/{{$hang->id}}/{{$hang->tenkhongdau}}.html">{{$hang->tenhangsp}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                        @endif
                    @endforeach

                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </div>
</header>
<!-- /HEADER -->