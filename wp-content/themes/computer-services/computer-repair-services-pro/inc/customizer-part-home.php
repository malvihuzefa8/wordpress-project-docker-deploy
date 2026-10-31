<?php


 /************** About Us*****************/

  $wp_customize->add_section('computer_repair_services_pro_about',array(
    'title' => __('About','computer-repair-services-pro'),
    'description' => __('Add About Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting( 'computer_repair_services_pro_about_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'computer_repair_services_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new computer_repair_services_pro_Toggle_Switch_Custom_Control($wp_customize, 'computer_repair_services_pro_about_enable',
      array(
        'label' => esc_html__( 'Show or Hide About Section', 'computer-repair-services-pro' ),
        'section' => 'computer_repair_services_pro_about'
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_about_enable', array(
    'selector' => '#about .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_about_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_about_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_about_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about'
  )));
  $wp_customize->add_setting( 'computer_repair_services_pro_about_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_about_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_about_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_about_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimension 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_about_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_about_content_settings',
    array(
    'label' => __('Section Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about'
  )));

  $wp_customize->add_setting('computer_repair_services_pro_about_left_image',array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'computer_repair_services_pro_about_left_image',
      array(
        'label' => __('About Left Image ','computer-repair-services-pro'),
        'description'   => __('Dimension 400 * 485','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_about',
        'settings' => 'computer_repair_services_pro_about_left_image'
  )));

   $wp_customize->add_setting('computer_repair_services_pro_about_call_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_about_call_text',array(
    'label' => __('Call Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'setting' => 'computer_repair_services_pro_about_call_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_about_call_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_about_call_text_color', array(
    'label' => __('Call Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_call_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_about_call_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_about_call_text_font_family', array(
      'section'  => 'computer_repair_services_pro_about',
      'label'    => __( 'Call Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_about_call_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_about_call_number',array(
    'label' => __('Call Number','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'setting' => 'computer_repair_services_pro_about_call_number',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_about_call_number_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_about_call_number_color', array(
    'label' => __('Call Number Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_call_number_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_about_call_number_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_about_call_number_font_family', array(
      'section'  => 'computer_repair_services_pro_about',
      'label'    => __( 'Call Number Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_about_aapoinment_content',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_about_aapoinment_content',array(
    'label' => __('Image Content','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'setting' => 'computer_repair_services_pro_about_aapoinment_content',
    'type'    => 'text'
  ));

   $wp_customize->add_setting( 'computer_repair_services_pro_about_aapoinment_content_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_about_aapoinment_content_color', array(
    'label' => __('Image Content Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_aapoinment_content_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_about_aapoinment_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_about_aapoinment_content_font_family', array(
      'section'  => 'computer_repair_services_pro_about',
      'label'    => __( 'Image Content Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_about_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_about_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'setting' => 'computer_repair_services_pro_about_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_about_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_about_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_about_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_about_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_about',
      'label'    => __( 'Section Main Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_about_main_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_about_main_title',array(
    'label' => __('Section Sub Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'setting' => 'computer_repair_services_pro_about_main_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_about_main_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_about_main_text_color', array(
    'label' => __('Section Main Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_main_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_about_main_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_about_main_text_font_family', array(
      'section'  => 'computer_repair_services_pro_about',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

   $wp_customize->add_setting('computer_repair_services_pro_about_main_content_1',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_about_main_content_1',array(
    'label' => __('Section Content1','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'setting' => 'computer_repair_services_pro_about_main_content_1',
    'type'    => 'textarea'
  ));

  $wp_customize->add_setting('computer_repair_services_pro_about_main_content_2',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_about_main_content_2',array(
    'label' => __('Section Content1','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'setting' => 'computer_repair_services_pro_about_main_content_2 ',
    'type'    => 'textarea'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_about_main_content_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_about_main_content_color', array(
    'label' => __('Section Content Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_main_content_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_about_main_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_about_main_content_font_family', array(
      'section'  => 'computer_repair_services_pro_about',
      'label'    => __( 'Section Content Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_about_increase',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_about_increase',array(
    'label' => __('No Of About To Show','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'setting' => 'computer_repair_services_pro_about_increase',
    'type'    => 'number'
  ));
   
  $About_count = get_theme_mod('computer_repair_services_pro_about_increase');

  for($i=1; $i<=$About_count; $i++) {

    $wp_customize->add_setting('computer_repair_services_pro_about_left_icon'.$i,array(
      'default' => 'fa fa-phone',
      'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control(new computer_repair_services_pro_Fontawesome_Icon_Chooser(
          $wp_customize,'computer_repair_services_pro_about_left_icon'.$i,array(
      'label' => __('Select Icon','computer-repair-services-pro').$i,
      'transport' => 'refresh',
      'section' => 'computer_repair_services_pro_about',
      'setting' => 'computer_repair_services_pro_about_left_icon'.$i,
      'type'    => 'icon'
    )));

    $wp_customize->add_setting('computer_repair_services_pro_about_main_text'.$i,array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_about_main_text'.$i,array(
    'label' => __('About Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'setting' => 'computer_repair_services_pro_about_main_text'.$i,
    'type'    => 'text'
  ));
  
  }

  $wp_customize->add_setting( 'computer_repair_services_pro_about_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_about_icon_color', array(
    'label' => __('Icon Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_icon_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_about_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_about_heading_color', array(
    'label' => __('Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_about',
    'settings' => 'computer_repair_services_pro_about_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_about_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_about_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_about',
      'label'    => __( 'Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  /* Appoinment */

  $wp_customize->add_section('computer_repair_services_pro_appoinment',array(
    'title' => __('Appointment','computer-repair-services-pro'),
    'description' => __('Add appoinment Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'computer_repair_services_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new computer_repair_services_pro_Toggle_Switch_Custom_Control($wp_customize, 'computer_repair_services_pro_appoinment_enable',
      array(
        'label' => esc_html__( 'Show or Hide appoinment Section', 'computer-repair-services-pro' ),
        'section' => 'computer_repair_services_pro_appoinment'
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_appoinment_enable', array(
    'selector' => '#appoinment .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_appoinment_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_appoinment_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment'
  )));
  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_appoinment_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_appoinment_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimension 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_appoinment_content_settings',
    array(
    'label' => __('Service Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment'
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_appoinment_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_appoinment_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'setting' => 'computer_repair_services_pro_appoinment_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_appoinment_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_appoinment_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_appoinment',
      'label'    => __( 'Section Main Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('computer_repair_services_pro_appoinment_main_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_appoinment_main_title',array(
    'label' => __('Section Sub Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'setting' => 'computer_repair_services_pro_appoinment_main_title',
    'type'    => 'text'
  ));


  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_main_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_main_text_color', array(
    'label' => __('Section Main Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_main_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_appoinment_main_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_appoinment_main_text_font_family', array(
      'section'  => 'computer_repair_services_pro_appoinment',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_service_box_increase',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_service_box_increase',array(
    'label' => __('No Of Service To Show','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'setting' => 'computer_repair_services_pro_service_box_increase',
    'type'    => 'number'
  ));

  $wp_customize->add_setting('computer_repair_services_pro_apponment_main_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_apponment_main_text',array(
    'label' => __('Appoinment Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'setting' => 'computer_repair_services_pro_apponment_main_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_heading_color', array(
    'label' => __('Appoinment Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_appoinment_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_appoinment_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_appoinment',
      'label'    => __( 'Appoinment Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_apponment_shortcode',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_apponment_shortcode',array(
    'label' => __('appoinment Shortcode','computer-repair-services-pro'),
    'description' => __('Add Contact Form Shortcode Here','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'setting' => 'computer_repair_services_pro_apponment_shortcode',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_repair_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_appoinment_repair_settings',
    array(
    'label' => __('Repair Section Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment'
  )));


  $wp_customize->add_setting('computer_repair_services_pro_reparing_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_reparing_main_heading',array(
    'label' => __(' Reparing Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'setting' => 'computer_repair_services_pro_reparing_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_reparing_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_reparing_main_heading_color', array(
    'label' => __(' Reparing Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_reparing_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_reparing_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_reparing_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_appoinment',
      'label'    => __( ' Reparing Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  
  $wp_customize->add_setting('computer_repair_services_pro_repair_box_increase',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_repair_box_increase',array(
    'label' => __('No Of Repair Box To Show','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'setting' => 'computer_repair_services_pro_repair_box_increase',
    'type'    => 'number'
  ));
   
  $repair_box = get_theme_mod('computer_repair_services_pro_repair_box_increase');

  for($i=1; $i<=$repair_box; $i++) {

  $wp_customize->add_setting('computer_repair_services_pro_reparing_box_heading'.$i,array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_reparing_box_heading'.$i,array(
    'label' => __('Repar Box Heading Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'setting' => 'computer_repair_services_pro_reparing_box_heading'.$i,
    'type'    => 'text'
  ));

  $wp_customize->add_setting('computer_repair_services_pro_reparing_box_content'.$i,array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_reparing_box_content'.$i,array(
    'label' => __('Repar Box Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'setting' => 'computer_repair_services_pro_reparing_box_content'.$i,
    'type'    => 'text'
  ));
  
  }

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_appoinment_color_settings',
    array(
    'label' => __('Section Color Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_servicebox_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_servicebox_background_color', array(
    'label' => __('Service Box Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_servicebox_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_serviceicon_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_serviceicon_background_color', array(
    'label' => __('Service Icon Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_serviceicon_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_service_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_service_icon_color', array(
    'label' => __('Service Icon Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_service_icon_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_service_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_service_main_heading_color', array(
    'label' => __('Service Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_service_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_service_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_service_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_appoinment',
      'label'    => __( 'Service Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_background_color', array(
    'label' => __('Appoinment Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_field_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_field_background_color', array(
    'label' => __('Appoinment Field Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_field_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_form_label_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_form_label_color', array(
    'label' => __('Form Label Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_form_label_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_appoinment_form_label_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_appoinment_form_label_font_family', array(
      'section'  => 'computer_repair_services_pro_appoinment',
      'label'    => __( 'Form Label Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_button_bg_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_button_bg_color', array(
    'label' => __('Button Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_button_bg_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_button_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_button_hover_color', array(
    'label' => __('Button Hover Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_button_hover_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_appoinment_buttonbg_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_appoinment_buttonbg_hover_color', array(
    'label' => __('Button Hover Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_appoinment_buttonbg_hover_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_repair_box_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_repair_box_background_color', array(
    'label' => __('Repair Box Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_repair_box_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_repair_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_repair_heading_color', array(
    'label' => __('Repair Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_repair_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_repair_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_repair_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_appoinment',
      'label'    => __( 'Repair Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_repair_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_repair_text_color', array(
    'label' => __('Repair Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_repair_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_repair_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_repair_text_font_family', array(
      'section'  => 'computer_repair_services_pro_appoinment',
      'label'    => __( 'Repair Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_repair_number_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_repair_number_color', array(
    'label' => __('Repair Number Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_appoinment',
    'settings' => 'computer_repair_services_pro_repair_number_color',
  )));

  // -------------- Who We Are ----------------

  $wp_customize->add_section('computer_repair_services_pro_who_we_are',array(
    'title' => __('Who We Are','computer-repair-services-pro'),
    'description' => __('Add Who We Are Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting('computer_repair_services_pro_who_we_are_enable',
      array(
      'default' => 'Enable',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control('computer_repair_services_pro_who_we_are_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this secstion', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'choices' => array(
    'Enable' => __('Enable', 'computer-repair-services-pro'),
    'Disable' => __('Disable', 'computer-repair-services-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_who_we_are_enable', array(
    'selector' => '#who_we_are .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_who_we_are_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are'
  )));
  
  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_who_we_are_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_who_we_are_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimention 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_content_settings',
    array(
    'label' => __('Section Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are'
  )));
  $wp_customize->add_setting('computer_repair_services_pro_whowe_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_whowe_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'setting' => 'computer_repair_services_pro_whowe_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_who_we_are_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_who_we_are_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_who_we_are',
      'label'    => __( 'Section Main Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_whowe_main_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_whowe_main_title',array(
    'label' => __('Section Main Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'setting' => 'computer_repair_services_pro_whowe_main_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_main_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_main_text_color', array(
    'label' => __('Section Main Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_main_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_who_we_are_main_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_who_we_are_main_text_font_family', array(
      'section'  => 'computer_repair_services_pro_who_we_are',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));


  $wp_customize->add_setting('computer_repair_services_pro_whowe_main_content_1',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_whowe_main_content_1',array(
    'label' => __('Section Content 1','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'setting' => 'computer_repair_services_pro_whowe_main_content_1',
    'type'    => 'textarea'
  ));

  $wp_customize->add_setting('computer_repair_services_pro_whowe_main_content_2',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_whowe_main_content_2',array(
    'label' => __('Section Content 2','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'setting' => 'computer_repair_services_pro_whowe_main_content_2',
    'type'    => 'textarea'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_content_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_content_color', array(
    'label' => __('Section Content Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_content_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_who_we_are_content_color_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_who_we_are_content_color_font_family', array(
      'section'  => 'computer_repair_services_pro_who_we_are',
      'label'    => __( 'Section Content Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_whowe_btn',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_whowe_btn',array(
    'label' => __('Section Button','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'setting' => 'computer_repair_services_pro_whowe_btn',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('computer_repair_services_pro_whowe_btn_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_whowe_btn_url',array(
    'label' => __('Section Button Url','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'setting' => 'computer_repair_services_pro_whowe_btn_url',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_button_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_button_text_color', array(
    'label' => __('Button Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_button_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_who_we_are_button_text_font',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_who_we_are_button_text_font', array(
      'section'  => 'computer_repair_services_pro_who_we_are',
      'label'    => __( 'Button Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_button_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_button_background_color', array(
    'label' => __('Button Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_button_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_button_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_button_hover_color', array(
    'label' => __('Button Hover Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_button_hover_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_button_hover_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_button_hover_background_color', array(
    'label' => __('Button Hover Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_button_hover_background_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_whowe_left_image',array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'computer_repair_services_pro_whowe_left_image',
      array(
        'label' => __('Right Image ','computer-repair-services-pro'),
        'description'   => __('Dimension 400 * 485','computer-repair-services-pro'),
        'section' => 'computer_repair_services_pro_who_we_are',
        'settings' => 'computer_repair_services_pro_whowe_left_image'
  )));

  $wp_customize->add_setting('computer_repair_services_pro_whowe_box_icon',array(
      'default' => 'fa fa-phone',
      'sanitize_callback' => 'sanitize_text_field'
  )); 
  $wp_customize->add_control(new computer_repair_services_pro_Fontawesome_Icon_Chooser(
  $wp_customize,'computer_repair_services_pro_whowe_box_icon',array(
      'label' => __('Select Icon','computer-repair-services-pro'),
      'transport' => 'refresh',
      'section' => 'computer_repair_services_pro_who_we_are',
      'setting' => 'computer_repair_services_pro_whowe_box_icon',
      'type'    => 'icon'
)));

  $wp_customize->add_setting('computer_repair_services_pro_whowe_imagebox_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_whowe_imagebox_heading',array(
    'label' => __('Section Content 2','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'setting' => 'computer_repair_services_pro_whowe_imagebox_heading',
    'type'    => 'text'
  ));

   $wp_customize->add_setting('computer_repair_services_pro_whowe_imagebox_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_whowe_imagebox_text',array(
    'label' => __('Section Content 2','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'setting' => 'computer_repair_services_pro_whowe_imagebox_text',
    'type'    => 'text'
  ));

 $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_color_settings',
      array(
      'label' => __('Who We Are Section Color Settings ','computer-repair-services-pro'),
      'section' => 'computer_repair_services_pro_who_we_are'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_image_boxbg_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_image_boxbg_color', array(
    'label' => __('Box Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_image_boxbg_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_icon_color', array(
    'label' => __('Box Icon Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_icon_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_icon_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_icon_background_color', array(
    'label' => __('Box Icon Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_icon_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_who_we_are_box_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_who_we_are_box_text_color', array(
    'label' => __('Box Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_who_we_are',
    'settings' => 'computer_repair_services_pro_who_we_are_box_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_who_we_are_box_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_who_we_are_box_text_font_family', array(
      'section'  => 'computer_repair_services_pro_who_we_are',
      'label'    => __( 'Box Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  /* Testimonial */

  $wp_customize->add_section('computer_repair_services_pro_testimonial',array(
    'title' => __('Testimonial','computer-repair-services-pro'),
    'description' => __('Add Testimonial Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_section_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'computer_repair_services_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new computer_repair_services_pro_Toggle_Switch_Custom_Control($wp_customize, 'computer_repair_services_pro_testimonial_section_enable',
      array(
        'label' => esc_html__( 'Show or Hide Testimonial Section', 'computer-repair-services-pro' ),
        'section' => 'computer_repair_services_pro_testimonial'
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_testimonial_section_enable', array(
    'selector' => '#testimonial .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_testimonial_section_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_testimonial_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial'
  )));
  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_section_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_testimonial_section_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_section_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_testimonial_section_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_testimonial_section_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimension 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_section_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_testimonial_content_settings',
    array(
    'label' => __('Section Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial'
  )));
  $wp_customize->add_setting('computer_repair_services_pro_testimonial_section_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_testimonial_section_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'setting' => 'computer_repair_services_pro_testimonial_section_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_testimonial_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_testimonial_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_testimonial_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_testimonial',
      'label'    => __( 'Section Main Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  )); 

  $wp_customize->add_setting('computer_repair_services_pro_testimonial_section_main_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_testimonial_section_main_title',array(
    'label' => __('Section Main Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'setting' => 'computer_repair_services_pro_testimonial_section_main_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_section_main_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_testimonial_section_main_title_color', array(
    'label' => __('Section Main Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_section_main_title_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_testimonial_section_main_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_testimonial_section_main_title_font_family', array(
      'section'  => 'computer_repair_services_pro_testimonial',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  )); 

  $wp_customize->add_setting('computer_repair_services_pro_testimonial_increase',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_testimonial_increase',array(
    'label' => __('No Of Testimonial To Show','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'setting' => 'computer_repair_services_pro_testimonial_increase',
    'type'    => 'number'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_testimonial_color_settings',
      array(
      'label' => __('Testimonial Color Settings ','computer-repair-services-pro'),
      'section' => 'computer_repair_services_pro_testimonial'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_name_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_testimonial_name_color', array(
    'label' => __('Name Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_name_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_testimonial_name_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_testimonial_name_font_family', array(
      'section'  => 'computer_repair_services_pro_testimonial',
      'label'    => __( 'Name Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_designation_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_testimonial_designation_color', array(
    'label' => __('Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_designation_color',
  )));
  $wp_customize->add_setting('computer_repair_services_pro_testimonial_designation_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_testimonial_designation_font_family', array(
      'section'  => 'computer_repair_services_pro_testimonial',
      'label'    => __( 'Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_testimonial_text_color', array(
    'label' => __('Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_testimonial_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_testimonial_text_font_family', array(
      'section'  => 'computer_repair_services_pro_testimonial',
      'label'    => __( 'Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_boxbg_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_testimonial_boxbg_color', array(
    'label' => __('Box Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_boxbg_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_boxbg_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_testimonial_boxbg_hover_color', array(
    'label' => __('Box Background Hover Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_boxbg_hover_color',
  )));

   $wp_customize->add_setting( 'computer_repair_services_pro_testimonial_text_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_testimonial_text_hover_color', array(
    'label' => __('Box Text Hover Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_testimonial',
    'settings' => 'computer_repair_services_pro_testimonial_text_hover_color',
  )));

  /*****************Counter******************/

  $wp_customize->add_section('computer_repair_services_pro_counter',array(
    'title' => __('Counter','computer-repair-services-pro'),
    'description' => __('Add Counter Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting( 'computer_repair_services_pro_counter_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'computer_repair_services_pro_switch_sanitization'
    ));
  $wp_customize->add_control( new computer_repair_services_pro_Toggle_Switch_Custom_Control($wp_customize, 'computer_repair_services_pro_counter_enable',
    array(
      'label' => esc_html__( 'Show or Hide Counter Section', 'computer-repair-services-pro' ),
      'section' => 'computer_repair_services_pro_counter'
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_counter_enable', array(
    'selector' => '#activity .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_counter_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_activity_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_counter_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter'
  )));
  $wp_customize->add_setting( 'computer_repair_services_pro_counter_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_counter_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'settings' => 'computer_repair_services_pro_counter_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_counter_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_counter_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimention 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'settings' => 'computer_repair_services_pro_counter_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_counter_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_counter_content_settings',
    array(
    'label' => __('Section Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter'
  )));
  $wp_customize->add_setting('computer_repair_services_pro_counter_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_counter_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'setting' => 'computer_repair_services_pro_counter_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_counter_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_counter_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'settings' => 'computer_repair_services_pro_counter_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_counter_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_counter_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_counter',
      'label'    => __( 'Section Main Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_counter_main_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_counter_main_text',array(
    'label' => __('Section Main Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'setting' => 'computer_repair_services_pro_counter_main_text',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_counter_main_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_counter_main_text_color', array(
    'label' => __('Section Main Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'settings' => 'computer_repair_services_pro_counter_main_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_counter_main_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_counter_main_text_font_family', array(
      'section'  => 'computer_repair_services_pro_counter',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_counter_increase',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_counter_increase',array(
    'label' => __('No Of Counter To Show','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'setting' => 'computer_repair_services_pro_counter_increase',
    'type'    => 'number'
  ));
   
  $Counter_count = get_theme_mod('computer_repair_services_pro_counter_increase');

  for($i=1; $i<=$Counter_count; $i++) {
    $wp_customize->add_setting('computer_repair_services_pro_counter_icon'.$i,array(
      'default' => 'fa fa-phone',
      'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control(new computer_repair_services_pro_Fontawesome_Icon_Chooser(
          $wp_customize,'computer_repair_services_pro_counter_icon'.$i,array(
      'label' => __('Select Icon','computer-repair-services-pro').$i,
      'transport' => 'refresh',
      'section' => 'computer_repair_services_pro_counter',
      'setting' => 'computer_repair_services_pro_counter_icon'.$i,
      'type'    => 'icon'
    )));

    $wp_customize->add_setting('computer_repair_services_pro_counter_number'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_counter_number'.$i,array(
      'label' => __('Counter Number','computer-repair-services-pro').$i,
      'section' => 'computer_repair_services_pro_counter',
      'setting' => 'computer_repair_services_pro_counter_number'.$i,
      'type'  => 'text'
    ));
     $wp_customize->add_setting('computer_repair_services_pro_counter_plus'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_counter_plus'.$i,array(
      'label' => __('Counter Plus','computer-repair-services-pro').$i,
      'section' => 'computer_repair_services_pro_counter',
      'setting' => 'computer_repair_services_pro_counter_plus'.$i,
      'type'  => 'text'
    ));
    $wp_customize->add_setting('computer_repair_services_pro_counter_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('computer_repair_services_pro_counter_text'.$i,array(
      'label' => __('Counter Text','computer-repair-services-pro').$i,
      'section' => 'computer_repair_services_pro_counter',
      'setting' => 'computer_repair_services_pro_counter_text'.$i,
      'type'  => 'text'
    ));
  }

  $wp_customize->add_setting( 'computer_repair_services_pro_activity_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_activity_color_settings',
      array(
      'label' => __('Counter Section Color Settings ','computer-repair-services-pro'),
      'section' => 'computer_repair_services_pro_counter'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_counter_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_counter_icon_color', array(
    'label' => __('Counter Icon Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'settings' => 'computer_repair_services_pro_counter_icon_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_counter_icon_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_counter_icon_hover_color', array(
    'label' => __('Counter Icon Hover Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'settings' => 'computer_repair_services_pro_counter_icon_hover_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_counter_icon_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_counter_icon_background_color', array(
    'label' => __('Counter Icon Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'settings' => 'computer_repair_services_pro_counter_icon_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_counter_number_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_counter_number_color', array(
    'label' => __('Number Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'settings' => 'computer_repair_services_pro_counter_number_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_counter_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_counter_text_color', array(
    'label' => __('Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_counter',
    'settings' => 'computer_repair_services_pro_counter_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_counter_text_font',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_counter_text_font', array(
      'section'  => 'computer_repair_services_pro_counter',
      'label'    => __( 'Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  
// -------------- Our Shop ----------------


  $wp_customize->add_section('computer_repair_services_pro_products',array(
    'title' => __('Our Shop','computer-repair-services-pro'),
    'description' => __('Add Our Shop Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting('computer_repair_services_pro_product_section_enable',
      array(
      'default' => 'Enable',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control('computer_repair_services_pro_product_section_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this secstion', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'choices' => array(
    'Enable' => __('Enable', 'computer-repair-services-pro'),
    'Disable' => __('Disable', 'computer-repair-services-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_product_section_enable', array(
    'selector' => '#products_section .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_product_section_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_products_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_products_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products'
  )));
  
  $wp_customize->add_setting( 'computer_repair_services_pro_product_section_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_product_section_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_product_section_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_product_section_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_product_section_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimention 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_product_section_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_products_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_products_content_settings',
    array(
    'label' => __('Section Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products'
  )));

  $wp_customize->add_setting('computer_repair_services_pro_product_section_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_product_section_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'setting' => 'computer_repair_services_pro_product_section_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_product_section_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_product_section_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_product_section_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_product_section_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_product_section_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_products',
      'label'    => __( 'Section Main Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  )); 
  $wp_customize->add_setting('computer_repair_services_pro_product_section_main_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_product_section_main_title',array(
    'label' => __('Section Main Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'setting' => 'computer_repair_services_pro_product_section_main_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'cocomputer_repair_services_pro_product_section_main_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cocomputer_repair_services_pro_product_section_main_title_color', array(
    'label' => __('Section Main Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'cocomputer_repair_services_pro_product_section_main_title_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_product_section_main_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_product_section_main_title_font_family', array(
      'section'  => 'computer_repair_services_pro_products',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  )); 
  
    $args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
  $categories = get_categories($args);
  $cat_posts = array();
  $m = 0;
  $cat_posts[]='Select';
  foreach($categories as $product){
    if($m==0){
      $default = $product->slug;
      $m++;
    }
    $cat_posts[$product->slug] = $product->name;
  }

  $wp_customize->add_setting('computer_repair_services_pro_products_category',array(
    'default' => 'select',
    'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices',
  ));

  $wp_customize->add_control('computer_repair_services_pro_products_category',array(
    'type'    => 'select',
    'choices' => $cat_posts,
    'label' => __('Select category to display products ','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
  ));

  $wp_customize->add_setting('computer_repair_services_pro_product_count',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_product_count',array(
    'label' => __('No Of Product To Show','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'setting' => 'computer_repair_services_pro_product_count',
    'type'    => 'number'
  ));

  $wp_customize->add_setting('computer_repair_services_pro_product_hover_btn',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_product_hover_btn',array(
    'label' => __('Buy Now Button','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'setting' => 'computer_repair_services_pro_product_hover_btn',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('computer_repair_services_pro_product_btn',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_product_btn',array(
    'label' => __('Section Button','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'setting' => 'computer_repair_services_pro_product_btn',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('computer_repair_services_pro_product_btn_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_product_btn_url',array(
    'label' => __('Section Button Url','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'setting' => 'computer_repair_services_pro_product_btn_url',
    'type'    => 'text'
  ));


  $wp_customize->add_setting( 'computer_repair_services_pro_products_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_products_color_settings',
      array(
      'label' => __('Products Section Color Settings ','computer-repair-services-pro'),
      'section' => 'computer_repair_services_pro_products'
  )));

  //  color
  $wp_customize->add_setting( 'computer_repair_services_pro_products_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_products_heading_color', array(
    'label' => __('Product Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_products_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_products_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_products_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_products',
      'label'    => __( 'Product Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_products_amount_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_products_amount_color', array(
    'label' => __('Product Amount Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_products_amount_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_products_wishlist_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_products_wishlist_icon_color', array(
    'label' => __('Wishlist Icon Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_products_wishlist_icon_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_products_wishlist_icon_viewhover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_products_wishlist_icon_viewhover_color', array(
    'label' => __('View Wishlist Icon Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_products_wishlist_icon_viewhover_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_products_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_products_background_color', array(
    'label' => __('Product Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_products_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_products_buynow_button_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_products_buynow_button_color', array(
    'label' => __('Product BuyNow Button Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_products_buynow_button_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_product_hover_btn_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_product_hover_btn_font_family', array(
      'section'  => 'computer_repair_services_pro_products',
      'label'    => __( 'Buy Now Button Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  )); 

  $wp_customize->add_setting( 'computer_repair_services_pro_products_buynow_button_bg_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_products_buynow_button_bg_color', array(
    'label' => __('Product BuyNow  Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_products_buynow_button_bg_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_products_button_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_products_button_color', array(
    'label' => __('Product Button Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_products_button_color',
  )));

   $wp_customize->add_setting('computer_repair_services_pro_product_btn_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_product_btn_font_family', array(
      'section'  => 'computer_repair_services_pro_products',
      'label'    => __( 'Section Button Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_products_button_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_products_button_background_color', array(
    'label' => __('Product Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_products',
    'settings' => 'computer_repair_services_pro_products_button_background_color',
  )));
 

  //************Best Service***************

  $wp_customize->add_section('computer_repair_services_pro_best_service',array(
    'title' => __('Best Service','computer-repair-services-pro'),
    'description' => __('Add Best Service Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting('computer_repair_services_pro_best_service_enable',
      array(
      'default' => 'Enable',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control('computer_repair_services_pro_best_service_enable',
    array(
    'type' => 'radio',
    'label' => __('Do you want this secstion', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'choices' => array(
    'Enable' => __('Enable', 'computer-repair-services-pro'),
    'Disable' => __('Disable', 'computer-repair-services-pro')
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_best_service_enable', array(
    'selector' => '#best_service .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_best_service_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_best_service_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service'
  )));
  
  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_best_service_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_best_service_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_best_service_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimention 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_best_service_content_settings',
    array(
    'label' => __('Section Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service'
  )));
  $wp_customize->add_setting('computer_repair_services_pro_best_service_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_best_service_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'setting' => 'computer_repair_services_pro_best_service_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_best_service_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_best_service_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_best_service_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_best_service',
      'label'    => __( 'Section Main Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  )); 
  $wp_customize->add_setting('computer_repair_services_pro_best_service_main_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_best_service_main_title',array(
    'label' => __('Section Main Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'setting' => 'computer_repair_services_pro_best_service_main_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_section_main_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_best_service_section_main_title_color', array(
    'label' => __('Section Main Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_section_main_title_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_best_service_section_main_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_best_service_section_main_title_font_family', array(
      'section'  => 'computer_repair_services_pro_best_service',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_best_image2',array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'computer_repair_services_pro_best_image2',
          array(
            'label' => __('Center Image 1','computer-repair-services-pro'),
            'description' => __('Dimention 770 * 450','computer-repair-services-pro'),
            'section' => 'computer_repair_services_pro_best_service',
            'settings' => 'computer_repair_services_pro_best_image2'
  )));

  $wp_customize->add_setting('computer_repair_services_pro_best_iamge1',array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'computer_repair_services_pro_best_iamge1',
          array(
            'label' => __('Center Image 2','computer-repair-services-pro'),
            'description' => __('Dimention 770 * 450','computer-repair-services-pro'),
            'section' => 'computer_repair_services_pro_best_service',
            'settings' => 'computer_repair_services_pro_best_iamge1'
  )));

  $wp_customize->add_setting('computer_repair_services_pro_best_service_center_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_best_service_center_heading',array(
    'label' => __('Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'setting' => 'computer_repair_services_pro_best_service_center_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_center_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_best_service_center_heading_color', array(
    'label' => __('Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_center_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_best_service_center_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_best_service_center_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_best_service',
      'label'    => __( 'Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_best_service_center_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_best_service_center_title',array(
    'label' => __('Text','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'setting' => 'computer_repair_services_pro_best_service_center_title',
    'type'    => 'textarea'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_center_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_best_service_center_title_color', array(
    'label' => __('Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_center_title_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_best_service_center_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_best_service_center_title_font_family', array(
      'section'  => 'computer_repair_services_pro_best_service',
      'label'    => __( 'Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
 
   $wp_customize->add_setting('computer_repair_services_pro_best_service_btn',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_best_service_btn',array(
    'label' => __('Section Button','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'setting' => 'computer_repair_services_pro_best_service_btn',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('computer_repair_services_pro_best_service_btn_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_best_service_btn_url',array(
    'label' => __('Section Button Url','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'setting' => 'computer_repair_services_pro_best_service_btn_url',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_best_service_color_settings',
      array(
      'label' => __('Best Service Section Color Settings ','computer-repair-services-pro'),
      'section' => 'computer_repair_services_pro_best_service'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_button_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_best_service_button_text_color', array(
    'label' => __('Button Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_button_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_best_service_button_text_font',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
      'computer_repair_services_pro_best_service_button_text_font', array(
      'section'  => 'computer_repair_services_pro_best_service',
      'label'    => __( 'Button Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'computer_repair_services_pro_best_service_button_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_best_service_button_background_color', array(
    'label' => __('Button Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_button_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_button_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_best_service_button_hover_color', array(
    'label' => __('Button Hover Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_button_hover_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_best_service_button_hover_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_best_service_button_hover_background_color', array(
    'label' => __('Button Hover Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_best_service',
    'settings' => 'computer_repair_services_pro_best_service_button_hover_background_color',
  )));


  //****************** Our news Section*******************

  $wp_customize->add_section('computer_repair_services_pro_our_news',array(
    'title' => __('Our News','computer-repair-services-pro'),
    'description' => __('Add Our News Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting( 'computer_repair_services_pro_our_news_section_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'computer_repair_services_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new computer_repair_services_pro_Toggle_Switch_Custom_Control($wp_customize, 'computer_repair_services_pro_our_news_section_enable',
      array(
        'label' => esc_html__( 'Show or Hide news Section', 'computer-repair-services-pro' ),
        'section' => 'computer_repair_services_pro_our_news'
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_our_news_section_enable', array(
    'selector' => '#our_news .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_our_news_section_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_news_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_news_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news'
  )));
  $wp_customize->add_setting( 'computer_repair_services_pro_our_news_section_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_our_news_section_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_our_news_section_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_our_news_section_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_our_news_section_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimension 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_our_news_section_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_news_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_news_content_settings',
    array(
    'label' => __('Section Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news'
  )));
  $wp_customize->add_setting('computer_repair_services_pro_our_news_section_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_our_news_section_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'setting' => 'computer_repair_services_pro_our_news_section_main_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting( 'computer_repair_services_pro_our_news_section_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_our_news_section_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_our_news_section_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_our_news_section_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_our_news_section_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_our_news',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('computer_repair_services_pro_our_news_section_main_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_our_news_section_main_title',array(
    'label' => __('Section Sub Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'setting' => 'computer_repair_services_pro_our_news_section_main_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_our_news_section_main_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_our_news_section_main_title_color', array(
    'label' => __('Section Sub Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_our_news_section_main_title_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_our_news_section_main_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_our_news_section_main_title_font_family', array(
      'section'  => 'computer_repair_services_pro_our_news',
      'label'    => __( 'Section Sub Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'computer_repair_services_pro_news_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_news_color_settings',
    array(
    'label' => __('Section Color Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_news_date_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_news_date_icon_color', array(
    'label' => __('Date Icon Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_news_date_icon_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_news_date_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_news_date_text_color', array(
    'label' => __('Date Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_news_date_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_news_date_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_news_date_text_font_family', array(
      'section'  => 'computer_repair_services_pro_our_news',
      'label'    => __( 'Date Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_news_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_news_heading_color', array(
    'label' => __('Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_news_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_news_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_news_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_our_news',
      'label'    => __( 'Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  )); 

  $wp_customize->add_setting( 'computer_repair_services_pro_news_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_news_text_color', array(
    'label' => __('Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_news_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_news_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_news_text_font_family', array(
      'section'  => 'computer_repair_services_pro_our_news',
      'label'    => __( 'Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  )); 

  $wp_customize->add_setting( 'computer_repair_services_pro_news_button_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_news_button_text_color', array(
    'label' => __('Button Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_news_button_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_news_button_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_news_button_text_font_family', array(
      'section'  => 'computer_repair_services_pro_our_news',
      'label'    => __( 'Button Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  )); 

  $wp_customize->add_setting( 'computer_repair_services_pro_news_button_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_news_button_background_color', array(
    'label' => __('Button Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_news_button_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_news_button_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_news_button_hover_color', array(
    'label' => __('Button hover Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_news_button_hover_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_news_button_background_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_news_button_background_hover_color', array(
    'label' => __('Button hover Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_our_news',
    'settings' => 'computer_repair_services_pro_news_button_background_hover_color',
  )));



  //**********sponsors*******


  $wp_customize->add_section('computer_repair_services_pro_sponsors',array(
    'title' => __('Sponsors','computer-repair-services-pro'),
    'description' => __('Add sponsors Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting( 'computer_repair_services_pro_sponsors_section_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'computer_repair_services_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new computer_repair_services_pro_Toggle_Switch_Custom_Control($wp_customize, 'computer_repair_services_pro_sponsors_section_enable',
      array(
        'label' => esc_html__( 'Show or Hide sponsors Section', 'computer-repair-services-pro' ),
        'section' => 'computer_repair_services_pro_sponsors'
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_sponsors_section_enable', array(
    'selector' => '#sponsors .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_sponsors_section_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_sponsors_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_sponsors_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_sponsors'
  )));
  $wp_customize->add_setting( 'computer_repair_services_pro_sponsors_section_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_sponsors_section_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_sponsors',
    'settings' => 'computer_repair_services_pro_sponsors_section_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_sponsors_section_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_sponsors_section_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimension 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_sponsors',
    'settings' => 'computer_repair_services_pro_sponsors_section_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_sponsors_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_sponsors_content_settings',
    array(
    'label' => __('Section Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_sponsors'
  )));
  $wp_customize->add_setting('computer_repair_services_pro_sponsors_section_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_sponsors_section_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_sponsors',
    'setting' => 'computer_repair_services_pro_sponsors_section_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_sponsors_section_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_sponsors_section_main_heading_color', array(
    'label' => __('Section Main Headings Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_sponsors',
    'settings' => 'computer_repair_services_pro_sponsors_section_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_sponsors_section_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_sponsors_section_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_sponsors',
      'label'    => __( 'Section Main Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_sponsors_section_main_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_sponsors_section_main_title',array(
    'label' => __('Section Sub Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_sponsors',
    'setting' => 'computer_repair_services_pro_sponsors_section_main_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_sponsors_section_main_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_sponsors_section_main_text_color', array(
    'label' => __('Section Main Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_sponsors',
    'settings' => 'computer_repair_services_pro_sponsors_section_main_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_sponsors_section_main_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_sponsors_section_main_text_font_family', array(
      'section'  => 'computer_repair_services_pro_sponsors',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('computer_repair_services_pro_sponsors_increase',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_sponsors_increase',array(
    'label' => __('No Of Sponsors To Show','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_sponsors',
    'setting' => 'computer_repair_services_pro_sponsors_increase',
    'type'    => 'number'
  ));
   
  $sponsors_count = get_theme_mod('computer_repair_services_pro_sponsors_increase');

  for($i=1; $i<=$sponsors_count; $i++) {

    $wp_customize->add_setting('computer_repair_services_pro_sponsors_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'computer_repair_services_pro_sponsors_image'.$i,
          array(
            'label' => __('Sponsors Image ','computer-repair-services-pro').$i,
            'section' => 'computer_repair_services_pro_sponsors',
            'settings' => 'computer_repair_services_pro_sponsors_image'.$i
    )));

  }

  //*************Nwesletter************


  $wp_customize->add_section('computer_repair_services_pro_newsletter',array(
    'title' => __('Newsletter','computer-repair-services-pro'),
    'description' => __('Add Newsletter Content Here','computer-repair-services-pro'),
    'panel' => 'computer_repair_services_pro_panel_id',
  ));
  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_section_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'computer_repair_services_pro_switch_sanitization'
   ));
  $wp_customize->add_control( new computer_repair_services_pro_Toggle_Switch_Custom_Control($wp_customize, 'computer_repair_services_pro_newsletter_section_enable',
      array(
        'label' => esc_html__( 'Show or Hide Newsletter Section', 'computer-repair-services-pro' ),
        'section' => 'computer_repair_services_pro_newsletter'
  )));
  $wp_customize->selective_refresh->add_partial( 'computer_repair_services_pro_newsletter_section_enable', array(
    'selector' => '#newsletter .container',
    'render_callback' => 'computer_repair_services_pro_customize_partial_computer_repair_services_pro_newsletter_section_enable',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_newsletter_settings',
    array(
    'label' => __('Section Background Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter'
  )));
  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_section_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_newsletter_section_bgcolor', array(
    'label' => __('Section Background Color', 'computer-repair-services-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'settings' => 'computer_repair_services_pro_newsletter_section_bgcolor',
  )));
  
  $wp_customize->add_setting('computer_repair_services_pro_newsletter_section_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'computer_repair_services_pro_newsletter_section_bgimage',array(
    'label' => __('Section Background Image','computer-repair-services-pro'),
    'description' => __('Dimension 1600 * 800','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'settings' => 'computer_repair_services_pro_newsletter_section_bgimage'
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_newsletter_content_settings',
    array(
    'label' => __('Section Content Settings','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter'
  )));

  $wp_customize->add_setting('computer_repair_services_pro_newsletter_left_image',array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'computer_repair_services_pro_newsletter_left_image',
    array(
    'label' => __('Left Image ','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'settings' => 'computer_repair_services_pro_newsletter_left_image'
  )));

  $wp_customize->add_setting('computer_repair_services_pro_newsletter_section_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_newsletter_section_main_heading',array(
    'label' => __('Section Main Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'setting' => 'computer_repair_services_pro_newsletter_section_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_section_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_newsletter_section_main_heading_color', array(
    'label' => __('Section Main Heading Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'settings' => 'computer_repair_services_pro_newsletter_section_main_heading_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_newsletter_section_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_newsletter_section_main_heading_font_family', array(
      'section'  => 'computer_repair_services_pro_newsletter',
      'label'    => __( 'Section Main Heading Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_newsletter_section_main_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_newsletter_section_main_title',array(
    'label' => __('Section Sub Heading','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'setting' => 'computer_repair_services_pro_newsletter_section_main_title',
    'type'    => 'text'
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_section_main_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_newsletter_section_main_text_color', array(
    'label' => __('Section Main Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'settings' => 'computer_repair_services_pro_newsletter_section_main_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_newsletter_section_main_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_newsletter_section_main_text_font_family', array(
      'section'  => 'computer_repair_services_pro_newsletter',
      'label'    => __( 'Section Main Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));


  $wp_customize->add_setting('computer_repair_services_pro_newsletter_shortcode',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('computer_repair_services_pro_newsletter_shortcode',array(
    'label' => __('Newsletter Shortcode','computer-repair-services-pro'),
    'description' => __('Add Contact Form Shortcode Here','computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'setting' => 'computer_repair_services_pro_newsletter_shortcode',
    'type'    => 'text'
  ));


  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'computer_repair_services_pro_text_sanitization'
  ));
  $wp_customize->add_control( new computer_repair_services_pro_Themes_Seperator_custom_Control( $wp_customize, 'computer_repair_services_pro_newsletter_color_settings',
      array(
      'label' => __('Gallery Color Settings ','computer-repair-services-pro'),
      'section' => 'computer_repair_services_pro_newsletter'
  )));


  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_filed_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_newsletter_filed_text_color', array(
    'label' => __('Field Text Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'settings' => 'computer_repair_services_pro_newsletter_filed_text_color',
  )));

  $wp_customize->add_setting('computer_repair_services_pro_newsletter_field_text_font',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'computer_repair_services_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'computer_repair_services_pro_newsletter_field_text_font', array(
      'section'  => 'computer_repair_services_pro_newsletter',
      'label'    => __( 'Field Text Fontfamily','computer-repair-services-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_button_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_newsletter_button_background_color', array(
    'label' => __('Button Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'settings' => 'computer_repair_services_pro_newsletter_button_background_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_button_hover_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_newsletter_button_hover_color', array(
    'label' => __('Icon Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'settings' => 'computer_repair_services_pro_newsletter_button_hover_color',
  )));

  $wp_customize->add_setting( 'computer_repair_services_pro_newsletter_button_hover_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_repair_services_pro_newsletter_button_hover_background_color', array(
    'label' => __('Icon Background Color', 'computer-repair-services-pro'),
    'section' => 'computer_repair_services_pro_newsletter',
    'settings' => 'computer_repair_services_pro_newsletter_button_hover_background_color',
  )));


   