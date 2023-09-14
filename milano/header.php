
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<div class="container">
	  <div class="row">
	  	<div class="col-lg-3 col-md-4 col-sm-4"><a href="<?php echo get_bloginfo('url'); ?>/"><img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo_Milano.svg"></a></div>
	  	<div class="col-lg-6 col-md-8 col-sm-8">
			<!-- <nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav> -->
      <input type="checkbox" id="control-nav" />
      <label for="control-nav" class="control-nav"></label>
      <label for="control-nav" class="control-nav-close"></label>

      <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </nav>
		</div>
		<div class="col-lg-3">
		<!-- begin search -->
		<div class="search-box header">
			<form method="get" action="<?php bloginfo('url'); ?>/">
			<input type="text" size="15" class="search-field" name="s" id="s" value="Buscar..." onfocus="if(this.value == 'Buscar...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Buscar...';}"/><button type="submit" class="search-go"><span class="fa fa-search"></span></button>
			</form>
		</div>
		<!-- end search -->
		</div>	
	  </div>
	</div>
</header>


