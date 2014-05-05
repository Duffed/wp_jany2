<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />

	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- JQUERY -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>


	<script type="text/javascript">
		// $(window).scroll(function () {
		//     if ($(window).scrollTop() > 160) {
		//         $('nav').addClass("topfixed");
		//         $('header').addClass("topfixed");
		//     }
		//     if ($(window).scrollTop() < 160) {
		//     	$("nav").removeClass("topfixed");
		//     	$("header").removeClass("topfixed");
		//     }
		// }
		// );

		// Navigation
		$(document).ready(function(){
			//hide menu 
			$("nav ul").addClass("displaynone");

			//toggle
			$("#nav_button").click(function(){
				$("nav ul").toggle();
				// $("nav ul").slideToggle("fast");
				$("#nav_button").toggleClass("active");
			});

			//Above 767px remove style attributes
			$(window).resize(function(){
				if(window.innerWidth > 767) {
					$("nav ul").removeAttr("style");
				}
			});
		});
	</script>


</head>

	<body>

		<div class="wrapper clearfix">
			<!-- Header -->
			<div class="wrapper2">
			<a href="<?php echo home_url('/')?>">
				<header><?php echo bloginfo("name") //hidden ?></header>
			</a>

			<!-- Navbar -->
			
			<nav class="clearfix">
				<div id="nav_button" class="displaymobile">MENU</div>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>
		</div>



			