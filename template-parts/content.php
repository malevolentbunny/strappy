<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Strappy
 */

?><?php
if(is_sticky()){ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('panel panel-primary'); ?>>
<?php } else {?>
<article id="post-<?php the_ID(); ?>" <?php post_class('panel panel-default'); ?>>
	<?php } ?>
	<header class="entry-header panel-heading">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title panel-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title panel-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php strappy_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content panel-body">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'strappy' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'strappy' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer panel-footer">
		<?php strappy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
