<?php 

/**
* The main template file
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package finaltheme
 * @version 1.0
 */

 get_header(); ?>


<div class="wrap">

	<div id="primary" class="content-area"> 
		
		<main id="main" class='site-main' role='main'>
<?php 
		if(have_posts()):
			while(have_posts()): the_post();

				get_template_part( 'template-parts/posts/content', get_post_format());

			endwhile;

			the_posts_pagination(  array(
			'depth' => 2,
			'prev_text' => __('Back','finaltheme'),
			'next_text' => __('next','finaltheme')
			));

		else:

			get_template_part( 'template-parts/posts/content','none' );

		endif;

?>

		</main>
	</div><!--primary-->

</div><!--wrap-->
	<?php dynamic_sidebar( 'Right Sidebar' ); ?>

<?php get_footer(); ?>