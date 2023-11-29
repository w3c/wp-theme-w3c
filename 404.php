<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

	<section id="container">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header><h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1></header>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</section><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>
