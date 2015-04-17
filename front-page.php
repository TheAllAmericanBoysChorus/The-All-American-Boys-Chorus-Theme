<?php get_header(); ?>
<div class="container">
	<div class="container-60w">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php
			endwhile;

			get_template_part( 'loop-nav' );

		else :

			get_template_part( 'loop-no-posts' );

		endif;
		?>
		
	</div>
</div>

<?php get_footer(); ?>