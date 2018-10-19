<!DOCTYPE HTML>
<html lang="en">
@include('shared._head')
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    @include('shared._header')
{{--</div>--}}

    <section>
        <div class="container">
            <div id="app">
            <div class="row">

                <div class="col-md-12">
                    <h4 class="p-title"><b>@yield('title-content')</b></h4>
                    <div class="row">
                        @yield('content')
                    </div><!-- row -->
                </div><!-- col-md-9 -->

                {{--@include('shared._sidemenu')--}}

            </div><!-- row -->
            </div>
        </div><!-- container -->
    </section>


    @include('shared._footer')


<!-- SCIPTS -->
@include('shared._scripts')

</body>
</html>