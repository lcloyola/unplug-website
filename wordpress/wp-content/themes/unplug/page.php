<?php get_header(); ?>

<div id="body_container">
	<div id="body">
		<div id="left_pane">
			<?php the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>
			</div>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>