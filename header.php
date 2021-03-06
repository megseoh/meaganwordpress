<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic|Lato:300,400,700' rel='stylesheet' type='text/css'>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" >
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <meta name="description" content="<?php bloginfo('description'); ?>"> -->

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?> id="top">

		<!-- wrapper -->
		<div class="wrapper" id=full>

			<div class="headerWrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<h1><a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo/meagan06.png" alt="The letter M inside an O" class="logo-img"><p class="name">
						meagan o'hara</p></a></h1>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

					<div class="clear"></div>

			</header>
			<!-- /header -->

			</div>
			<!-- /.headerWrapper -->



