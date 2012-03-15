<?php get_header(); ?>

		<div id="base_content">
			<?php the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<hr />
				<h1><a href="<?php the_permalink(); ?>">[<?php the_title(); ?>]</a></h1>
			        <h2>[<?php the_time('d/m/Y'); ?>]</h2>
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>

			</div>
			<div id="navigation">
				<div class="previous_post"><?php previous_post_link( '%link', '&laquo; %title' ) ?></div>
				<div class="next_post"><?php next_post_link( '%link', '%title &raquo;' ) ?></div>
			</div>
			<?php comments_template('', true); ?>
		</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>