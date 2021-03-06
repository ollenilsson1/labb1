<?php 
/* Template Name: Page Four */

?>

<?php get_header();?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
							<h1><?php the_title();?></h1>
                            <p><?php the_content();?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<!-- Hämta bild som ligger som featured image på undersida 4 i wordpress -->
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
						</div>
					</div>
				</div>
		</section>
</main>

<?php get_footer(); ?>
