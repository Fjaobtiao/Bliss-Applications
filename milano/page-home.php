<?php get_header(); ?>


<div class="hero" style="background-image: url(<?php echo get_template_directory_uri();?>/images/1448064.jpeg)">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="title">Nova Coleção</div>
				<div class="title2">Outono / Inverno</div>
			</div>
		</div>
	</div>
</div>
<p>&nbsp;</p>
<div class="container">
	<div class="row">
		<div class="col-sm-12">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>

			
		</div>
		
		<?php endwhile; endif; ?>
	
		</div>
	</div>
</div>
<p>&nbsp;</p>


<div class="eventos" style="background-image: url(<?php echo get_template_directory_uri();?>/images/image-101.jpeg)">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Nossos Eventos</h2>
				<h3>Saiba quando e onde serão nossos proximos eventos</h3>
				<a href="http://localhost:8888/teste/bl_artigo/" class="butgeral">Ver todos</a>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
