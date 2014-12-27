<!doctype html>

<!--[if IE 7 ]>    <html class="isie ie7 oldie no-js" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 8 ]>    <html class="isie ie8 oldie no-js" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 9 ]>    <html class="isie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->

<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]--><head>

    <!-- SLICK NAVIGATION -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="/files/slicknav/jquery.slicknav.js"></script>
    <script>
        $(function(){
            $('#menu-before-launch2').slicknav({
                prependTo:'#dashboardMenu',
                label: 'Dashboard'
            });
        });
    </script>
    <link rel="stylesheet" href="/files/slicknav/slicknav.css">

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <?php is_mytheme_moible_view(); ?>



    <title>

        <?php

        $status = dtthemes_mytheme_is_plugin_active('all-in-one-seo-pack/all_in_one_seo_pack.php') || dtthemes_mytheme_is_plugin_active('wordpress-seo/wp-seo.php');

        if (!$status) :

            dtthemes_mytheme_public_title();

        else :

            wp_title("|", true);

        endif;

        ?>

    </title>



    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



    <?php

    #To load basic css

    dtthemes_load_mytheme_basic_css();



    #To Load responsive.css

    dtthemes_set_mytheme_layout();



    if ((dtthemes_mytheme_option('integration', 'enable-header-code'))) {

        echo stripslashes(dtthemes_mytheme_option('integration', 'header-code'));

    }



    #WordPress Default head hook

    wp_head();

    ?>



<body <?php body_class(); ?>>

<!-- wrapper div Starts here -->

<div class="wrapper">

    <!-- header div Starts here -->

    <header id="header">

        <div class="container">

            <div id="logo">

                <?php

                $logotitle = dtthemes_mytheme_option('general', 'logo-title');

                $url = dtthemes_mytheme_option('general', 'logo-url');

                if( $logotitle == 'logo-title' && !empty( $url) ):

                    ?>

                    <a href="<?php echo home_url();?>" title="<?php echo dtthemes_mytheme_blog_title();?>">

                        <img src="<?php echo $url;?>" alt="<?php echo dtthemes_mytheme_blog_title(); ?>" title="<?php echo dtthemes_mytheme_blog_title(); ?>" /><span> <?php echo do_shortcode(get_option('blogname')); ?> </span>

                    </a>

                <?php

                elseif( $logotitle == 'logo-title' && empty( $url) ):

                    ?>

                    <a href="<?php echo home_url();?>" title="<?php echo dtthemes_mytheme_blog_title();?>">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" /><span> <?php echo do_shortcode(get_option('blogname')); ?> </span>

                    </a>

                <?php

                elseif( $logotitle == 'logo' && !empty( $url) ): ?>

                <a href="<?php echo home_url();?>" title="<?php echo dtthemes_mytheme_blog_title();?>">

                    <img src="<?php echo $url;?>" alt="<?php echo dtthemes_mytheme_blog_title(); ?>" title="<?php echo dtthemes_mytheme_blog_title(); ?>" />

                    </a><?php

                elseif( $logotitle == 'logo' && empty( $url)): ?>

                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('title'); ?>" title="<?php bloginfo('title'); ?>" /></a>

                <?php else : ?>

                    <a href="<?php echo home_url();?>" title="<?php echo dtthemes_mytheme_blog_title();?>"><span><?php echo do_shortcode(get_option('blogname')); ?></span></a>

                <?php

                endif;

                ?>

            </div>


            <div id="menu-container">

                <div class="topnum">Questions? (407)732-6952</div>

                <nav id="main-menu">

                    <?php

                    $header_menu = NULL;



                    $pageid = get_option('page_on_front');

                    $template = get_post_meta( $pageid, '_wp_page_template', true );

                    $exclass = '';



                    if($template != 'tpl-home.php' || basename( get_page_template() ) != 'tpl-home.php') : $exclass = 'external'; endif;

                    if (function_exists('wp_nav_menu')) :



                        $args = array(

                            'theme_location' => 'header_menu',

                            'menu_id' => '',

                            'menu_class' => 'menu',

                            'fallback_cb' => 'dtthemes_mytheme_default_navigation',

                            'echo' => false,

                            'container' => 'div',

                            'items_wrap'      => '<ul id="%1$s" class="group %2$s"><li class="menu-item"><a href="'.home_url().'/#home" class="'.$exclass .'">Home</a></li>%3$s</ul>',

                            'walker' => new my_menu_walker()

                        );

                        $header_menu = wp_nav_menu( $args );



                        if(!empty($header_menu))echo $header_menu;

                    endif;

                    ?>

                </nav>

                <?php
                global $current_user;
                get_currentuserinfo();
                $userID = $current_user->ID;
                if ($userID != NULL) : ?>
                    <!-- <div class="mobileHide">
                        <ul>
                            <li><a href="http://1000lbschallenge.com/backend">Dashboard</a></li>
                            <li><a href="http://1000lbschallenge.com/diet-plan/">Menus</a></li>
                            <li><a href="http://1000lbschallenge.com/backend/#questionnaire">Metabolically Compromised Questionnaire</a></li>
                            <li><a href="http://1000lbschallenge.com/backend/#contract">Weight Loss Contract</a></li>
                       </ul>
                    </div> -->
                    <div class="login_menu">
                        <nav id="sub-menu">
                            <div class="menu-before-launch-container">
                                <ul id="menu-before-launch2" class="group menu">
                                    <li class="menu-item-dashboard"><a href="http://1000lbschallenge.com/backend" class="">Dashboard</a></li>
                                    <li class="menu-item-ebooklet"><a href="http://1000lbschallenge.com/ebooklet" class="">E-Booklet</a></li>
                                    <li id="menu-item-menus" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://1000lbschallenge.com/diet-plan/" 												class=" ">Menus</a></li>
                                    <li id="menu-item-videos" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://1000lbschallenge.com/videos" 												class=" ">Videos</a></li>
                                    <li id="menu-item-affirmations" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://1000lbschallenge.com/affirmations" class=" ">Affirmations</a></li>
                                    <li id="menu-item-questionnaire" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://1000lbschallenge.com/questionnaire" class=" ">Metabolism Questionnaire</a></li>
                                    <li id="menu-item-contract" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://1000lbschallenge.com/contract" class=" ">Sign the Contract</a></li>
                                </ul>
                        </nav>
                    </div>
                    <div id="dashboardMenu"></div>
                <?php endif; ?>

            </div>

        </div>

    </header>

    <!-- header div Ends here -->

    <!-- main div Starts here -->

    <div id="main">