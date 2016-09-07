<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="{{url('img/favicon.png')}}"d>

        <title>HanuSoft Websites | Home</title>

        <!-- Bootstrap core CSS -->
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('css/theme.css')}}" rel="stylesheet">
        <link href="{{url('css/bootstrap-reset.css')}}" rel="stylesheet">
        <!--external css-->
        <link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{url('css/flexslider.css')}}"/>
        <link href="{{url('assets/bxslider/jquery.bxslider.css')}}" rel="stylesheet" />
        <link href="{{url('assets/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet" />

        <link rel="stylesheet" href="{{url('assets/revolution_slider/css/rs-style.css')}}" media="screen">
        <link rel="stylesheet" href="{{url('assets/revolution_slider/rs-plugin/css/settings.css')}}" media="screen">

        <!-- Custom styles for this template -->
        <link href="{{url('css/style.css')}}" rel="stylesheet">
        <link href="{{url('css/style-responsive.css')}}" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="{{url('js/html5shiv.js')}}"></script>
          <script src="{{url('js/respond.min.js')}}"></script>
        <![endif]-->
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{url('js/jquery.js')}}"></script>
        <script src="{{url('js/jquery-1.8.3.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/hover-dropdown.js')}}"></script>
        <script defer src="{{url('js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/bxslider/jquery.bxslider.js')}}"></script>

        <script type="text/javascript" src="{{url('js/jquery.parallax-1.1.3.js')}}"></script>

        <script src="{{url('js/jquery.easing.min.js')}}"></script>
        <script src="{{url('js/link-hover.js')}}"></script>

        <script src="{{url('assets/fancybox/source/jquery.fancybox.pack.js')}}"></script>

        <script type="text/javascript" src="{{url('assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!--common script for all pages-->
        <script src="{{url('js/common-scripts.js')}}"></script>

        <script src="{{url('js/revulation-slide.js')}}"></script>


      <script>

          RevSlide.initRevolutionSlider();

          $(window).load(function() {
              $('[data-zlname = reverse-effect]').mateHover({
                  position: 'y-reverse',
                  overlayStyle: 'rolling',
                  overlayBg: '#fff',
                  overlayOpacity: 0.7,
                  overlayEasing: 'easeOutCirc',
                  rollingPosition: 'top',
                  popupEasing: 'easeOutBack',
                  popup2Easing: 'easeOutBack'
              });
          });

          $(window).load(function() {
              $('.flexslider').flexslider({
                  animation: "slide",
                  start: function(slider) {
                      $('body').removeClass('loading');
                  }
              });
          });

          //    fancybox
          jQuery(".fancybox").fancybox();

      </script>
    </head>
    <body>
        @include('frontend.block.top_block')
        @yield('content')
        @include('front-end.block.footer_block')
    </body>
</html>