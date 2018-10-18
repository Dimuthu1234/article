@extends('layouts.main')

@section('meta-item')

    <meta name="description" content="{{ $article->meta_description }}">

@endsection

@section('title-content', $article->title)
@section('content')
    <div class="col-sm-12 article-show">
        <div class="col-md-1 date" style="margin-top: 2%">
            <span class="day">{{ \Carbon\Carbon::parse($article->created_at)->format('d') }}</span>
            <span class="month">{{ \Carbon\Carbon::parse($article->created_at)->format('M')}}</span>
            <br><hr>
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

            <p style="margin-top: 4%">{!! $article->description !!}</p>
        </div>
    </div><!-- col-sm-6 -->
@endsection
