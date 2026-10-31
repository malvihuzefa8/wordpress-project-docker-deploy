<?php

  $wp_customize->add_section('computer_repair_services_pro_section_ordering_settings',array(
      'title' => __('Section Ordering','computer-repair-services-pro'),
      'description'=> __('Section Ordering.','computer-repair-services-pro'),
      'panel' => 'computer_repair_services_pro_panel_id',
  ));

  $wp_customize->add_setting( 'computer_repair_services_pro_section_ordering_settings_repeater',
      array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control( new computer_repair_services_pro_Repeater_Custom_Control( $wp_customize, 'computer_repair_services_pro_section_ordering_settings_repeater',
      array(
        'label' => __( 'Section Reordering','computer-repair-services-pro' ),
        'section' => 'computer_repair_services_pro_section_ordering_settings',
        'button_labels' => array(
          'add' => __( 'Add Row','computer-repair-services-pro' ), 
        )
      )
   ) );

  
  //General Color Pallete
  $wp_customize->add_section('computer_repair_services_pro_color_pallette',array(
      'title' => __('Typography / General settings','computer-repair-services-pro'),
      'description'=> __('Typography settings','computer-repair-services-pro'),
      'panel' => 'computer_repair_services_pro_panel_id',
  ));

  $wp_customize->add_setting('computer_repair_services_pro_tyheading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'computer_repair_services_pro_tyheading_font_family', array(
    'section'  => 'computer_repair_services_pro_color_pallette',
    'label'    => __( 'Heading Font Family','computer-repair-services-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting('computer_repair_services_pro_tybody_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'computer_repair_services_pro_tybody_font_family', array(
    'section'  => 'computer_repair_services_pro_color_pallette',
    'label'    => __( 'Body Font Family','computer-repair-services-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  

?>