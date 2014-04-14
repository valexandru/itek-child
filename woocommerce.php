<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package itek
 */

get_header(); ?>

<div class="container">
	<div class="row" role="main">
        <div class="span8">
        <?php do_action( 'itek_before_products' ); ?>
			<?php woocommerce_content(); ?>
        <?php do_action( 'itek_after_products' ); ?>
		</div>
		<div class="span4">
            <?php get_sidebar(); ?>
        </div>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
