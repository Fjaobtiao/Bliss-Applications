<?php get_header(); ?>


<div class="toppage">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Eventos</h1>
				<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">

<div class="contpage">



		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  
		<?php $postcount = "0"; // reset post counter ?>
		<?php while (have_posts()) : the_post(); ?>
		 <?php $postcount++; // post counter ?>
		<div <?php post_class() ?>>

			<div class="listev">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 dataevento"><?php if( get_field('data_evento') ): ?><?php the_field('data_evento'); ?><?php endif; ?></div>
			<div class="col-lg-7 col-md-7"><h2><?php the_title(); ?></h2>
			<?php if( get_field('local_evento') ): ?><div class="locevento"><?php the_field('local_evento'); ?></div><?php endif; ?></div>
			<div class="col-lg-3 col-md-3"><a href="#" class="butgeral">ingressos</a></div>
		</div></div></div>



		</div>

		<?php endwhile; ?>

		<?php
			// Find page with last post
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$postsppage= get_option('posts_per_page');
			$total = $paged * $postsppage;
			$remainder = $total - $wp_query->found_posts;
			$endvar =  $postsppage - $remainder;
		?>	

	
	<?php else :



	endif;
?>

<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
