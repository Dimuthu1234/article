<!DOCTYPE HTML>
<html lang="en">
@include('shared._head')
<body>
{{--<div id="app">--}}
    @include('shared._header')
{{--</div>--}}

    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h4 class="p-title"><b>@yield('title-content')</b></h4>
                    <div class="row">
                        @yield('content')
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