<?php
/**
 * 404 header block pattern
 *
 * @package full-site-editing
 * @since 1.0.0
 */

return array(
	'title'      => esc_html__( '404', 'full-site-editing' ),
	'categories' => array( 'text' ),
	'inserter'   => false,
	'content'    => '
		<!-- wp:heading {"className":"is-style-full-site-editing-text-shadow","textAlign":"center","fontSize":"x-large"} -->
		<h2 class="has-text-align-center has-x-large-font-size is-style-full-site-editing-text-shadow">' . esc_html__( 'Page not found', 'full-site-editing' ) . '</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph --><p>' . esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'full-site-editing' ) . '</p><!-- /wp:paragraph -->
		<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
		<!-- wp:spacer {"height":40} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:group {"style":{"border":{"style":"solid","radius":"4px"}},"borderColor":"transparent","backgroundColor":"secondary","layout":{"inherit":true}} -->
		<div class="wp-block-group has-border-color has-transparent-border-color has-secondary-background-color has-background" style="border-radius:4px;border-style:solid">
		<!-- wp:heading {"textAlign":"left"} -->
		<h2 class="has-text-align-left">' . esc_html__( 'Latest posts', 'full-site-editing' ) . '</h2>
		<!-- /wp:heading -->
		<!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left"} /-->
		</div>
		<!-- /wp:group -->
	',
);
