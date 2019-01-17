			
<?php 
get_header(); ?>

<div id="background" class="main-container">
	<main class="main">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>

	<?php 
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		<article class="post page">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>				
		<?php endwhile;				
		else : ?>
			<h2><?php _e( 'No content found' , 'aa-milos' ); ?></h2> 
	<?php			
	endif;?>

	</main><!--/main-->
</div><!--/main-container-->

<div><!--foote-home-->

<?php 
get_footer();
?>