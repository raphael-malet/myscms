<?php

if ( class_exists("Kirki")){

	// HEADER SECTION

	Kirki::add_section( 'fitness_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'fitness-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'fitness-elementor' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_header_phone_number_heading',
		'section'     => 'fitness_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_elementor_header_phone_number',
		'section'  => 'fitness_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'fitness_elementor_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_enable_location_heading',
		'section'     => 'fitness_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Address', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_elementor_header_location',
		'section'  => 'fitness_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_enable_email_heading',
		'section'     => 'fitness_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_elementor_header_email',
		'section'  => 'fitness_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_elementor_cart_box_enable',
		'label'       => esc_html__( 'Enable/Disable Shopping Cart', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-elementor' ),
			'off' => esc_html__( 'Disable', 'fitness-elementor' ),
		],
	] );
	

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_enable_socail_link',
		'section'     => 'fitness_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'fitness-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'fitness_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'fitness-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'fitness-elementor' ),
		'settings'     => 'fitness_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'fitness-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'fitness-elementor' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'fitness-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'fitness-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );
	    
	// FOOTER SECTION

	Kirki::add_section( 'fitness_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'fitness-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'fitness-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_footer_text_heading',
		'section'     => 'fitness_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'fitness-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fitness_elementor_footer_text',
		'section'  => 'fitness_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fitness_elementor_footer_enable_heading',
		'section'     => 'fitness_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'fitness-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fitness_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fitness-elementor' ),
		'section'     => 'fitness_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fitness-elementor' ),
			'off' => esc_html__( 'Disable', 'fitness-elementor' ),
		],
	] );
}