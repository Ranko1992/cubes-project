<!DOCTYPE html>
<html lang="en">  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyD5UMz1q-VLI2igjQT7a8_ADtDuRBxMMRQ'></script>
        <link href="{{url('/skins/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{url('/skins/front/css/bootstrap.min.css')}}">
        <link href="{{url('/skins/front/css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/starrr.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('/skins/front/css/jquery.nstSlider.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{url('/skins/front/css/main.css')}}">
        <link href="{{url('/skins/front/css/responsive.css')}}" rel="stylesheet" type="text/css"/>

        <script src="{{url('/skins/front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
        @stack('head_css')
        @stack('head_javascript')
    </head>
    <body>
 <!-- ======== @Region: #navigation ======== -->
    @include('front.navigation')
<!-- ======== @Region: #content ======== -->
    @yield('content')
    
<!-- ======== @Region: #footer ======== -->       
@include('front.footer')
        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="{{url('/skins/front/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{url('/skins/front/js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery.diyslider.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery.nstSlider.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/jquery.validation.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/starrr.js')}}" type="text/javascript"></script>
        <script src="{{url('/skins/front/js/main.js')}}"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments);
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r);
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
        @stack('footer_javascript')
    </body>
</html>

