<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="shortcut icon" href="<?php echo get_field('logo')['url']; ?>" type="image/x-icon">
	<title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="row header__row">
				<div class="header_left">
					<div class="header-loog-text">
						<a href="https://lifehelp.co" class="link-logo">
							<img src="<?php echo wp_get_attachment_url(get_option('options_logo')); ?>" alt="">
						</a>
						<span class="logo-text"><?php echo get_option('options_text_near_the_logo');?></span>
					</div>
				</div>
				<div class="header__right">
					<a href="<?php echo get_option('options_menu_link'); ?>" class="header__link-client"><?php echo get_option('options_menu_point'); ?></a>
					<!-- <a href="#" class="btn-contact">Get Started</a> -->
				</div>
			</div>
		</div>
	</header>
<?php wp_body_open(); ?>