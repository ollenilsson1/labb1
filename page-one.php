<?php
/* Template Name: Page One */

?>

<?php get_header();?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<!-- Hämtar titel och content från wordpress -->
						<h1><?php the_title();?></h1>
                        <p><?php the_content();?></p>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<!-- Hämtar in sidomenyn från wordpress -->
						<?php
wp_nav_menu(
    array(
        'theme_location' => 'side-menu',
        'container_class' => 'col-xs-12',
        'menu_class' => 'side-menu',
    )
);
?>
						</aside>
					</div>
				</div>
			</section>
		</main>



<?php get_footer();?>