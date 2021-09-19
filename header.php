<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
    <?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<!-- för att länken i header labb1 ska ta en till startsidan -->
						<a class="logo" href="<?php bloginfo('url')?>">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<!-- Hämta searchform -->
						<?php get_search_form(); ?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

        <div class="mobile-search">
			<!-- Hämta searchform -->
			<?php get_search_form(); ?>
		</div>

        <!-- Header menyn som hämtas från wordpress -->
		<nav id="nav">
			<div class="container">
				<div class="row">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'container_class' => 'col-xs-12',
                            'menu_class' => 'menu'
                        )
                    );
                ?>
				
				</div>
			</div>
		</nav>