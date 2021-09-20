<?php get_header() ?>

<main>
<section>
<div class="container">
<div class="row">
<div id="primary"class="col-xs-12 col-md-9">
<h1>Blogg</h1>
<!-- While loop, om inlägg finns visa alla annars skriv ut inga blogginlägg tillgängliga -->
<?php if (have_posts()):

while (have_posts()): the_post();

    ?>
              <!-- Hämta bild för posten, gör title till en länk för att läsa hela inlägget, klickar man på author eller category visas det genom archive.php -->                                                  
        <article>
                <img src="<?php echo get_the_post_thumbnail_url() ?>" />
                <a href="<?php the_permalink();?>">
                <h1 class="title"><?php the_title();?></h1>
                </a>
                <ul class="meta">
                <li>
                <i class="fa fa-calendar"></i><?php the_date();?>
                </li>
                <li>
                <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                </li>
                                                                
               <li>
                <i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(" , ");?></a>
                </li>
                </ul>
                <!-- excerpt för att bara visa en del av inlägget, klickar man så ser man hela -->
                <p><?php the_excerpt();?></p>
                                                                
        </article>
                                                            
<?php
endwhile;
else:
_e('Inga blogginlägg tillgängliga', 'textdomain');
endif;
?>

<!-- Kod för att använda pagination -->
<div class="navigation pagination">
<?php

global $wp_query;

$big = 999999999; 

echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
));
?>
    </div>

</div>
<!-- Sidomenyn, uppdelad i 3 olika menyer för sidor, arkiv och kategorier, använder get search form för att få sökrutan -->
<aside id="secondary"class="col-xs-12 col-md-3">
<div id="sidebar">
<ul>
<li>
<?php get_search_form(); ?>
</li>
</ul>
<ul role="navigation">
<li class="pagenav">
<h2>Sidor</h2>

<?php
wp_nav_menu(
    array(
        'theme_location' => 'blogPage-menu',
        'container' => false
    )
);
?>

</li>
<li>
<h2>Arkiv</h2>
<?php
wp_nav_menu(
    array(
        'theme_location' => 'blogArchive-menu',
        'container' => false   
    )
);
?>
</li>
<li class="categories">
<h2>Kategorier</h2>


<?php
wp_nav_menu(
    array(
        'theme_location' => 'blogCategories-menu',
        'container' => false,
    )
);
?>


</li>
</ul>
</div>
</aside>
</div>
</div>
</section>
</main>
 
<?php get_footer(); ?>

