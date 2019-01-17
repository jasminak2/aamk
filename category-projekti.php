			
<?php 
get_header(); ?>

<div id="background" class="main-container main-front-page">
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
								<span class="teaser-meta">
									<?php
									  $posttags = get_the_tags();
									  $separator = ", ";
									  $output = '';
									  if ($posttags) {
									    foreach($posttags as $tag) {
									      $output .= $tag->name . $separator; 
									    }
									    echo trim($output, $separator);
									  }
									?>
								</span>
								<p class="teaser-text"><?php the_field('info'); ?><br><?php the_field('lokacija'); ?></p>
								<span class="teaser-bottom"><?php the_field('godina'); ?></span>
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
<div class="footer-home">

<?php get_footer(); ?>

 
