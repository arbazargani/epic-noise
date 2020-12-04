<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>Miraculous - Online Music Store Html Template</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mira/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mira/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mira/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mira/js/plugins/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mira/js/plugins/nice_select/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mira/js/plugins/player/volume.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mira/js/plugins/scroll/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mira/css/style.css') }}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/themes/mira/images/favicon.png') }}">
</head>

<body>
	<!----Loader Start---->
	<div class="ms_loader">
		<div class="wrap">
          <img src="{{ asset('assets/themes/mira/images/loader.gif') }}" alt="">
		</div>
	</div>
    @yield('content')
    <!--Main js file Style-->
    <script type="text/javascript" src="{{ asset('assets/themes/mira/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/themes/mira/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/themes/mira/js/plugins/swiper/js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/themes/mira/js/plugins/player/jplayer.playlist.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/themes/mira/js/plugins/player/jquery.jplayer.min.js') }}"></script>
    {{-- this file will make songs downloadable. think about it. --}}
    <script type="text/javascript" src="{{ asset('assets/themes/mira/js/plugins/player/audio-player.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/themes/mira/js/plugins/player/volume.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/themes/mira/js/plugins/nice_select/jquery.nice-select.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/themes/mira/js/plugins/scroll/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/themes/mira/js/custom.js') }}"></script>
</body>

</html>