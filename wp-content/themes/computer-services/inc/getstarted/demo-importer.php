<?php //to use wp udpate plugin
wp_enqueue_script( 'updates' );
?>

<div class="theme-offer">
	<?php

  require_once trailingslashit( __DIR__ ) . 'class-tm-widget-importer.php';
    $computer_repair_services_pro_WIE_FILE = trailingslashit( THEME_DIR ) . 'inc/getstarted/computer-repair-services-pro-widgets.wie';

    // require_once trailingslashit( __DIR__ ) . 'class-widget-importer.php';
    // $computer_repair_services_pro_WIE_FILE = trailingslashit( THEME_DIR ) . 'inc/getstarted/widgets.wie';

		//POST and update the customizer and other related data of Computer Repair Services Pro
      if(isset($_GET['import-demo'])){
        $home_id=''; $blog_id=''; $page_id=''; $contact_id='';

        // Create a front page and assigned the template
        
        $home_content = '';
        $home_title = 'Home';
        $home_check = get_page_by_title($home_title);
        $home = array(
          'post_type' => 'page',
          'post_title' => $home_title,
          'post_content'  => $home_content,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'home'
        );
        $home_id = wp_insert_post($home);
         
        //Set the home page template
        add_post_meta( $home_id, '_wp_page_template', 'page-template/home-page.php' );

        //Set the static front page
        $home = get_page_by_title( 'Home' );
        update_option( 'page_on_front', $home->ID );
        update_option( 'show_on_front', 'page' );

         // Create a A page and assigned the template
         $service_title = 'Services';
         $service_content = '[computer-repair-services-pro-service]';
         $service_check = get_page_by_title($service_title);
         $service = array(
         'post_type' => 'page',
         'post_title' => $service_title,
         'post_content'  => $service_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'service'
         );
         $service_id = wp_insert_post($service);

         // Create a A page and assigned the template
         $about_title = 'About Us';
         $about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $about_check = get_page_by_title($about_title);
         $about = array(
         'post_type' => 'page',
         'post_title' => $about_title,
         'post_content'  => $about_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'about'
         );
         $about_id = wp_insert_post($about);

          // Create a A page and assigned the template
         $support_title = 'Gadget Support';
         $support_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $support_check = get_page_by_title($support_title);
         $support = array(
         'post_type' => 'page',
         'post_title' => $support_title,
         'post_content'  => $support_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'support'
         );
         $support_id = wp_insert_post($support);

          // Create a A page and assigned the template
         $console_title = 'Console Repair';
         $console_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $console_check = get_page_by_title($console_title);
         $console = array(
         'post_type' => 'page',
         'post_title' => $console_title,
         'post_content'  => $console_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'console-repair'
         );
         $console_id = wp_insert_post($console);

          // Create a A page and assigned the template
         $smartphone_title = 'Smartphone Repair';
         $smartphone_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $smartphone_check = get_page_by_title($smartphone_title);
         $smartphone = array(
         'post_type' => 'page',
         'post_title' => $smartphone_title,
         'post_content'  => $smartphone_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'smartphone-repair'
         );
         $smartphone_id = wp_insert_post($smartphone);

          // Create a A page and assigned the template
         $recovery_title = 'Data Recovery';
         $recovery_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $recovery_check = get_page_by_title($recovery_title);
         $recovery = array(
         'post_type' => 'page',
         'post_title' => $recovery_title,
         'post_content'  => $recovery_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'data-recovery'
         );
         $recovery_id = wp_insert_post($recovery);

         // Create a A page and assigned the template
         $macbook_title = 'Laptop Macbook Repair';
         $macbook_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $macbook_check = get_page_by_title($macbook_title);
         $macbook = array(
         'post_type' => 'page',
         'post_title' => $macbook_title,
         'post_content'  => $macbook_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'laptop-macbook-repair'
         );
         $macbook_id = wp_insert_post($macbook);

          // Create a A page and assigned the template
         $policy_title = 'Privacy & Policy';
         $policy_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $policy_check = get_page_by_title($policy_title);
         $policy = array(
         'post_type' => 'page',
         'post_title' => $policy_title,
         'post_content'  => $policy_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'privacy-policy'
         );
         $policy_id = wp_insert_post($policy);

          // Create a A page and assigned the template
         $conditions_title = 'Terms & Conditions';
         $conditions_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $conditions_check = get_page_by_title($conditions_title);
         $conditions = array(
         'post_type' => 'page',
         'post_title' => $conditions_title,
         'post_content'  => $conditions_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'terms-conditions'
         );
         $conditions_id = wp_insert_post($conditions);

          // Create a A page and assigned the template
         $career_title = 'Career';
         $career_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $career_check = get_page_by_title($career_title);
         $career = array(
         'post_type' => 'page',
         'post_title' => $career_title,
         'post_content'  => $career_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'career'
         );
         $careers_id = wp_insert_post($career);

          // Create a A page and assigned the template
         $management_title = 'management';
         $management_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $management_check = get_page_by_title($management_title);
         $management = array(
         'post_type' => 'page',
         'post_title' => $management_title,
         'post_content'  => $management_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'management'
         );
         $management_id = wp_insert_post($management);

         // Create a A page and assigned the template
         $ecommerce_title = 'Ecommerce website';
         $ecommerce_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $ecommerce_check = get_page_by_title($ecommerce_title);
         $ecommerce = array(
         'post_type' => 'page',
         'post_title' => $ecommerce_title,
         'post_content'  => $ecommerce_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'ecommerce'
         );
         $ecommerce_id = wp_insert_post($ecommerce);


         // Create a A page and assigned the template
         $tablet_title = 'Tablet Repair';
         $tablet_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
         $tablet_check = get_page_by_title($tablet_title);
         $tablet = array(
         'post_type' => 'page',
         'post_title' => $tablet_title,
         'post_content'  => $tablet_content,
         'post_status' => 'publish',
         'post_author' => 1,
         'post_slug' => 'tablet-repair'
         );
         $tablet_id = wp_insert_post($tablet);



        // Create a blog page and assigned the template

          $blog_title = 'Blog';
          $blog_check = get_page_by_title($blog_title);
          $blog = array(
            'post_type'   => 'page',
            'post_title'  => $blog_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug'   => 'blog'
          );
          $blog_id = wp_insert_post($blog);

          //Set the blog page template
          add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );

          $blog_title = 'Blog Left Sidebar';
          $blog = array(
            'post_type'   => 'page',
            'post_title'  => $blog_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug'   => 'blog-left-sidebar'
          );
          $blog_id = wp_insert_post($blog);


          //Set the blog page template
          add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-with-left-sidebar.php' );

          $blog_title = 'Blog Right Sidebar';
          $blog = array(
            'post_type'   => 'page',
            'post_title'  => $blog_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug'   => 'blog-right-sidebar'
          );
          $blog_id = wp_insert_post($blog);


          //Set the blog page template
          add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-with-right-sidebar.php' );

          // Create a Page
          if( get_page_by_title( 'Page' ) == NULL ) {
            $page_title = 'Page';
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel';

            $page_check = get_page_by_title($page_title);
            $ot_page = array(
              'post_type'     => 'page',
              'post_title'    => $page_title,
              'post_content'  => $content,
              'post_status'   => 'publish',
              'post_author'   => 1,
              'post_slug'     => 'page'
            );
            $page_id = wp_insert_post($ot_page);
            
            $page_title = 'Page Left Sidebar';
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

            $page_check = get_page_by_title($page_title);
            $ot_page = array(
              'post_type' => 'page',
              'post_title' => $page_title,
              'post_content'  => $content,
              'post_status'   => 'publish',
              'post_author'   => 1,
              'post_slug'     => 'page-left'
            );
            $page_id = wp_insert_post($ot_page);

            //Set the page template
            add_post_meta( $page_id, '_wp_page_template', 'page-template/page-with-left-sidebar.php' );

            $page_title = 'Page Right Sidebar';
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

            $page_check = get_page_by_title($page_title);
            $ot_page = array(
              'post_type'     => 'page',
              'post_title'    => $page_title,
              'post_content'  => $content,
              'post_status'   => 'publish',
              'post_author'   => 1,
              'post_slug'     => 'page-right'
            );
            $page_id = wp_insert_post($ot_page);

            //Set the page template
            add_post_meta( $page_id, '_wp_page_template', 'page-template/page-with-right-sidebar.php' );
          }

          // Create a contact page and assigned the template
          $contact_title = 'Contact';
          $contact_check = get_page_by_title($contact_title);
          $contact = array(
            'post_type'   => 'page',
            'post_title'  => $contact_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug'   => 'contact'
          );
          $contact_id = wp_insert_post($contact);

         //Set the contact template
         add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );

        // ------- Create Main Menu --------
          $menuname =  'Primary Menu';
          $bpmenulocation = 'primary';
          $menu_exists = wp_get_nav_menu_object( $menuname );
      
          if( !$menu_exists){
              $menu_id = wp_create_nav_menu($menuname);
              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('HOME','computer-repair-services-pro'),
                  'menu-item-classes' => 'home',
                  'menu-item-url' => home_url( '/' ),
                  'menu-item-status' => 'publish'));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('About Us','computer-repair-services-pro'),
              'menu-item-classes' => 'about',
              'menu-item-url' => home_url( '/index.php/about/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Services','computer-repair-services-pro'),
              'menu-item-classes' => 'service',
              'menu-item-url' => home_url( '/index.php/service/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Gadget Support','computer-repair-services-pro'),
              'menu-item-classes' => 'Support',
              'menu-item-url' => home_url( '/index.php/gadget-support/' ),
              'menu-item-status' => 'publish'
            ));

        
              $parent_item = wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' => __('Blog','computer-repair-services-pro'),
              'menu-item-classes' => 'blog',
              'menu-item-url' => home_url( '/index.php/blog/' ),
              'menu-item-status' => 'publish'
            ));
            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' => __('Blog Left Sidebar','computer-repair-services-pro'),
              'menu-item-classes' => 'blog-left-sidebar',
              'menu-item-url' => home_url( '/index.php/blog-left-sidebar/' ),
              'menu-item-status' => 'publish',
              'menu-item-parent-id' => $parent_item
            ));
      
            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' => __('Blog Right Sidebar','computer-repair-services-pro'),
              'menu-item-classes' => 'blog-right-sidebar',
              'menu-item-url' => home_url( '/index.php/blog-right-sidebar/' ),
              'menu-item-status' => 'publish',
              'menu-item-parent-id' => $parent_item
            ));

            $parent_page_item = wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Page','computer-repair-services-pro'),
              'menu-item-classes' => 'page',
              'menu-item-url' => home_url( '/index.php/page/' ),
              'menu-item-status' => 'publish'));

            wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' => __('Page Left Sidebar','computer-repair-services-pro'),
                  'menu-item-classes' => 'page-left',
                  'menu-item-url' => home_url( '/index.php/page-left/' ),
                  'menu-item-status' => 'publish',
                  'menu-item-parent-id' => $parent_page_item
                ));

            wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' => __('Page Right Sidebar','computer-repair-services-pro'),
                  'menu-item-classes' => 'page-right',
                  'menu-item-url' => home_url( '/index.php/page-right/' ),
                  'menu-item-status' => 'publish',
                  'menu-item-parent-id' => $parent_page_item
                ));

      
              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('Contact Us','computer-repair-services-pro'),
                  'menu-item-classes' => 'contact',
                  'menu-item-url' => home_url( '/index.php/contact/' ),
                  'menu-item-status' => 'publish'));      
                
              if( !has_nav_menu( $bpmenulocation ) ){
                  $locations = get_theme_mod('nav_menu_locations');
                  $locations[$bpmenulocation] = $menu_id;
                  set_theme_mod( 'nav_menu_locations', $locations );
              }
          }


        // ------- Create Footer Menu --------
          $menuname =  'Footer Menu 1';
          $footermenulocation = 'footer';
          $menu_exists = wp_get_nav_menu_object( $menuname );
      
          if( !$menu_exists){
              $menu_id = wp_create_nav_menu($menuname);
               wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('About Us','computer-repair-services-pro'),
              'menu-item-classes' => 'about',
              'menu-item-url' => home_url( '/index.php/about/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Privacy & Policy','computer-repair-services-pro'),
              'menu-item-classes' => 'policy',
              'menu-item-url' => home_url( '/index.php/privacy-policy/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Terms & Conditions','computer-repair-services-pro'),
              'menu-item-classes' => 'condition',
              'menu-item-url' => home_url( '/index.php/terms-conditions/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Career','computer-repair-services-pro'),
              'menu-item-classes' => 'career',
              'menu-item-url' => home_url( '/index.php/career/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Management','computer-repair-services-pro'),
              'menu-item-classes' => 'management',
              'menu-item-url' => home_url( '/index.php/management/' ),
              'menu-item-status' => 'publish'
            ));

              wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Ecommerce website','computer-repair-services-pro'),
              'menu-item-classes' => 'ecommerce',
              'menu-item-url' => home_url( '/index.php/ecommerce-website/' ),
              'menu-item-status' => 'publish'
            ));   
                
              if( !has_nav_menu( $footermenulocation ) ){
                  $footerlocations = get_theme_mod('nav_menu_locations');
                  $footerlocations[$footermenulocation] = $menu_id;
                  set_theme_mod( 'nav_menu_locations', $footerlocations );
              }
          }

          // ------- Create Footer Menu --------
          $menuname =  'Footer Menu 2';
          $footermenulocation = 'footer2';
          $menu_exists = wp_get_nav_menu_object( $menuname );
      
          if( !$menu_exists){
              $menu_id = wp_create_nav_menu($menuname);
              wp_update_nav_menu_item($menu_id, 0, array(
                  'menu-item-title' =>  __('HOME','computer-repair-services-pro'),
                  'menu-item-classes' => 'home',
                  'menu-item-url' => home_url( '/' ),
                  'menu-item-status' => 'publish'));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Services','computer-repair-services-pro'),
              'menu-item-classes' => 'service',
              'menu-item-url' => home_url( '/index.php/service/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Console Repair','computer-repair-services-pro'),
              'menu-item-classes' => 'console',
              'menu-item-url' => home_url( '/index.php/console-repair/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Smartphone Repair','computer-repair-services-pro'),
              'menu-item-classes' => 'smartphone',
              'menu-item-url' => home_url( '/index.php/smartphone-repair/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Data Recovery','computer-repair-services-pro'),
              'menu-item-classes' => 'recovery',
              'menu-item-url' => home_url( '/index.php/data-recovery/' ),
              'menu-item-status' => 'publish'
            ));

            wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Laptop Macbook Repair','computer-repair-services-pro'),
              'menu-item-classes' => 'macbook',
              'menu-item-url' => home_url( '/index.php/laptop-macbook-repair/' ),
              'menu-item-status' => 'publish'
            ));

              wp_update_nav_menu_item($menu_id, 0, array(
              'menu-item-title' =>  __('Tablet Repair','computer-repair-services-pro'),
              'menu-item-classes' => 'tablet',
              'menu-item-url' => home_url( '/index.php/tablet-repair/' ),
              'menu-item-status' => 'publish'
            ));   
                
              if( !has_nav_menu( $footermenulocation ) ){
                  $footerlocations = get_theme_mod('nav_menu_locations');
                  $footerlocations[$footermenulocation] = $menu_id;
                  set_theme_mod( 'nav_menu_locations', $footerlocations );
              }
          }

    // Drag and Drop 

    set_theme_mod( 'computer_repair_services_pro_section_ordering_settings_repeater', 'about,appoinment,who-we-are,testimonial,counter,our-shop,best-service,our-news,sponsors,newsletter');

    
     // home page

    //Top Bar

    //location
    set_theme_mod( 'computer_repair_services_pro_topbar_location_icon', 'fas fa-map-marker-alt' );
    set_theme_mod( 'computer_repair_services_pro_topbar_location_heading', 'Address -' );
    set_theme_mod( 'computer_repair_services_pro_topbar_location_text', '5 Green Ave, Apt. 4517 Decore 48104, USA' );

    //Email
    set_theme_mod( 'computer_repair_services_pro_topbar_email_icon', 'fas fa-envelope' );
    set_theme_mod( 'computer_repair_services_pro_topbar_email_heading', 'Mail us -' );
    set_theme_mod( 'computer_repair_services_pro_topbar_email_text', 'example@mail.com' );

    //Socia Icon Text
    set_theme_mod( 'computer_repair_services_pro_topbar_social_text', 'Connect with us -' );

    //Social Icon

      //instagram link
      set_theme_mod( 'computer_repair_services_pro_headerinstagram', 'https://instagram.com/' );
      //twitter link
      set_theme_mod( 'computer_repair_services_pro_headertwitter', 'https://twitter.com/' ); 
      //facebook link 
      set_theme_mod( 'computer_repair_services_pro_headerfacebook', 'https://www.facebook.com/' );
      //linkedin
      set_theme_mod( 'computer_repair_services_pro_headerlinkedin', 'https://www.linkedin.com/' );


     //Header

    //header logo
    set_theme_mod( 'computer_repair_services_pro_the_custom_logo', get_template_directory_uri().'/assets/images/Logo.png');

     set_theme_mod( 'computer_repair_services_pro_header_phone_icon', 'fa fa-phone' );
     set_theme_mod( 'computer_repair_services_pro_header_phone_text', 'Call us for Enquiry -' );
     set_theme_mod( 'computer_repair_services_pro_header_phone_number', '+1800-1241-1547' );

     //Slider

     //Number of slides to show section
      set_theme_mod( 'computer_repair_services_pro_slide_number', '3' );

     //Slider Images section
     for($i=1; $i<=3; $i++) {
      set_theme_mod( 'computer_repair_services_pro_slide_image'.$i, get_template_directory_uri().'/assets/images/slider/slider.png' );
      
      set_theme_mod( 'computer_repair_services_pro_slide_main_heading'.$i, 'We Repair All Kinds of Laptop & Computer' ); 
      set_theme_mod( 'computer_repair_services_pro_slide_text'.$i, 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidisus commodo viverra maecenas.');
      //button
      set_theme_mod( 'computer_repair_services_pro_slide_btn'.$i, 'Read More' );
      set_theme_mod( 'computer_repair_services_pro_slide_btn_url'.$i, '#' );
     }

      //********About Section**********

     //Left About Image
     set_theme_mod( 'computer_repair_services_pro_about_left_image', get_template_directory_uri().'/assets/images/about/aboutleft.png');

     set_theme_mod( 'computer_repair_services_pro_about_call_text', 'Call Us Now' );

     set_theme_mod( 'computer_repair_services_pro_about_call_number', '+88017011100' );

     set_theme_mod( 'computer_repair_services_pro_about_aapoinment_content', 'We are work <br>hard Appointment Now' );


     //Heading & Text & content 
     set_theme_mod( 'computer_repair_services_pro_about_main_heading', 'About Us' );

     set_theme_mod( 'computer_repair_services_pro_about_main_title', 'Consectetur adipiscing elitsed do eiusmod tempor.' );

     set_theme_mod( 'computer_repair_services_pro_about_main_content_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed doesf eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim sdsdad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' );

     set_theme_mod( 'computer_repair_services_pro_about_main_content_2', 'Duis aute irure dolor in reprehenderit in voluptate velit essese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non prosdeidente sunt in culpa qui officia deserunt mollit.' );


     //Number of About to show 
     set_theme_mod( 'computer_repair_services_pro_about_increase', '2' );
     
     $about_icon=array('fas fa-headphones', 'far fa-users');
     
     $about_text=array('Technical Support', 'Qualified Technicians');

     // About content 
     for($i=1; $i<=2; $i++) {

      set_theme_mod( 'computer_repair_services_pro_about_left_icon'.$i, $about_icon[$i-1] );
      set_theme_mod( 'computer_repair_services_pro_about_main_text'.$i, $about_text[$i-1] );
      
     }

     //************Newsletter Section***********

     //Heading & Text
     set_theme_mod( 'computer_repair_services_pro_appoinment_main_heading', 'Our Serices' );
     set_theme_mod( 'computer_repair_services_pro_appoinment_main_title', 'Get Started With Your Device Repair' );

      //Number of Service Box to show 
     set_theme_mod( 'computer_repair_services_pro_service_box_increase', '4' );

     $Serices_heading=array('Computer Repair', 'Laptop/ Tablet Repair', 'Data Recovery','Virus removeClass');
     $service_category = wp_create_category('service');

     // /--- Services Post---/
        for($i=1;$i<=4;$i++){
           $title = $Serices_heading[$i-1];
           $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore masdegna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverr essdasda maecenas accumsan lacus vesd resdfetl facilisisasd and the name ofes. ';
              // Create post object
           $my_post = array(
           'post_title'    => wp_strip_all_tags( $title ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'Service',
           'post_category' => array($service_category)
           );

           // Insert the post into the database
           $post_id = wp_insert_post( $my_post );
           $upload_dir       = wp_upload_dir();  

           $service_icon =array ('fas fa-desktop','fa fa-laptop','fas fa-database','fas fa-shield-alt');
           update_post_meta( $post_id, 'meta-service-icon', $service_icon[($i-1)]);

           $image_url = get_template_directory_uri().'/assets/images/service/service'.$i.'.png';

           $image_name       = 'service'.$i.'.png';
           $upload_dir       = wp_upload_dir(); // Set upload folder
           $image_data       = file_get_contents($image_url); // Get image data
           $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
           $filename         = basename( $unique_file_name ); // Create image file name

           // Check folder permission and define file location
           if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
           } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
           }

           // Create the image  file on the server
           file_put_contents( $file, $image_data );

           // Check image file type
           $wp_filetype = wp_check_filetype( $filename, null );

           // Set attachment data
           $attachment = array(
             'post_mime_type' => $wp_filetype['type'],
             'post_title'     => sanitize_file_name( $filename ),
             'post_content'   => '',
             'post_type'     => 'Service',
             'post_status'    => 'inherit'
           );

           // Create the attachment
           $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

           // Include image.php
           require_once(ABSPATH . 'wp-admin/includes/image.php');

           // Define attachment metadata
           $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

           // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );

           // And finally assign featured image to post
           set_post_thumbnail( $post_id, $attach_id );
        }

     //Repairing Heading
     set_theme_mod( 'computer_repair_services_pro_reparing_main_heading', 'Steps For Repairing Your Device' );

     //Number of Service Box to show 
     set_theme_mod( 'computer_repair_services_pro_repair_box_increase', '3' );


     $repair_heading=array('Filling in a form', 'Pickup Device','Repiar Device');

     $repair_content=array('Lorem ipsum dolor sit amet, csdonsectetur adipiscing elit, sed dode eiussmod tempor incididunt ut labore et dolore.', 'We Will Pick up your Devices. csdonsectetur adipiscing elit, sed dode eiussmod tempor incididunt ut labore et dolore.','We Will Pick up your Devices. csdonsectetur adipiscing elit, sed dode eiussmod tempor incididunt ut labore et dolore.');


     for($i=1; $i<=3; $i++) { 
     set_theme_mod( 'computer_repair_services_pro_reparing_box_heading'.$i, $repair_heading[$i-1] );
     set_theme_mod( 'computer_repair_services_pro_reparing_box_content'.$i, $repair_content[$i-1] );

     }

    
     //Newsletter Heading
     set_theme_mod( 'computer_repair_services_pro_apponment_main_text', 'Make An Appoinment' );

      // Newsletter form shortcode
      $cf7title = "news Page";
      $cf7content = '<div class="row"><div class="cl-lg-6 col-md-6 mb-3">[text FirstName placeholder "First Name"]</div><div class="col-lg-6 col-md-6 mb-3"> [text LastName placeholder "Last Name"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[email Emailaddress placeholder "Email address"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[tel ContactNumber placeholder "Contact Number"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[text Subject placeholder "Subject"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[textarea Message placeholder "Message"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[submit "Send Request"]</div></div>

      --
      This e-mail was sent from a contact form on [_site_title] ([_site_url])
      [_site_admin_email]
      Reply-To: [your-email]

      0
      0

      [_site_title] "[your-subject]"
      [_site_title] <themagnifico@gmail.com>
      Message Body:
      [your-message]

      --
      This e-mail was sent from a contact form on [_site_title] ([_site_url])
      [your-email]
      Reply-To: [_site_admin_email]

      0
      0
      Thank you for your message. It has been sent.
      There was an error trying to send your message. Please try again later.
      One or more fields have an error. Please check and try again.
      There was an error trying to send your message. Please try again later.
      You must accept the terms and conditions before sending your message.
      The field is required.
      The field is too long.
      The field is too short.
      There was an unknown error uploading the file.
      You are not allowed to upload files of this type.
      The file is too big.
      There was an error uploading the file.';

      $cf7_post = array(
        'post_title'    => wp_strip_all_tags( $cf7title ),
        'post_content'  => $cf7content,
        'post_status'   => 'publish',
        'post_type'     => 'wpcf7_contact_form',
      );
      // Insert the post into the database
      $cf7post_id = wp_insert_post( $cf7_post );

      add_post_meta(
        $cf7post_id,
        "_form",
        '<div class="row"><div class="cl-lg-6 col-md-6 mb-3">[text FirstName placeholder "First Name"]</div><div class="col-lg-6 col-md-6 mb-3"> [text LastName placeholder "Last Name"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[email Emailaddress placeholder "Email address"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[tel ContactNumber placeholder "Contact Number"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[text Subject placeholder "Subject"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[textarea Message placeholder "Message"]</div>
        <div class="col-lg-12 col-md-12 mb-3">[submit "Send Request"]</div></div>'
      );

      $cf7mail_data  = array(
        'subject' => '[_site_title] "[your-subject]"',
        'sender'  => '[_site_title] <themagnifico@gmail.com>',
        'body'    => 'From: [your-name] <[your-email]>
        Subject: [your-subject]

        Message Body:
        [your-message]

        --
        This e-mail was sent from a contact form on [_site_title] ([_site_url])',
        'recipient'           => '[_site_admin_email]',
        'additional_headers'  => 'Reply-To: [your-email]',
        'attachments'         => '',
        'use_html'            => 0,
        'exclude_blank'       => 0
      );

      add_post_meta($cf7post_id, "_mail", $cf7mail_data);

      // Gets term object from Tree in the database.

      $cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';

      set_theme_mod( 'computer_repair_services_pro_apponment_shortcode',$cf7shortcode );


     //****************Who We Are***************

     //Heading & Text
     set_theme_mod( 'computer_repair_services_pro_whowe_main_heading', 'Who We Are' );
     set_theme_mod( 'computer_repair_services_pro_whowe_main_title', 'We Fix All Windows/Linux PC and Service Apple/Mac Computers' );
     set_theme_mod( 'computer_repair_services_pro_whowe_main_content_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit, sed doesf eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim sdsdad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' );
     set_theme_mod( 'computer_repair_services_pro_whowe_main_content_2', 'Duis aute irure dolor in reprehenderit in voluptate velit essese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non prosdeidente sunt in culpa qui officia deserunt mollit.' );

     //button
     set_theme_mod( 'computer_repair_services_pro_whowe_btn', 'Read More' );
     set_theme_mod( 'computer_repair_services_pro_whowe_btn_url', '#' ); 

     //who we are left image
     set_theme_mod( 'computer_repair_services_pro_whowe_left_image', get_template_directory_uri().'/assets/images/whowe/whowe-left.png');

      set_theme_mod( 'computer_repair_services_pro_whowe_box_icon', 'fa fa-wrench' );

      set_theme_mod( 'computer_repair_services_pro_whowe_imagebox_heading', 'We are giving worlclass services' );

      set_theme_mod( 'computer_repair_services_pro_whowe_imagebox_text', 'Since 1968' );



     //****************Testimonail Section***************

     //Heading & Text
     set_theme_mod( 'computer_repair_services_pro_testimonial_section_main_heading', 'Testimonials' );
     set_theme_mod( 'computer_repair_services_pro_testimonial_section_main_title', 'See What our clients say' );

     set_theme_mod( 'computer_repair_services_pro_testimonial_increase', '3' );

      $testi_category = wp_create_category('testimonial');
      set_theme_mod('computer_repair_services_pro_testimonial_category', 'testimonial');
        // /--- Testimonial Post---/
        for($i=1;$i<=3;$i++){
           $title = 'Consectetur adipisicing elitesd do eiusmod tempor.';
           $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore masdegna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverr essdasda maecenas accumsan lacus vesd resdfetl facilisisasd and the name ofes. ';
              // Create post object
           $my_post = array(
           'post_title'    => wp_strip_all_tags( $title ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'testimonial',
           'post_category' => array($testi_category)
           );

           // Insert the post into the database
           $post_id = wp_insert_post( $my_post );
           $upload_dir       = wp_upload_dir();  

           $testi_name =array ('Amelia Bernadette','Katherine Olivia','Eerine Olivia');
           update_post_meta( $post_id, 'meta-testimonial-name', $testi_name[($i-1)]);
           
           update_post_meta( $post_id, 'meta-testimonial-num', '4.6');
          
           update_post_meta( $post_id, 'meta-testimonial-tex', 'Raiting Overview');

           $image_url = get_template_directory_uri().'/assets/images/testimonial/testiimg'.$i.'.png';

           $image_name       = 'testiimg'.$i.'.png';
           $upload_dir       = wp_upload_dir(); // Set upload folder
           $image_data       = file_get_contents($image_url); // Get image data
           $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
           $filename         = basename( $unique_file_name ); // Create image file name

           // Check folder permission and define file location
           if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
           } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
           }

           // Create the image  file on the server
           file_put_contents( $file, $image_data );

           // Check image file type
           $wp_filetype = wp_check_filetype( $filename, null );

           // Set attachment data
           $attachment = array(
             'post_mime_type' => $wp_filetype['type'],
             'post_title'     => sanitize_file_name( $filename ),
             'post_content'   => '',
             'post_type'     => 'project',
             'post_status'    => 'inherit'
           );

           // Create the attachment
           $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

           // Include image.php
           require_once(ABSPATH . 'wp-admin/includes/image.php');

           // Define attachment metadata
           $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

           // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );

           // And finally assign featured image to post
           set_post_thumbnail( $post_id, $attach_id );
        }


     //*********Counter***************

     //Heading & Text
     set_theme_mod( 'computer_repair_services_pro_counter_main_heading', 'Counter' );
     set_theme_mod( 'computer_repair_services_pro_counter_main_text', 'We believe in counting numbers' );

     //Number of Counter to show 
     set_theme_mod( 'computer_repair_services_pro_counter_increase', '4' );

     //Cunter content 
     for($i=1; $i<=4; $i++) {

      $counetr_icon=array('fas fa-users', 'fa fas fa-home', 'fas fa-trophy','fas fa-bicycle');
      $counetr_number=array('4241', '2281', '4244','2441');
      $counetr_text=array('Happy Clients', 'Project Completed', 'Expert Team','Average Ratings');


      set_theme_mod( 'computer_repair_services_pro_counter_icon'.$i, $counetr_icon[$i-1] );
      set_theme_mod( 'computer_repair_services_pro_counter_number'.$i, $counetr_number[$i-1] ); 
      set_theme_mod( 'computer_repair_services_pro_counter_plus'.$i, '+');
      set_theme_mod( 'computer_repair_services_pro_counter_text'.$i, $counetr_text[$i-1]);

     }


     //*************Our Shop Section**********

     //Heading & Text
     set_theme_mod( 'computer_repair_services_pro_product_section_main_heading', 'Our Shop' );
     set_theme_mod( 'computer_repair_services_pro_product_section_main_title', 'Discover Latest Product It’s Made For You' );

     //button
     set_theme_mod( 'computer_repair_services_pro_product_hover_btn', 'Buy Now' );
     set_theme_mod( 'computer_repair_services_pro_product_hover_btn_url', '#' );  

     //product

     wp_insert_term(
    'shop', // the term 
    'product_cat', // the taxonomy
    array(
    'description'=> '',
    'slug' => 'shop',
    'term_id'=>12,
    'posts_per_page' => 6,
    'term_taxonomy_id'=>34,
    ));

     $shop_content=array('Consectetur adipiscingsed do eiusmod tempor incididunt ut labore et dolore magna','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non libero pellentesque','Nunc quis luctus sapien, et sagittis velit. Vivamus vulputate, leo imperdiet dictum rhoncus, diam lacus congue metus','Sed non neque tristique, gravida lorem ut, efficitur ex. Nulla lectus felis, dignissim sed sollicitudin','Curabitur feugiat, mauris vel dictum scelerisque, ante nulla vulputate enim, ac pulvinar ipsum lorem malesuada','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

     $shop_product =array ('Produtct Name Here','Produtct Name Here','Produtct Name Here','Produtct Name Here');

    set_theme_mod( 'computer_repair_services_pro_product_count', '4' );
    set_theme_mod( 'computer_repair_services_pro_products_category', 'shop' );
    if ( class_exists( 'WooCommerce' ) ) {
      for($i=1;$i<=4;$i++) {

        $title = $shop_product[$i-1];

        $content = $shop_content [$i-1];
        
        // Create post object
        $my_post = array(
        'post_title'    => wp_strip_all_tags( $title),
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_type'     => 'product',
        );

        // Insert the post into the database
        $post_id = wp_insert_post( $my_post );
        // Gets term object from Tree in the database. 
        $term = get_term_by('name', 'shop', 'product_cat');
        wp_set_object_terms($post_id, $term->term_id, 'product_cat');


        update_post_meta( $post_id, '_price', "4628" );
        update_post_meta( $post_id, '_sale_price', "4629" );
        update_post_meta( $post_id, '_regular_price', "4630" );

        $image_url = get_template_directory_uri().'/assets/images/ourshop/shop'.$i.'.png';

        $image_name= 'shop.png';
        $upload_dir       = wp_upload_dir(); 
        // Set upload folder
        $image_data= file_get_contents($image_url); 
        // Get image data
        $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
        // Generate unique name
        $filename= basename( $unique_file_name ); 
        // Create image file name

        // Check folder permission and define file location
        if( wp_mkdir_p( $upload_dir['path'] ) ) {
        $file = $upload_dir['path'] . '/' . $filename;
        } else {
        $file = $upload_dir['basedir'] . '/' . $filename;
        }

        // Create the image  file on the server
        file_put_contents( $file, $image_data );

        // Check image file type
        $wp_filetype = wp_check_filetype( $filename, null );

        // Set attachment data
        $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title'     => sanitize_file_name( $filename ),
        'post_content'   => '',
        'post_type'     => 'post',
        'post_status'    => 'inherit'
        );
        // Create the attachment
        $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
        // Include image.php
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        // Define attachment metadata
        $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
        // Assign metadata to attachment
        wp_update_attachment_metadata( $attach_id, $attach_data );
        // And finally assign featured image to post
        set_post_thumbnail( $post_id, $attach_id );
      }
    }                                                                                                    
     //button
     set_theme_mod( 'computer_repair_services_pro_product_btn', 'View More' );
     set_theme_mod( 'computer_repair_services_pro_product_btn_url', '#' );  



     //************Best Section************

      //Heading & Text
     set_theme_mod( 'computer_repair_services_pro_best_service_main_heading', 'Best Services' );
     set_theme_mod( 'computer_repair_services_pro_best_service_main_title', 'We Use Genuine Parts to Fix your Device' );

     //best center iamge 

     set_theme_mod( 'computer_repair_services_pro_best_image2', get_template_directory_uri().'/assets/images/best/bestimg2.png');

     set_theme_mod( 'computer_repair_services_pro_best_iamge1', get_template_directory_uri().'/assets/images/best/bestimg1.png');
     
     set_theme_mod( 'computer_repair_services_pro_best_service_before_text', 'Before' );

     set_theme_mod( 'computer_repair_services_pro_best_service_after_text', 'After' );


     //Center Heading & Title
     set_theme_mod( 'computer_repair_services_pro_best_service_center_heading', 'We fix your problem very immediately' );
     set_theme_mod( 'computer_repair_services_pro_best_service_center_title', 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum and the part of new dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa' );

     //button
     set_theme_mod( 'computer_repair_services_pro_best_service_btn', 'Connect With Our Expert' );
     set_theme_mod( 'computer_repair_services_pro_best_service_btn_url', '#' );  

    

     //**************Our News Section*************

     //Heading & Text
     set_theme_mod( 'computer_repair_services_pro_our_news_section_main_heading', 'Our News' );
     set_theme_mod( 'computer_repair_services_pro_our_news_section_main_title', 'See Latest Blog And News from our side' );

     //button
     set_theme_mod( 'computer_repair_services_pro_our_news_btn', 'Read More' );

      set_theme_mod( 'computer_repair_services_pro_news_content_lenght', '300' );
     

     $slider_category = wp_create_category('news');
        // /--- Latest Post---/
        for($i=1;$i<=3;$i++){
           $title = 'How to Clean a Laptop Screen Properly';
           $content = 'Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum and the part of new dolore eu fugiat nulla pariatur and the part of new memroy';
              // Create post object
           $my_post = array(
           'post_title'    => wp_strip_all_tags( $title ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'post',
           'post_category' => array($slider_category)
           );

           // Insert the post into the database
           $post_id = wp_insert_post( $my_post );
           $upload_dir       = wp_upload_dir();  

           $image_url = get_template_directory_uri().'/assets/images/our-news/news'.$i.'.png';

           $image_name       = 'news'.$i.'.png';
           $upload_dir       = wp_upload_dir(); // Set upload folder
           $image_data       = file_get_contents($image_url); // Get image data
           $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
           $filename         = basename( $unique_file_name ); // Create image file name

           // Check folder permission and define file location
           if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
           } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
           }

           // Create the image  file on the server
           file_put_contents( $file, $image_data );

           // Check image file type
           $wp_filetype = wp_check_filetype( $filename, null );

           // Set attachment data
           $attachment = array(
             'post_mime_type' => $wp_filetype['type'],
             'post_title'     => sanitize_file_name( $filename ),
             'post_content'   => '',
             'post_type'     => 'post',
             'post_status'    => 'inherit'
           );

           // Create the attachment
           $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

           // Include image.php
           require_once(ABSPATH . 'wp-admin/includes/image.php');

           // Define attachment metadata
           $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

           // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );

           // And finally assign featured image to post
           set_post_thumbnail( $post_id, $attach_id );
        }

     //**********Sponsors*************

     //Heading & Text
     set_theme_mod( 'computer_repair_services_pro_sponsors_section_main_heading', 'Our Sponsors' );
     set_theme_mod( 'computer_repair_services_pro_sponsors_section_main_title', 'We’ve worked with every Biggest brands' );

     //Number of Image to show 
     set_theme_mod( 'computer_repair_services_pro_sponsors_increase', '6' );

     //Sponsors image
     for($i=1; $i<=6; $i++) {

      set_theme_mod( 'computer_repair_services_pro_sponsors_image'.$i, get_template_directory_uri().'/assets/images/sponsors/sponsor'.$i.'.png' );
     }
    
     //newsletter Section

     //newsletter Left image 
     set_theme_mod( 'computer_repair_services_pro_newsletter_left_image', get_template_directory_uri().'/assets/images/newsletter/newsletter_left.png' );

     //Heading & Text
     set_theme_mod( 'computer_repair_services_pro_newsletter_section_main_heading', 'Join Our Newsletter' );
     set_theme_mod( 'computer_repair_services_pro_newsletter_section_main_title', 'Want the latest and greatest from our blog straight to your inbox? Consectetur adipisicing elit sed do eiusmod.' );


      // Newsletter form shortcode
      $cf7title = "newsletter";
      $cf7content = '<label>[email* Email placeholder "Enter Email Here"] </label><button type="submit"><i class="fas fa-paper-plane"></i></button>

      --
      This e-mail was sent from a contact form on [_site_title] ([_site_url])
      [_site_admin_email]
      Reply-To: [your-email]

      0
      0

      [_site_title] "[your-subject]"
      [_site_title] <themagnifico@gmail.com>
      Message Body:
      [your-message]

      --
      This e-mail was sent from a contact form on [_site_title] ([_site_url])
      [your-email]
      Reply-To: [_site_admin_email]

      0
      0
      Thank you for your message. It has been sent.
      There was an error trying to send your message. Please try again later.
      One or more fields have an error. Please check and try again.
      There was an error trying to send your message. Please try again later.
      You must accept the terms and conditions before sending your message.
      The field is required.
      The field is too long.
      The field is too short.
      There was an unknown error uploading the file.
      You are not allowed to upload files of this type.
      The file is too big.
      There was an error uploading the file.';

      $cf7_post = array(
        'post_title'    => wp_strip_all_tags( $cf7title ),
        'post_content'  => $cf7content,
        'post_status'   => 'publish',
        'post_type'     => 'wpcf7_contact_form',
      );
      // Insert the post into the database
      $cf7post_id = wp_insert_post( $cf7_post );

      add_post_meta(
        $cf7post_id,
        "_form",
        '<label>[email* Email placeholder "Enter Email Here"] </label><button type="submit"><i class="fas fa-paper-plane"></i></button>'
      );

      $cf7mail_data  = array(
        'subject' => '[_site_title] "[your-subject]"',
        'sender'  => '[_site_title] <themagnifico@gmail.com>',
        'body'    => 'From: [your-name] <[your-email]>
        Subject: [your-subject]

        Message Body:
        [your-message]

        --
        This e-mail was sent from a contact form on [_site_title] ([_site_url])',
        'recipient'           => '[_site_admin_email]',
        'additional_headers'  => 'Reply-To: [your-email]',
        'attachments'         => '',
        'use_html'            => 0,
        'exclude_blank'       => 0
      );

      add_post_meta($cf7post_id, "_mail", $cf7mail_data);

      // Gets term object from Tree in the database.

      $cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';

      set_theme_mod( 'computer_repair_services_pro_newsletter_shortcode',$cf7shortcode );


      //Footer Copyright Text
     set_theme_mod( 'computer_repair_services_pro_footer_copy', 'Copyright © 2022 Computer Repair. All Right Reserved.' );

     //Social Icon

      //instagram link
      set_theme_mod( 'computer_repair_services_pro_headerinstagram', 'https://instagram.com/' );
      //twitter link
      set_theme_mod( 'computer_repair_services_pro_headertwitter', 'https://twitter.com/' ); 
      //facebook link 
      set_theme_mod( 'computer_repair_services_pro_headerfacebook', 'https://www.facebook.com/' );
      //linkedin
      set_theme_mod( 'computer_repair_services_pro_headerlinkedin', 'https://www.linkedin.com/' );


      //Contact page 

      
      set_theme_mod( 'computer_repair_services_pro_contact_bgimage', get_template_directory_uri().'/assets/images/contact/contactbg.png' );

      //main heading
      set_theme_mod( 'computer_repair_services_pro_before_contact_title', 'Get In Touch' );

      //email heading
      set_theme_mod( 'computer_repair_services_pro_contactpage_email_title', 'Email' );
      //email text 1
      set_theme_mod( 'computer_repair_services_pro_contactpage_email_one', 'support@gmail.com' );
      //email text 2
      set_theme_mod( 'computer_repair_services_pro_contactpage_email_two', 'support@gmail.com' );

      //address heading
      set_theme_mod( 'computer_repair_services_pro_address_title', 'Address' );
      //address text 
      set_theme_mod( 'computer_repair_services_pro_address', 'Street 50b Fish Quay City/Town North Shields Tyne and Wear' );

      //phone heading
      set_theme_mod( 'computer_repair_services_pro_contactpage_phone_title', 'Email' );
      //phone text 1
      set_theme_mod( 'computer_repair_services_pro_contactpage_phone_one', '+02 1949 7478 988' );
      //phone text 2
      set_theme_mod( 'computer_repair_services_pro_contactpage_phone_two', '+02 1949 7478 988' );

       //main heading
      set_theme_mod( 'computer_repair_services_pro_ccform_heading', 'Message Us' );
       //main text
      set_theme_mod( 'computer_repair_services_pro_ccform_text', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.' );

     // contact form shortcode
      $cf7title = "Contact Page";
      $cf7content = '<div class="row"><div class="col-lg-6 col-md-6 col-sm-12">[text Name placeholder "Name"]</div><div class="col-lg-6 col-md-6 col-sm-12">[text LastName placeholder "Last Name"]</div>
        <div class="col-lg-6 col-md-6 col-sm-12">[email Email placeholder akismet:author_email "Email"]</div><div class="col-lg-6 col-md-6 col-sm-12">[tel PhoneNumber placeholder "PhoneNumber"]</div>
        <div class="col-lg-12 col-md-12 col-sm-12">[textarea Coments placeholder "Coments"]</div>
        <div class="col-lg-12 col-md-12 col-sm-12">[submit "SUBMIT"]</div></div>

      --
      This e-mail was sent from a contact form on [_site_title] ([_site_url])
      [_site_admin_email]
      Reply-To: [your-email]

      0
      0

      [_site_title] "[your-subject]"
      [_site_title] <themagnifico@gmail.com>
      Message Body:
      [your-message]

      --
      This e-mail was sent from a contact form on [_site_title] ([_site_url])
      [your-email]
      Reply-To: [_site_admin_email]

      0
      0
      Thank you for your message. It has been sent.
      There was an error trying to send your message. Please try again later.
      One or more fields have an error. Please check and try again.
      There was an error trying to send your message. Please try again later.
      You must accept the terms and conditions before sending your message.
      The field is required.
      The field is too long.
      The field is too short.
      There was an unknown error uploading the file.
      You are not allowed to upload files of this type.
      The file is too big.
      There was an error uploading the file.';

      $cf7_post = array(
        'post_title'    => wp_strip_all_tags( $cf7title ),
        'post_content'  => $cf7content,
        'post_status'   => 'publish',
        'post_type'     => 'wpcf7_contact_form',
      );
      // Insert the post into the database
      $cf7post_id = wp_insert_post( $cf7_post );

      add_post_meta(
        $cf7post_id,
        "_form",
        '<div class="row"><div class="col-lg-6 col-md-6 col-sm-12">[text Name placeholder "Name"]</div><div class="col-lg-6 col-md-6 col-sm-12">[text LastName placeholder "Last Name"]</div>
        <div class="col-lg-6 col-md-6 col-sm-12">[email Email placeholder akismet:author_email "Email"]</div><div class="col-lg-6 col-md-6 col-sm-12">[tel PhoneNumber placeholder "PhoneNumber"]</div>
        <div class="col-lg-12 col-md-12 col-sm-12">[textarea Coments placeholder "Coments"]</div>
        <div class="col-lg-12 col-md-12 col-sm-12">[submit "SUBMIT"]</div></div>'
      );

      $cf7mail_data  = array(
        'subject' => '[_site_title] "[your-subject]"',
        'sender'  => '[_site_title] <themagnifico@gmail.com>',
        'body'    => 'From: [your-name] <[your-email]>
        Subject: [your-subject]

        Message Body:
        [your-message]

        --
        This e-mail was sent from a contact form on [_site_title] ([_site_url])',
        'recipient'           => '[_site_admin_email]',
        'additional_headers'  => 'Reply-To: [your-email]',
        'attachments'         => '',
        'use_html'            => 0,
        'exclude_blank'       => 0
      );

      add_post_meta($cf7post_id, "_mail", $cf7mail_data);

      // Gets term object from Tree in the database.

      $cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';

      set_theme_mod( 'computer_repair_services_pro_contact_page_shortcode',$cf7shortcode );


    $Widget_Importer = new Widget_Importer;
    $Widget_Importer->import_widgets( $computer_repair_services_pro_WIE_FILE );
  } 
  

    ?>
    <ul>
		<li>
			<hr>
			<span class="dashicons dashicons-format-aside"></span><?php _e('Click on the below content to get demo content installed.','computer-repair-services-pro'); ?>
			<br><small><b><?php _e('Please take backup if your website is already live with data.This importer will fill the Computer Repair Services Pro new customizer values.','computer-repair-services-pro'); ?></b></small>
			<br><br>
      <form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=computer_repair_services_pro_guide" method="POST" >
        <input type="submit" name="submit" value="<?php echo esc_html('Run Importer','computer-repair-services-pro'); ?>" class="button button-primary button-large">
      </form>
      <div class="success">
        <?php
          if (isset($_GET['import-demo'])) {
            echo esc_html('Demo Import Successful','computer-repair-services-pro');
          }
        ?>
      </div>
			<script type="text/javascript">
				function validate(valid) {
    				 if(confirm("Do you really want to do this?")){
					    document.forms[0].submit();
					}
			    else {
				    return false;
			    }
				}
			</script>
      <?php
         $admin_url = admin_url( 'admin-ajax.php' );
       ?>
      <script type="text/javascript">
             function validate() {
              document.forms[0].submit();
             }

               jQuery(document).ready(function($) {
                var pathUrl = new URL(window.location.href)
                var searchParams = pathUrl.searchParams.get("import-demo")
                if(searchParams) {
                  history.replaceState({}, '', 'themes.php?page=computer_repair_services_pro_guide')
                }
                $( "#demo-importer-form" ).submit(function( event ) {
                  event.preventDefault();
                  if(confirm("Do you really want to do this?")){
                    var mep_plugin_array = [{
                      'name'             : 'contact-form-7',
                      'slug'             : 'contact-form-7',
                      'source'           : 'https://downloads.wordpress.org/plugin/contact-form-7.zip',
                      'required'         : true,
                      'force_activation' : false,
                      'text-domain'      : 'contact-form-7',
                      'file_name'        : 'wp-contact-form-7.php'
                    },
                    {
                      'name'             : 'woocommerce',
                      'slug'             : 'woocommerce',
                      'source'           : 'https://downloads.wordpress.org/plugin/woocommerce.zip',
                      'required'         : true,
                      'force_activation' : false,
                      'text-domain'      : 'woocommerce',
                      'file_name'        : 'woocommerce.php'
                    },
                    {
                      'name'             : 'YITH WooCommerce Wishlist',
                      'slug'             : 'yith-woocommerce-wishlist',
                      'source'           : 'https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.zip',
                      'required'         : true,
                      'force_activation' : false,
                      'text-domain'      : 'yith-woocommerce-wishlist',
                      'file_name'        : 'init.php'
                    },
                    {
                      'name'             : 'Computer Repair Services Pro Custom Posttype',
                      'slug'             : 'computer-repair-services-pro-custom-posttype',
                      'required'         : true,
                      'force_activation' : false,
                      'text-domain'      : 'computer-repair-services-pro-custom-posttype',
                      'file_name'        : 'index.php'
                    }
                    ];
                  var url = '<?php echo $admin_url; ?>';
                    // console.log(url)
                    mep_plugin_array.map(function (plugin_url_data, index) {

                              var data_to_post = {
                                action:             'ive-check-plugin-exists',
                                plugin_text_domain: plugin_url_data.slug,
                                main_plugin_file:   plugin_url_data.file_name
                              };
                              var data_to_post_install = {
                                action:             'ive_install_and_activate_plugin',
                                plugin_details: {
                                  plugin_text_domain: plugin_url_data.slug,
                                  plugin_main_file: plugin_url_data.file_name,
                                  plugin_url: plugin_url_data.source
                                },
                                main_plugin_file:   plugin_url_data.file_name
                              };

                              jQuery.ajax({
                                url:    url,
                                type:   'post',
                                data:   data_to_post,
                                async:  false
                              }).done( function( response ) {
                                if ( response.data.install_status == true ) {
                                  jQuery.ajax({
                                    url:    url,
                                    type:   'post',
                                    data:   data_to_post_install,
                                    async:  false
                                  }).done( function( response ) {
                                    console.log(plugin_url_data.slug ,'installed');
                                    if((mep_plugin_array.length - 1) == index) {
                                      console.log('inside length');
                                      $('.spinner').removeClass('is-active');
                                      location.href = location.href + '&import-demo=true';
                                    }
                                  })
                                }
                                else{
                                    wp.updates.installPlugin({
                                      slug:     plugin_url_data.slug,
                                      success:  function(data) {
                                        console.log(plugin_url_data);
                                        jQuery.ajax({
                                          url:    url,
                                          type:   'post',
                                          data:   data_to_post_install,
                                          async:  false
                                        }).done( function( response ) {
                                          console.log(plugin_url_data.slug ,'installed');
                                          if((mep_plugin_array.length - 1) == index) {
                                            location.href = location.href + '&import-demo=true';
                                          }
                                      })
                                      },
                                      error: function(data) {
                                        console.log(data);
                                      },
                                    });
                                }
                              });
                        })
                  } else {
                    return false;
                  }
                });
              });
              //
      </script>
			<hr>
		</li>
	</ul>
</div>