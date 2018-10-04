<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_Child
 * @since 0.1
 * @version 0.2
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
			<?php 
			if (is_front_page()){
			
				while ( have_posts() ) : the_post();
					/* Start the Loop */
					/*
				 	 * Include the Post-Format-specific template for the content.
				 	 * If you want to override this in a child theme, then include a file
				 	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 	*/
					get_template_part( 'template-parts/post/content', get_post_format() );
					break(1);
				endwhile;
			    } else { the_custom_header_markup();}
			?>
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
