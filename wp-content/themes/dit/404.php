<?php
/*---------------------------------
	Search Page Template
------------------------------------*/

get_header(); 

?>

	<section id="page">

		<header id="pageHeader">
			<h1><?php get_option_tree('rb_404_tagline', '', true); ?></h1>
			<a href="#" class="actionButton minimize" data-content="#page" data-speed="600">minimize</a>
		</header>

		<div class="contentHolder clearfix">

			<p><?php _e( 'Lo sentimos, al parecer ha caído en un agujero negro de internet del cual podrá salir fácilmente regresando a la página anterior a través de su explorador.', 'wowway' ); ?>

		</div>

	</section>
	
<?php get_footer(); ?>

