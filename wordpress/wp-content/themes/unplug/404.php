<?php get_header(); ?>

<div id="body_container">
	<div id="body">
		<div id="left_pane">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php _e( 'Not Found' ); ?></h1>
				<p><?php _e( 'Apologies, but we were unable to find what you were looking for.' ); ?></p>
			</div>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>