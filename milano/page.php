<?php get_header(); ?>





		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="posttitle">
				<h2 class="pagetitle"><?php the_title(); ?></h2>
				<small>By <strong><?php the_author() ?></strong></small>
			</div>
			<div class="postcomments"><?php comments_popup_link('0', '1', '%'); ?></div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>

			
		</div>
		
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	


<?php get_footer(); ?>
