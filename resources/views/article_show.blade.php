@extends('layouts.main')

@section('meta-item')

    <meta name="author" content="{{ $article->user->name }}"/>
    <meta name="copyright" content="Copyright by NEWSBIT. All Rights Reserved."/>
    <meta name="classification" content="to be develop"/>

    <meta name="description" content="{{ $article->meta_description }}">
    <meta name="keywords" content="{{ $article->metaKeywords->implode('keyword', ',') }}">
    <meta property="fb:app_id" content="977979472264860"/>
    <meta property="og:site_name" content="NEWSBIT - "/>
    <meta property="og:title" content="{{ $article->title }}"/>
    <meta property="og:description" content="{{ $article->meta_description }}"/>
    <meta property="og:image" content="{{ url('images/article/thumbnail/'.$article->thumbnail) }}?>">
    <meta property="og:url" content="{{ url('article/'.$article->slug) }}">
    <meta property="og:type" content="article"/>

@endsection

@section('title-content', $article->title)
@section('content')
    <div class="col-sm-12 article-show">
        <div class="col-md-1 date" style="margin-top: 2%">
            <span class="day">{{ \Carbon\Carbon::parse($article->created_at)->format('d') }}</span>
            <span class="month">{{ \Carbon\Carbon::parse($article->created_at)->format('M')}}</span>
            <br>
            <hr>
            <span class="year">{{ \Carbon\Carbon::parse($article->created_at)->format('Y')}}</span>
        </div>
        <div class="col-md-11" style="margin-top: 2%">
            <img src="{{ url('images/article/image/'.$article->image) }}" alt="">
            <h2 style="margin-top: 4%">{{ $article->title }}</h2>

            <!-- AddToAny BEGIN -->
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="margin-top: 3%">
                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_google_plus"></a>
                <a class="a2a_button_whatsapp"></a>
                <a class="a2a_button_viber"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <!-- AddToAny END -->
            <div style="height: auto">
                {!! $article->description !!}
            </div>

            {{--<div id="fb-root"></div>--}}
            {{--<script>(function (d, s, id) {--}}
                    {{--var js, fjs = d.getElementsByTagName(s)[0];--}}
                    {{--if (d.getElementById(id)) return;--}}
                    {{--js = d.createElement(s);--}}
                    {{--js.id = id;--}}
                    {{--js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';--}}
                    {{--fjs.parentNode.insertBefore(js, fjs);--}}
                {{--}(document, 'script', 'facebook-jssdk'));</script>--}}
            {{--<div class="fb-comments" data-href="{{ url('article/'.$article->slug) }}" data-numposts="10"></div>--}}
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

            <div class="fb-comments" data-href="{{ url('article/'.$article->slug) }}" data-numposts="20"></div>
        </div>
    </div><!-- col-sm-6 -->
@endsection

