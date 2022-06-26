<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>{{ $title }}</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Riode - Ultimate eCommerce Template">
	<meta name="author" content="D-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="{{ asset('ui/frontend') }}/image/png" href="images/icons/favicon.png">

	<script>
		WebFontConfig = {
			google: { families: [ 'Poppins:400,500,600,700' ] }
		};
		( function ( d ) {
			var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
			wf.src = 'js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore( wf, s );
		} )( document );
	</script>


	<link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend') }}/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend') }}/vendor/animate/animate.min.css">

	<!-- Plugins CSS File -->
	<link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend') }}/vendor/magnific-popup/magnific-popup.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend') }}/vendor/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend') }}/vendor/photoswipe/photoswipe.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend') }}/vendor/photoswipe/default-skin/default-skin.min.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend') }}/vendor/sticky-icon/stickyicon.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend') }}/css/demo5.min.css">
</head>
<body class="products scrollable">
    <div class="page-wrapper">
<header class="header header-border">
    <x-frontend.layout.partials.topbar/>
    <x-frontend.layout.partials.midbar/>
   @stack('nav')
</header>
      {{ $slot }}

</div>
    <x-frontend.layout.partials.footer/>
 
<!-- Plugins JS File -->
<script src="{{ asset('ui/frontend') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('ui/frontend') }}/vendor/sticky/sticky.min.js"></script>
<script src="{{ asset('ui/frontend') }}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('ui/frontend') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('ui/frontend') }}/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ asset('ui/frontend') }}/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
<script src="{{ asset('ui/frontend') }}/vendor/photoswipe/photoswipe.min.js"></script>
<script src="{{ asset('ui/frontend') }}/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<!-- Main JS File -->
<script src="{{ asset('ui/frontend') }}/js/main.min.js"></script>
</body>

</html>