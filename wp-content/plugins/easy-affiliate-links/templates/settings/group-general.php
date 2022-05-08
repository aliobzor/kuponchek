<?php

$group_general = array(
	'id' => 'general',
	'name' => __( 'General', 'easy-affiliate-links' ),
	'icon' => 'cog',
	'settings' => array(
		array(
			'id' => 'shortlink_slug',
			'name' => __( 'Shortlink Slug', 'easy-affiliate-links' ),
			'description' => __( 'Important: changing your slug will break any existing links to the old slug.', 'easy-affiliate-links' ),
			'type' => 'text',
			'default' => 'recommends',
		),
		array(
			'id' => 'pass_query_parameters',
			'name' => __( 'Pass Along Query Parameters', 'easy-affiliate-links' ),
			'description' => __( 'Wether query parameters added to the shortlink should get passed along to the destination URL.', 'easy-affiliate-links' ),
			'required' => 'premium',
			'type' => 'toggle',
			'default' => false,
		),
	),
);
