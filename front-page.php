<?php
/**
 * The template for the frontpage
 *
 * @package WordPress
 * @subpackage IAMSocial 1.0.0 Child
 * @since IAMSocial 1.0.0 Child
 */
?>
<?php get_header(); ?>
		<section id="slider">
			<?php get_template_part( 'part' , 'slider' ); ?>
		</section>
		<div class="row">
			<div class="col-md-9">
				<section id="masonryContainer" class="content">
					<?php get_template_part( 'part' , 'content' ); ?>
				</section>
			</div>
			<aside class="col-md-3">
				<?php get_sidebar(); ?>
			</aside>
		</div>
<?php get_footer(); ?>