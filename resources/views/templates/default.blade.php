<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link href="{{ URL::to('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('template_assets/animate.min.css') }}" rel="stylesheet) }}">
    <link href="{{ URL::to('template_assets/timeline.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('css/customize.css') }}">



    <link href="{{ URL::to('template_assets/cover.css')}}" rel="stylesheet">
    {{--<link href="{{ URL::to('template_assets/forms.css')}}" rel="stylesheet">--}}
    <link href="{{ URL::to('template_assets/buttons.css')}}" rel="stylesheet">
    <script src="{{ URL::to('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::to('template_assets/jquery.1.11.1.min.js') }}"></script>
    <script src="{{ URL::to('bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('template_assets/custom.js')}}"></script>
</head>

<body class="animated fadeIn">
    @include('templates.partials.navigation')
    @include('templates.partials.alerts')
    <div class="con">
        @yield('content')
    </div>
    <!-- Latest compiled and minified JavaScript -->


</body>
</html>