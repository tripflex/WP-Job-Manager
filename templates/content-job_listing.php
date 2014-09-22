<li <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_lat ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_long ); ?>">
	<a href="<?php the_job_permalink(); ?>">
		<?php the_company_logo(); ?>
		<?php do_action( 'job_listing_before_position' ); ?>
		<div class="position">
			<h3><?php the_title(); ?></h3>
			<?php do_action( 'job_listing_before_company' ); ?>
			<div class="company">
				<?php the_company_name( '<strong>', '</strong> ' ); ?>
				<?php the_company_tagline( '<span class="tagline">', '</span>' ); ?>
			</div>
			<?php do_action( 'job_listing_after_company' ); ?>
		</div>
		<?php do_action( 'job_listing_after_position' ); ?>
		<div class="location">
			<?php the_job_location( false ); ?>
		</div>
		<?php do_action( 'job_listing_before_meta' ); ?>
		<ul class="meta">
			<li class="job-type <?php echo get_the_job_type() ? sanitize_title( get_the_job_type()->slug ) : ''; ?>"><?php the_job_type(); ?></li>
			<li class="date"><date><?php printf( __( 'Posted %s ago', 'wp-job-manager' ), human_time_diff( get_post_time( 'U' ), current_time( 'timestamp' ) ) ); ?></date></li>
		</ul>
		<?php do_action( 'job_listing_after_meta' ); ?>
	</a>
</li>