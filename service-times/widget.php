<div class="times-widget">

	<h2 class="sidebar">Service Times</h2>
	<div class="service-times-wrapper">
		<?php $args = array(
			'post_type'  => 'services',
			'posts_per_page' => '-1',
			'order'      => 'ASC');
		?>

		<?php
		global $services;
		global $args;

		$the_query = new WP_Query($args);

		if ( $the_query->have_posts() ): ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post();

				$times = (trim(get_post_meta($the_query->post->ID, '_ns_times', true)));
			?>
				<article class="clearfix">
					<h5><?php the_title(); ?> - <span class="times"><?php echo $times ?></span></h5>
				</article>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>

</div>
