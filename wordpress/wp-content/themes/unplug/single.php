<?php get_header(); ?>

<div id="body_container">
	<div id="body">
		<div id="left_pane">
			<?php the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="article">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
					<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>
				</div>
			</div>
			<!--<div class="previous_post"><?php previous_post_link( '%link', '&laquo; %title' ) ?></div>
			<div class="next_post"><?php next_post_link( '%link', '%title &raquo;' ) ?></div>-->
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>