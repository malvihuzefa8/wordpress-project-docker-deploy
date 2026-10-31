<?php
	
    // --------Top Bar Section-----------
	
	$wp_customize->add_section('computer_repair_services_pro_topbar_section',array(
		'title'	=> __('Top Bar','computer-repair-services-pro'),
		'description'	=> __('Top Bar Settings','computer-repair-services-pro'),
		'priority'	=> null,
		'panel' => 'computer_repair_services_pro_panel_id',
	));

	//Location icon
	$wp_customize->add_setting('computer_repair_services_pro_topbar_location_icon',array(
      'default' => 'fas fa-map-marker-alt',
      'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control(new computer_repair_services_pro_Fontawesome_Icon_Chooser(
          $wp_customize,'computer_repair_services_pro_topbar_location_icon',array(
      'label' => __('Select Icon','computer-repair-services-pro'),
      'transport' => 'refresh',
      'section' => 'computer_repair_services_pro_topbar_section',
      'setting' => 'computer_repair_services_pro_topbar_location_icon',
      'type'    => 'icon'
    )));

	//location icon color
	$wp_customize->add_setting( 'computer_repair_services_pro_topbar_location_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_topbar_location_icon_color', array(
		'label' => __('Icon Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_topbar_section',
		'settings' => 'computer_repair_services_pro_topbar_location_icon_color',
	)));

	//Location Heading 
	$wp_customize->add_setting('computer_repair_services_pro_topbar_location_heading',array(
	  'default'	=> '',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('computer_repair_services_pro_topbar_location_heading',array(
	  'label'	=> __('Phone Heading','computer-repair-services-pro'),
	  'section'	=> 'computer_repair_services_pro_topbar_section',
	  'setting'	=> 'computer_repair_services_pro_topbar_location_heading',
	  'type'		=> 'text'
	));
    //Location Heading color
	$wp_customize->add_setting( 'computer_repair_services_pro_topbar_location_heading_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_topbar_location_heading_color', array(
		'label' => __('Location Heading Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_topbar_section',
		'settings' => 'computer_repair_services_pro_topbar_location_heading_color',
	)));
    //Location Heading font family
	$wp_customize->add_setting('computer_repair_services_pro_topbar_location_heading_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
	    'computer_repair_services_pro_topbar_location_heading_font_family', array(
	    'section'  => 'computer_repair_services_pro_topbar_section',
	    'label'    => __( 'Location Heading Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

	//Location Text
	$wp_customize->add_setting('computer_repair_services_pro_topbar_location_text',array(
	  'default'	=> '',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('computer_repair_services_pro_topbar_location_text',array(
	  'label'	=> __('Location Text','computer-repair-services-pro'),
	  'section'	=> 'computer_repair_services_pro_topbar_section',
	  'setting'	=> 'computer_repair_services_pro_topbar_location_text',
	  'type'		=> 'text'
	));
	//Location Text color
	$wp_customize->add_setting( 'computer_repair_services_pro_topbar_location_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_topbar_location_text_color', array(
		'label' => __('Location Text Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_topbar_section',
		'settings' => 'computer_repair_services_pro_topbar_location_text_color',
	)));
    //Location Text font family
	$wp_customize->add_setting('computer_repair_services_pro_topbar_location_text_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
 	    'computer_repair_services_pro_topbar_location_text_font_family', array(
	    'section'  => 'computer_repair_services_pro_topbar_section',
	    'label'    => __( 'Location Text Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

    //Email icon
	$wp_customize->add_setting('computer_repair_services_pro_topbar_email_icon',array(
      'default' => 'fas fa-map-marker-alt',
      'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control(new computer_repair_services_pro_Fontawesome_Icon_Chooser(
          $wp_customize,'computer_repair_services_pro_topbar_email_icon',array(
      'label' => __('Select Icon','computer-repair-services-pro'),
      'transport' => 'refresh',
      'section' => 'computer_repair_services_pro_topbar_section',
      'setting' => 'computer_repair_services_pro_topbar_email_icon',
      'type'    => 'icon'
    )));

    //Email icon color
	$wp_customize->add_setting( 'computer_repair_services_pro_topbar_email_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_topbar_email_icon_color', array(
		'label' => __('Icon Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_topbar_section',
		'settings' => 'computer_repair_services_pro_topbar_email_icon_color',
	)));

    //Email Heading
	$wp_customize->add_setting('computer_repair_services_pro_topbar_email_heading',array(
	  'default'	=> '',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('computer_repair_services_pro_topbar_email_heading',array(
	  'label'	=> __('Email Heading','computer-repair-services-pro'),
	  'section'	=> 'computer_repair_services_pro_topbar_section',
	  'setting'	=> 'computer_repair_services_pro_topbar_email_heading',
	  'type'		=> 'text'
	));

	//Email Heading color
	$wp_customize->add_setting( 'computer_repair_services_pro_topbar_email_heading_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_topbar_email_heading_color', array(
		'label' => __('Email Heading Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_topbar_section',
		'settings' => 'computer_repair_services_pro_topbar_email_heading_color',
	)));
    //Email Heading font family
	$wp_customize->add_setting('computer_repair_services_pro_topbar_email_heading_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
 	    'computer_repair_services_pro_topbar_email_heading_font_family', array(
	    'section'  => 'computer_repair_services_pro_topbar_section',
	    'label'    => __( 'Email Text Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

	//Email Text
	$wp_customize->add_setting('computer_repair_services_pro_topbar_email_text',array(
	  'default'	=> '',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('computer_repair_services_pro_topbar_email_text',array(
	  'label'	=> __('Phone Number','computer-repair-services-pro'),
	  'section'	=> 'computer_repair_services_pro_topbar_section',
	  'setting'	=> 'computer_repair_services_pro_topbar_email_text',
	  'type'		=> 'text'
	));

	//Email Text color
	$wp_customize->add_setting( 'computer_repair_services_pro_topbar_email_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_topbar_email_text_color', array(
		'label' => __('Email Text Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_topbar_section',
		'settings' => 'computer_repair_services_pro_topbar_email_text_color',
	)));
    //Email Text font family
	$wp_customize->add_setting('computer_repair_services_pro_topbar_email_text_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
 	    'computer_repair_services_pro_topbar_email_text_font_family', array(
	    'section'  => 'computer_repair_services_pro_topbar_section',
	    'label'    => __( 'Email Text Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

	//Social Icon Text
	$wp_customize->add_setting('computer_repair_services_pro_topbar_social_text',array(
	  'default'	=> '',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('computer_repair_services_pro_topbar_social_text',array(
	  'label'	=> __('Social Text','computer-repair-services-pro'),
	  'section'	=> 'computer_repair_services_pro_topbar_section',
	  'setting'	=> 'computer_repair_services_pro_topbar_social_text',
	  'type'		=> 'text'
	));
    
    //Social Text color
	$wp_customize->add_setting( 'computer_repair_services_pro_topbar_social_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_topbar_social_text_color', array(
		'label' => __('Social Text Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_topbar_section',
		'settings' => 'computer_repair_services_pro_topbar_social_text_color',
	)));
    //Social Text font family
	$wp_customize->add_setting('computer_repair_services_pro_topbar_social_text_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
 	    'computer_repair_services_pro_topbar_social_text_font_family', array(
	    'section'  => 'computer_repair_services_pro_topbar_section',
	    'label'    => __( 'Social Text Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

     //Social Icon color
	$wp_customize->add_setting( 'computer_repair_services_pro_topbar_social_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_topbar_social_icon_color', array(
		'label' => __('Social Icon Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_topbar_section',
		'settings' => 'computer_repair_services_pro_topbar_social_icon_color',
	)));

	// -------Header Section-----------
	
	$wp_customize->add_section('computer_repair_services_pro_header_section',array(
		'title'	=> __('Header','computer-repair-services-pro'),
		'description'	=> __('Header Settings','computer-repair-services-pro'),
		'priority'	=> null,
		'panel' => 'computer_repair_services_pro_panel_id',
	));

	$wp_customize->add_setting('computer_repair_services_pro_sticky_header', array(
        'default' => false,
        'sanitize_callback' => 'computer_repair_services_pro_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'computer_repair_services_pro_sticky_header',array(
        'label'          => __( 'Disable Sticky Header', 'computer-repair-services-pro' ),
        'section'        => 'computer_repair_services_pro_header_section',
        'settings'       => 'computer_repair_services_pro_sticky_header',
        'type'           => 'checkbox',
    )));

	//phone icon
	$wp_customize->add_setting('computer_repair_services_pro_header_phone_icon',array(
      'default' => 'fa fa-phone',
      'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control(new computer_repair_services_pro_Fontawesome_Icon_Chooser(
          $wp_customize,'computer_repair_services_pro_header_phone_icon',array(
      'label' => __('Select Icon','computer-repair-services-pro'),
      'transport' => 'refresh',
      'section' => 'computer_repair_services_pro_header_section',
      'setting' => 'computer_repair_services_pro_header_phone_icon',
      'type'    => 'icon'
    )));

	//phone icon color
	$wp_customize->add_setting( 'computer_repair_services_pro_header_phone_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_phone_icon_color', array(
		'label' => __('Phone Icon Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_phone_icon_color',
	)));

	//phone text
	$wp_customize->add_setting('computer_repair_services_pro_header_phone_text',array(
	  'default'	=> '',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('computer_repair_services_pro_header_phone_text',array(
	  'label'	=> __('Phone Text','computer-repair-services-pro'),
	  'section'	=> 'computer_repair_services_pro_header_section',
	  'setting'	=> 'computer_repair_services_pro_header_phone_text',
	  'type'		=> 'text'
	));
    //phone text color
	$wp_customize->add_setting( 'computer_repair_services_pro_header_phone_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_phone_text_color', array(
		'label' => __('Phone Text Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_phone_text_color',
	)));
    //phone text font family
	$wp_customize->add_setting('computer_repair_services_pro_header_phone_text_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
	    'computer_repair_services_pro_header_phone_text_font_family', array(
	    'section'  => 'computer_repair_services_pro_header_section',
	    'label'    => __( 'Phone Text Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

	//phone number
	$wp_customize->add_setting('computer_repair_services_pro_header_phone_number',array(
	  'default'	=> '',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('computer_repair_services_pro_header_phone_number',array(
	  'label'	=> __('Phone Number','computer-repair-services-pro'),
	  'section'	=> 'computer_repair_services_pro_header_section',
	  'setting'	=> 'computer_repair_services_pro_header_phone_number',
	  'type'		=> 'text'
	));
	//phone number color
	$wp_customize->add_setting( 'computer_repair_services_pro_header_phone_number_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_phone_number_color', array(
		'label' => __('Phone Number Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_phone_number_color',
	)));
    //phone number font family
	$wp_customize->add_setting('computer_repair_services_pro_header_phone_number_font_family',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
 	    'computer_repair_services_pro_header_phone_number_font_family', array(
	    'section'  => 'computer_repair_services_pro_header_section',
	    'label'    => __( 'Phone Number Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

	//cart icon
	$wp_customize->add_setting('computer_repair_services_pro_header_cart_icon',array(
	  'default'	=> '',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('computer_repair_services_pro_header_cart_icon',array(
	  'label'	=> __('Cart Icon','computer-repair-services-pro'),
	  'description'   => __('Add Font Awesome Class Here (https://fontawesome.com/icons?d=gallery)','computer-repair-services-pro'),
	  'section'	=> 'computer_repair_services_pro_header_section',
	  'setting'	=> 'computer_repair_services_pro_header_cart_icon',
	  'type'		=> 'text'
	));

	//cart icon  color
	$wp_customize->add_setting( 'computer_repair_services_pro_header_cart_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_cart_icon_color', array(
		'label' => __('Cart Icon Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_cart_icon_color',
	))); 

	//cart icon background color
	$wp_customize->add_setting( 'computer_repair_services_pro_header_cart_icon_bgcolor', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_cart_icon_bgcolor', array(
		'label' => __('Cart Icon Background Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_cart_icon_bgcolor',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_header_section_color_setting',
	    array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
	));
	$wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_header_section_color_setting',
	    array(
	    'label' => __('Header General Color Settings ','computer-repair-services-pro'),
	    'section' => 'computer_repair_services_pro_header_section'
	)));



	//cart icon color
	$wp_customize->add_setting( 'computer_repair_services_pro_header_backgroung_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_backgroung_color', array(
		'label' => __('Sticky Header Background Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_backgroung_color',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_navigation_color_setting',
	    array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
	));
	$wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_navigation_color_setting',
	    array(
	    'label' => __('Navigation Color Settings ','computer-repair-services-pro'),
	    'section' => 'computer_repair_services_pro_header_section'
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_header_navigtion_current_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_navigtion_current_color', array(
		'label' => __('Current Menu Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_navigtion_current_color',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_header_navigtion_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_navigtion_color', array(
		'label' => __('Menu Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_navigtion_color',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_header_navigtion_hover_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_navigtion_hover_color', array(
		'label' => __('Menu Hover Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_navigtion_hover_color',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_header_Submenu_backgoround_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_Submenu_backgoround_color', array(
		'label' => __('Submenu Background Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_Submenu_backgoround_color',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_header_Submenu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_Submenu_color', array(
		'label' => __('Submenu Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_Submenu_color',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_header_Submenu_current_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_Submenu_current_color', array(
		'label' => __('Submenu Current Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_Submenu_current_color',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_header_toggle_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_header_toggle_icon_color', array(
		'label' => __('Responsive Toggle Icon Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_header_section',
		'settings' => 'computer_repair_services_pro_header_toggle_icon_color',
	)));



		

	
	
?>