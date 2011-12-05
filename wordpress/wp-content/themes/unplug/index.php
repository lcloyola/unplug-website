<?php get_header(); ?>

<div id="body_container">
	<div id="body">
		<div id="left_pane">
<p class="banner">the official site of &nbsp;&nbsp;<img class="banner_logo" src="http://thelawofnature.ph/wp-content/uploads/2011/02/LNF_small_2.gif"> the law of nature foundation</p>
			<h1>News and Announcements</h1>
			<?php while ( have_posts() ) : the_post() ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div id="article">
						<h2><a class="article_title" href="<?php the_permalink(); ?>" title="<?php printf( __('%s'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<p class="metadata"><abbr title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></p>
						<p><?php the_content( ( '<span class="continue_reading">Continue reading &raquo;' )  ); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>	
					</div>
				</div>
			<?php endwhile; ?>
			<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div class="previous_post"><?php next_posts_link(__( '&laquo; Older posts' )) ?></div>
				<div class="next_post"><?php previous_posts_link(__( 'Newer posts &raquo;' )) ?></div>
			<?php } ?>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
