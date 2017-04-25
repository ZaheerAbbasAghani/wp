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

if ( ! is_active_sidebar( 'Right Sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'Right Sidebar' ); ?>
</aside><!-- #secondary -->
