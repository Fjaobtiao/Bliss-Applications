<?php get_header(); ?>


<div class="errorpage">

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">


<h1>Error 404</h1>
<h2>Página não encontrada</h1>

<img src="<?php echo get_template_directory_uri();?>/images/detalhe-404.png">

<p>A página que você está procurando não existe mais. Talvez você possa retornar à página inicial do site e ver se consegue encontrar o que procura.</p>

<button><a href="<?php echo get_bloginfo('url'); ?>/">Voltar a Home</button>



			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>