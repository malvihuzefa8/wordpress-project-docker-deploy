<?php
    /* Footer Sections */
    $wp_customize->add_section('computer_repair_services_pro_footer_widget_section',array(
        'title' => __('Footer Widgets','computer-repair-services-pro'),
        'description'   => __('Edit footer Widgets sections','computer-repair-services-pro'),
        'panel' => 'computer_repair_services_pro_panel_id',
    ));
    $wp_customize->add_setting( 'computer_repair_services_pro_footer_widgets_enable',
        array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'computer_repair_services_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new computer_repair_services_pro_Toggle_Switch_Custom_Control( $wp_customize, 'computer_repair_services_pro_footer_widgets_enable',
    array(
        'label' => esc_html__( 'Show or Hide Footer', 'computer-repair-services-pro' ),
        'section' => 'computer_repair_services_pro_footer_widget_section'
    )));    
    $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_footer_widgets_enable', array(
      'selector' => '#footer .footer-cols',
      'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_footer_widgets_enable',
    ) );

    $wp_customize->add_setting( 'computer_repair_services_pro_footer_widget_section_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
    ));
    $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_footer_widget_section_setting',
        array(
          'label' => __('Section Background Setting','computer-repair-services-pro'),
          'section' => 'computer_repair_services_pro_footer_widget_section'
        )
    ) );

    // add color picker setting
    $wp_customize->add_setting( 'computer_repair_services_pro_footer_widget_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_footer_widget_bgcolor', array(
        'label' => __('Background Color', 'computer-repair-services-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_footer_widget_section',
        'settings' => 'computer_repair_services_pro_footer_widget_bgcolor',
    )));
    $wp_customize->add_setting('computer_repair_services_pro_footer_widget_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
      'computer_repair_services_pro_footer_widget_bgimage',
      array(
          'label' => __('Background image','computer-repair-services-pro'),
          'description' => __('Dimention 1600 * 600','computer-repair-services-pro'),
          'section' => 'computer_repair_services_pro_footer_widget_section',
          'settings' => 'computer_repair_services_pro_footer_widget_bgimage'
    )));

    $wp_customize->add_setting( 'computer_repair_services_pro_footer_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_footer_heading_color', array(
        'label' => __('Heading Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_footer_widget_section',
        'settings' => 'computer_repair_services_pro_footer_heading_color',
    )));

    $wp_customize->add_setting('computer_repair_services_pro_footer_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'computer_repair_services_pro_footer_heading_font_family', array(
        'section'  => 'computer_repair_services_pro_footer_widget_section',
        'label'    => __( 'Heading Font Family','computer-repair-services-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_footer_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_footer_content_color', array(
        'label' => __('Content Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_footer_widget_section',
        'settings' => 'computer_repair_services_pro_footer_content_color',
    )));

    $wp_customize->add_setting('computer_repair_services_pro_footer_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'computer_repair_services_pro_footer_content_font_family', array(
        'section'  => 'computer_repair_services_pro_footer_widget_section',
        'label'    => __( 'Content Font Family','computer-repair-services-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    
    /*-----------------Footer Copyright--------------*/

    $wp_customize->add_section('computer_repair_services_pro_footer_section',array(
        'title' => __('Footer Text','computer-repair-services-pro'),
        'description'   => __('Add some text for footer like copyright etc.','computer-repair-services-pro'),
        'priority'  => null,
        'panel' => 'computer_repair_services_pro_panel_id',
    ));

    $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_footer_copy', array(
      'selector' => '.copy-text',
      'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_footer_copy',
    ) );
    // add color picker setting
    $wp_customize->add_setting( 'computer_repair_services_pro_footer_copy_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_footer_copy_bgcolor', array(
        'label' => __('Background Color', 'computer-repair-services-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_footer_section',
        'settings' => 'computer_repair_services_pro_footer_copy_bgcolor',
    )));
    $wp_customize->add_setting('computer_repair_services_pro_footer_copy_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'computer_repair_services_pro_footer_copy_bgimage',
            array(
                'label' => __('Background image','computer-repair-services-pro'),
                'description' => __('Dimention 1600 * 500','computer-repair-services-pro'),
                'section' => 'computer_repair_services_pro_footer_section',
                'settings' => 'computer_repair_services_pro_footer_copy_bgimage'
    )));

    $wp_customize->add_setting('computer_repair_services_pro_footer_copy',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_footer_copy',array(
        'label' => __('Copyright Text','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_footer_section',
        'type'      => 'text'
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_footer_copy_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_footer_copy_content_color', array(
        'label' => __('Content Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_footer_section',
        'settings' => 'computer_repair_services_pro_footer_copy_content_color',
    )));

    $wp_customize->add_setting('computer_repair_services_pro_footer_copy_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'computer_repair_services_pro_footer_copy_content_font_family', array(
        'section'  => 'computer_repair_services_pro_footer_section',
        'label'    => __( 'Content Font Family','computer-repair-services-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_footer_returntotop_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
    ));
    $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_footer_returntotop_setting',
        array(
          'label' => __('Return To Top Color Setting','computer-repair-services-pro'),
          'section' => 'computer_repair_services_pro_footer_section'
        )
    ) );

    $wp_customize->add_setting( 'computer_repair_services_pro_returntotop_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_returntotop_color', array(
        'label' => __('Return To Top Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_footer_section',
        'settings' => 'computer_repair_services_pro_returntotop_color',
    )));

    $wp_customize->add_setting( 'computer_repair_services_pro_returntotop_background_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_returntotop_background_color', array(
        'label' => __('Return To Top Background Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_footer_section',
        'settings' => 'computer_repair_services_pro_returntotop_background_color',
    )));

    $wp_customize->add_setting( 'computer_repair_services_pro_returntotop_background_hover_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_returntotop_background_hover_color', array(
        'label' => __('Return To Top Background Hover Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_footer_section',
        'settings' => 'computer_repair_services_pro_returntotop_background_hover_color',
    )));
    
    /* Contact Page section */

    $wp_customize->add_section('computer_repair_services_pro_contact_page_section',array(
        'title' => __('Contact','computer-repair-services-pro'),
        'description'   => __('Add contact page settings here).','computer-repair-services-pro'),
        'priority'  => null,
        'panel' => 'computer_repair_services_pro_panel_id',
    ));

    $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_contact_us', array(
      'selector' => ' #contactus',
      'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_contact_uc',
    ) );
    // add color picker setting
    $wp_customize->add_setting( 'computer_repair_services_pro_contact_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_contact_bgcolor', array(
        'label' => __('Background Color', 'computer-repair-services-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'settings' => 'computer_repair_services_pro_contact_bgcolor',
    )));
    $wp_customize->add_setting('computer_repair_services_pro_contact_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'computer_repair_services_pro_contact_bgimage',
            array(
                'label' => __('Background image','computer-repair-services-pro'),
                'description' => __('Dimention 1600 * 500','computer-repair-services-pro'),
                'section' => 'computer_repair_services_pro_contact_page_section',
                'settings' => 'computer_repair_services_pro_contact_bgimage'
    )));

    $wp_customize->add_setting( 'computer_repair_services_pro_contact_page_section_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
    ));
    $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_contact_page_section_setting',
        array(
          'label' => __('Section Heading Setting','computer-repair-services-pro'),
          'section' => 'computer_repair_services_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('computer_repair_services_pro_contact_heading',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_contact_heading',array(
        'label' => __('Contact Title ','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_contact_heading',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_contact_page_heading_color', array(
        'label' => __('Contact Title Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'settings' => 'computer_repair_services_pro_contact_page_heading_color',
    )));


    $wp_customize->add_setting('computer_repair_services_pro_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'computer_repair_services_pro_contact_page_heading_font_family', array(
        'section'  => 'computer_repair_services_pro_contact_page_section',
        'label'    => __( 'Contact Title Font Family','computer-repair-services-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_contact_page_section_email_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
    ));
    $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_contact_page_section_email_setting',
        array(
          'label' => __('Section Email Setting','computer-repair-services-pro'),
          'section' => 'computer_repair_services_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('computer_repair_services_pro_contactpage_email_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_contactpage_email_title',array(
        'label' => __('Email Title','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_contactpage_email_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('computer_repair_services_pro_contactpage_email_one',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_contactpage_email_one',array(
        'label' => __('First Email','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_contactpage_email_one',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('computer_repair_services_pro_contactpage_email_two',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_contactpage_email_two',array(
        'label' => __('Second Email','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_contactpage_email_two',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_contact_page_section_address_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
    ));
    $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_contact_page_section_address_setting',
        array(
          'label' => __('Section Address Setting','computer-repair-services-pro'),
          'section' => 'computer_repair_services_pro_contact_page_section'
        )
    ) );
    
    $wp_customize->add_setting('computer_repair_services_pro_address_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_address_title',array(
        'label' => __('Address Title','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_address_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('computer_repair_services_pro_address',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_address',array(
        'label' => __('Address ','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_address',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_contact_page_section_phone_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
    ));
    $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_contact_page_section_phone_setting',
        array(
          'label' => __('Section Phone Setting','computer-repair-services-pro'),
          'section' => 'computer_repair_services_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting('computer_repair_services_pro_contactpage_phone_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_contactpage_phone_title',array(
        'label' => __('Phone Title','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_contactpage_phone_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('computer_repair_services_pro_contactpage_phone_one',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_contactpage_phone_one',array(
        'label' => __('First Phone','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_contactpage_phone_one',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('computer_repair_services_pro_contactpage_phone_two',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_contactpage_phone_two',array(
        'label' => __('Second Phone','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_contactpage_phone_two',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('computer_repair_services_pro_ccform_heading',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_ccform_heading',array(
        'label' => __('Heading','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_ccform_heading',
        'type'  => 'text'
    ));

     $wp_customize->add_setting( 'computer_repair_services_pro_ccform_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_ccform_heading_color', array(
        'label' => __('Heading Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'settings' => 'computer_repair_services_pro_ccform_heading_color',
    )));

    $wp_customize->add_setting('computer_repair_services_pro_ccform_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'computer_repair_services_pro_ccform_heading_font_family', array(
        'section'  => 'computer_repair_services_pro_contact_page_section',
        'label'    => __( 'Heading Font Family','computer-repair-services-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting('computer_repair_services_pro_ccform_text',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_ccform_text',array(
        'label' => __('Text','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_ccform_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_ccform_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_ccform_text_color', array(
        'label' => __('Text Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'settings' => 'computer_repair_services_pro_ccform_text_color',
    )));

    $wp_customize->add_setting('computer_repair_services_pro_ccform_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'computer_repair_services_pro_ccform_text_font_family', array(
        'section'  => 'computer_repair_services_pro_contact_page_section',
        'label'    => __( 'Text Font Family','computer-repair-services-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('computer_repair_services_pro_contact_page_shortcode',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('computer_repair_services_pro_contact_page_shortcode',array(
    'label' => __('Contact Shortcode','computer-repair-services-pro'),
    'description' => __('Add Contact Form Shortcode Here','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_contact_page_section',
    'setting' => 'computer_repair_services_pro_contact_page_shortcode',
    'type'    => 'text'
    )); 
    $wp_customize->add_setting( 'computer_repair_services_pro_contact_page_section_map_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
    ));
    $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_contact_page_section_map_setting',
        array(
          'label' => __('Section Map Setting','computer-repair-services-pro'),
          'section' => 'computer_repair_services_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('computer_repair_services_pro_address_longitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('computer_repair_services_pro_address_longitude',array(
        'label' => __('Longitude','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_address_longitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('computer_repair_services_pro_address_latitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('computer_repair_services_pro_address_latitude',array(
        'label' => __('Latitude','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'setting'   => 'computer_repair_services_pro_address_latitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting( 'computer_repair_services_pro_contact_page_section_details_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
    ));
    $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_contact_page_section_details_setting',
        array(
          'label' => __('Section Text Color and Font Setting','computer-repair-services-pro'),
          'section' => 'computer_repair_services_pro_contact_page_section'
        )
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_contactpage_email_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_contactpage_email_title_color', array(
        'label' => __(' Contact Heading Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'settings' => 'computer_repair_services_pro_contactpage_email_title_color',
    )));

    $wp_customize->add_setting('computer_repair_services_pro_contactpage_email_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'computer_repair_services_pro_contactpage_email_title_font_family', array(
        'section'  => 'computer_repair_services_pro_contact_page_section',
        'label'    => __( 'Contact Heading Font Family','computer-repair-services-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_contactpage_email_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_contactpage_email_color', array(
        'label' => __('Contact Text Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'settings' => 'computer_repair_services_pro_contactpage_email_color',
    )));

    $wp_customize->add_setting('computer_repair_services_pro_contactpage_email_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'computer_repair_services_pro_contactpage_email_font_family', array(
        'section'  => 'computer_repair_services_pro_contact_page_section',
        'label'    => __( 'Contact Text Font Family','computer-repair-services-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    // add color picker control
   

    // add color picker control
    $wp_customize->add_setting( 'computer_repair_services_pro_contact_page_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_contact_page_icon_color', array(
        'label' => __('Contact Content Icon Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'settings' => 'computer_repair_services_pro_contact_page_icon_color',
    )));

    $wp_customize->add_setting( 'computer_repair_services_pro_contact_page_background_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_contact_page_background_color', array(
        'label' => __('Contact background Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'settings' => 'computer_repair_services_pro_contact_page_background_color',
    )));

    $wp_customize->add_setting( 'computer_repair_services_pro_contact_button_background_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_contact_button_background_color', array(
        'label' => __('Button background Color', 'computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_contact_page_section',
        'settings' => 'computer_repair_services_pro_contact_button_background_color',
    )));


?>