<!DOCTYPE HTML>
<html lang="en">
@include('shared._head')
<body>
<header>
    <div class="bg-191">
        <div class="container">
            <div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">

                <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">
                    <li><a class="pl-0 pl-sm-10" href="#">About</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Submit Press Release</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
                    <li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-google"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="ion-social-bitcoin"></i></a></li>
                </ul>

            </div><!-- top-menu -->
        </div><!-- container -->
    </div><!-- bg-191 -->

    <div class="container">
        <a class="logo" href="{{ url('/') }}"><img src="{{ url('images/logo-black.png') }}" alt="Logo"></a>

        <a class="right-area src-btn" href="#" >
            <i class="active src-icn ion-search"></i>
            <i class="close-icn ion-close"></i>
        </a>
        <div class="src-form">
            <form>
                <input type="text" placeholder="Search here">
                <button type="submit"><a><i class="ion-search"></i></a></button>
            </form>
        </div><!-- src-form -->

        <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

        <ul class="main-menu" id="main-menu">
            <li><a href="02_archive-page.html">NEWS</a></li>
            <li><a href="04_FAQS.html">EVENTS</a></li>
            <li><a href="05_FAQS-single.html">EXPLAINED</a></li>
            <li><a href="06_contact-us.html">ICON CLAENDER</a></li> &nbsp; | &nbsp;

            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="drop-down"><a href="{{ route('admin.dashboard') }}">{{ str_limit(Auth::user()->name, 8)}}<i class="ion-arrow-down-b"></i></a>
                    <ul class="drop-down-menu drop-down-inner">
                        <li>
                            {{--<a href="#">--}}
                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<button>LOGOUT</button>--}}
                            {{--</form>--}}
                            {{--</a>--}}
                            <a href="{{ route('admin.logout') }}">LOGOUT</a>
                        </li>
                    </ul>
                </li>
            @endif



        </ul>
        <div class="clearfix"></div>
    </div><!-- container -->
</header>
<section>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h4 class="p-title"><b>@yield('title-content')</b></h4>
                <div class="row">
                    <div class="col-md-3 admin-sidebar" style="margin-top: 2%">
                        <ul>
                            <li><a href="{{ route('article.index') }}" @if(Route::current()->getName() == 'article.index') class="aaa" @endif><i class="fa fa-bars"></i>&nbsp;ARTICLE</a></li>
                            <li><a href="{{ route('user.index') }}"  @if(Route::current()->getName() == 'user.index') class="aaa" @endif><i class="fa fa-user"></i>&nbsp;USER</a></li>
                            <li><a href="#"><i class="fa fa-contao"></i>&nbsp;SEO</a></li>

                        </ul>
                    </div>
                    <div class="col-md-9">
                        @yield('admin-content')
                    </div>

                </div><!-- row -->
            </div><!-- col-md-9 -->

            {{--@include('shared._sidemenu')--}}

        </div><!-- row -->
    </div><!-- container -->
</section>


@include('shared._footer')


<!-- SCIPTS -->
@include('shared._scripts')

</body>
</html>