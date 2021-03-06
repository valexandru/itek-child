<?php
/**
 * @package itek
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-summary">
	<?php if (has_post_thumbnail()) { ?>
	<div class="summary-thumbnail">
		<a href="<?php the_permalink(); ?>">
		   <?php the_post_thumbnail( 'itek-post-feature' ); ?>
		</a>	
	</div>
	<?php } ?>
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages: ', 'itek' ),
				'after'  => '</div>',
			) );
		?>
		<div class="read-more">
		    <a href="<?php echo esc_url( get_permalink() ) ?>"><?php _e( 'Read The Full Article &raquo;', 'itek'); ?></a>
		</div>
										
		
	</div><!-- .entry-summary -->
	<div class="content-separator"></div>
	<div class="clearfix"></div>    
				
</article><!-- #post-## -->