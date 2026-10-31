<?php
	$wp_customize->add_section('computer_repair_services_pro_slider_section',array(
		'title'	=> __('Slider Settings','computer-repair-services-pro'),
		'description'	=> __('Add slider images here.','computer-repair-services-pro'),
		'priority'	=> null,
		'panel' => 'computer_repair_services_pro_panel_id',
	));
	$wp_customize->add_setting( 'computer_repair_services_pro_slider_enabledisable',
		array(
		  'default' => 1,
		  'transport' => 'refresh',
		  'sanitize_callback' => 'computer_repair_services_pro_switch_sanitization'
	));
	$wp_customize->add_control( new computer_repair_services_pro_Toggle_Switch_Custom_Control($wp_customize, 'computer_repair_services_pro_slider_enabledisable',
	  	array(
	    'label' => esc_html__( 'Show or Hide Slider Section', 'computer-repair-services-pro' ),
	    'section' => 'computer_repair_services_pro_slider_section'
	)));
    $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_slider_enabledisable', array(
	    'selector' => '#slider .main-slider',
	    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_slider_enabledisable',
	) );

	$wp_customize->add_setting('computer_repair_services_pro_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('computer_repair_services_pro_slide_number',array(
		'label'	=> __('Number of slides to show','computer-repair-services-pro'),
		'section'	=> 'computer_repair_services_pro_slider_section',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('computer_repair_services_pro_slide_number');
		
	for($i=1; $i<=$count; $i++ ) {
		

		$wp_customize->add_setting( 'computer_repair_services_pro_slider_section_settings'.$i,
		    array(
		    'default' => '',
		    'transport' => 'postMessage',
		    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
		 ));
		 $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_slider_section_settings'.$i,
		    array(
		    'label' => __('Slider Settings ','computer-repair-services-pro').$i,
		    'section' => 'computer_repair_services_pro_slider_section'
		)));

		$wp_customize->add_setting('computer_repair_services_pro_slide_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'computer_repair_services_pro_slide_image'.$i,
	        array(
            'label' => __('Slider Image ','computer-repair-services-pro').$i.__(' (1287×637)','computer-repair-services-pro'),
            'section' => 'computer_repair_services_pro_slider_section',
            'settings' => 'computer_repair_services_pro_slide_image'.$i
		)));
		
		$wp_customize->add_setting('computer_repair_services_pro_slide_main_heading'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('computer_repair_services_pro_slide_main_heading'.$i,array(
			'label' => __('Slide Main Heading ','computer-repair-services-pro').$i,
			'section' => 'computer_repair_services_pro_slider_section',
			'setting'	=> 'computer_repair_services_pro_slide_main_heading'.$i,
			'type'	=> 'text'
		));
		
		$wp_customize->add_setting('computer_repair_services_pro_slide_text'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('computer_repair_services_pro_slide_text'.$i,array(
			'label' => __('Slide Text ','computer-repair-services-pro').$i,
			'section' => 'computer_repair_services_pro_slider_section',
			'setting'	=> 'computer_repair_services_pro_slide_text'.$i,
			'type'	=> 'text'
		));

		$wp_customize->add_setting('computer_repair_services_pro_slide_btn'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('computer_repair_services_pro_slide_btn'.$i,array(
			'label' => __('Slide Button ','computer-repair-services-pro').$i,
			'section' => 'computer_repair_services_pro_slider_section',
			'setting'	=> 'computer_repair_services_pro_slide_btn'.$i,
			'type'	=> 'text'
		));

		$wp_customize->add_setting('computer_repair_services_pro_slide_btn_url'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('computer_repair_services_pro_slide_btn_url'.$i,array(
			'label' => __('Slide Button Url ','computer-repair-services-pro').$i,
			'section' => 'computer_repair_services_pro_slider_section',
			'setting'	=> 'computer_repair_services_pro_slide_btn_url'.$i,
			'type'	=> 'text'
		));

		
	}

    $wp_customize->add_setting( 'computer_repair_services_pro_slider_section_color_setting',
	    array(
	    'default' => '',
	    'transport' => 'postMessage',
	    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
	));
	$wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_slider_section_color_setting',
	    array(
	    'label' => __('Slider Color Settings ','computer-repair-services-pro'),
	    'section' => 'computer_repair_services_pro_slider_section'
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_slider_heading_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_slider_heading_color', array(
		'label' => __('Slide Main Heading Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_slider_section',
		'settings' => 'computer_repair_services_pro_slider_heading_color',
	)));

	$wp_customize->add_setting('computer_repair_services_pro_slider_heading_font',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
	    'computer_repair_services_pro_slider_heading_font', array(
	    'section'  => 'computer_repair_services_pro_slider_section',
	    'label'    => __( 'Slide Main Heading Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_slider_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_slider_text_color', array(
		'label' => __('Slide Text Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_slider_section',
		'settings' => 'computer_repair_services_pro_slider_text_color',
	)));

	$wp_customize->add_setting('computer_repair_services_pro_slider_text_font',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
	    'computer_repair_services_pro_slider_text_font', array(
	    'section'  => 'computer_repair_services_pro_slider_section',
	    'label'    => __( 'Slide Text Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_slider_button_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_slider_button_text_color', array(
		'label' => __('Slide Button Text Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_slider_section',
		'settings' => 'computer_repair_services_pro_slider_button_text_color',
	)));

	$wp_customize->add_setting('computer_repair_services_pro_slider_button_text_font',array(
	    'default' => '',
	    'capability' => 'edit_theme_options',
	    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
	    'computer_repair_services_pro_slider_button_text_font', array(
	    'section'  => 'computer_repair_services_pro_slider_section',
	    'label'    => __( 'Slide Button Text Fontfamily','computer-repair-services-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_slider_button_background_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_slider_button_background_color', array(
		'label' => __('Slide Button Background Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_slider_section',
		'settings' => 'computer_repair_services_pro_slider_button_background_color',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_slider_button_hover_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_slider_button_hover_color', array(
		'label' => __('Slide Button Hover Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_slider_section',
		'settings' => 'computer_repair_services_pro_slider_button_hover_color',
	)));

	$wp_customize->add_setting( 'computer_repair_services_pro_slider_button_hover_background_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_slider_button_hover_background_color', array(
		'label' => __('Slide Button Hover Background Color', 'computer-repair-services-pro'),
		'section' => 'computer_repair_services_pro_slider_section',
		'settings' => 'computer_repair_services_pro_slider_button_hover_background_color',
	)));

	
?>