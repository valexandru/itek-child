</div>

</div><!-- #page -->
<?php do_action( 'itek_before_footer_nav' ); ?>
    <?php if ( has_nav_menu( 'footer' ) ) : // Check if there's a menu assigned to the 'social' location. ?>
        <?php get_template_part( 'nav-footer' ); 
    endif; // End check for menu. ?>
<?php do_action( 'itek_after_footer_nav' ); ?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'itek_in_before_colophon' ); ?>
		<div class="site-info">
		<div class="container">
			<?php do_action( 'itek_before_credits' ); ?>
			<?php printf( __( 'Găzduit de', 'itek' ) ); ?><a target="_Blank" href="<?php echo esc_url( __( 'http://wordpress.org/', 'itek' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'itek' ); ?>"><?php printf( __( ' %s', 'itek' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Tema', 'itek' ) ); ?><a target="_blank" href="<?php echo esc_url( __( 'http://www.wpstrapcode.com/blog/itek', 'itek' ) ); ?>"><?php printf( __( ' %s', 'itek' ), 'Itek' ); ?></a><?php printf( __( ' realizată de %s', 'itek' ), 'WP Strap Code şi personalizată de ' ); ?><a target="_blank" href="http://valexandru.biz">Vochescu Alexandru</a>
		<?php do_action( 'itek_after_credits' ); ?>
			<span class="sep"> | </span>
			<p>© Asociaţia Vatra cu idei 2014</p>
	    </div>
	    </div><!-- .site-info -->
<?php do_action( 'itek_in_after_colophon' ); ?>
</footer><!-- #colophon -->
<?php do_action( 'itek_below_footer' ); ?>	
	<?php wp_footer(); ?>
<!--/Start async trafic.ro/--> <script type="text/javascript" id="trfc_trafic_script"> //<![CDATA[ t_rid = 'vatracuidei-ro'; (function(){ t_js_dw_time=new Date().getTime(); t_js_load_src=((document.location.protocol == 'http:')?'http://storage.':'https://secure.')+'trafic.ro/js/trafic.js?tk='+(Math.pow(10,16)*Math.random())+'&t_rid='+t_rid; if (document.createElement && document.getElementsByTagName && document.insertBefore) { t_as_js_en=true;var sn = document.createElement('script');sn.type = 'text/javascript';sn.async = true; sn.src = t_js_load_src; var psn = document.getElementsByTagName('script')[0];psn.parentNode.insertBefore(sn, psn); } else { document.write(unescape('%3Cscri' + 'pt type="text/javascript" '+'src="'+t_js_load_src+';"%3E%3C/sc' + 'ript%3E')); }})(); //]]> </script> <noscript><p><a href="http://www.trafic.ro/statistici/vatracuidei.ro"><img alt="vatracuidei.ro" src="http://log.trafic.ro/cgi-bin/pl.dll?rid=vatracuidei-ro" /></a> <a href="http://www.trafic.ro/">Web analytics</a></p></noscript> <!--/End async trafic.ro/-->
	</body>
</html>