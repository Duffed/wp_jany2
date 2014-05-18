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

		// jquery
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
				if(window.innerWidth > 540) {
					$("nav ul").removeAttr("style");
				}
			});

			//Scroll to anker 
//				$('a[href*=#]:not([href=#])').bind('click', function(e) {
//					e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump

//					var target = $(this).attr("href"); //Get the target

					// perform animated scrolling by getting top-position of target-element and set it as scroll target
//					$('html, body').stop().animate({ scrollTop: $(target).offset().top }, 2000, function() {
//						location.hash = target;  //attach the hash (#jumptarget) to the pageurl
//					});
//
				//	return false;
				//});


			// Back To Top
			$('a.top').click(function(){
				$('body').animate({scrollTop : 0},400);
				return false
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



			