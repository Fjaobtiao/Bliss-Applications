<?php get_header(); ?>


	<?php $postcount = "0"; // reset post counter ?>
	<?php if (have_posts()) : ?>

<div class="toppage">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Resultado de Busca</h1>
				<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">
			<div class="contpage">



		<?php while (have_posts()) : the_post(); ?>
			<?php $postcount++; // post counter ?>
			<div <?php post_class() ?>>
								<div class="posttitle">
					<h2 class="pagetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div>

<div class="imgblog" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>
				


				<div class="entry">
					<?php the_excerpt() ?>
				</div>

				<a href="<?php the_title_attribute(); ?>" class="butgeral">Saber Mais</a>

				<hr class="hrblog">
				
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

	<?php else : ?>

<div class="toppage">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Resultado de Busca</h1>
				<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>

<div class="errorpage">

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">

		<h2>Nenhuma postagem encontrada. Tentar uma pesquisa diferente?</h2>


		<p>&nbsp;</p>


		<!-- begin search -->
		<div class="search-box">
			<form method="get" action="<?php bloginfo('url'); ?>/">
			<input type="text" size="15" class="search-field" name="s" id="s" value="Buscar..." onfocus="if(this.value == 'Buscar...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Buscar...';}"/><button type="submit" class="search-go"><span class="fa fa-search"></span></button>
			</form>
		</div>
		<!-- end search -->

			</div>
		</div>
	</div>
</div>

	<?php endif; ?>

	</div></div></div>
	<div id="nav-post">
		<div class="navigation-bott">
			<?php if($endvar == 0 || $postcount == $endvar) { } else { ?>
				<div class="leftnav"><?php next_posts_link('Older Entries') ?></div>
				<?php } if ($paged > 1) { ?>
				<div class="rightnav"><?php previous_posts_link('Newer Entries') ?></div>
			<?php } ?>
		</div>

		</div>

</div>

<?php get_footer(); ?>
