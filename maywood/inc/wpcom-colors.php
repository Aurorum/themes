<?php
/* Custom Colors: Maywood */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list-item__featured span,
			.sticky-post,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-primary-background-color[class],
			.has-secondary-background-color[class],
			.has-foreground-background-color[class],
			.has-foreground-dark-background-color[class],
			.has-foreground-light-background-color[class],
			.has-background-color[class],
			.has-background-dark-color[class],
			.has-background-light-color[class],
			.has-background-background-color[class],
			.has-background-dark-background-color[class],
			.has-background-light-background-color[class]', 'color' ),
	// Background-color
	array( '.has-background-background-color[class]', 'background-color' ),
	// Background-color darkened
	array( '.has-background-dark-background-color[class]', 'background-color', '-1' ),
	// Background-color lightened
	array( '.has-background-light-background-color[class]', 'background-color', '+1' ),

	/**
	 * Grays
	 * Uses a slightly darker color
	 */
	// Border-color
	array( '.wp-block-code,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			input[type="color"],
			input[type="date"],
			input[type="datetime"],
			input[type="datetime-local"],
			input[type="email"],
			input[type="month"],
			input[type="number"],
			input[type="password"],
			input[type="range"],
			input[type="search"],
			input[type="tel"],
			input[type="text"],
			input[type="time"],
			input[type="url"],
			input[type="week"],
			select,
			textarea,
			.site-header > .main-navigation > div > ul > li > .sub-menu', 'border-color', '-1' ),
	// Border-top-color
	array( '.comment-list .children > li,
			.comment-list > li,
			.wp-block-pullquote', 'border-top-color', '-1' ),
	// Border-bottom-color
	array( '.comment-list,
			.wp-block-pullquote,
			hr,
			hr.wp-block-separator', 'border-bottom-color', '-1' ),
	// Color
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),
	// Background-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept.has-focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:hover', '-1' ),


), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#897248', array(

	// Background-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.button,
			.main-navigation #toggle:focus + #toggle-menu,
			.sticky-post,
			.wp-block-button__link,
			.wp-block-file .wp-block-file__button,
			.wp-block-file__button,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept,
			button,
			button[data-load-more-btn],
			input[type="submit"]', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list .a8c-posts-list-item__title a:active,
			.a8c-posts-list .a8c-posts-list-item__title a:focus,
			.a8c-posts-list .a8c-posts-list-item__title a:hover,
			.entry-title a:active,
			.entry-title a:focus,
			.entry-title a:hover,
			.main-navigation a:hover,
			.page-title a:active,
			.page-title a:focus,
			.page-title a:hover,
			.site-title a:hover,
			.social-navigation a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link,
			.wp-block-button.is-style-outline .wp-block-button__link:active,
			.wp-block-button.is-style-outline.wp-block-button__link,
			.wp-block-button.is-style-outline.wp-block-button__link:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a', 'color'),

	// Border color left
	array( '.wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	/**
	 * Utility Classes
	 */
	// Background-color
	array( '.has-primary-background-color[class]', 'background-color' ),
	// Text-color
	array( '.has-primary-color[class]', 'color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#181818', array(

	// Text-color
	array( '.comment-meta .comment-metadata,
			.main-navigation,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.screen-reader-text:focus,
			.site-title,
			.social-navigation a,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-pullquote,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			input[type="color"],
			input[type="color"]:focus,
			input[type="date"],
			input[type="date"]:focus,
			input[type="datetime"],
			input[type="datetime"]:focus,
			input[type="datetime-local"],
			input[type="datetime-local"]:focus,
			input[type="email"],
			input[type="email"]:focus,
			input[type="month"],
			input[type="month"]:focus,
			input[type="number"],
			input[type="number"]:focus,
			input[type="password"],
			input[type="password"]:focus,
			input[type="range"],
			input[type="range"]:focus,
			input[type="search"],
			input[type="search"]:focus,
			input[type="tel"],
			input[type="tel"]:focus,
			input[type="text"],
			input[type="text"]:focus,
			input[type="time"],
			input[type="time"]:focus,
			input[type="url"],
			input[type="url"]:focus,
			input[type="week"],
			input[type="week"]:focus,
			textarea,
			textarea:focus', 'color' ),

	// Background-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color' ),

	/**
	 * Utility Classes
	 */
	// Foreground
	array( '.has-foreground-color[class]', 'color' ),
	array( '.has-foreground-background-color[class]', 'background-color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-foreground-dark-background-color[class]', 'background-color', '-1' ),

	// Text-color brightened
	array( '.has-foreground-light-color[class]', 'color', '+2' ),
	// Background-color brightened
	array( '.has-foreground-light-background-color[class]', 'background-color', '+2' ),

	/**
	 * Gray (Same as text color)
	 */
	// Text-color
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta,
			.comment-notes,
			.entry-footer,
			.entry-meta,
			.footer-navigation .footer-menu,
			.has-foreground-light-color[class],
			.post-navigation .meta-nav,
			.site-branding,
			.site-info,
			.widget_archive ul li,
			.widget_categories ul li,
			.widget_meta ul li,
			.widget_nav_menu ul li,
			.widget_pages ul li,
			.widget_recent_comments ul li,
			.widget_recent_entries ul li,
			.widget_rss ul li,
			.wp-block-image figcaption,
			.wp-block-latest-comments .wp-block-latest-comments__comment-date,
			.wp-block-latest-posts .wp-block-latest-posts__post-date,
			.wp-block-newspack-blocks-homepage-articles article .cat-links,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta,
			.wp-block-pullquote .wp-block-pullquote__citation,
			.wp-block-pullquote cite,
			.wp-block-pullquote footer,
			.wp-block-quote .wp-block-quote__citation,
			.wp-block-quote cite,
			.wp-block-quote footer,
			.wp-block-quote.is-large .wp-block-quote__citation,
			.wp-block-quote.is-large cite,
			.wp-block-quote.is-large footer,
			.wp-block-quote.is-style-large .wp-block-quote__citation,
			.wp-block-quote.is-style-large cite,
			.wp-block-quote.is-style-large footer,
			.wp-block-video figcaption,
			figcaption', 'color' ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#c4493f', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-secondary-color[class]', 'color' ),

	// Background-color
	array( '.has-secondary-background-color[class]', 'background-color' ),

), __( 'Secondary Color' ) );

/**
 * Featured Varia Palettes
 */
// Light
add_color_palette( array(
	'#FFFFFF',
	'#1D1E1E',
	'#C8133E',
	'#4E2F4B',
), 'Light' );
// Medium
add_color_palette( array(
	'#EEF4F7',
	'#242527',
	'#35845D',
	'#233252',
), 'Medium' );
// Dark
add_color_palette( array(
	'#1F2527',
	'#FFFFFF',
	'#9FD3E8',
	'#FBE6AA',
), 'Dark' );
