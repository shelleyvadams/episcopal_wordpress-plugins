<div class="contacts-widget">
	<h2 class="sidebar">Parish Leaders</h2>
	<div class="parish-leaders-wrapper">

		<?php $args = array(
			'post_type'  => 'people',
			'posts_per_page' => '4',
			'order'      => 'ASC');
		?>

		<?php
		global $bio;
		global $args;

		$the_query = new WP_Query($args);

		if ( $the_query->have_posts() ): ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post();

				$number = (trim(get_post_meta($the_query->post->ID, '_ns_number', true)));
				$email = (trim(get_post_meta($the_query->post->ID, '_ns_email', true)));
			?>
				<article class="people-sidebar clearfix">
					<?php the_post_thumbnail(); ?>
					<ul>
						<li><h4 class="people"><?php the_title(); ?></h4></li>
						<li><?php echo $number ?></li>
						<li><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></li>
					</ul>
				</article>

			<?php endwhile; ?>
		<?php endif; ?>

		<p class="button"><a href="<?php echo get_permalink( get_page_by_path( 'contacts' ) ) ?>">View Full List</a>
	</div>
	<!--/.parish-leaders-wrapper-->
</div>
