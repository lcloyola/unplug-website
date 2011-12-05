<?php get_header(); ?>

<div id="body_container">
	<div id="body">
		<div id="left_pane">
			<?php if ( have_posts() ) : ?>
				<h1><?php _e( 'Search Results for: ' ); ?><span style="color:#ff9e00;"><?php the_search_query(); ?></span></h1>
				<?php while ( have_posts() ) : the_post() ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div id="article">
	                    				<h2><a href="<?php the_permalink(); ?>" title="<?php printf( __('%s' ), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<p><?php the_excerpt( __( 'Continue reading &raquo;' )  ); ?></p>
							<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>
						</div>
		                	</div><!-- #post-<?php the_ID(); ?> -->
 				<?php endwhile; ?>

			<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div class="previous_post"><?php next_posts_link(__( '&laquo; Older posts' )) ?></div>
				<div class="next_post"><?php previous_posts_link(__( 'Newer posts &raquo;' )) ?></div>
			<?php } ?>

			<?php else : ?>
				<div id="post-0" class="post no-results not-found">
                    			<h1><?php _e( 'Nothing Found' ) ?></h1>
                    			<div class="entry-content">
                        			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.' ); ?></p>
                    			</div><!-- .entry-content -->
                		</div>
			<?php endif; ?>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
