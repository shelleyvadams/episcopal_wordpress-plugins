<div id="header_widgets">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('header')) : else : ?>

	<?php endif; ?>
</div>

<header>
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>

	<div class="slide-show">
		<?php do_action('slideshow_deploy'); ?>
	</div>

	<div class="main-border"></div>

	<nav>
		<?php wp_nav_menu( array(
			'primary' => 'Primary Navigation',
			'depth'   => 1,
		) ); ?>
	</nav>
</header>
