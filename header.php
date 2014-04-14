<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 		
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49949382-1', 'vatracuidei.ro');
  ga('send', 'pageview');

</script>
<!--/Start async trafic.ro/--> 
<script type="text/javascript" id="trfc_trafic_script"> //<![CDATA[ t_rid = 'vatracuidei-ro'; (function(){ t_js_dw_time=new Date().getTime(); t_js_load_src=((document.location.protocol == 'http:')?'http://storage.':'https://secure.')+'trafic.ro/js/trafic.js?tk='+(Math.pow(10,16)*Math.random())+'&t_rid='+t_rid; if (document.createElement && document.getElementsByTagName && document.insertBefore) { t_as_js_en=true;var sn = document.createElement('script');sn.type = 'text/javascript';sn.async = true; sn.src = t_js_load_src; var psn = document.getElementsByTagName('script')[0];psn.parentNode.insertBefore(sn, psn); } else { document.write(unescape('%3Cscri' + 'pt type="text/javascript" '+'src="'+t_js_load_src+';"%3E%3C/sc' + 'ript%3E')); }})(); //]]> </script> <noscript><p><a href="http://www.trafic.ro/statistici/vatracuidei.ro"><img alt="vatracuidei.ro" src="http://log.trafic.ro/cgi-bin/pl.dll?rid=vatracuidei-ro" /></a> <a href="http://www.trafic.ro/">Web analytics</a></p></noscript> 
<!--/End async trafic.ro/-->
<div id="parallax-bg"></div>

<header id="masthead" class="site-header" role="banner">
<?php if ( get_theme_mod( 'itek_tagline_visibility' ) != 0 ) { ?>
    <strong><b><i><h3 align="right" class="site-description"><?php bloginfo( 'description' ); ?></h3> </i></b></strong>
<?php } ?>
</header> <!--/#header-->
<?php do_action( 'itek_before_top_nav' ); ?>
<?php get_template_part( 'nav-top' ); ?>
<?php do_action( 'itek_after_top_nav' ); ?>

<div class="clearfix"></div>
<div id="page" class="hfeed site">

<?php 
do_action( 'itek_before_secondary' );
if ( has_nav_menu( 'secondary' ) || has_nav_menu( 'social' ) ) : // Check if there's a menu assigned to either the 'secondary' or 'social' locations. ?>
   <div class="clearfix"></div>
   <?php get_template_part( 'nav-sec' ); 
endif; // End check for menu.
do_action( 'itek_after_secondary' );
?>

<?php if ( is_front_page() ) : ?>
<div class="container">
<div id="showcase">
	<?php do_action( 'itek_before_in_showcase' ); ?>
        <?php get_sidebar( 'showcase' ); ?>
	<?php do_action( 'itek_after_in_showcase' ); ?>
</div>
</div>
<?php endif; ?>

<div class="container">