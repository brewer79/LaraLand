<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title>First landing page</title>
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsee.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.theme.css') }}">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{ asset('assets/css/template-style.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/responsee.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/template-scripts.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>


</head>
<body>

<header id="hiters_wrapper">
    @yield('header')


    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
</header>
@yield('content')
</body>
</html>