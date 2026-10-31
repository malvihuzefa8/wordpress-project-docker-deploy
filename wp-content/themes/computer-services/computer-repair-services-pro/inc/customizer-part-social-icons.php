<?php
    /* Footer Sections */
    $wp_customize->add_section('computer_repair_services_pro_social_icons',array(
        'title' => __('Social Icons','computer-repair-services-pro'),
        'description'   => __('Add social Icons Here','computer-repair-services-pro'),
        'panel' => 'computer_repair_services_pro_panel_id',
    ));
    $wp_customize->add_setting('computer_repair_services_pro_headertwitter',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('computer_repair_services_pro_headertwitter',array(
        'label' => __('Add twitter link','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_social_icons',
        'setting'   => 'computer_repair_services_pro_headertwitter',
        'type'      => 'text'
    ));
    $wp_customize->add_setting('computer_repair_services_pro_headerpinterest',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('computer_repair_services_pro_headerpinterest',array(
        'label' => __('Add pinterest link','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_social_icons',
        'setting'   => 'computer_repair_services_pro_headerpinterest',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('computer_repair_services_pro_headerfacebook',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('computer_repair_services_pro_headerfacebook',array(
        'label' => __('Add facebook link','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_social_icons',
        'setting'   => 'computer_repair_services_pro_headerfacebook',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('computer_repair_services_pro_headeryoutube',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('computer_repair_services_pro_headeryoutube',array(
        'label' => __('Add Youtube link','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_social_icons',
        'setting'   => 'computer_repair_services_pro_headeryoutube',
        'type'  => 'text'
    ));   

    $wp_customize->add_setting('computer_repair_services_pro_headerinstagram',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('computer_repair_services_pro_headerinstagram',array(
        'label' => __('Add Instagram link','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_social_icons',
        'setting'   => 'computer_repair_services_pro_headerinstagram',
        'type'  => 'text'
    ));   

    $wp_customize->add_setting('computer_repair_services_pro_headerlinkedin',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('computer_repair_services_pro_headerlinkedin',array(
        'label' => __('Add Linkedin link','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_social_icons',
        'setting'   => 'computer_repair_services_pro_headerlinkedin',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('computer_repair_services_pro_headertumblric',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('computer_repair_services_pro_headertumblric',array(
        'label' => __('Add Tumblr link','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_social_icons',
        'setting'   => 'computer_repair_services_pro_headertumblric',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('computer_repair_services_pro_headerflickr',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('computer_repair_services_pro_headerflickr',array(
        'label' => __('Add Flicker link','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_social_icons',
        'setting'   => 'computer_repair_services_pro_headerflickr',
        'type'  => 'text'
    ));  

    $wp_customize->add_setting('computer_repair_services_pro_headervk',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('computer_repair_services_pro_headervk',array(
        'label' => __('Add Vk link','computer-repair-services-pro'),
        'section'   => 'computer_repair_services_pro_social_icons',
        'setting'   => 'computer_repair_services_pro_headervk',
        'type'  => 'text'
    ));   
?>