			
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

		<section>
			<ul class="teaser">
				
				<?php 
				if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<li class="teaser-item">
							<a href="<?php the_permalink(); ?>" class="teaser-content">
								<div class="teaser-image">
									<?php the_post_thumbnail('small'); ?>
								</div>
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
								<span class="teaser-bottom">2018.</span>
							</a>
						</li>			
					<?php endwhile;				
					else : ?>
						<h2><?php _e( 'No content found' , 'aa-milos' ); ?></h2> 
				<?php			
				endif;
				?>
		
			</ul>
		</section>

	</main><!--/main-->
</div><!--/main-container-->

<div><!--footer-home-->

<?php get_footer(); ?>

 
