<?php get_header();?>

<main>
<section>
<div class="container">

<!-- Visar endast ett blogginlägg om man har klickat på det, single.php är standard för wordpress -->
<?php if (have_posts()):

    while (have_posts()): the_post();

        ?>
			        <div id="primary" class="col-xs-12 col-md-9">
						<article>
								<img src="<?php echo get_the_post_thumbnail_url() ?>" />
									<h1 class="title"><?php the_title();?></h1>
										<ul class="meta">
												<li>
													<i class="fa fa-calendar"></i><?php the_date();?>
												</li>
												<li>
													<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author();?></a>
												</li>

												<li>
													<i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(" , ");?></a>
												</li>
												</ul><p><?php the_content();?></p>
						</article>
					</div>
<?php
    endwhile;
else:
    _e('Inga blogginlägg tillgängliga', 'textdomain');
endif;
?>

</div>
</section>
</main>


<?php get_footer();?>