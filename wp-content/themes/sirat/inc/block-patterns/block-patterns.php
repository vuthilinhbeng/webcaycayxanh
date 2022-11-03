<?php
/**
 * Sirat: Block Patterns
 *
 * @package Sirat
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'sirat',
		array( 'label' => __( 'Sirat', 'sirat' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'sirat/banner-section',
		array(
			'title'      => __( 'Banner Section', 'sirat' ),
			'categories' => array( 'sirat' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":6563,\"dimRatio\":80,\"customGradient\":\"linear-gradient(100deg,rgb(0,0,0) 53%,rgba(0,0,0,0.63) 99%)\",\"align\":\"full\",\"className\":\"banner-section\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim-80 has-background-dim has-background-gradient banner-section\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png)\"><span aria-hidden=\"true\" class=\"wp-block-cover__gradient-background\" style=\"background:linear-gradient(100deg,rgb(0,0,0) 53%,rgba(0,0,0,0.63) 99%)\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:group {\"className\":\"banner-content\"} -->\n<div class=\"wp-block-group banner-content\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":4,\"className\":\"mb-1\"} -->\n<h4 class=\"has-text-align-left mb-1\">TE OBTINUIT UT ADEPTO SATIS SOMNO ALISQUE</h4>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"left\",\"level\":1,\"className\":\"mb-1\"} -->\n<h1 class=\"has-text-align-left mb-1\">TE OBTINUIT UT ADEPTO SATIS SOMNO ALISQUE</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"mb-2\"} -->\n<p class=\"has-text-align-left mb-2\">Lorem Ipsum has been the industry standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#febe00\",\"text\":\"#121212\"}},\"className\":\"mb-1\"} -->\n<div class=\"wp-block-button mb-1\"><a class=\"wp-block-button__link has-text-color has-background\" style=\"background-color:#febe00;color:#121212\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:group --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'sirat/services-section',
		array(
			'title'      => __( 'Services Section', 'sirat' ),
			'categories' => array( 'sirat' ),
			'content'    => "<!-- wp:cover {\"overlayColor\":\"white\",\"align\":\"full\",\"className\":\"article-outer-box\"} -->\n<div class=\"wp-block-cover alignfull has-white-background-color has-background-dim article-outer-box\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:group {\"className\":\"article-title mb-lg-0 mb-4\"} -->\n<div class=\"wp-block-group article-title mb-lg-0 mb-4\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":5,\"className\":\"mb-0\",\"style\":{\"color\":{\"text\":\"#121212\"}}} -->\n<h5 class=\"has-text-align-left mb-0 has-text-color\" style=\"color:#121212\">OUR ADVANTAGES</h5>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"textAlign\":\"left\",\"className\":\"mb-0 mt-0\",\"style\":{\"color\":{\"text\":\"#121212\"}}} -->\n<h2 class=\"has-text-align-left mb-0 mt-0 has-text-color\" style=\"color:#121212\">AWESOME SERVICES</h2>\n<!-- /wp:heading --></div></div>\n<!-- /wp:group --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\",\"className\":\"mb-lg-0 mb-4 mt-0\"} -->\n<div class=\"wp-block-column mb-lg-0 mb-4 mt-0\" style=\"flex-basis:66.66%\"><!-- wp:group {\"className\":\"article-content\"} -->\n<div class=\"wp-block-group article-content\"><div class=\"wp-block-group__inner-container\"><!-- wp:paragraph {\"className\":\"mb-0\",\"textColor\":\"black\"} -->\n<p class=\"mb-0 has-black-color has-text-color\">Lorem Ipsum has been the industry standard. Lorem Ipsum has been the industry standard. Lorem Ipsum has been the industry standard.</p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:group -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column {\"className\":\"article-inner-box p-4 mb-lg-0 mb-4\"} -->\n<div class=\"wp-block-column article-inner-box p-4 mb-lg-0 mb-4\"><!-- wp:image {\"id\":6496,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/services1.png\" alt=\"\" class=\"wp-image-6496\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"level\":3,\"className\":\"mb-2\",\"style\":{\"color\":{\"text\":\"#121212\"}}} -->\n<h3 class=\"mb-2 has-text-color\" style=\"color:#121212\">Services Title 1</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#121212\"}}} -->\n<p class=\"has-text-color\" style=\"color:#121212\">Lorem Ipsum has been the industry standard. </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"p-0 m-0\"} -->\n<div class=\"wp-block-button p-0 m-0\"><a class=\"wp-block-button__link\"></a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"article-inner-box p-4 mb-lg-0 mb-4\"} -->\n<div class=\"wp-block-column article-inner-box p-4 mb-lg-0 mb-4\"><!-- wp:image {\"id\":6498,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/services2.png\" alt=\"\" class=\"wp-image-6498\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"level\":3,\"className\":\"mb-2\",\"style\":{\"color\":{\"text\":\"#121212\"}}} -->\n<h3 class=\"mb-2 has-text-color\" style=\"color:#121212\">Services Title 2</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color\">Lorem Ipsum has been the industry standard.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"p-0 m-0\"} -->\n<div class=\"wp-block-button p-0 m-0\"><a class=\"wp-block-button__link\"></a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"article-inner-box p-4 mb-lg-0 mb-4\"} -->\n<div class=\"wp-block-column article-inner-box p-4 mb-lg-0 mb-4\"><!-- wp:image {\"id\":6499,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/services3.png\" alt=\"\" class=\"wp-image-6499\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"level\":3,\"className\":\"mb-2\",\"style\":{\"color\":{\"text\":\"#121212\"}}} -->\n<h3 class=\"mb-2 has-text-color\" style=\"color:#121212\">Services Title 3</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"textColor\":\"black\"} -->\n<p class=\"has-black-color has-text-color\">Lorem Ipsum has been the industry standard.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"p-0 m-0\"} -->\n<div class=\"wp-block-button p-0 m-0\"><a class=\"wp-block-button__link\"></a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"30%\",\"className\":\"article-about-box\"} -->\n<div class=\"wp-block-column article-about-box\" style=\"flex-basis:30%\"><!-- wp:image {\"align\":\"center\",\"id\":6575,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about-us.png\" alt=\"\" class=\"wp-image-6575\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:group {\"className\":\"article-about-content\"} -->\n<div class=\"wp-block-group article-about-content\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"mb-1\",\"style\":{\"color\":{\"text\":\"#121212\"}}} -->\n<h3 class=\"has-text-align-center mb-1 has-text-color\" style=\"color:#121212\">ABOUT US</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center mb-1\",\"textColor\":\"black\"} -->\n<p class=\"has-text-align-center text-center mb-1 has-black-color has-text-color\">Lorem Ipsum has been the industry standard.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#121212\"}},\"textColor\":\"white\",\"className\":\"mt-0\"} -->\n<div class=\"wp-block-button mt-0\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"background-color:#121212\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:group --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);
}