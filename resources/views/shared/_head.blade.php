<head>
    <title>Newsbit</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">

    <!-- Stylesheets -->

    {{--<link href="plugin-frameworks/bootstrap.css" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ url('fonts/ionicons.css') }}" rel="stylesheet">


    <link href="{{ url('css/styles.css') }}" rel="stylesheet">

    @stack('styles')


</head>