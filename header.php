<?php //123veto ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head profile="http://gmpg.org/xfn/11">
        <title>
            <?php bloginfo('name') ?>
                <?php if ( is_404() ) : ?> &raquo;
                    <?php _e('Not Found') ?>
                        <?php elseif ( is_home() ) : ?> &raquo;
                            <?php bloginfo('description') ?>
                                <?php else : ?>
                                    <?php wp_title() ?>
                                        <?php endif ?>
        </title>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- leave this for stats -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery_v3.1.0.js"></script>
    		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/button_fixed.js"></script>
    		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/carousel.js"></script>
            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/accordeon.js"></script>
            <!-- homemade modal-->
            <!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modal.js"></script>-->

            <?php wp_get_archives('type=monthly&format=link'); ?>


                    <!-- typos -->
                    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />

                    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
                    <link rel="stylesheet" href="css/responsive.css">
                    <?php wp_head(); ?>
    </head>

    <body>

        <!-- menu de navigation -->
        <div class="menuNav">
            <!-- logo et nom du site -->
            <a href="<?= get_site_url(); ?>" class="site-logo"><p>&nbsp;</p></a>
            <!-- menu de navigation -->
            <?php wp_nav_menu(array('theme_location' => 'Top')); ?>
            <!-- bouton menu déroulant pour smartphone -->
            <div class="smart-menu" id="display-menu">
                <i class="fa fa-chevron-circle-down"></i>
            </div>
            <!-- icones réseaux socieux -->
            <div class="icones">
                <a href="https://www.facebook.com/123-V%C3%A9to-Clinique-V%C3%A9t%C3%A9rinaire-170864276709932/" class="linkAccueil fa fa-facebook-square" aria-hidden="true"></a>
                <a href="https://plus.google.com/u/0/108005216823856407909" class="linkAcceuil fa fa-google-plus-square" aria-hidden="true"></a>
            </div>
        </div>

        <!-- menu déroulant pour smartphone -->
        <div id="menu-deroulant">
            <?php wp_nav_menu(array('theme_location' => 'Top')); ?>
        </div>

    <script>
        $menuOpen = 0;

        $("#display-menu").click(function(){
            if($menuOpen === 0){
                $( "#menu-deroulant" ).css({
                    "display": "block"
                });
                $menuOpen = 1;
            } else {
                $( "#menu-deroulant" ).css({
                    "display": "none"
                });
                $menuOpen = 0;
            }

        });
    </script>
