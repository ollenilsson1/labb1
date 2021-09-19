<footer id="footer">
<div class="container">
				<div class="row top">
<!-- Footer left som widget, redigeras i adminpanelen -->
<div class="col-xs-12 col-sm-6 col-md-4">
	<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
</div>
<!-- Footer center som widget -->
<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
	<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
</div>

<!-- Footer right är som meny för att kunna använda ikoner från pluginet "Menu Image" i wordpress -->
<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
	<h4>Social media</h4>
<?php 
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-right-socials',
                                        'container' => 'ul',
                                        'menu_class' => 'social'
                                    )
                                );
                            ?>
</div>
<!-- Skriv ut wordpress namnet samt datum efter copyright -->
</div>
<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; <?php echo bloginfo('name') ?> <?php echo date('Y') ?></p>
					</div>
</div>
</div>
</footer>



	</div>
    <?php wp_footer(); ?>
</body>
</html>