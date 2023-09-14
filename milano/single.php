<?php get_header(); ?>







	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">


<div class="toppage">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1><?php the_title(); ?></h1>
				<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">
			<div class="contpage">


<div class="imgblog" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>


	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>



			</div>
		</div>
	</div>
</div>


	
<?php get_footer(); ?>
