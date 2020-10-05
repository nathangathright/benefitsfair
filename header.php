<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body style="display:none" <?php body_class(); ?> class="antialiased" x-data="{ 
	  openModal: false,
	  openRegistration: false,
	  showVideoModal: false,
	  newhero: new URLSearchParams(location.search).get('newhero'),
	  double: new URLSearchParams(location.search).get('double'),
	  phase: new URLSearchParams(location.search).get('phase'),
	  cookied: new URLSearchParams(location.search).get('cookied'),
	  unbranded: new URLSearchParams(location.search).get('unbranded')
	}">
