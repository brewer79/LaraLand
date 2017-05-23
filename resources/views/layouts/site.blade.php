<!DOCTYPE html>
<html lang="en-US">
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
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
          @yield('header')
      </header>

          @yield('content')

   <script type="text/javascript" src="{{ asset('assets/owl-carousel/owl.carousel.js') }}"></script>
   <script type="text/javascript">
    jQuery(document).ready(function($) {
        var theme_slider = $("#owl-demo");
        $("#owl-demo").owlCarousel({
            navigation: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: 6000,
            addClassActive: true,
            // transitionStyle: "fade",
            singleItem: true
        });
        $("#owl-demo2").owlCarousel({
            slideSpeed: 300,
            autoPlay: true,
            navigation: true,
            navigationText: ["&#xf007","&#xf006"],
            pagination: false,
            singleItem: true
        });

        // Custom Navigation Events
        $(".next-arrow").click(function() {
            theme_slider.trigger('owl.next');
        })
        $(".prev-arrow").click(function() {
            theme_slider.trigger('owl.prev');
        })
    });
   </script>
   </body>
</html>