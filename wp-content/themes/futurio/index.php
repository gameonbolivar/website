<?php get_header(); ?>

<?php futurio_generate_header( true, true, true, false, false, true ); ?>

<!-- start content container -->
<div class="row">

	<div class="col-md-<?php futurio_main_content_width_columns(); ?> <?php futurio_sidebar_position( 'content' ) ?>">


		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;

			the_posts_pagination();

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

	</div>

<?php get_sidebar(); ?>		

</div>
<!-- end content container -->

<?php get_footer(); ?>
