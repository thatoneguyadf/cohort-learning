<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

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
<body <?php body_class(); ?>>
<div class="jumbotron">


</div>
<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?>
			<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<?php /* Primary navigation */
		wp_nav_menu( array(
				'menu' => 'top_menu',
				'depth' => 2,
				'container' => false,
				'menu_class' => 'nav navbar-nav',
				//Process nav menu using our custom nav walker
				'walker' => new wp_bootstrap_navwalker())
		);
		?>
		<?php get_template_part('searchform'); ?>

		<ul class="nav navbar-nav navbar-right">
			<?=get_user_login(); ?>
		</ul>

	</div>
</nav>
<!-- container-fluid -->
<div class="container-fluid">

