<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
     $a = get_the_ID();    
     $b = get_current_blog_id(); 
    echo "<script>console.log( 'Page ID " . $a . "' );  </script>";
    echo "<script>console.log( 'Site ID " . $b . "' );var siteid = " . $b . " </script>";
?>


<div class="partners">
	<div class="container">
		<div class="logos">
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-1.jpg">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-2.jpg">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-3.jpg">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-4.jpg">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-5.jpg">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-6.jpg">
			</div>
			<div class="partner_logo">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-7.jpg">
			</div>
		</div>
	</div>
</div>
<div class="services">
	<div class="container">
	    <ul class="expeditions fblk">
	    <?php wp_nav_menu( array(
            'container' => 'ul',
            'menu_class'=>'blk',
            'link_before' => '<span class="background"></span><span>',
               'link_after' => '</span>',

            'theme_location' =>
            'social' ) );
        ?>
        </ul>
	    
		<!--<div class="box climbing">
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/climbing.jpg"  />
			<div class="legend">
				<div class="multiply"></div>
				<a href="<?php echo get_permalink(47);?>"><div class="text">Climbing</div></a>
			</div>
		</div>
		<div class="box trekking">
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/trekking.jpg"  />
			<div class="legend">
				<div class="multiply"></div>
				<a href="<?php echo get_permalink(51);?>"><div class="text">Trekking</div></a>
			</div>
		</div>
		<div class="box logistics">
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logistics.jpg"  />
			<div class="legend">
				<div class="multiply"></div>
				<a href="<?php echo get_permalink(172);?>"><div class="text">Logistics</div></a>
			</div>
		</div>	
		-->
	</div>
</div>
<div class="information">
	<div class="container">
		<div class="left"><!--
			<h3>Aconcagua Information</h3>-->
			<nav>
			<?php    wp_nav_menu( array(
                        'theme_location' => '',
                        'menu'     => 'Aconcagua Information Footer',
                        'container' => 'ul',
                        //'menu_class'=>'aconcagua',

                    ) );  ?>
					</nav>
			<!--<nav>
				<ul>
					<li><a href="<?php echo get_permalink(10);?>">Aconcagua Park</a></li>
					<li><a href="<?php echo get_permalink(30);?>">Statistics</a></li>
					<li><a href="<?php echo get_permalink(99);?>">Routes</a></li>
					<li><a href="<?php echo get_permalink(170);?>">Services</a></li>
					<li><a href="<?php echo get_permalink(217);?>">Weather </a></li>
					<li><a href="<?php echo get_permalink(227);?>">Preparation </a></li>
					<li><a href="<?php echo get_permalink(249);?>">Medicine </a></li>
					<li><a href="<?php echo get_permalink(350);?>">Anecdotes</a></li>
				</ul>
			</nav>
			<h3>Aconcagua Services</h3>-->
			
			<nav>
			<?php    wp_nav_menu( array(
                                        'theme_location' => '',
                                        'menu'     => 'Aconcagua Services footer',
                                        'container' => 'ul',
                                        //'menu_class'=>'aconcagua',
                            ) );  ?>
							
							</nav>
			<!--<nav>
				<ul>
					<li><a href="<?php echo get_permalink(47);?>">Climbing</a></li>
					<li><a href="<?php echo get_permalink(51);?>">Trekking</a></li>
					<li><a href="<?php echo get_permalink(60);?>">Logistics and other services</a></li>
					<li><a href="<?php echo get_permalink(425);?>">Contact us</a></li>
					<li><a href="#">Why choose us</a></li>
					<li><a href="#">Who are we?</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">Policy privacy</a></li>
					<li><a href="#">Related Links</a></li>
				</ul>
			</nav>-->
			<nav>
			<?php    wp_nav_menu( array(
                                        'theme_location' => '',
                                        'menu'     => 'Another available services in Argentina',
                                        'container' => 'ul',
                                        //'menu_class'=>'aconcagua',
                            ) );  ?>
							
			</nav>
			<nav>
				<ul class="lang-foot">
                    <li><a href="http://182.71.223.29/aconcaguaWp/frances/1/introduccion.htm">Français</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/aleman/1/introduccion.htm">Deustch</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/portugues/cerroaconcagua/parqueaconcaguaargentina.htm">Português</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/italiano/1/introduccion.htm">Italiano</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/espaniol/1/cerro_aconcagua.htm">Español</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/polaco/1/aconcagua.htm">Polski</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/holandes/1/cerro_aconcagua.htm">Nederlands</a></li>
                    <li><a href="http://182.71.223.29/aconcaguaWp/russian/1/aconcagua_mount.htm">Pусский</a></li>
                    
                </ul>
			</nav>
			<!--<nav class="lg">
				<ul>
					<li><a href="#">Français</a></li>
					<li><a href="#">Deustch</a></li>
					<li><a href="#">Português</a></li>
					<li><a href="#">Italiano</a></li>
					<li><a href="#">Español</a></li>
					<li><a href="#">Polski</a></li>
					<li><a href="#">Nederlands</a></li>
					<li><a href="#">Pусский</a></li>
				</ul>
			</nav>-->
		</div>
		<div class="right">
        
	    	<?php if(is_active_sidebar('sidebar-4')):?>
             <?php    dynamic_sidebar('sidebar-4');  ?>
            <?php endif; ?>
            
			<!--<p><strong>MONT ACONCAGUA</strong> - Expéditions, information, guides,  ascensions - Argentine</p>
			<p><strong>CERRO ACONCAGUA</strong> - Expediciones, información, guías  y logística - Argentina</p>
			<p><strong>ACONCAGUA BERG</strong> - Expeditionen auf den Aconcagua  und vollstandige Information uber den Berg - Argentinien</p>
			<p><strong>MONTE ACONCAGUA</strong> - Spedizione - escursione - informazione - guide e logistica Salita alla cima e trekking Argentina</p>
			<p><strong>CERRO ACONCAGUA</strong> - Expedições - informação - serviços guias e logística - Ascensão ao cume e trekking - Argentina</p>
			-->
		</div>
	</div>
</div>

<footer class="footer">
	<div class="container">
		<div class="block_1">
			<div class="footer_header">
				<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-ftr.png" />
				<a href="#">AconcaguaExpeditions.com</a>
				<p>Mendoza - Argentina</p>
			</div>
			<nav class="social_links">
				<?php
                 switch_to_blog(1);
                    if ( function_exists('cn_social_icon') ) echo cn_social_icon();
                 restore_current_blog();
                ?>
                
				<div class="youtube_footer">
					<a href="https://www.youtube.com/user/acomara"><img src="http://aconcaguaexpeditions.com/wp-content/themes/aconcagua/images/svg/youtube-logo.svg" />
					<p><b>Acomara channel</b></p></a>
				</div>
			</nav>
		</div>
		<div class="block_2">
			<?php if(is_active_sidebar('sidebar-2')):?>
             <?php dynamic_sidebar('sidebar-2');?>
            <?php endif;?>
            
		</div>
		<div class="block_3">
		<?php   
             wp_nav_menu( array(
                    'theme_location' => '',
                    'menu'     => 'Footer Left Button',
                    'container' => 'a',
                            'link_before' => '<span>',
                               'link_after' => '</span>',
                    'menu_class'=>'footer_left',
                ) ); 
             /*if(is_page(47) && ($b == 1)) {  //  English climbing reservation top link 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing',
                        'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',
                        'menu_class'=>'footer_left ',
                    )); restore_current_blog();
                }
                else if(is_page(162) && ($b == 2)) {  //  Français climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing france', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(96) && ($b == 3)) {  //  Deutsch climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Deutsch', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(171) && ($b == 4)) {  //  Italiano climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Italiano', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(184) && ($b == 6)) {  //  Portugues climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Portugues', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(166) && ($b == 7)) {  //  Español climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Español', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(40) && ($b == 8)) {  //  Polski climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Polski', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if(is_page(43)&& ($b == 9)) {  //  Nederland climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing Nederland', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                else if((is_page(43)) && ($b == 10)) {  //  русский climbing  top button link for reservation 
                    switch_to_blog(1);
                    wp_nav_menu( array(
                        'theme_location' => '', 'menu'     => 'Top button climbing русский', 'container' => 'a', 'link_before' => '<span>', 'link_after' => '</span>',  'menu_class'=>'footer_left ', )); restore_current_blog();
                }
                
            
            else{
                     wp_nav_menu( array(
                    'theme_location' => '',
                    'menu'     => 'Footer Left Button',
                    'container' => 'a',
                            'link_before' => '<span>',
                               'link_after' => '</span>',
                    'menu_class'=>'footer_left',
                ) ); 
                }*/
            ?>
                
		</div>
	</div>
</footer>
<?php // echo get_current_blog_id(); ?>
<? if(is_page_template( array("template-parts/Information.php") )) { ?>
<div id="fixed-bar">
	<div class="container">
	<div class="row"> 
		<div class="brand">
			<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/logo-main.png" alt=""> <!-- logo-ftr.png -->
		</div>
		<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
		<div class="col-xs-12 advise">
<?php if( get_current_blog_id() == 1  ){ ?>
			<a href="/ingles/expediciones/00ascenciones.htm#normal" alt="Aconcagua expeditions normal route"><span>Normal route</span></a>
			<a href="/ingles/expediciones/00ascenciones.htm#polish" alt="Aconcagua expeditions 360 polish route"><span>Polish route</span></a>
<?php } else if( get_current_blog_id() == 2 ){ ?>
			<a href="/frances/expediciones/00ascenciones.htm#normal"><span>VOIE NORMALE</span></a>
			<a href="/frances/expediciones/00ascenciones.htm#polish"><span>VOIE GLACIER DES POLONAIS</span></a>
<?php } else if( get_current_blog_id() == 3 ){ ?>
			<a href="/aleman/expediciones/00ascenciones.htm#normal"><span>NORMALE ROUTE</span></a>
			<a href="/aleman/expediciones/00ascenciones.htm#polish"><span>POLENGLET SCHERROUTE</span></a>
<?php } else if( get_current_blog_id() == 4 ){ ?>
			<a href="/italiano/expediciones/00ascenciones.htm#normal"><span>VIA NORMALE</span></a>
			<a href="/italiano/expediciones/00ascenciones.htm#polish"><span>VIA GHIACCIAIO DEL POLACCHI</span></a>
<?php } else if( get_current_blog_id() == 6 ){ ?>
			<a href="/portugues/ascencoescerroaconcagua/expedicoesaconcagua.htm#normal"><span>ROTA NORMAL</span></a>
			<a href="/portugues/ascencoescerroaconcagua/expedicoesaconcagua.htm#polish"><span>GLACIAR DOS POLACOS</span></a>
<?php } else if( get_current_blog_id() == 7 ){ ?>
			<a href="/espaniol/expediciones/aconcagua_expedition.htm#normal"><span>RUTA NORMAL</span></a>
			<a href="/espaniol/expediciones/aconcagua_expedition.htm#polish"><span>RUTA 360 POLACOS</span></a>
<?php } else if( get_current_blog_id() == 8 ){ ?>
			<a href="/polaco/expediciones/wyprawinaaconcagua.htm#normal"><span>TRASA NORMALNA</span></a>
			<a href="/polaco/expediciones/wyprawinaaconcagua.htm#polish"><span>TRASA POLAKÓW</span></a>
<?php } else if( get_current_blog_id() == 9 ){ ?>
			<a href="/holandes/expediciones/aconcagua_expedition.htm#normal"><span>NORMALE ROUTE</span></a>
			<a href="/holandes/expediciones/aconcagua_expedition.htm#polish"><span>POOLSE GLETSJER</span></a>
<?php } else if( get_current_blog_id() == 10 ){ ?>
			<a href="/russian/expeditions/aconcagua_expedition.htm#normal"><span>НОРМАЛЬНЫЙ МАРШРУТ</span></a>
			<a href="/russian/expeditions/aconcagua_expedition.htm#polish"><span>МAРШРУТ ПОЛЬСКИЙ ЛЕДНИК</span></a>
<?php } ?>
		</div>
	</div>
	</div>
</div>
<? } ?>
<div id="contact-buttons">
	<button type="button" class="action"><i class="fa fa-pencil" aria-hidden="true"></i></button>
	<button type="button" class="hdn mail"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
	<button type="button" class="hdn messenger"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/fbmsg.png" height="35" /></button>
	<button type="button" class="hdn whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></button>
	<button type="button" class="hdn phone"><i class="fa fa-phone" aria-hidden="true"></i></button>
</div>
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

<?php // echo get_current_blog_id() ?>

  
<?php
global $wpdb;

if( get_current_blog_id() == 1  ){    
    
    $results1 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
    $results2 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
    $results3 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
    $results4 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
    $results5 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
    $results6 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );
    $result1 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
    $result2 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
    $result3 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
    $result4 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
    $result5 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
    $result6 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
    $result7 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
    $result8 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
    $result9 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
    $result10 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
    $result11 = $wpdb->get_results( 'SELECT * FROM `wp_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );
    

}else if( get_current_blog_id() == 2 ){
    
    $results1 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
    $results2 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
    $results3 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
    $results4 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
    $results5 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
    $results6 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );
    $result1 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
    $result2 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
    $result3 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
    $result4 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
    $result5 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
    $result6 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
    $result7 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
    $result8 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
    $result9 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
    $result10 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
    $result11 = $wpdb->get_results( 'SELECT * FROM `wp_2_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );
    

}else if( get_current_blog_id() == 3 ){
    
    $results1 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
    $results2 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
    $results3 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
    $results4 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
    $results5 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
    $results6 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );
    $result1 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
    $result2 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
    $result3 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
    $result4 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
    $result5 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
    $result6 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
    $result7 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
    $result8 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
    $result9 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
    $result10 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
    $result11 = $wpdb->get_results( 'SELECT * FROM `wp_3_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );
    
}else if( get_current_blog_id() == 4 ){
    
    $results1 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
    $results2 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
    $results3 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
    $results4 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
    $results5 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
    $results6 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );
    $result1 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
    $result2 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
    $result3 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
    $result4 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
    $result5 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
    $result6 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
    $result7 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
    $result8 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
    $result9 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
    $result10 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
    $result11 = $wpdb->get_results( 'SELECT * FROM `wp_4_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );
    
}else if( get_current_blog_id() == 6 ){
    
    
    $results1 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
    $results2 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
    $results3 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
    $results4 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
    $results5 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
    $results6 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );
    $result1 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
    $result2 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
    $result3 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
    $result4 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
    $result5 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
    $result6 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
    $result7 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
    $result8 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
    $result9 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
    $result10 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
    $result11 = $wpdb->get_results( 'SELECT * FROM `wp_6_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );
    
    
}else if( get_current_blog_id() == 7 ){
    
    $results1 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
    $results2 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
    $results3 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
    $results4 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
    $results5 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
    $results6 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );
    $result1 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
    $result2 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
    $result3 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
    $result4 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
    $result5 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
    $result6 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
    $result7 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
    $result8 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
    $result9 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
    $result10 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
    $result11 = $wpdb->get_results( 'SELECT * FROM `wp_7_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );
    
    
}else if( get_current_blog_id() == 8 ){
    
    $results1 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
    $results2 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
    $results3 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
    $results4 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
    $results5 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
    $results6 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );
    $result1 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
    $result2 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
    $result3 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
    $result4 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
    $result5 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
    $result6 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
    $result7 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
    $result8 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
    $result9 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
    $result10 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
    $result11 = $wpdb->get_results( 'SELECT * FROM `wp_8_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );
    
}else if( get_current_blog_id() == 9 ){
    
    $results1 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
    $results2 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
    $results3 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
    $results4 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
    $results5 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
    $results6 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );
    $result1 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
    $result2 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
    $result3 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
    $result4 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
    $result5 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
    $result6 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
    $result7 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
    $result8 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
    $result9 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
    $result10 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
    $result11 = $wpdb->get_results( 'SELECT * FROM `wp_9_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );
    
}else if( get_current_blog_id() == 10 ){
    
    $results1 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 1 order by id asc ', ARRAY_A );
    $results2 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 2 order by id asc ', ARRAY_A );
    $results3 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 3 order by id asc ', ARRAY_A );
    $results4 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 4 order by id asc ', ARRAY_A );
    $results5 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 5 order by id asc ', ARRAY_A );
    $results6 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 6 order by id asc ', ARRAY_A );
    $result1 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 7 order by id asc ', ARRAY_A );
    $result2 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 8 order by id asc ', ARRAY_A );
    $result3 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 9 order by id asc ', ARRAY_A );
    $result4 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 10 order by id asc ', ARRAY_A );
    $result5 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 11 order by id asc ', ARRAY_A );
    $result6 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 12 order by id asc ', ARRAY_A );
    $result7 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 13 order by id asc ', ARRAY_A );
    $result8 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 14 order by id asc ', ARRAY_A );
    $result9 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 15 order by id asc ', ARRAY_A );
    $result10 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 16 order by id asc ', ARRAY_A );
    $result11 = $wpdb->get_results( 'SELECT * FROM `wp_10_bwg_image` WHERE gallery_id = 17 order by id asc ', ARRAY_A );
    
}

else{
    echo "";
}



 //switch_to_blog(1);
$uploads = wp_upload_dir();
$upload_path = $uploads['baseurl'];

//restore_current_blog();

foreach($results1 as $datas1){
    
 ?>
 <!--<article class="projectgal ml-0">
 <img alt="SearchEngineJournal" class="wd-150" src="<?php echo $upload_path.'/photo-gallery'.$datas1['image_url'];?>">
 </article> 
 -->
 <?php
} ?>
   

 <script type="text/javascript">
jQuery(document).ready(function() {
    // normal page btn 1  
    jQuery('#nbtn1').magnificPopup({
    items: [ <?php foreach($results1 as $datas1){ ?>  
      { src: "<?php echo $upload_path.'/photo-gallery'.$datas1['image_url'];?>", title: "<?php echo $datas1['alt']; ?>" },
     <?php } ?> ],  gallery: { enabled: true  }, type: 'image' // this is a default type
});
    // normal page btn 2  
    jQuery('#nbtn2').magnificPopup({
    items: [
      <?php foreach($results2 as $datas2){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas2['image_url'];?>',
        title: '<?php echo $datas2['alt']; ?>'
      },
     <?php } ?>
        
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
    
    // normal page btn 3
    jQuery('#nbtn3').magnificPopup({
    items: [
      <?php foreach($results3 as $datas3){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas3['image_url'];?>',
        title: '<?php echo $datas3['alt']; ?>'
      },
     <?php } ?>
        
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
    
    
    // normal page btn 4  
    jQuery('#nbtn4').magnificPopup({
    items: [
      <?php foreach($results4 as $datas4){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas4['image_url'];?>',
        title: '<?php echo $datas4['alt']; ?>'
      },
     <?php } ?>
        
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
    
    // normal page btn 5  
    jQuery('#nbtn5').magnificPopup({
    items: [
      <?php foreach($results5 as $datas5){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas5['image_url'];?>',
        title: '<?php echo $datas5['alt']; ?>'
      },
     <?php } ?>
        
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});

// normal page btn 6  
jQuery('#nbtn6').magnificPopup({
    items: [
      <?php foreach($results6 as $datas6){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$datas6['image_url'];?>',
        title: '<?php echo $datas6['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});

// polish page btn 1  
jQuery('#pbtn1').magnificPopup({
    items: [
      <?php foreach($result1 as $data1){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data1['image_url'];?>',
        title: '<?php echo $data1['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 2  
jQuery('#pbtn2').magnificPopup({
    items: [
      <?php foreach($result2 as $data2){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data2['image_url'];?>',
        title: '<?php echo $data2['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 3  
jQuery('#pbtn3').magnificPopup({
    items: [
      <?php foreach($result3 as $data3){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data3['image_url'];?>',
        title: '<?php echo $data3['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 4  
jQuery('#pbtn4').magnificPopup({
    items: [
      <?php foreach($result4 as $data4){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data4['image_url'];?>',
        title: '<?php echo $data4['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 5  
jQuery('#pbtn5').magnificPopup({
    items: [
      <?php foreach($result5 as $data5){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data5['image_url'];?>',
        title: '<?php echo $data5['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 6  
jQuery('#pbtn6').magnificPopup({
    items: [
      <?php foreach($result6 as $data6){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data6['image_url'];?>',
        title: '<?php echo $data6['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 7  
jQuery('#pbtn7').magnificPopup({
    items: [
      <?php foreach($result7 as $data7){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data7['image_url'];?>',
        title: '<?php echo $data7['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 8  
jQuery('#pbtn8').magnificPopup({
    items: [
      <?php foreach($result8 as $data8){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data8['image_url'];?>',
        title: '<?php echo $data8['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 9  
jQuery('#pbtn9').magnificPopup({
    items: [
      <?php foreach($result9 as $data9){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data9['image_url'];?>',
        title: '<?php echo $data9['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});
// polish page btn 10  
jQuery('#pbtn10').magnificPopup({
    items: [
      <?php foreach($result10 as $data10){ ?>  
      {
        src: '<?php echo $upload_path.'/photo-gallery'.$data10['image_url'];?>',
        title: '<?php echo $data10['alt']; ?>'
      },
     <?php } ?>        
    ],
    gallery: { enabled: true }, type: 'image' 
});

    


    
// common imge popup 
jQuery('.imgPopup').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
        verticalFit: true
      },
      zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
      }
 });

    
   
});
</script>
<script>
jQuery(window).on( "load", function() { 
	// Scroll by anchor
	if(location.hash.slice(1)!="") {
		var scrollposit = jQuery('#'+location.hash.slice(1));
		if(scrollposit.length>0) { jQuery('html, body').animate({ scrollTop: scrollposit.offset().top }, 1000); console.log(scrollposit.offset().top); }
	}
	// Abre o cierra las opciones de contacto
	jQuery('#contact-buttons button.action').click(function(event) {
		if(jQuery('#contact-buttons').hasClass("active")) {
			jQuery('#contact-buttons button.hdn').fadeOut();
			jQuery('#contact-buttons').css("width","60px");
			jQuery('#contact-buttons').removeClass("active");
		} else {
			jQuery('#contact-buttons').css("width","300px");
			jQuery('#contact-buttons button.hdn').fadeIn();
			jQuery('#contact-buttons').addClass("active");
		}
	});
	jQuery('button.mail').click(function(event) {
		window.location.href = "mailto:info@aconcaguaexpeditions.com";
	});
	jQuery('button.messenger').click(function(event) {
		window.location.href = "https://m.me/Aconcagua22841/";
	});
	jQuery('button.whatsapp,a.whatsapp').click(function(event) {
		event.preventDefault();
		window.location.href = "https://api.whatsapp.com/send?phone=5492616181000&text=I'm%20interested%20in%20your%20Aconcagua%20expeditions.";
	});
	jQuery('button.phone').click(function(event) {
		window.location.href = "tel:+542614251983";
	});
	
	
	// Abre o cierra el menú (moviles)
	jQuery('.hamburger').click(function(event) {
		if ( jQuery(window).width() <= 640 ) {
			if (jQuery('nav.lang_menu:hidden').length) { jQuery('body,html').animate({scrollTop : 0}, 300); }
			jQuery('nav.lang_menu').slideToggle();
		} else {
		}
	});
	
	// Abre o cierra la lista de idiomas (moviles)
	jQuery('.lang_selector').click(function(event) {
		showhidelangmenu();
	});
	
	function showhidelangmenu() {
		jQuery('.lang_selector').toggleClass('active');
		jQuery('.lang_submenu').slideToggle('fast');
		jQuery('.lang_menu ul').toggleClass('showhide');
	}
	
	// Cierra lista de idiomas
	jQuery('body').click(function(event){
		if ( jQuery(window).width() <= 640 ) { // Moviles
			// Si es dentro del menu
			if (jQuery(event.target).closest('.lang_menu').length) { 
				return;
			} 
			// Si es fuera del menu
			else {
				// Es el hamburger
				if(jQuery(event.target).closest(".hamburger").length) {
					return;
				}
				// No es hamburger
				else {
					// Si hay menu visible
					if (jQuery(".lang_menu:visible").length ) {
						jQuery('.lang_menu').slideUp();
					}
				}
			}
		} else { // No moviles
			// Si es dentro del menu
			if (jQuery(event.target).closest('.lang_menu').length) { 
				return;
			} 
			// Si es fuera del menu
			else {
				// Si hay menu visible
				if (jQuery(".menu_content:visible").length ) {
					jQuery('.header .lang_menu > ul > li').removeClass('active');
					jQuery('.menu_content').slideUp();
				}
			}
		}
	});
									
	// Cambia el idioma del menu
	jQuery('.lang_item>a').click(function(event) {
		lang = jQuery(this).data("lang");
		current_sibling = jQuery("#menu_contents").children('.lg_'+lang);
		if ( jQuery(window).width() <= 640 ) { // Moviles			
			showhidelangmenu();
			if(jQuery(current_sibling).is(":hidden")) {
				jQuery('.lang_item').removeClass('active current');
				jQuery('.menu_content').hide().removeClass('active current');
				jQuery(current_sibling).slideToggle().addClass('active current');
			}			
		} else { // No moviles
			jQuery('.lang_item').removeClass('active');
			jQuery('.menu_content').not(current_sibling).hide();
				
			if ( current_sibling.is(':visible') ) {
				jQuery(this).parent('li').removeClass('active');
				jQuery(current_sibling).slideToggle();
			} else {
				jQuery(this).parent('li').addClass('active');
				jQuery(current_sibling).slideToggle();
			}
			
		}
	});
	
	// Submenus desplegables
	jQuery("div.menu_content>ul.aconcagua>li.menu-item-has-children>a").click(function(event) {
		event.preventDefault();
		jQuery(this).parent().children(".sub-menu").slideToggle();
	});
	
	
	
	// Fixed bar
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() >= 100) {
			jQuery('#fixed-bar').slideDown(200);
		} else {
			jQuery('#fixed-bar').slideUp(200); 
		}
	});
    
 if ( jQuery(window).width() < 769 ) {
    if(siteid == 1){ 
        jQuery('.menu_content.lg_en').css('display','block');
    }
    else if(siteid == 2){ 
        jQuery('.menu_content.lg_fr').css('display','block');
    }
    else if(siteid == 3){ 
        jQuery('.menu_content.lg_de').css('display','block');
    }
    else if(siteid == 4){ 
        jQuery('.menu_content.lg_it').css('display','block');
   }
    else if(siteid == 6){ 
        jQuery('.menu_content.lg_pt').css('display','block');
    }
    else if(siteid == 7){ 
        jQuery('.menu_content.lg_es').css('display','block');
    }
    else if(siteid == 8){ 
        jQuery('.menu_content.lg_po').css('display','block');
    }
    else if(siteid == 9){ 
        jQuery('.menu_content.lg_nl').css('display','block');
    }
    else if(siteid == 10){ 
        jQuery('.menu_content.lg_ru').css('display','block');
    }
    
    
    else{
        jQuery('.lang_menu>ul>li:eq(0)>.menu_content').css('display','block');        
    }
    
}

});
</script>
<script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascript/jquery.magnific-popup.min.js"></script><script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascript/gyro.min.js"></script>
<script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascript/mobile-detect.min.js"></script>
<script>
jQuery(window).on("load", function() {
	var coef = 0;
	var md = new MobileDetect(window.navigator.userAgent);
	if ( md.mobile() || md.tablet() ) { accelerometer_init(); } else { mouse_init(); }
	function accelerometer_init() {
		jQuery('.layers').addClass('accelerometer');
		gyro.frequency = 200;
		if (window.DeviceMotionEvent != undefined ) 
		{
			gyro.startTracking(function(o){
				ax = o.x;
				if ( ax > 2.5 ) ax = 2.5;
				if ( ax < -2.5 ) ax = -2.5;
				ax = ax/5*2;
				animate_layers(ax);
				jQuery(".accelerationX").html(ax);
			});

		}
	}

	function mouse_init() {
		var window_x = jQuery(window).width();
		jQuery(window).on('resize', function() {
			window_x = jQuery(window).width();
		});
		var cursor_x = 0;
		jQuery(window).mousemove(function(event) {
			gyro.stopTracking();
			jQuery('body').removeClass('accelerometer');
			var cursor_x = event.clientX;
			var coef = (cursor_x/window_x - 0.5) * 2;
			animate_layers(coef);
		});
	}
	function animate_layers(coef) {
		var window_x = jQuery(window).width();
		// Layer 2
		coef_2 = coef;
		coef_2 = coef_2*5 - 5;
		coef_2 = coef_2/5*7;
		if (window_x>=640) {
			coef_2 = coef_2*0.025;
		} else {
			coef_2 = coef_2*0.05;
		}	
		if (window_x>=1440) {
			coef_2 = coef_2 + 0;
		} else if (window_x>=1024) {
			coef_2 = coef_2 + 0;
		} else if (window_x>=640) {
			coef_2 = coef_2 + 20;
		} else {
			coef_2 = coef_2 + 20;
		}
		coef_2 = coef_2 - (coef_2 * 2);
		coef_2 = coef_2 + "%";
		jQuery('.layers .layer_2 .image').css({right : coef_2 });

		// Layer 3
		coef_3 = -coef;
		coef_3 = coef_3*5 - 5;
		coef_3 = coef_3/5*9;
		if (window_x>=640) {
			coef_3 = coef_3*0.04;
		} else {
			coef_3 = coef_3*0.08;
		}	
		coef_3 = coef_3 + "%";
		jQuery('.layers .layer_3 .image').css({left : coef_3 });
	}

});
</script>

<?php wp_footer(); ?>
	<script>
	if(navigator.userAgent.indexOf("Speed Insights") == -1) {
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-16235768-1', 'auto');
	ga('send', 'pageview');
	}
</script>
</body>
</html>
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/javascript/magnific.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?=twentysixteen_fonts_url()?>">