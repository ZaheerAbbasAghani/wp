<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title><?php bloginfo('name'); echo ' >> ';  the_title(); ?> </title>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="profile" href="http://gmp.org/xfn/11"/>
    <?php  if(is_singular() && pings_open(get_queried_object())) :  ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url');  ?>"/>
    <?php endif; ?>
    <?php  wp_head(); ?>
</head>
<?php  

/*
getting cutomizer 
header text color and 
background color
background image

*/

$header_text_color = get_header_textcolor();  
$background_color = get_background_color();
$background_image = get_background_image();
 ?>

<body class="<?php body_class(); ?> " style="background-image:url('<?php echo $background_image; ?>')">



<header id="masthead" class="site-header" role="banner" >

	<nav class="navbar navbar-default" role="navigation" >
	<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>



	<a class="navbar-brand" href="<?php echo home_url(); ?>">
	<?php //bloginfo('name'); 
	$logo = get_custom_logo();
	echo $logo;
	 ?>
	</a>

	</div><!-- NAVBAR HEADER-->
	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php
		wp_nav_menu( array(
		'menu' => 'Main Menu',
		'depth' => 2,
		'container' => false,
		'menu_class' => 'nav navbar-nav',
		//Process nav menu using our custom nav walker
		'walker'     => new wp_bootstrap_navwalker())
		);
		?>
	</div><!--navbar-collapse-->

	</div> <!--container-->
	</nav><!-- end navbar -->

</header>

<div class="container">