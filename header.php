<!DOCTYPE html>
<!-- <html <?php //language_attributes(); ?>> -->
<html lang="es-ES" prefix="og: https://ogp.me/ns#">
<!-- <html> -->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index">
    <title><?php wp_title(); ?></title>
    <meta name="generator" content="Wordpress <?php bloginfo('version'); ?>">
    <meta name="author" content="cloudbits.org.mx">
    <!-- <link rel="alternate" hreflang="es" href="https://www.cloudbits.org.mx" /> -->
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url') ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url') ?>">
    <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url') ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback"  href="<?php bloginfo('pingback_url'); ?>">
    <link href="<?php bloginfo('url'); ?>/wp-content/uploads/2016/04/cdbit-logo-400.png" type="image/x-icon" rel="icon" />
    <link href="<?php bloginfo('url'); ?>/wp-content/uploads/2016/04/cdbit-logo-400.png" type="image/x-icon" rel="shortcut icon" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.0/flexboxgrid.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts/mobiriseicons/24px/mobirise/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/plugins/Remodal/dist/remodal.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/plugins/Remodal/dist/remodal-default-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ihover.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/timeline.css">
    <?php
       wp_head(); //agregar la barra de wordpress en el tema, es importante para saber que agregara plugin
       //tmb se tiene que agregar el wp_footer en el footer para que funcione
    ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-100700920-1', 'auto');
  ga('send', 'pageview');
</script>
    <!-- ManyChat -->
    <script src="https://widget.manychat.com/996826990380048.js" async="async"></script>
</head>
<?php
if ( is_home() ) :
  $defaults = array(
  'theme_location'  => 'menu_top',
  'menu'            => '',
  'container'       => false,
  'container_class' => false,
  'container_id'    => '',
  'menu_class'      => 'navbar-nav mr-auto',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
  );
// elseif ( is_404() ) :
//   get_sidebar( '404' );
else :
  $defaults = array(
  'theme_location'  => 'menu_top',
  'menu'            => 'cdbits_secundario',
  'container'       => false,
  'container_class' => false,
  'container_id'    => '',
  'menu_class'      => 'navbar-nav mr-auto',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => ''
  );
endif;
?>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Preloader -->
    <div id="preloader">
      <div id="load"></div>
    </div>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary cdbit hiddenESC">
  <a class="navbar-brand" href="https://www.cloudbits.org.mx">
        <img src="<?php echo IMAGES; ?>/114-cdbit.png" width="114" height="114" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php wp_nav_menu( $defaults ); ?>
    <a href="https://api.whatsapp.com/send?phone=522211461623" style="color:white;  float: right;" target="_blank">
        <span class="fab fa-whatsapp fa-2x"></span>
        <span>T. 2211461623</span>
    </a>
  </div>
</nav>



<?php   //wp_nav_menu(array("menu"=>"Main",'container'=>"nav")); ?>
