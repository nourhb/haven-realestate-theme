<?php
/**
 * Title: Featured listings
 * Slug: haven/featured-listings
 * Categories: haven
 * Description: Grid of six property cards with price, beds, baths, sqft and status badges.
 *
 * @package Haven
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#f4f6f8"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f4f6f8;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#c9a227"}}} -->
		<p class="has-text-align-center has-text-color" style="color:#c9a227;font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Handpicked for you</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"}}} -->
		<h2 class="wp-block-heading has-text-align-center">Featured listings</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#5a6b7d"}}} -->
		<p class="has-text-align-center has-text-color" style="color:#5a6b7d">Fresh on the market this week — tour them before they are gone.</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"haven-card haven-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card"}} -->
				<div class="wp-block-group haven-card haven-reveal has-background" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card)">
					<!-- wp:cover {"url":"https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=800&q=80","dimRatio":0,"minHeight":220,"style":{"border":{"radius":"12px 12px 0 0"}}} -->
					<div class="wp-block-cover" style="border-radius:12px 12px 0 0;min-height:220px"><img class="wp-block-cover__image-background" alt="Modern two-storey home with landscaped front yard" src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=800&q=80" data-object-fit="cover"/>
						<div class="wp-block-cover__inner-container">
							<!-- wp:paragraph --><p><span class="haven-badge haven-badge--sale">For Sale</span></p><!-- /wp:paragraph -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"0.5rem"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem"},"color":{"text":"#0f2a43"}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#0f2a43">$1,289,000</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
						<p style="font-weight:600">42 Maple Grove Crescent, Oakville</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#5a6b7d"}}} -->
						<p class="has-text-color" style="color:#5a6b7d;font-size:0.9rem">🛏 4 bd &nbsp;·&nbsp; 🛁 3 ba &nbsp;·&nbsp; 📐 2,840 sqft</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"haven-card haven-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card"}} -->
				<div class="wp-block-group haven-card haven-reveal has-background" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card)">
					<!-- wp:cover {"url":"https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=800&q=80","dimRatio":0,"minHeight":220,"style":{"border":{"radius":"12px 12px 0 0"}}} -->
					<div class="wp-block-cover" style="border-radius:12px 12px 0 0;min-height:220px"><img class="wp-block-cover__image-background" alt="Luxury estate home with manicured lawn" src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=800&q=80" data-object-fit="cover"/>
						<div class="wp-block-cover__inner-container">
							<!-- wp:paragraph --><p><span class="haven-badge haven-badge--sale">For Sale</span></p><!-- /wp:paragraph -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"0.5rem"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem"},"color":{"text":"#0f2a43"}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#0f2a43">$2,450,000</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
						<p style="font-weight:600">18 Lakeshore Terrace, Burlington</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#5a6b7d"}}} -->
						<p class="has-text-color" style="color:#5a6b7d;font-size:0.9rem">🛏 5 bd &nbsp;·&nbsp; 🛁 4 ba &nbsp;·&nbsp; 📐 4,120 sqft</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"haven-card haven-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card"}} -->
				<div class="wp-block-group haven-card haven-reveal has-background" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card)">
					<!-- wp:cover {"url":"https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80","dimRatio":0,"minHeight":220,"style":{"border":{"radius":"12px 12px 0 0"}}} -->
					<div class="wp-block-cover" style="border-radius:12px 12px 0 0;min-height:220px"><img class="wp-block-cover__image-background" alt="Contemporary villa with swimming pool" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80" data-object-fit="cover"/>
						<div class="wp-block-cover__inner-container">
							<!-- wp:paragraph --><p><span class="haven-badge haven-badge--new">New</span></p><!-- /wp:paragraph -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"0.5rem"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem"},"color":{"text":"#0f2a43"}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#0f2a43">$1,875,000</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
						<p style="font-weight:600">7 Pine Valley Drive, Vaughan</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#5a6b7d"}}} -->
						<p class="has-text-color" style="color:#5a6b7d;font-size:0.9rem">🛏 4 bd &nbsp;·&nbsp; 🛁 5 ba &nbsp;·&nbsp; 📐 3,600 sqft</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-columns">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"haven-card haven-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card"}} -->
				<div class="wp-block-group haven-card haven-reveal has-background" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card)">
					<!-- wp:cover {"url":"https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=800&q=80","dimRatio":0,"minHeight":220,"style":{"border":{"radius":"12px 12px 0 0"}}} -->
					<div class="wp-block-cover" style="border-radius:12px 12px 0 0;min-height:220px"><img class="wp-block-cover__image-background" alt="Modern detached home in the suburbs" src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=800&q=80" data-object-fit="cover"/>
						<div class="wp-block-cover__inner-container">
							<!-- wp:paragraph --><p><span class="haven-badge haven-badge--sale">For Sale</span></p><!-- /wp:paragraph -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"0.5rem"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem"},"color":{"text":"#0f2a43"}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#0f2a43">$949,000</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
						<p style="font-weight:600">305 Meadowbrook Lane, Hamilton</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#5a6b7d"}}} -->
						<p class="has-text-color" style="color:#5a6b7d;font-size:0.9rem">🛏 3 bd &nbsp;·&nbsp; 🛁 2 ba &nbsp;·&nbsp; 📐 1,980 sqft</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"haven-card haven-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card"}} -->
				<div class="wp-block-group haven-card haven-reveal has-background" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card)">
					<!-- wp:cover {"url":"https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?auto=format&fit=crop&w=800&q=80","dimRatio":0,"minHeight":220,"style":{"border":{"radius":"12px 12px 0 0"}}} -->
					<div class="wp-block-cover" style="border-radius:12px 12px 0 0;min-height:220px"><img class="wp-block-cover__image-background" alt="Charming brick home with front porch" src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?auto=format&fit=crop&w=800&q=80" data-object-fit="cover"/>
						<div class="wp-block-cover__inner-container">
							<!-- wp:paragraph --><p><span class="haven-badge haven-badge--sold">Sold</span></p><!-- /wp:paragraph -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"0.5rem"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem"},"color":{"text":"#0f2a43"}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#0f2a43">$1,120,000</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
						<p style="font-weight:600">56 Birchwood Avenue, Toronto</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#5a6b7d"}}} -->
						<p class="has-text-color" style="color:#5a6b7d;font-size:0.9rem">🛏 3 bd &nbsp;·&nbsp; 🛁 3 ba &nbsp;·&nbsp; 📐 2,150 sqft</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"haven-card haven-reveal","style":{"border":{"radius":"12px"},"color":{"background":"#ffffff"},"shadow":"var:preset|shadow|card"}} -->
				<div class="wp-block-group haven-card haven-reveal has-background" style="background-color:#ffffff;border-radius:12px;box-shadow:var(--wp--preset--shadow--card)">
					<!-- wp:cover {"url":"https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=800&q=80","dimRatio":0,"minHeight":220,"style":{"border":{"radius":"12px 12px 0 0"}}} -->
					<div class="wp-block-cover" style="border-radius:12px 12px 0 0;min-height:220px"><img class="wp-block-cover__image-background" alt="Elegant suburban home with garage" src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=800&q=80" data-object-fit="cover"/>
						<div class="wp-block-cover__inner-container">
							<!-- wp:paragraph --><p><span class="haven-badge haven-badge--sale">For Sale</span></p><!-- /wp:paragraph -->
						</div>
					</div>
					<!-- /wp:cover -->
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"0.5rem"}}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem"},"color":{"text":"#0f2a43"}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#0f2a43">$765,000</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
						<p style="font-weight:600">91 Cedar Park Road, Mississauga</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#5a6b7d"}}} -->
						<p class="has-text-color" style="color:#5a6b7d;font-size:0.9rem">🛏 3 bd &nbsp;·&nbsp; 🛁 2 ba &nbsp;·&nbsp; 📐 1,720 sqft</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">View all 1,200+ listings</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
