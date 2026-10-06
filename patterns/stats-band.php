<?php
/**
 * Title: Stats band
 * Slug: haven/stats-band
 * Categories: haven
 * Description: Animated count-up statistics band (homes sold, volume, rating).
 *
 * @package Haven
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#c9a227"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#c9a227;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"style":{"color":{"text":"#0f2a43"}}} -->
	<div class="wp-block-columns has-text-color" style="color:#0f2a43">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"2.75rem","fontWeight":"700"}}} -->
			<p class="has-text-align-center"><span class="haven-count" data-count="2400">0</span>+</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.14em"}}} -->
			<p class="has-text-align-center" style="font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Homes sold</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"2.75rem","fontWeight":"700"}}} -->
			<p class="has-text-align-center">$<span class="haven-count" data-count="980">0</span>M</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.14em"}}} -->
			<p class="has-text-align-center" style="font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Sales volume</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"2.75rem","fontWeight":"700"}}} -->
			<p class="has-text-align-center"><span class="haven-count" data-count="98">0</span>%</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.14em"}}} -->
			<p class="has-text-align-center" style="font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">List-to-sale ratio</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"2.75rem","fontWeight":"700"}}} -->
			<p class="has-text-align-center">4.9★</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.14em"}}} -->
			<p class="has-text-align-center" style="font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Client rating</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
